
<?php

class Alumno
{
    private $tabla = "alumnos";

    function __construct() {}

    public function obtener_todos($condicion, &$resultado)
    {
        $alumnos = null;
        $baseDatos = new BaseDatosController();
        try {
            $conexion = $baseDatos->crear_conexion();

            $consultaSQL = "SELECT * FROM $this->tabla $condicion";
            $sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute();

            $alumnos = $sentencia->rowCount() > 0 ? $sentencia->fetchAll(PDO::FETCH_ASSOC) : null;
            $conexion = null;
        } catch (PDOException $errorPDO) {
            $resultado["error"] = true;
            $resultado["mensaje"] = $errorPDO->getMessage();
        }

        return $alumnos;
    }

    public function obtener_alumno($resultado, $id)
    {
        $alumno = null;
        $resultado["error"] = true;
        $resultado["mensaje"] = "Alumno no encontrado o nulo ...";
        if (strlen($id) > 0) {
            $baseDatos = new BaseDatosController();
            try {
                $conexion = $baseDatos->crear_conexion();

                $consultaSQL = "SELECT * FROM $this->tabla WHERE id = $id";
                $sentencia = $conexion->prepare($consultaSQL);
                $sentencia->execute();

                $alumno = $sentencia->rowCount() > 0 ? $sentencia->fetch(PDO::FETCH_ASSOC) : null;
                $conexion = null;
                if ($alumno) {
                    $resultado["error"] = false;
                    $resultado["mensaje"] = "";
                }
            } catch (PDOException $errorPDO) {
                $resultado["mensaje"] = $errorPDO->getMessage();
            }
        }

        return $alumno;
    }

    public function guardar_modificado(&$resultado)
    {
        $alumno = array(
            "nombre"   => strtoupper($_POST['nombre']),
            "apellidos" => strtoupper($_POST['apellidos']),
            "email"    => $_POST['email'],
            "edad"     => $_POST['edad'],
            "id" => $_POST['id']
        );
        $resultado["error"] = false;
        $resultado["mensaje"] = "Alumno ({$alumno['apellidos']}, {$alumno["nombre"]}) modificado correctamente ...";
        $baseDatos = new BaseDatosController();
        try {
            $conexion = $baseDatos->crear_conexion();
            $consultaSQL = "UPDATE $this->tabla SET nombre=:nombre, apellidos=:apellidos, email=:email, edad=:edad WHERE id=:id";

            $sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute($alumno);
        } catch (PDOException $errorPDO) {
            $resultado["mensaje"] = $errorPDO->getMessage();
            $resultado["error"] = true;
        }
    }
    public function guardar_nuevo(&$resultado)
    {
        $resultado["error"] = false;
        $resultado["mensaje"] = "Alumno insertado correctamente ...";
        $alumno = array(
            "nombre"   => strtoupper($_POST['nombre']),
            "apellidos" => strtoupper($_POST['apellidos']),
            "email"    => $_POST['email'],
            "edad"     => $_POST['edad'],
            "id" => $_POST['id']
        );
        $baseDatos = new BaseDatosController();
        try {
            $conexion = $baseDatos->crear_conexion();
            $consultaSQL = "INSERT INTO $this->tabla (nombre, apellidos, email, edad, id) VALUES (:" . implode(", :", array_keys($alumno)) . ")";
            $sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute($alumno);
        } catch (PDOException $errorPDO) {
            $resultado["mensaje"] = $errorPDO->getMessage();
            $resultado["error"] = true;
        }
    }
}
