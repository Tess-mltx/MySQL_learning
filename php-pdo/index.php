<?php
require_once('connect.php');
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
    <form method="post" action="" > 
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
                <td> <input type= "checkbox" name="checkbox[]" value="'. $row["ville"] .'"></td>
                </tr>';
            }
            echo '</table>';

        // Fermeture de la connexion à la base de données
            $bdd = null;
        ?>
        <input type="submit" name="deleteVille" value="Supprimer les villes sélectionées">
    </form>
    </main>
</body>