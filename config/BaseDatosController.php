
<?php

class BaseDatosController extends BasicoController
{
    function __construct() {}

    public function probar_conexion(&$resultado)
    {
        try {
            $this->crear_conexion();
            $resultado["error"] = false;
            $resultado["mensaje"] = "Conexión correcta ...";
        } catch (PDOException $errorPDO) {
            $resultado["error"] = true;
            $resultado["mensaje"] = $errorPDO->getMessage();
        }
    }

    private function crear_conf()
    {
        return [
            'servidor' => 'localhost',
            'usuario' => 'root',
            'pass' => '',
            'base' => 'tutorial_crud',
            'puerto' => 3309,
            'opciones' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ];
    }

    public function crear_conexion()
    {
        $config = $this->crear_conf();
        $dsn = 'mysql:host=' . $config['servidor'] . ';dbname=' . $config['base'] . ';port=' . $config['puerto'];
        $conexion = new PDO($dsn, $config['usuario'], $config['pass'], $config['opciones']);

        return $conexion;
    }

    public function errorConexion()
    {
        $this->titulo = "Error en la Conexión ...";
        $this->vista = DIR_BASE_DATOS . "/error_conexion.php";

        return [];
    }
}
