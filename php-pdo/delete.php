<?php
require_once('connect.php');

if (isset($_POST['submit']) && isset($_POST['checkbox'])){
    $to_delete = $_POST["checkbox"];
    foreach ($to_delete as $delete_row) {
        $query = $bdd->prepare('DELETE FROM météo WHERE ville = :ville');
        $query->bindParam(':ville', $delete_row, PDO::PARAM_STR);
        $query->execute();
}
header('Location: index.php');
exit;
}
?>