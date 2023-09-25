<?php
include("conexion.php");
$conn = connection();

$id = $_POST['id'];
$name_cl = $_POST['name_cl'];
$lastname_cl = $_POST['lastname_cl'];
$username_cl = $_POST['username_cl'];
$password_cl = $_POST['password_cl'];
$email_cl = $_POST['email_cl'];

$sql = "UPDATE sujetos_php SET name_cl='$name_cl', lastname_cl='$lastname_cl', username_cl='$username_cl', password_cl='$password_cl', email_cl='$email_cl' WHERE id='$id'";
$query = mysqli_query($conn, $sql);

if ($query) {
    Header("Location: index.php");
} else {
}
