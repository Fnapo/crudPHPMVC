<?php
$error = !isset($_POST["detalles"]);
$creando = true;
$alumno = $datosView;
$botonera = "templates/alumnos/botonera_editar_borrar.php";
include_once "templates/alumnos/detalles_alumno.php";
