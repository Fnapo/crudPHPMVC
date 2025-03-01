<?php
$error = (isset($error) ? $error : true);

if (!$error) {
?>
    <div class="w-100 d-flex flex-wrap h-100 align-content-center">
        <div class="w-100">
            <h2 class="py-3 text-center">
                <?= $controlador->mostrar_titulo(); ?>
            </h2>
            <?php
            if ($alumno /*&& $sentencia->rowCount() > 0*/) {
            ?>
                <div class="container col-12 col-md-6">
                    <?php include_once("templates/alumnos/mostrarAlumno.php"); ?>
                    <div class="row mb-3 justify-content-around">
                        <div class="col-12 justify-content-around d-flex">
                            <?php include_once($botonera); ?>
                        </div>
                    </div>
                </div>
            <?php
            } else {
                include("templates/alumnos/noEncontrado.php");
            }
            ?>
        </div>
    </div>
<?php
} else {
    include("templates/noPermitido.php");
}
?>