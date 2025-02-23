
<?php

require_once "models/alumno.php";

class AlumnoController extends BasicoController
{
    private $alumno;

    function __construct()
    {
        $this->alumno = new Alumno();
    }

    public function listar_todos(&$resultado)
    {
        $condicion = "";
        if (isset($_POST["filtro"])) {
            $filtro = escapar(trim($_POST["filtro"]));
            if (strlen($filtro) > 0) {
                $condicion = "WHERE nombre LIKE '%$filtro%' OR apellidos LIKE '%$filtro%'";
            }
        }
        $this->vista = DIR_ALUMNOS . "/listado_alumnos.php";
        $this->titulo = "Listado de Alumnos ...";

        return $this->alumno->obtener_todos($condicion, $resultado);
    }

    public function detalles_alumno(&$resultado)
    {
        $this->vista = DIR_ALUMNOS . "/detalles_alumno.php";
        $this->titulo = "Detalles de un Alumno ...";
        $id = escapar(trim($_POST["id"]));

        return $this->alumno->obtener_alumno($resultado, $id);
    }

    public function editar_alumno(&$resultado)
    {
        $this->vista = DIR_ALUMNOS . "/editar_alumno.php";
        $this->titulo = "Editar un Alumno ...";
        $id = escapar(trim($_POST["id"]));

        return $this->alumno->obtener_alumno($resultado, $id);
    }

    public function guardar_modificado(&$resultado)
    {
        $this->alumno->guardar_modificado($resultado);

        return $this->listar_todos($resultado);
    }

    public function crear_alumno(&$resultado)
    {
        $this->vista = DIR_ALUMNOS . "/crear_alumno.php";
        $this->titulo = "Insertar un Alumno ...";

        return [];
    }

    public function guardar_nuevo(&$resultado)
    {
        $this->alumno->guardar_nuevo($resultado);

        return $this->listar_todos($resultado);
    }
}
