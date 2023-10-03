<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Formulario de registro</h1>

    <!--(div>label+input#ci)*3--->
    <form action="http://localhost/01crudPHP/insertar.php" method="POST">
        <div>
            <label>CI</label>
            <input id="ci" name="ci" value="" required></input>
        </div>
        <div>
            <label>Nombre</label>
            <input id="nombre" name="nombre" value="" required></input>
        </div>
        <div>
            <label>Paterno</label>
            <input id="paterno" name="paterno" value="" required></input>
        </div>
        <div>
            <label>Materno</label>
            <input id="materno" name="materno" value="" required></input>
        </div>
        <button type="submit">Registrar</button>
    </form>

</body>

</html>