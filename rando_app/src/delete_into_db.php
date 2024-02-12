<?php
require('connect.php');

if (isset($_POST['button']) && isset($_POST['checkbox'])){
    $to_delete = $_POST["checkbox"];
    $query = $bdd->prepare('DELETE FROM hiking WHERE id = :id');
    foreach ($to_delete as $delete_row) {
        $query->bindParam(':id', $delete_row, PDO::PARAM_INT);
        $query->execute();
}
header('Location: ../read.php');
exit;
}
?>