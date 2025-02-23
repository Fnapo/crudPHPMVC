<div class="col-12 d-flex flex-wrap h-100 align-content-center">
    <h2 class="col-12 text-center">
        <?= $controlador->mostrar_titulo(); ?>
    </h2>
    <div class="col-12 pb-3 justify-content-center d-flex">
        <div class="col-12 col-md-4">
            <img src="www/img/errorBBDD.webp" alt=" ERROR EN BBDD">
        </div>
    </div>
    <div class="col-12 pb-3 justify-content-center d-flex">
        <button type="button" class="btn btn-primary col-6 col-md-3" onclick="JavaSCript:{open();close()}">
            SALIR ...
        </button>
    </div>
</div>
<?php
include_once "templates/alerta_bottom.php";
die();
?>