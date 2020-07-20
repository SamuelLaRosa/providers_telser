<?php 
include ('db.php');


$query ="SELECT * from proveedores";
$result = mysqli_query($conn, $query);

if(!$result){
    die('Query Failed');
}

$json = array();

while($row = mysqli_fetch_array($result)){
    $json[] = array(
        'empresa' => $row['empresa'],
        'categoria' => $row['categoria'],
        'contacto' => $row['contacto'],
        'numero' => $row['numero'],
        'telefono' => $row['telefono'],
        'correo' => $row['correo'],
        'direccion' => $row['direccion'],
        'id_pro' => $row['id_pro']
    );
}

$jsonstring = json_encode($json);
echo $jsonstring;
?>
