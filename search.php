<?php
if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    $query = "SELECT * FROM auction WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['name'] . " - " . $row['description'] . "<br>";
        }
    } else {
        echo "No results found.";
    }
    header('location: index.php');
}
?>