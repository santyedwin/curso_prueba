<?php

include_once('conexion.php');
//actualizar registros

$sql = "UPDATE usuarios SET paterno = 'Britto' WHERE id = 1";

if (
    $conexion->query($sql) === TRUE
) {
    echo "Registro actualizado correctamente";
} else {

    $conexion->error;
};

$conexion->close();
