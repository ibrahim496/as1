<?php
    session_start();
    ?>

<?php
require 'head.php';
?>
<main>
<?php

require 'connection.php';


    				


if (isset($_POST['submit'])) {
   

$stmt = $pdo->prepare('SELECT * FROM reg WHERE email = :email AND password = :password');
$values = ['email' => $_POST['email'],
'password' => $_POST['password']];
$stmt->execute($values);

if ($stmt->rowCount() > 0) 
{$_SESSION['loggedin'] = true;
    echo 'You are now logged in';
        header('Location: addAuction.php');
	

	  echo'<a href=”logout.php”/>logout</p>';

}else {
    echo 'Sorry, your username and password could not be found';
}

?>
<?php
}
?>
		
				<h2>User Log In</h2>
                <a href="login.php">login</a>
				<form action="user_index.php" method="POST">
					<label>Email</label> <input type="text" name= "email" id= "email" />
					<label>Password</label> <input type="password" name= "password" />
					<input type="submit" name="submit" value="Submit" />
				</form>

                <h3>login AS admin</h3>
                
                <a href="adminlogin.php">Login</a>

  <h3>home page </h3>
                
                <a href="index.php">home page</a>
			
		</main>
<?php
 
?>
<?php
require 'footer.php';
?>