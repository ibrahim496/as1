<?php
session_start();
?>


<?php
require 'head.php'
?>
<?php
require 'connection.php';




if (isset($_POST['submit'])) {
$stmt = $pdo->prepare('INSERT INTO admin (adminid, password) 
VALUES (:adminid,  :password)');
$values = ['adminid' => $_POST['adminid'],  'password' => $_POST['password']];
$stmt->execute($values);
{
    echo 'youve been registerd pls login';
}
}else 
{


?>
<form action="addAdmin.php" method="POST">
<label>adminid:</label><input type="text" name="adminid" id=adminid/>
<label>Password:</label><input type="password" name="password" id="password" />
   <input type="submit" name="submit" value=”Submit” />

</form>
<?php
    }
    ?>
    <?php
require 'footer.php';
?>