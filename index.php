<?php
    session_start();

    ?>
<!DOCTYPE html>
<html>
	<head>
		<title>ibuy Auctions</title>
		<link rel="stylesheet" href="ibuy.css" />
	</head>

	<body>
<body>
    <p1>Hello.</p1> <a href="reg.php">register</a>
    <p1>or</p1> <a href="login.php">login</a>




    <header>

        <h1><span class="i">i</span><span class="b">b</span><span class="u">u</span><span class="y">y</span></h1>

        <form action="#">
            <input type="text" name="search" placeholder="Search for anything" />
            <input type="submit" name="submit" value="Search" />
        </form>
    </header>

    <nav>
        <ul>
            <li><a class="categoryLink" href="#">Home &amp; Garden</a></li>
            <li><a class="categoryLink" href="#">Electronics</a></li>
            <li><a class="categoryLink" href="#">Fashion</a></li>
            <li><a class="categoryLink" href="#">Sport</a></li>
            <li><a class="categoryLink" href="#">Health</a></li>
            <li><a class="categoryLink" href="#">Toys</a></li>
            <li><a class="categoryLink" href="#">Motors</a></li>
            <li><a class="categoryLink" href="#">More</a></li>
        </ul>
    </nav>
    <img src="banners/1.jpg" alt="Banner" />
		<main>

			<h1>Latest Listings / Search Results / Category listing</h1>

		
			<ul class="productList">

	<?php
	require 'connection.php';
	
$pdoQuery = "SELECT title, discriptions, auctionid, enddate, bid FROM auction";
$pdoQuery_run = $pdo->query($pdoQuery);

if($pdoQuery_run){
   
    while($row = $pdoQuery_run->fetch(PDO::FETCH_OBJ))
    {
    echo ' 
    <tr>
    <ul class="productList">
    <li>
            <img src="product.png" alt="product name">
			<article>
		<h2>'.$row->title.'</h2>
				<h3>'.$row->auctionid.'</h3>
				<p>'.$row->discriptions.'</p>

						<p>'.$row->enddate.'</p>
                        <p class="price">Current bid: '.$row->bid.'</p>			<a href="#" class="more auctionLink">More &gt;&gt;</a>
					</article>
                    </li>
           </tr>';
    }
}else{
    echo "it is empty";

}

  
?>

