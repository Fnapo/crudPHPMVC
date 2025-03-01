<div class="w-100 mb-3 border border-3 border-dark">
    <div class="col-12 inverso">
        <label>
            Identificador
        </label>
    </div>
    <div class="col-12 normal">
        <label>
            <?= escapar($alumno["id"]); ?>
        </label>
    </div>
</div>
<div class="w-100 mb-3 border border-3 border-dark">
    <div class="col-12 inverso">
        <label>
            Nombre y Apellidos
        </label>
    </div>
    <div class="col-12 normal">
        <label>
            <?= escapar($alumno["apellidos"] . ', ' . $alumno["nombre"]); ?>
        </label>
    </div>
</div>
<div class="w-100 mb-3 border border-3 border-dark">
    <div class="col-12 inverso">
        <label>
            e-mail
        </label>
    </div>
    <div class="col-12 normal">
        <label>
            <?= escapar($alumno["email"]); ?>
        </label>
    </div>
</div>
<div class="w-100 mb-3 border border-3 border-dark">
    <div class="col-12 inverso">
        <label>
            Edad
        </label>
    </div>
    <div class="col-12 normal">
        <label>
            <?= escapar($alumno["edad"]); ?>
        </label>
    </div>
</div>