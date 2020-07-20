<?php 
include('db.php');

    if(isset($_POST['empresa'])){
        $empresa = $_POST['empresa'];
        $categoria = $_POST['categoria'];
        $contacto = $_POST['contacto'];
        $numero = $_POST['numero'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $query = "INSERT into proveedores(empresa, categoria, contacto, numero, telefono, correo, direccion) VALUES ('$empresa','$categoria','$contacto','$numero','$telefono','$correo','$direccion')";

        $result = mysqli_query($conn, $query);
        if(!$result){
            die('Query failed');
        }
        
    }
?>