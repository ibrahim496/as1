<?php
session_start();

?>


<?php
require 'head.php'
?>
<?php
require 'connection.php';





if (isset($_POST['submit'])) {
$stmt = $pdo->prepare('INSERT INTO auction(title, discriptions, enddate, columnid) 
VALUES (:title, :discriptions, :enddate, :columnid)');
$values = ['title' => $_POST['title'],  'discriptions' => $_POST['discriptions'],  'enddate' => $_POST['enddate'],  'bid' => $_POST['bid'],   'auctionid' => $_POST['auctionid']];
$stmt->execute($values);

	 

  echo'youve added an auction';

}else {
    echo 'unable to add auction';
}
?>


<form action="addAuction.php" method="POST">
<label>title:</label><input type="text" name="title" id=title/>
<label>discriptions:</label><input type="text" name="discriptions" />
<label>enddate:</label><input type="date" name="enddate"  />
<label>bid:</label><input type="text" name="bid"  />
<label>auctionid:</label><input type="text" name="auctionid" />

   <input type="submit" name="submit" value=”Submit” />

</form>


                <h3>edit auction</h3>
                
                <a href="editcategories.php">edit</a>
<?php
require 'footer.php';
?>