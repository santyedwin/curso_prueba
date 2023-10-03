<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./insertar.php">Nuevo Registro</a>
    <?php
    include_once('conexion.php');

    $sql = "SELECT id,ci,nombre,paterno,materno
    FROM usuarios";

    $resultado = $conexion->query($sql);


    // validación para mostrar los datos
    ?>
    <table border="1">

        <head>
            <th>Nro</th>
            <th>CI</th>
            <th>Nombre</th>
            <th>Paterno</th>
            <th>Materno</th>
        </head>
        <tbody>
            <?php

            if ($resultado->num_rows > 0) {

                // hay información que mostrar

                while ($row = $resultado->fetch_assoc()) {

                    echo "<tr> 
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["ci"] . "</td>
                    <td>" . $row["nombre"] . "</td>
                    <td> " . $row["paterno"] . "</td>
                    <td> " . $row["materno"] . "</td>
                    </tr>";
                }
            } else {

                echo "Sin información ingresada aún";
            }

            $conexion->close();

            ?>
        </tbody>
    </table>
</body>

</html>