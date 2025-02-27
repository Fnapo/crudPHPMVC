<?php
$error = !isset($_POST["borrar"]);
$creando = false;
$alumno = $datosView;
$botonera = "templates/alumnos/botonera_confirmar_borrar.php";
include_once "templates/alumnos/detalles_alumno.php";
