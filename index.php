
<?php
require_once "./common/funciones.php";
require_once "./constants/constantes.php";
require_todos("controllers", "php");
require_once "./config/BaseDatosController.php";

$resultado = [
    "error" => false,
    "mensaje" => ""
];

$datosView = [];

$controlador = new BasicoController();
if (isset($_POST["controlador"])) {
    $controlador = new $_POST["controlador"]();
    $datosView = $controlador->{$_POST["accion"]}($resultado);
    if ($resultado["error"] &&  (get_class($controlador) == 'BaseDatosController')) {
        $controlador = new BaseDatosController();
        $datosView = $controlador->errorConexion();
    }
} else {
    $controlador = new BaseDatosController();
    $controlador->probar_conexion($resultado);
    if ($resultado["error"]) {
        $datosView = $controlador->errorConexion();
    } else {
        $controlador = new AlumnoController();
        $accion = "listar_todos";
        $datosView = $controlador->{$accion}($resultado);
    }
}

require_once "./templates/header.php";
require_once "./views" . $controlador->mostrar_vista();
require_once "./templates/footer.php";
require_once "./templates/final.php";
