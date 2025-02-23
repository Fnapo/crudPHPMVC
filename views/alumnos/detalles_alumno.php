<?php
$error = !isset($_POST["detalles"]);
if (!$error) {
?>
    <div class="w-100 d-flex flex-wrap h-100 align-content-center">
        <div class="w-100">
            <h2 class="py-3 text-center">
                Detalles de un Alumno ...
            </h2>
            <?php
            $alumno = $datosView;
            if ($alumno /*&& $sentencia->rowCount() > 0*/) {
            ?>
                <div class="container col-12 col-md-6">
                    <?php include("templates/alumnos/mostrarAlumno.php"); ?>
                    <div class="row mb-3 justify-content-around">
                        <div class="col-12 justify-content-around d-flex">
                            <form method="post" class="form-inline col-3 px-0">
                                <div class="form-group d-none">
                                    <input type="text" name="controlador" value="AlumnoController">
                                    <input type="text" name="accion" value="listar_todos">
                                </div>
                                <input class="btn btn-primary w-100" type="submit" name="submit" id="submit" class="form-control" value="VOLVER">
                            </form>
                            <form method="post" class="form-inline col-3 px-0">
                                <div class="form-group d-none">
                                    <input type="text" name="controlador" value="AlumnoController">
                                    <input type="text" name="accion" value="editar_alumno">
                                    <input type="number" name="id" class="form-control" value="<?= escapar($alumno['id']); ?>">
                                </div>
                                <div class="form-group w-100 mb-0">
                                    <button id="editar" name="editar" type="submit" class="btn btn-success w-100">
                                        <img src="www/img/pencil-80.png" class="icono" alt="lapiz"> EDITAR</button>
                                </div>
                            </form>
                            <form method="post" action="borrar.php" class="form-inline col-3 px-0">
                                <div class="form-group d-none">
                                    <input type="number" name="id" class="form-control" value="<?= escapar($alumno['id']); ?>">
                                </div>
                                <div class="form-group w-100 mb-0">
                                    <button id="borrar" name="borrar" type="submit" class="btn btn-danger w-100">
                                        <img src="www/img/trash-80.png" class="icono" alt="basura"> BORRAR</button>
                                </div>
                            </form>
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