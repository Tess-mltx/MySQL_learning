<?php
require_once('connect.php');

if (isset($_POST['submit'])){
    $ville = isset($_POST['ville']) ? $_POST['ville'] : '';
    $haut = isset($_POST['haut']) ? $_POST['haut'] : '';
    $bas = isset($_POST['bas']) ? $_POST['bas'] : '';

    if (!empty($ville) && !empty($haut) && !empty($bas)){
        $query = $bdd->prepare('INSERT INTO météo (ville, bas, haut) VALUES (:ville, :bas, :haut)');
        $query->execute(array(':ville' => $ville, ':bas' => $bas, ':haut' => $haut));
        header("Location: index.php");
        exit();
    }
} else {
    echo "Veuillez remplir tous les champs du formulaire.";
}
?>