<?php
include("conexion.php");
$conn = connection();

$id = $_GET['id'];

echo $id;

$sql = "SELECT * FROM sujetos_php WHERE id='$id'";
$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <meta name="author" content="Mauricio Sanchez Abella">
    <title>EDITAR USUARIOS</title>
</head>

<body>
    <input type="button" onclick="window.location.href='index.php';" value="Menu" />

    <div class="users-form">
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="name_cl" placeholder="Nombre" value="<?= $row['name_cl'] ?>">
            <input type="text" name="lastname_cl" placeholder="Apellidos" value="<?= $row['lastname_cl'] ?>">
            <input type="text" name="username_cl" placeholder="username" value="<?= $row['username_cl'] ?>">
            <input type="text" name="password-cl" placeholder="password" value="<?= $row['password_cl'] ?>">
            <input type="text" name="email_cl" placeholder="email" value="<?= $row['email_cl'] ?>">

            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>

</html>