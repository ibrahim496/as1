<head>

    <title>ibuy Auctions</title>
    <link rel="stylesheet" href="ibuy.css" />
    	<?php
	require 'connection.php';


    ?>


</head>


<body>
    <p1>Hello.</p1> <a href="reg.php">register</a>
    <p1>or</p1> <a href="login.php">login</a>




    <header>

        <h1><span class="i">i</span><span class="b">b</span><span class="u">u</span><span class="y">y</span></h1>

        <form action="search.php">
            <input type="text" name="search" placeholder="Search for anything" />
            <input type="submit" name="submit" value="Search" />
        </form>
    </header>

    <nav>
        <ul>
            <li><a class="categoryLink" href="index.php">Home </a></li>
               <li><a class="categoryLink" href="#">Garden</a></li>
            <li><a class="categoryLink" href="#">Electronics</a></li>
            <li><a class="categoryLink" href="#">Fashion</a></li>
            <li><a class="categoryLink" href="#">Sport</a></li>
            <li><a class="categoryLink" href="#">Health</a></li>
            <li><a class="categoryLink" href="#">Toys</a></li>
            <li><a class="categoryLink" href="#">Motors</a></li>
            <li><a class="categoryLink" href="#">More</a></li>
<?php
        
                $stmt = $pdo->prepare('SELECT * FROM categories');
                $stmt->execute();
                $categories = $stmt->fetchAll();
                foreach ($categories as $category) {
                    echo '<li><a href="auction.php?id=' . $category['id'] . '">' . $category['Name'] . '</a></li>';
                }

        ?>
        
        </ul>
    </nav>
    <img src="banners/1.jpg" alt="Banner" />