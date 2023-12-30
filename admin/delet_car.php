<?php
// Database connection
require_once '../config.php';

// Check if the user ID is provided
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Prepare and execute the SQL statement to delete the user
    $sql = "DELETE FROM cars WHERE id = '$userId'";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Car Removed ");</script>';
        echo '<script>window.location.href = "view_cars.php";</script>';
    } else {
        echo "Error deleting user: " . $conn->error;
    }
} else {
    echo "User ID not provided.";
}

// Close database connection
$conn->close();
?>
