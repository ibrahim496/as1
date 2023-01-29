<?php
session_start();
?>

<?php
require 'head.php'
    ?>
<?php
require 'connection.php';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
        	if (isset($_POST['submit']))
            {
       
$stmt = $pdo->prepare('INSERT INTO categories (Name) VALUES (:Name)');

 $criteria = [
'Name' => $_POST['Name']
        ];

        $stmt->execute($criteria);
        echo 'Category added';
        echo ' <button><a href="admin_index.php"/> admin page</p></button>';
    } else {

        
        ?>

<h1>add category</h1>

<form action="addcategories.php" method="POST">
					<label>category name</label> <input type="text" name= "Name" />
					<input type="submit" name="submit" value="Submit" />
				</form>
    <?php
    }
    ?>