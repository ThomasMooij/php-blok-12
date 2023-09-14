<?php 
include 'database-connectie-thomas.php';


if(isset($_GET['id'])){

    $update_id = $_GET['id'];
    
    $woonplaats = "SELECT woonplaats FROM klanten WHERE klant_id=$update_id";

    $query = getData($woonplaats,'fetch');

    if($query['woonplaats'] == 'Amstelveen'){
        $nieuwe_woonplaats = 'Gelderland';
    } else {
        $nieuwe_woonplaats = 'Amstelveen';
    }

    $update= "UPDATE klanten SET woonplaats='$nieuwe_woonplaats' WHERE klant_id=$update_id";
    getData($update, 'execute');

    header("location: ./opdracht-c1-thomas.php");

}

?>
