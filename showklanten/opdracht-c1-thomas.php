<?php
include "database-connectie-thomas.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gegevens uit Database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Gegevens uit Database</h1>
    
    <table>
        <tr>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Woonplaats</th>
            <th>Aanpassen</th>
            <th>Verwijderen</th>
        </tr>
        <?php

        $query = "SELECT * FROM klanten";
        $klanten = getData($query, "fetchAll");
        foreach ($klanten as $klant) {
            echo "<tr>";
            echo "<td>" . $klant['voornaam'] . "</td>";
            echo "<td>" . $klant['achternaam'] . "</td>";
            echo "<td>" . $klant['woonplaats'] . "</td>";
            echo "<td><button > aanpassen </button></td>";
            echo "<td><button href='verwijder.php?id=" . $klant['klant_id'] . "'> verwijderen
             </button></td>";
            echo "</tr>";
        }
      
        ?>
    </table>
</body>
</html>
