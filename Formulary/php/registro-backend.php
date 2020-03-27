<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$db = "sitioweb";

$enlace = mysqli_connect($servidor, $usuario, $clave, $db);

if(!$enlace){
    echo "Error en la conexión con el server a la base de datos";
}

if(isset($_POST['registrarse'])) {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo_electronico = $_POST["correo_electronico"];
    $password = $_POST["password"];
    //$id = rand(1,99);

    $insertData = "INSERT INTO USUARIO VALUES(
        '$nombre',
        '$telefono',
        '$correo_electronico',
        '$password'
        )";

    $executeInsert = mysqli_query($enlace, $insertData);    

    if(!$executeInsert){
        echo "Error en la línea de sql";
    }
}


?>