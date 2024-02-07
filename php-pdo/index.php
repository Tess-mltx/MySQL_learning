<?php
require_once('connect.php');
require_once('add_row.php');
require_once('delete.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weatherapp</title>
</head>

<body>
    <header>
        <h1>Weather App</h1>
    </header>
    <main>
        <form method="post" action="delete.php">
            <?php
            echo '<table>
            <tr>
                <th>Ville</th>
                <th>Haut</th>
                <th>Bas</th>
            </tr>';

            foreach ($bdd->query('SELECT * from météo') as $row) {
                echo 
                '<tr>
                <td>' . $row["ville"] . '</td>
                <td>' . $row["haut"] . '</td>
                <td>' . $row["bas"] . '</td>
                <td> <input type="checkbox" name="checkbox[]" value="'. $row["ville"] .'"></td>
                </tr>';
            }
            echo '</table>';

        // Fermeture de la connexion à la base de données
            $bdd = null;
        ?>
            <input type="submit" name="submit" value="Supprimer les villes sélectionées">
        </form>

        <h2>Add row to DB </h2>

        <form method="post" action="add_row.php">
            <label for="city">Ville:</label>
            <input id="city" type="text" name="ville">
            <label for="min">Bas</label>
            <input id="min" type="number" name="bas">
            <label for="max">Haut</label>
            <input id="max" type="number" name="haut">
            <input type="submit" name="submit">
        </form>

    </main>
</body>