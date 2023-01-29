<?php
    session_start();
    ?>


<?php
require 'head.php';
?>
<?php
require 'connection.php';


if (isset($_POST['submit'])) {
		$stmt = $pdo->prepare('UPDATE categories SET Name = :Name WHERE id = :id ');

	$criteria = [
		'Name' => $_POST['Name'],
		'id' => $_POST['id']
	];

	$stmt->execute($criteria);
	echo 'Category Saved';
	echo ' <button><a href="admin_index.php"/> admin page</p></button>';
} else {
	$currentCategory = $pdo->query('SELECT * FROM categories WHERE id = ' . $_GET['id'])->fetch();
	?>


			



				<h2>Edit Category</h2>

				<form action="" method="POST">

					<input type="hidden" name="id" value="<?php echo $currentCategory['id']; ?>" />
					<label>Name</label>
					<input type="text" name="Name" value="<?php echo $currentCategory['Name']; ?>" />


					<input type="submit" name="submit" value="Save Category" />

				</form>

	<?php


		}
	?>