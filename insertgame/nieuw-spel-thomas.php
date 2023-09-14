<?php 
$servername = "localhost";
$database = "winkel";
$username= "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

$query = "INSERT INTO games (titel, uitgever,platform, voorraad,prijs) 
VALUES('F1 2022' , 'EA Sports', 'Playstation 5', '28','69')";

$conn->exec($query)

?>

