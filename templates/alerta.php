    <div class="col-12 col-md-6 <?= tipo_alerta($resultado) ?> <?= altura_alerta($resultado) ?> d-flex justify-content-center">
        <div class="h4 my-auto" role="alert">
            <?php
            echo $resultado["mensaje"];
            ?>
        </div>
    </div>