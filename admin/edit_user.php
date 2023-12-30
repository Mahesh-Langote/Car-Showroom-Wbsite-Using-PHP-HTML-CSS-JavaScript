<?php
// Database connection
require_once '../config.php';

// Check if the user ID is provided
if (isset($_GET['id'])) {
  $userId = $_GET['id'];

  // Fetch user data from the database based on the provided ID
  $sql = "SELECT * FROM user WHERE id = '$userId'";
  $result = $conn->query($sql);

  // Check if a user with the provided ID exists
  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Render the edit form with pre-filled details
    ?>
    <form action="update_user.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
      <label for="name">Name:</label>
      <input type="text" name="name" value="<?php echo $user['name']; ?>"><br>
      <label for="email">UserName :</label>
      <input type="email" name="username" value="<?php echo $user['username']; ?>"><br>
      <input type="submit" value="Update">
    </form>
    <?php
  } else {
    echo "User not found.";
  }
} else {
  echo "Invalid request.";
}

// Close database connection
$conn->close();
?>
