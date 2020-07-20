<?php 
include ('db.php');

if(isset($_POST['id_pro'])){

    $id_pro = $_POST['id_pro'];
    $query = "DELETE FROM proveedores WHERE id_pro = $id_pro";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query Failed');
    }

    echo 'Task Delete Succesfully';
}


?>