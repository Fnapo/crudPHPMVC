<?php
if (isset($_POST["editar"])) {
?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="mt-4"><?= (isset($_POST["crear"]) ? "Insertando " : "Modificando ") . "un Alumno ..." ?> </h2>
                <hr>
                <form method="post" class="was-validated">
                    <div class="form-group d-none">
                        <input type="number" name="id" class="form-control" value="<?= escapar($alumno['id']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required value="<?= isset($_POST["crear"]) ? "" : $alumno["nombre"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellido</label>
                        <input type="text" name="apellidos" id="apellido" s class="form-control" required value="<?= isset($_POST["crear"]) ? "" : $alumno["apellidos"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required value="<?= isset($_POST["crear"]) ? "" : $alumno["email"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="number" name="edad" id="edad" class="form-control" min="18" max="75" required value="<?= isset($_POST["crear"]) ? "" : $alumno["edad"] ?>">
                    </div>
                    <div class="form-group row justify-content-around">
                        <div class="form-group w-100 mb-0 col-3">
                            <button id="hecho" name="hecho" type="submit" class="btn btn-success w-100">
                                <img src="www/img/pencil-80.png" class="icono" alt="lapiz"> <?= isset($_POST["crear"]) ? "INSERTAR" : "MODIFICAR" ?></button>
                        </div>
                        <div class="form-group w-100 mb-0">
                            <button id="resetear" name="resetear" type="reset" class="btn btn-primary w-100">
                                RESETEAR
                            </button>
                        </div>
                    </div>
                    <form method="post" class="form-inline col-3 px-0">
                        <div class="form-group d-none">
                            <input type="text" name="controlador" value="AlumnoController">
                            <input type="text" name="accion" value="listar_todos">
                        </div>
                        <input class="btn btn-secondary w-100" type="submit" class="form-control" value="CANCELAR">
                    </form>
                </form>
            </div>
        </div>
    </div>
<?php
} else {
    include "templates/noPermitido.php";
}
