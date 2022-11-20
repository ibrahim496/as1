<?php
session_start();

?>


<?php
require 'head.php'
?>
<?php
require 'connection.php';



if (isset($_POST['submit'])) {
$stmt = $pdo->prepare('INSERT INTO reg (firstname, surname, password, email, dateofbirth) 
VALUES (:firstname, :surname, :password, :email, :dateofbirth)');
$values = ['firstname' => $_POST['firstname'],  'surname' => $_POST['surname'],     'password' => $_POST['password'], 'email' => $_POST['email'],'dateofbirth' => $_POST['dateofbirth']];
$stmt->execute($values);
if ($stmt->rowCount() > 0) 
{$_SESSION['loggedin'] = true;
    echo 'You are now registered ';

	  echo '<a href=”login.php”/>Go to login page</p>';

}else {
    echo 'Sorry, unable to register';
}
    ?>
                    <?php
}

?>
	<h1>Register</h1>
<form action="reg.php" method="POST">
	
					
<label>firstname:</label><input type="text" name="firstname" id=firstname/>
<label>surname:</label><input type="text" name="surname" />
<label>email:</label><input type="text" name="email" id=email />
<label>dateofbirth:</label><input type="date" name="dateofbirth" />
<label>Password:</label><input type="password" name="password" id="password" />
   <input type="submit" name="submit" value=”Submit” />

</form>

<H1> ADMIN CREATE AN ACCOUNT </H1>
 <p1>admin REGISTRATION</p1> <a href="addAdmin.php">login</a>



      <h3>home page </h3>
                
                <a href="index.php">home page</a>

<?php
require 'footer.php';
?>