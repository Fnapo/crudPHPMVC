<form method="post" class="form-inline col-4 px-0">
    <div class="form-group d-none">
        <input type="text" name="controlador" value="AlumnoController">
        <input type="text" name="accion" value="listar_todos">
    </div>
    <input class="btn btn-primary w-100" type="submit" name="submit" id="submit" class="form-control" value="VOLVER">
</form>
<form method="post" class="form-inline col-4 px-0">
    <div class="form-group d-none">
        <input type="text" name="controlador" value="AlumnoController">
        <input type="text" name="accion" value="si_borrar_alumno">
        <input type="number" name="id" value="<?= escapar($alumno['id']); ?>">
    </div>
    <div class="form-group w-100 mb-0">
        <button id="borrar" name="borrar" type="submit" class="btn btn-danger w-100">
            <img src="www/img/trash-80.png" class="icono" alt="basura">BORRAR</button>
    </div>
</form>