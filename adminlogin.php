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
   

$stmt = $pdo->prepare('SELECT * FROM admin WHERE adminid = :adminid AND password = :password');
$values = ['adminid' => $_POST['adminid'],
'password' => $_POST['password']];
$stmt->execute($values);

if ($stmt->rowCount() > 0) 
{$_SESSION['loggedin'] = true;
    echo 'You are now logged in';

      echo'<a href=”logout.php”/>logout</p>';

      


}else {
    echo 'Sorry, your username and password could not be found';
}

?>
<?php
}
?>
			
				
				<form action="adminlogin.php" method="POST">
					<label>adminid</label> <input type="text" name= "adminid" />
					<label>Password</label> <input type="password" name= "password" />
					<input type="submit" name="submit" value="Submit" />
				</form>

                <h3>auction page</h3>
                
                <a href="addAuction.php">auction page</a>


			     <h3>home page </h3>
                
                <a href="index.php">home page</a>

		</main>
        <?php
require 'footer.php';
?>