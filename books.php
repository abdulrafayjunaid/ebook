<?php
session_start();
include 'config.php'; // database connection

$query = "SELECT id, title FROM ebooks ORDER BY uploaded_at DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Ebook Library</title>
</head>
<body>
  <h1>Ebook Library</h1>
  <a href="cart.php">🛒 View Cart</a>
  <ul>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <li>
        <?php echo $row['title']; ?> 
        <a href="cart/add_to_cart.php?id=<?php echo $row['id']; ?>">Add to Cart</a>
      </li>
    <?php } ?>
  </ul>
</body>
</html>
