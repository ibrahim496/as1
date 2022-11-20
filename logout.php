<?php
session_start();
?>
<?php
//unset($SESSION['loggedin']);
session_unset();
header("Location:login.php");
?>