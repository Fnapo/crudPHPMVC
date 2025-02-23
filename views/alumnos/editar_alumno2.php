<?php
/*
$error = !isset($_POST["editar"]) && !isset($_POST['submit']);
if (isset($_POST['submit'])) {
    $resultado = [
        'error' => false,
        'mensaje' => 'El alumno ' . escapar($_POST['nombre']) . ' ha sido modificado con éxito'
    ];
    try {
        $alumno = $datosView;

        if (strlen($alumno["apellidos"]) && strlen($alumno["edad"]) &&  strlen($alumno["email"]) && strlen($alumno["edad"])) {
            $consultaSQL = "UPDATE alumnos SET nombre=:nombre, apellidos=:apellidos, email=:email, edad=:edad WHERE id=:id";

            $sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute($alumno);
            //header("Location: " . DIRECTORIO . '/index.php');
        }
    } catch (PDOException $error) {
        $resultado['error'] = true;
        $resultado['mensaje'] = $error->getMessage();
    }
} elseif (!$error) {
    $alumno = encontrar_alumno(111);
}
?>

<?php

if ($error || $alumno) {
    include "templates/alumnos/formularioAlumno.php";
} else {
    include("templates/alumnos/noEncontrado.php");
}
*/
if (isset($_POST["editar"])) {
?>
    <div class="w-100 d-flex flex-wrap h-100 align-content-center">
        <div class="w-100">
            <h2 class="py-3 text-center">
                Editando un Alumno ...
            </h2>
            <?php
            $alumno = $datosView;
            if ($alumno /*&& $sentencia->rowCount() > 0*/) {
            ?>
                <div class="container col-12 col-md-6">
                    <?php include "templates/alumnos/formularioAlumno.php"; ?>
                    <div class="row mb-3 justify-content-around">
                        <div class="col-12 justify-content-around d-flex">
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
                                <div class="form-group w-100 mb-0">
                                    <button id="resetear" name="resetear" type="reset" class="btn btn-primary w-100">
                                        <img src="www/img/trash-80.png" class="icono" alt="basura"> RESETEAR</button>
                                </div>
                            </form>
                            <form method="post" class="form-inline col-3 px-0">
                                <div class="form-group d-none">
                                    <input type="text" name="controlador" value="AlumnoController">
                                    <input type="text" name="accion" value="listar_todos">
                                </div>
                                <input class="btn btn-secondary w-100" type="submit" class="form-control" value="CANCELAR">
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
    include "templates/noPermitido.php";
}
