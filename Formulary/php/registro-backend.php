<?php
 
print_r($_POST);

$servidor = "localhost";
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$correo_electronico = $_POST["correo-electronico"];
$password = $_POST["password"]
$baseDeDatos = $_POST["sitioweb"];

$conexion = new mysqli($servidor,$nombre,$telefono,$correo_electronico,$password);

if($conexion->connect_error){
    die("Conexión fallida: " . $conexion->connect_error)
}
    

if(isset($_POST['text'])) {
    $text = $_POST['text'];
    
    $sql = "INSERT INTO "
}

?>