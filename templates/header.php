<?php
//$fileCSS = "public/css/app.css?" . time();
?>
<!doctype html>
<html lang="es">

<head>
    <title><?= $controlador->mostrar_titulo() ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= 'marcaDoble.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="" type="text/css">-->
    <link rel='stylesheet' type='text/css' href="www/css/app.css?<?= time() ?>" />
</head>

<body>
    <header class="d-flex align-content-center flex-wrap justify-content-center">
        <h1 class="m-0"> Crud Simple con PHP </h1>
    </header>

    <main>