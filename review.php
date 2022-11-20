<?php
session_start();

?>


<?php
require 'head.php'
?>

<?php
require 'connection.php';

if (isset($_POST['submit'])) {
$stmt = $pdo->prepare('INSERT INTO reviews(firstname, surname, email, userid, messages) 
VALUES (:firstname, :surname, :email, :userid, :messages)');
$values = ['firstname' => $_POST['firstname'],  'surname' => $_POST['surname'],  'email' => $_POST['email'],  'userid' => $_POST['userid'],   'messages' => $_POST['messages']];
$stmt->execute($values);
  

?>
<?php
}
?>
<h1>Register</h1>
				<form action="review.php" method="POST">
					<label>firstname</label> <input type="text" name= "firstname" />
					<label>surname</label> <input type="text" name= "surname" />
					<label>email</label> <input type="text" name= "email" />
					<label>userid</label> <input type="text" name= "userid" />
					<label>messages</label> <input type="text" name= "messages" />
					<input type="submit" name="submit" value="Submit" />
				</form>
</form>
<main>
        <a href="index.php">home page</a>
</main>

