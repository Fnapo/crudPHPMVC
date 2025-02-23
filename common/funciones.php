<?php

function escapar($html)
{
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

function tipo_alerta($resultado)
{
    //global $resultado;

    return $resultado["error"] ? "alert-danger" : "alert-success";
}

function altura_alerta($resultado)
{
    //global $resultado;

    return strlen($resultado["mensaje"]) > 0 ? "altura-10" : "altura-0";
}

function altura_cuerpo($resultado)
{
    //global $resultado;

    return strlen($resultado["mensaje"]) > 0 ? "altura-max-55" : "altura-max-65";
}

function require_todos($directorio, $ext = "php")
{
    echo "<?php";
    // Abre el directorio
    if ($handle = opendir($directorio)) {
        // Itera sobre los archivos en el directorio
        while (false !== ($file = readdir($handle))) {
            // Verifica que el archivo tenga la extensión
            if (pathinfo($file, PATHINFO_EXTENSION) == $ext) {
                // Requiere el archivo
                echo require_once $directorio . '/' . $file;
            }
        }
        // Cierra el directorio
        closedir($handle);
    }
    echo "?>";
}
