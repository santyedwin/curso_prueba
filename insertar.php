<?php

include_once('conexion.php');

if ($_POST) {

    $ci = $_POST['ci'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];

    /*$sql = "INSERT INTO usuarios (ci,nombre,paterno,materno)

VALUES('Pedro','Garcia');";*/

    $sql = "INSERT INTO usuarios (ci,nombre,paterno,materno)

VALUES('$ci','$nombre','$paterno','$materno');";



    if ($conexion->query($sql) === TRUE) {

        echo "Registro ingresado correctamente.";
    } else {

        echo $conexion->error;
    }


    $conexion->close();
    header("Location: http://localhost/01crudPHP/listar.php"); // Redirecionamos a Baulphp
    exit();
} else {
    // mostrar formulario
    echo '<a href="./listar.php">Listar</a>';
  
    include_once("./frm_registro.php");
}
