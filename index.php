<?php
include("conexion.php");
$conn = connection();

$sql = "SELECT * FROM sujetos_php";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="css/estilo.css">
    <meta name="description" content="Este es un CRUD">
    <meta name="keywords" content="crud, inicio ">
    <meta name="author" content="Mauricio Sanchez Abella">
    <link rel="shortcut icon " href="img/logo_sena.ico">
    <title>CREANDO EL CRUD</title>
</head>

<body>
    <!-- Sección clase usuario -->
    <div class="usuarios">
        <h1>CREAR USUARIOS</h1>
        <form action="insertar.php" method="post">
            <input type="text" name="name_cl" placeholder="Nombre">
            <input type="text" name="lastname_cl" placeholder="Apellidos">
            <input type="text" name="username_cl" placeholder="Nombre-Usuario">
            <input type="password" name=" password_cl" placeholder="Contraseña">
            <input type="email" name="email_cl" placeholder="Correo-Electronico">
            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="tabla_usuarios">
        <h2>USUARIOS REGISTRADOS</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nombre Usuarios</th>
                    <th>Contraseña</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                <tr>
                    <th><?= $row['id'] ?></th>
                    <th><?= $row['name_cl'] ?></th>
                    <th><?= $row['lastname_cl'] ?></th>
                    <th><?= $row['username_cl'] ?></th>
                    <th><?= $row['password_cl'] ?></th>
                    <th><?= $row['email_cl'] ?></th>
                    <th><a href="consulta.php?id=<? $row['id'] ?>" class="users-table--consult">Consulta</a></th>
                    <th><a href="actualizar.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                    <th><a href="delete.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>