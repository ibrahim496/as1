<?php
    session_start();
    ?>


<?php
require 'head.php';
?>
<?php
require 'connection.php';


if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('UPDATE auction
						   SET  discriptions = :discriptions, enddate = :enddate, columnid =:columnid
						   WHERE title= :title');
 
	$values = [
		'discriptions' => $_POST['discriptions'],
		'enddate' => $_POST['enddate'],
		'columnid' => $_POST['columnid'],
        'title' => $_POST['title'],
	];
    	$stmt->execute($values);
	echo 'categories ' . $_POST['discriptions'] . ' edited';
}
else if (isset($_GET['title'])) {

	$gameStmt = $pdo->prepare('SELECT * FROM auction WHERE title = :title');

	$values = [
		'title' => $_GET['title']
	];

	$gameStmt->execute($values);

	$game = $gameStmt->fetch();
}
?>

<form action="editcategories.php" method="POST">
	<input type="hidden" name="title" value="<?php echo $game['title']; ?>"/>

	<label> name:</label>
	<input type="text" name="name"  value="<?php echo $game['name']; ?>" />
