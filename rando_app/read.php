<?php
require('src/connect.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Randonnées</title>
  <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>

<body>
  <header>
    <a href="log-in.php">Se connecter</a>
  </header>
  <h1>Liste des randonnées</h1>
  <table>
    <!-- Afficher la liste des randonnées -->
    <?php
            echo '
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Difficulté</th>
                <th>Distance</th>
                <th>Durée</th>
                <th>Dénivelé</th>
            </tr>';

            foreach ($bdd->query('SELECT id, name, difficulty, distance, duration, height_difference  from hiking') as $row) {
                echo 
                '<tr>
                <td>' . $row["id"] . '</td>
                <td>' . $row["name"] . '</td>
                <td>' . $row["difficulty"] . '</td>
                <td>' . $row["distance"] . ' km</td>
                <td>' . $row["duration"] . '</td>
                <td>' . $row["height_difference"] . ' m</td>
                </tr>';
            }

        // Fermeture de la connexion à la base de données
            $bdd = null;
        ?>
  </table>
</body>

</html>