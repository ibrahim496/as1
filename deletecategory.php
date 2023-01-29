<?php

	
session_start();
require 'connection.php';
?>
<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

	$stmt = $pdo->prepare('DELETE FROM categories WHERE Name = :Name');
	$stmt->execute(['Name' => $_POST['id']]);
	

	header('location: admin_index.php');
}


