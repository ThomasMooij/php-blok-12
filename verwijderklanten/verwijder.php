<?php 
include 'database-connectie-thomas.php';


if(isset($_GET['id'])){

    $verwijder_id = $_GET['id'];
    

    $sql = "DELETE FROM klanten WHERE klant_id=$verwijder_id";


    $exe = getData($sql,'POST');

header("location: ./opdracht-c1-thomas.php");

}

echo $verwijder_id;

?>
