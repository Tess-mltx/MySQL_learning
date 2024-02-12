<?php
require('connect.php');

if (isset($_POST['button'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $difficulty = isset($_POST['difficulty']) ? $_POST['difficulty'] : '';
    $distance = isset($_POST['distance']) ? $_POST['distance'] : '';
    $duration = isset($_POST['duration']) ? $_POST['duration'] : '';
    $height_difference = isset($_POST['height_difference']) ? $_POST['height_difference'] : '';

    if (!empty($id) && !empty($name) && !empty($difficulty) && !empty($distance) && !empty($duration) && !empty($height_difference)){
        $query = $bdd->prepare('UPDATE hiking SET name = :name, difficulty = :difficulty, distance = :distance, duration = :duration, height_difference = :height_difference WHERE id=:id');
        $query->execute(array(':id' => $id, ':name' => $name, ':difficulty' => $difficulty, ':distance' => $distance, ':duration' => $duration, ':height_difference' => $height_difference));

        header("Location: ../read.php");
        exit();
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
} 
?>