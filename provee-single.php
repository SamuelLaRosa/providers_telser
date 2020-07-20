<?php
include ('db.php');

$id_pro = $_POST['id_pro'];
$query = "SELECT * FROM proveedores WHERE id_pro = $id_pro";

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

$jsonstring = json_encode($json[0]);

echo $jsonstring;

?>