<article>
				

					
	<a href="#" class="more auctionLink">More &gt;&gt;</a>
		</article>
                    </li>   </tr>
		
    
	

				<li>
					<img src="product.png" alt="product name">
					<article>
					

				
						<h2>Product name</h2>
						<h3>Product category</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales ornare purus, non laoreet dolor sagittis id. Vestibulum lobortis laoreet nibh, eu luctus purus volutpat sit amet. Proin nec iaculis nulla. Vivamus nec tempus quam, sed dapibus massa. Etiam metus nunc, cursus vitae ex nec, scelerisque dapibus eros. Donec ac diam a ipsum accumsan aliquet non quis orci. Etiam in sapien non erat dapibus rhoncus porta at lorem. Suspendisse est urna, egestas ut purus quis, facilisis porta tellus. Pellentesque luctus dolor ut quam luctus, nec porttitor risus dictum. Aliquam sed arcu vehicula, tempor velit consectetur, feugiat mauris. Sed non pellentesque quam. Integer in tempus enim.</p>

						<p class="price">Current bid: £123.45</p>
						<a href="#" class="more auctionLink">More &gt;&gt;</a>
					</article>
				</li>
				<li>
					<img src="product.png" alt="product name">
					<article>
						<h2>Product name</h2>
						<h3>Product category</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales ornare purus, non laoreet dolor sagittis id. Vestibulum lobortis laoreet nibh, eu luctus purus volutpat sit amet. Proin nec iaculis nulla. Vivamus nec tempus quam, sed dapibus massa. Etiam metus nunc, cursus vitae ex nec, scelerisque dapibus eros. Donec ac diam a ipsum accumsan aliquet non quis orci. Etiam in sapien non erat dapibus rhoncus porta at lorem. Suspendisse est urna, egestas ut purus quis, facilisis porta tellus. Pellentesque luctus dolor ut quam luctus, nec porttitor risus dictum. Aliquam sed arcu vehicula, tempor velit consectetur, feugiat mauris. Sed non pellentesque quam. Integer in tempus enim.</p>

						<p class="price">Current bid: £123.45</p>
						<a href="#" class="more auctionLink">More &gt;&gt;</a>
					</article>
				</li>
				<li>
					<img src="product.png" alt="product name">
					<article>
						<h2>Product name</h2>
						<h3>Product category</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales ornare purus, non laoreet dolor sagittis id. Vestibulum lobortis laoreet nibh, eu luctus purus volutpat sit amet. Proin nec iaculis nulla. Vivamus nec tempus quam, sed dapibus massa. Etiam metus nunc, cursus vitae ex nec, scelerisque dapibus eros. Donec ac diam a ipsum accumsan aliquet non quis orci. Etiam in sapien non erat dapibus rhoncus porta at lorem. Suspendisse est urna, egestas ut purus quis, facilisis porta tellus. Pellentesque luctus dolor ut quam luctus, nec porttitor risus dictum. Aliquam sed arcu vehicula, tempor velit consectetur, feugiat mauris. Sed non pellentesque quam. Integer in tempus enim.</p>

						<p class="price">Current bid: £123.45</p>
						<a href="#" class="more auctionLink">More &gt;&gt;</a>
					</article>
				</li>
			</ul>

			<hr />

			<h1>Product Page</h1>
			<article class="product">

					<img src="product.png" alt="product name">
					<section class="details">
						<h2>Product name</h2>
						<h3>Product category</h3>
						<p>Auction created by <a href="#">User.Name</a></p>
						<p class="price">Current bid: £123.45</p>
						<time>Time left: 8 hours 3 minutes</time>
						<form action="#" class="bid">
							<input type="text" name="bid" placeholder="Enter bid amount" />
							<input type="submit" value="Place bid" />
						</form>
					</section>
					<section class="description">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales ornare purus, non laoreet dolor sagittis id. Vestibulum lobortis laoreet nibh, eu luctus purus volutpat sit amet. Proin nec iaculis nulla. Vivamus nec tempus quam, sed dapibus massa. Etiam metus nunc, cursus vitae ex nec, scelerisque dapibus eros. Donec ac diam a ipsum accumsan aliquet non quis orci. Etiam in sapien non erat dapibus rhoncus porta at lorem. Suspendisse est urna, egestas ut purus quis, facilisis porta tellus. Pellentesque luctus dolor ut quam luctus, nec porttitor risus dictum. Aliquam sed arcu vehicula, tempor velit consectetur, feugiat mauris. Sed non pellentesque quam. Integer in tempus enim.</p>


					</section>

					<section class="reviews">
				<h1>Review</h1>	
<?php 

require 'connection.php';
	
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
									
				<form action="index.php" method="POST">
					<label>firstname</label> <input type="text" name= "firstname" />
					<label>surname</label> <input type="text" name= "surname" />
					<label>email</label> <input type="text" name= "email" />
					<label>userid</label> <input type="text" name= "userid" />
					<label>messages</label> <input type="text" name= "messages" />
					<input type="submit" name="submit" value="Submit" />
				</form>
						</form>
					</section>
					</article>

					<hr />
					<h1>Sample Form</h1>

					<form action="#">
						<label>Text box</label> <input type="text" />
						<label>Another Text box</label> <input type="text" />
						<input type="checkbox" /> <label>Checkbox</label>
						<input type="radio" /> <label>Radio</label>
						<input type="submit" value="Submit" />

					</form>
<?php
require 'footer.php';
?>

		</main>
	</body>
</html>