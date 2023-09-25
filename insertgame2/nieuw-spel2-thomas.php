<?php 
$servername = "localhost";
$database = "winkel";
$username= "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

$titel = "minecraft";
$uitgever = "Thomas Mooij";
$platform ="xbox";
$voorraad = 5;
$prijs = 5;

$query = "INSERT INTO producten (titel, uitgever,platform, voorraad,prijs) 
VALUES('$titel' , '$uitgever', '$platform', '$voorraad','$prijs')";

$conn->exec($query)

?>
