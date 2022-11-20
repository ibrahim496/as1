<?php
$server = 'mysql';
$username = 'student';
$password = 'student';


$schema = 'CSY2028';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
?>
