<?php
    session_start();
    ?>

<?php
require 'head.php';
?>
<main>
<?php

require 'connection.php';
?>


			<?php

	echo '<table>';
	echo '<thead>';
	echo '<tr>';
	echo '<th>NAME</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '<th style="width: 15%">&nbsp;</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '</tr>';

            $id = $_GET['id'];
            $stmt = $pdo->prepare('SELECT * FROM Name WHERE id = :id');
            $stmt->execute(['id' => $id]);
            $products = $stmt->fetchAll();

            $stmt = $pdo->query('SELECT * FROM categories');
	foreach ($stmt as $categories) {
		
	echo '<tr>';
    echo '<td>' . $categories['Name'] . '</td>';
	echo '<td><a style="float: right" href="editcategories.php?id='. $categories['id'] . '">Edit</a></td>';
	echo '<td><form method="post" action="deletecategory.php">
	<input type="hidden" name="id" value="' . $categories['Name'] . '" />
    	<input type="submit" name="submit" value="Delete" />
		</form></td>';
        echo '</tr>';
    
}
?>
<h1>admin page</h1>


<button><a href="addCategories.php">add categores</a></button>







