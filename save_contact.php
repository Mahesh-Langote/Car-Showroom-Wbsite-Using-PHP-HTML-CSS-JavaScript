<?php
require_once 'config.php';

// Form submission handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare SQL statement
    $sql = "INSERT INTO contact (name, email, subject, message)
            VALUES ";

    $values = [

        "'$name'",
        "'$email'",
        "'$subject'",
        "'$message'"
    ];

    $sql .= "(" . implode(", ", $values) . ")";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("We will contact you soon");</script>';
        echo '<script>window.location.href = "contact.php";</script>';
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>