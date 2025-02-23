<div class="container">
    <div class="altura-max-20 d-flex align-content-center justify-content-center flex-wrap">
        <div class="row justify-content-center col-12">
            <div class="form-group col-12 col-md-6">
                <form method="post" class="form-inline d-flex justify-content-center">
                    <div class="form-group d-none">
                        <input type="text" name="controlador" value="AlumnoController">
                        <input type="text" name="accion" value="crear_alumno">
                    </div>
                    <button type="submit" name="crear" class="btn btn-primary mt-4 col-6 col-md-4">CREAR ALUMNO</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center col-12">
            <div class="col-12 col-md-6">
                <form method="post" class="d-flex justify-content-center">
                    <div class="col-12">
                        <div class="col-12 justify-content-around d-flex">
                            <div class="form-group d-none">
                                <input type="text" name="controlador" value="AlumnoController">
                                <input type="text" name="accion" value="listar_todos">
                            </div>
                            <input type="text" name="filtro" id="filtro" class="form-control col-4" placeholder="Filtro nombre">
                            <input class="btn btn-primary col-4" type="submit" name="submit" id="submit" class="form-control" value="FILTRAR">
                        </div>
                    </div>
                </form>
                <hr>
            </div>
        </div>
        <div class="col-12 col-md-6 text-center">
            <h2 class="my-3"><?= $controlador->mostrar_titulo($resultado); ?></h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row d-flex justify-content-center flex-wrap">
        <div class="col-12 col-md-7 <?= altura_cuerpo($resultado) ?> overflow-auto bordes-1 my-1">
            <table class="table table-bordered mt-3">
                <thead class="thead-dark sticky-top">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Aciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($datosView) {
                        //for ($i = 0; $i < 50; ++$i) {
                        foreach ($datosView as $fila) {
                    ?>
                            <tr>
                                <td><?php echo escapar($fila["id"]); ?></td>
                                <td><?php echo escapar($fila["apellidos"]) . ', ' . escapar($fila["nombre"]); ?></td>
                                <td>
                                    <form method="post" class="form-inline">
                                        <div class="form-group d-none">
                                            <input type="number" name="id" id="id" class="form-control d-none" value="<?= escapar($fila['id']); ?>">
                                            <input type="text" name="controlador" value="AlumnoController">
                                            <input type="text" name="accion" value="detalles_alumno">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="detalles" id="destalles" class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                                </svg> Ver Detalles
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                    <?php
                        }
                        //}
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once "templates/alerta_bottom.php";
