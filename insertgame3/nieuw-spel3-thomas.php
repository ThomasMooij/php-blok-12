<!DOCTYPE html>
<html>
<head>
    <title>Game Toevoegen</title>
</head>
<body>
    <h1>Voeg een nieuwe game toe</h1>
    <form action="voeg-toe3-thomas.php" method="POST">

        <label for="titel">Titel:</label>
        <input type="text" id="titel" name="titel" required><br><br>

        <label for="platform">Platform:</label>
        
        <select id="platform" name="platform">
            <option value="PC">PC</option>
            <option value="PlayStation">PlayStation</option>
            <option value="Xbox">Xbox</option>
            <option value="Nintendo Switch">Nintendo Switch</option>
            <option value="Anders">Anders</option>
        </select><br><br>

        <label for="uitgever">uitgever:</label>
        <input type="text" id="uitgever" name="uitgever"><br><br>

        <label for="voorraad">voorraad:</label>
        <input type="number" id="voorraad" name="voorraad"><br><br>

        <label for="prijs">prijs:</label><br>
        <input type="number" id="prijs" name="prijs" ></input><br><br>

        <input type="submit" value="Voeg toe">
    </form>
</body>
</html>
