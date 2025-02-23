<?php
$error = !isset($_POST["editar"]);
$creando = false;
$alumno = $datosView;
include_once "templates/alumnos/formularioAlumno.php";
