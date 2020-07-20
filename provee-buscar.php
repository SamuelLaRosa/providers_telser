<?php 
include('db.php');

$search = $_POST['search'];

if(!empty($search)){
    $query = "SELECT * FROM proveedores WHERE categoria LIKE  '$search%'";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die('Query Error'. mysqli_error($conn));
    }
    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
           'empresa' => $row['empresa'],
           'categoria' => $row['categoria'],
           'contacto' => $row['contacto'],
           'telefono' => $row['telefono'],
           'direccion' => $row['direccion'],
           'id_pro' => $row['id_pro'] 
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}

?>