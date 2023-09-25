<?php
include("conexion.php");
$conn = connection();

$id = null;
$name_cl = $_POST['name_cl'];
$lastname_cl = $_POST['lastname_cl'];
$username_cl = $_POST['username_cl'];
$password_cl = $_POST['password_cl'];
$email_cl = $_POST['email_cl'];

$sql = "INSERT INTO sujetos_php VALUES('$id', '$name_cl', '$lastname_cl', '$username_cl', '$password_cl', '$email_cl')";
$query = mysqli_query($conn, $sql);

if ($query) {
    Header("Location: index.php");
} else {
}
