<?php
include ('db.php');

$id_pro = $_POST['id_pro'];
$empresa =  $_POST['empresa'];
$categoria = $_POST['categoria'];
$contacto =  $_POST['contacto'];
$numero = $_POST['numero'];
$telefono = $_POST['telefono'];
$correo =  $_POST['correo'];
$direccion = $_POST['direccion'];

$query = "UPDATE proveedores SET empresa = '$empresa', categoria = '$categoria', contacto = '$contacto', numero = '$numero', telefono = '$telefono', correo = '$correo', direccion = '$direccion' WHERE id_pro = '$id_pro'";

$result = mysqli_query($conn, $query);

if(!$result) {
    die('Query Failed');
}

?>