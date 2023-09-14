<?php
        include "database-connectie-thomas.php"; 
        ?>

<!DOCTYPE html>
<html>
<head>
    <title>Lijst van Game Titels</title>
</head>
<body>
    <h1>Lijst van Game Titels</h1>
    
    <ul>
        <?php 

        $query = "SELECT * FROM games";

        $games = getData($query, 'fetchAll');

        foreach ($games as $game) {
            echo "<li>" . $game['titel']. "</li>";
        }
        ?>
    </ul>
</body>
</html>
