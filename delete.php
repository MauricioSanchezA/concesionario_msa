<?php

include("conexion.php");
$conn = connection();

$id = $_GET["id"];

$sql = "DELETE FROM sujetos_php WHERE id = '$id'";
$query = mysqli_query($conn, $sql);

if ($query) {
    Header("Location: index.php");
} else {
}
