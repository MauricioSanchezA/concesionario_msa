<?php

if (!empty($_GET['id'])) {
    //Credenciales de conexion
    $Host = 'localhost';
    $Username = 'root';
    $Password = '';
    $dbName = 'users_crud_php';

    //Crear conexion mysql
    $db = new mysqli($Host, $Username, $Password, $dbName);

    //revisar conexion 
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    //Extraer imagen de la BD mediante GET


    $result = $db->query("SELECT * FROM tabla_imagenes WHERE id ={$_GET['id']}");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        //Mostrar Imagen 
        header("Content-type: image/jpg");
        echo $row['imagenes'];
    } else {
        echo 'Imagen no existe...';
    }
}
