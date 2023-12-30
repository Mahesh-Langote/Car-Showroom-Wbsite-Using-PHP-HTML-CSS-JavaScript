<?php
require_once '../config.php';

// Form submission handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $carid = $_POST['carid'];
    $username = $_POST['username']; 

    // Prepare SQL statement
    $sql = "INSERT INTO book (carid, username)
            VALUES ";

    $values = [

        "'$carid'",
        "'$username'", 
    ];

    $sql .= "(" . implode(", ", $values) . ")";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("We will Meet you soon");</script>';
        echo '<script>window.location.href = "cars.php";</script>';
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>