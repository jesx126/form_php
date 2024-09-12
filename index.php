<?php
include('conexion/conexion.php');
$con = conection();
$sql="select * from usuarios";
$query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/style.css">
    <title>Document</title>
</head>
<body>
    <div class="contForm">
        <h1>Formuario CRUD</h1>
        <form action="action/insert.php" method="POST" class="contForm__form">
            <h3>Nombre:
            <input type="text" class="form__item" name="nombre">
            </h3>
            <h3>Apellido Paterno:
            <input type="text" class="form__item" name="apellido_P">
            </h3>
            <h3>Apellido Materno:
            <input type="text" class="form__item" name="apellido_M">
            </h3>
            <h3>Domicilio:
            <input type="text" class="form__item" name="domicilio">
            </h3>
            <input type="submit" class="form__item form__item--btn" value="agregar">
        </form>
        <script src="script.js"></script>
    </div>
    <div class="espacioTabla">
        <table class="espacioTabla__tabla">
            <tr>
                <td class="tabla__columna tabla__columna--head">id</td>
                <td class="tabla__columna tabla__columna--head">Nombre</td>
                <td class="tabla__columna tabla__columna--head">Apellido Paterno</td>
                <td class="tabla__columna tabla__columna--head">Apellido Materno</td>
                <td class="tabla__columna tabla__columna--head">Domicilio</td>
                <td class="tabla__columna tabla__columna--head">Acciónes</td>
            </tr>
            <?php while($row = mysqli_fetch_array($query)){ ?>
            <tr>
                <td class="tabla__columna"><?= $row['id']?></td>
                <td class="tabla__columna"><?= $row['nombre']?></td>
                <td class="tabla__columna"><?= $row['apellido_p']?></td>
                <td class="tabla__columna"><?= $row['apellido_m']?></td>
                <td class="tabla__columna"><?= $row['domicilio']?></td>
                <td class="tabla__columna tabla__columna--bot"><a href="#" class="tabla__columna--boton">editar</a> 
                <a href="action/delete.php?id=<?= $row['id']?>" class="tabla__columna--boton tabla__columna--boton--red">Eliminar</a></td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>