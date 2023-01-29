<?php
    session_start();

    ?>


	<?php
	require 'head.php';
	?>
	<?
	require 'connection.php';



echo '<table>';
			echo '<thead>';
			echo '<tr>';
			
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 15%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';


$pdoQuery = "SELECT title, description, categoryId, endDate, bid FROM auction";
$pdoQuery_run = $pdo->query($pdoQuery);

if($pdoQuery_run){
   
    while($row = $pdoQuery_run->fetch(PDO::FETCH_OBJ))
    {
		
    echo 
    '<tr>
    <main>
    <ul class="productList">
    <li>
            <img src="product.png" alt="product name">
					<article>
						<h2>'.$row->title.'</h2>
						<h3>'.$row->categoryId.'</h3>
						<p>'.$row->description.'</p>

						<p>'.$row->endDate.'</p>
                        <p class="price">Current bid: £'.$row->bid.'</p>
						<a href="product_page.php" class="more auctionLink">More &gt;&gt;</a>
					</article>
                    </li>
                    </main>
           </tr>';
    }
}else{
}
	?>
	

					</section>

					<section class="reviews">
				<h1>Review</h1>	
<?php 

	
$pdoQuery = "SELECT firstname, surname, email , userid, messages FROM reviews";
$pdoQuery_run = $pdo->query($pdoQuery);
if($pdoQuery_run){
   
    while($row = $pdoQuery_run->fetch(PDO::FETCH_OBJ)){
		    echo ' 
    <main>
		<h2>'.$row->messages.'</h2>
				<h3>'.$row->email.'</h3>
				<p>'.$row->surname.'</p>

	
	 </main>
	
					</article>
                    </li>
           </tr>'
		   ;
		      }
}else{
    echo "it is empty";

}
    
  
?>

						</ul>
						<?php
require 'connection.php';





if (isset($_POST['submit'])) {
$stmt = $pdo->prepare('INSERT INTO reviews(firstname, surname, email, userid, messages) 
VALUES (:firstname, :surname, :email, :userid, :messages)');
$values = ['firstname' => $_POST['firstname'],  'surname' => $_POST['surname'],  'email' => $_POST['email'],  'userid' => $_POST['userid'],   'messages' => $_POST['messages']];
$stmt->execute($values);

	 

  

}else {
    
}
?>

					   <h3>clcik on the link to write a review </h3>
                
                <a href="review.php">review page</a>	
									
				
<?php
require 'footer.php';
?>

		</main>
	</body>
</html>