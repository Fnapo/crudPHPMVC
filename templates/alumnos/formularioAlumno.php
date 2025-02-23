<?php
$error = (isset($error) ? $error : true);

if (!$error) {
    $accion_guardar = "guardar_" . ($creando ? 'nuevo' : 'modificado');
?>
    <div class="col-12 h-100 d-flex flex-wrap justify-content-center align-content-center">
        <div class="col-12 col-md-6">
            <h2 class="mt-4 text-center"><?= (isset($_POST["crear"]) ? "Insertando " : "Modificando ") . "un Alumno ..." ?> </h2>
            <hr>
            <div class="p-3 bg-info">
                <form id="formulario" method="post" class="was-validated">
                    <div class="form-group <?= $creando ? '' : 'd-none' ?>">
                        <label for="id">Identificador</label>
                        <input type="number" name="id" class="form-control" value="<?= $creando ? "" : escapar($alumno['id']); ?>" min="1">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required value="<?= $creando ? "" : $alumno["nombre"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control" required value="<?= $creando ? "" : $alumno["apellidos"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required value="<?= $creando ? "" : $alumno["email"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="number" name="edad" id="edad" class="form-control" min="18" max="75" required value="<?= $creando ? "" : $alumno["edad"] ?>">
                    </div>
                    <div class="form-group d-none">
                        <input type="text" name="controlador" value="AlumnoController">
                        <input type="radio" name="accion" value="<?= $accion_guardar ?>" />
                        <input type="radio" name="accion" value="listar_todos" />
                    </div>
                    <div class="form-group w-100 d-flex justify-content-around">
                        <div class="form-group mb-0 col-3">
                            <button name="b_hecho" type="submit" class="btn btn-success w-100" onclick="seleccionAccionFormulario('<?= $accion_guardar ?>')">
                                <?= $creando ? "INSERTAR" : "MODIFICAR" ?>
                            </button>
                        </div>
                        <div class="form-group col-3 mb-0">
                            <button name="b_resetear" type="reset" class="btn btn-primary w-100">
                                RESETEAR
                            </button>
                        </div>
                        <div class="form-group col-3 mb-0">
                            <button name="b_cancelar" type="submit" class="btn btn-secondary w-100" onclick="enviarSiempreFormulario('listar_todos')">
                                CANCELAR
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
} else {
    include "templates/noPermitido.php";
}
