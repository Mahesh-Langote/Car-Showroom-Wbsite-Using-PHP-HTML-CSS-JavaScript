<?php
// Database connection
require_once '../config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $userId = $_POST['id'];
  $name = $_POST['name'];
  $username = $_POST['username'];

  // Update the user data in the database
  $sql = "UPDATE user SET name = '$name', username = '$username' WHERE id = '$userId'";
  if ($conn->query($sql) === TRUE) {
    echo '<script>alert("User Updated ");</script>';
    echo '<script>window.location.href = "view_users.php";</script>';
  } else {
    echo "Error updating user: " . $conn->error;
  }

  // Close database connection
  $conn->close();
}
?>
