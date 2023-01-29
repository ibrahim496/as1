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
    echo '<th>title</th>';
    echo '<th style="width: 5%">&nbsp;</th>';
    echo '<th style="width: 15%">&nbsp;</th>';
    echo '<th style="width: 5%">&nbsp;</th>';
    echo '<th style="width: 5%">&nbsp;</th>';
    echo '</tr>';


    $stmt = $pdo->query('SELECT * FROM auction');
    foreach ($stmt as $auction) {

        echo '<tr>';
        echo '<td>' . $auction['title'] . '</td>';
        echo '<td><a style="float: right" href="edit_auction.php?id=' . $auction['id'] . '">Edit</a></td>';
        echo '<td><form method="post" action="deleteauction.php">
	<input type="hidden" name="id" value="' . $auction['id'] . '" />
    	<input type="submit" name="submit" value="Delete" />
		</form></td>';
        echo '</tr>';

    }
    ?>
    <h1>user page</h1>


    <button><a href="addAuction.php">add auction</a></button>