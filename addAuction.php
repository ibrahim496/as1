<?php
session_start();
?>
<?php
require 'head.php';

?>

<?php
require 'connection.php';

$title;
$description;
$category;
$enddate;
$bid;

$email = "";

if (isset($_SESSION['email'])) {
  // Retrieve user's email from 'reg' table
  $stmt = $pdo->prepare('SELECT email FROM reg WHERE email = :email');
  $stmt->execute(['email' => $_SESSION['email']]);
  $email = $stmt->fetchColumn();
} else {
  // handle the case where the email key is not set
  // redirect user to login page or display an error message
}

?>
<h2>ADD AUCTION</h2>

<form action="" method="POST">
  <label>Title</label> <input type="text" name=title />
  <!--value="" -->
  <label>Description</label> <input type="text" name=description />
  <label>end date</label> <input type="Date" name=endDate />
  <label>bid</label> <input type="number" name=bid />

  <label>category</label>
  <select name="categoryId">
    <?php
    $stmt = $pdo->prepare('SELECT * FROM categories');
    $stmt->execute();

    foreach ($stmt as $row) {

      if ($cat['categoryId'] == $row['id']) {
        echo '<option selected="selected" value="' . $row['id'] . '">' . $row['Name'] . '</option>';
      } else {
        echo '<option value="' . $row['id'] . '">' . $row['Name'] . '</option>';
      }

    }
    ?>
       </select>
  <input type="hidden" name="email" value="<?php echo $email; ?>" />
          
            

    <input type="submit" name="submit" value="submit" />

</form>




<?php

if (isset($_POST['submit'])) {

  $title = $_POST['title'];
  $description = $_POST['description'];
  $category = $_POST['categoryId'];
  $endDate = $_POST['endDate'];
  $bid = $_POST['bid'];
  $email = $_POST['email'];


  $stmt = $pdo->prepare('INSERT INTO auction (title, description, categoryId, endDate, bid, email)
                           VALUES ( :titles, :descriptions, :categorys, :enddates, :bids, :email)');


  $values = [
    'titles' => $title,
    'descriptions' => $description,
    'categorys' => $category,
    'enddates' => $endDate,
    'bids' => $bid,
    'email' => $email,
  ];
  if ($stmt->execute($values)) {

    echo 'auction added';
    echo ' <button><a href="user_index.php"/> user main page</p></button>';

  } else {
    echo 'try to add a valid auction';
  }

}



?>



<?php
require 'footer.php';
?>