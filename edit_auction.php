<?php
session_start();
?>


<?php
require 'head.php';
?>
<?php
require 'connection.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    if (isset($_POST['submit'])) {
        $stmt = $pdo->prepare('UPDATE auction SET title = :title, description = :description, categoryId = :categoryId, endDate =:endDate, bid = :bid  WHERE id = :id');
        $criteria = [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'endDate' => $_POST['endDate'],
            'bid' => $_POST['bid'],
            'id' => $_POST['id'],
            'categoryId' => $_POST['categoryId']
        ];
        if ($stmt->execute($criteria)) {
            echo 'auction Saved';
            echo ' <button><a href="user_index.php"/> user page</p></button>';
        } else {
            echo 'Error saving auction';
        }
    } else {
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            if (isset($_GET['id'])) {
                $stmt = $pdo->prepare('SELECT * FROM auction WHERE id = :id');
                $stmt->execute(['id' => $_GET['id']]);
                $auction = $stmt->fetch();
                ?>
                <h2>Edit auction</h2>
                <form action="edit_auction.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $auction['id']; ?>" />
                    <label>title</label>
                    <input type="text" name="title" value="<?php echo $auction['title']; ?>" />
                    <label>description</label>
                    <input type="text" name="description" value="<?php echo $auction['description']; ?>" />
                    <label>endDate</label>
                    <input type="text" name="endDate" value="<?php echo $auction['endDate']; ?>" />
                    <label>bid</label>
                   <input type="text" name="bid" value="<?php echo $auction['bid']; ?>" />
            <select name="categoryId">
                <?php
                $stmt = $pdo->prepare('SELECT * FROM categories');
                $stmt->execute();

                foreach ($stmt as $row) {
                    if ($auction['categoryId'] == $row['id']) {
                        echo '<option selected="selected" value="' . $row['id'] . '">' . $row['Name'] . '</option>';
                    } else {
                        echo '<option value="' . $row['id'] . '">' . $row['Name'] . '</option>';
                    }
                }


                    ?>


                <input type="submit" name="submit" value="Save auction" />

        </form>










        </form>



    <?php
                }
            
        }
    }
}
?>