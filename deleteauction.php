<?php


session_start();
require 'connection.php';
?>
<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

    $stmt = $pdo->prepare('DELETE FROM auction WHERE id = :id');
    $stmt->execute(['id' => $_POST['id']]);


    header('location: user_index.php');
}