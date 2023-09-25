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
    <link rel="stylesheet" href="css/estilo.css">
    <meta name="author" content="Mauricio Sanchez Abella">
    <meta name="copyright" content="Aprendices">
    <title>CONSULTA EL CRUD</title>
</head>

<body>

    <div class="users-table">
        <h2>Consulta de usuarios Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Nombre Usuario</th>
                    <th>Contraseña</th>
                    <th>Email</th>
                </tr>


                <input type="button" onclick="window.location.href='index.php';" value="Menu" />
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
                    <th><a href="actualizar.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                    <th><a href="delete.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>