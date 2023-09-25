<?php 
$servername = "localhost";
$database = "winkel";
$username= "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

$titel = $_POST['titel'];
$uitgever = $_POST['platform'];
$platform =$_POST['uitgever'];
$voorraad = $_POST['voorraad'];
$prijs = $_POST['prijs'];

$query = "INSERT INTO producten (titel, uitgever,platform, voorraad,prijs) 
VALUES('$titel' , '$uitgever', '$platform', '$voorraad','$prijs')";

$conn->exec($query)

?>