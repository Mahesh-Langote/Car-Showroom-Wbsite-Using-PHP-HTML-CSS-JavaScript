<?php
// Database connection
require_once '../config.php';

// Form submission handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $originalPrice = $_POST['originalprice'];
    $discountPrice = $_POST['discountprice'];
    $carName = $_POST['carname'];
    $type = $_POST['type'];
    $companyName = $_POST['companyname'];
    $model = $_POST['model'];
    $mileage = $_POST['mileage'];
    $engineSize = $_POST['enginesize'];
    $fuelType = $_POST['fueltype'];
    $gearbox = $_POST['gearbox'];
    $numberOfSeats = $_POST['numberofseats'];
    $doors = $_POST['doors'];
    $color = $_POST['color'];
    $power = $_POST['power'];
    $breakType = $_POST['breaktype'];
    $steeringType = $_POST['steeringtype'];
    $seatType = $_POST['seattype'];
    $headlight = $_POST['headlight'];
    $vehicleDescription = $_POST['vehicledescription'];

    // Handle file uploads
    $targetDir = "../uploads/";
    $uploadedFiles = [];
    $validImageTypes = array('jpg', 'jpeg', 'png', 'gif');

    // Loop through the image inputs
    foreach (range(1, 3) as $index) {
        $inputName = "img{$index}";

        if (isset($_FILES[$inputName]) && !empty($_FILES[$inputName]['tmp_name'])) {
            $fileName = $_FILES[$inputName]['name'];
            $tmpName = $_FILES[$inputName]['tmp_name'];
            $targetFile = $targetDir . basename($fileName);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Check if file is a valid image
            if (in_array($imageFileType, $validImageTypes)) {
                // Move uploaded file to target directory
                if (move_uploaded_file($tmpName, $targetFile)) {
                    $uploadedFiles[] = $targetFile;
                } else {
                    echo "Failed to upload one or more images.";
                }
            } else {
                echo "Invalid image file type for file: " . $fileName . ". Only JPG, JPEG, PNG, and GIF files are allowed.";
            }
        }
    }

    // Prepare SQL statement
    $sql = "INSERT INTO cars (img, img1, img2, originalprice, discountprice, carname, type, companyname, model, mileage, enginesize, fueltype, gearbox, numberofseats, doors, color, power, breaktype, steeringtype, seattype, headlight, vehiclediscription)
            VALUES ";

    $values = [
        "'" . $uploadedFiles[0] . "'",
        "'" . $uploadedFiles[1] . "'",
        "'" . $uploadedFiles[2] . "'",
        "'$originalPrice'",
        "'$discountPrice'",
        "'$carName'",
        "'$type'",
        "'$companyName'",
        "'$model'",
        "'$mileage'",
        "'$engineSize'",
        "'$fuelType'",
        "'$gearbox'",
        "'$numberOfSeats'",
        "'$doors'",
        "'$color'",
        "'$power'",
        "'$breakType'",
        "'$steeringType'",
        "'$seatType'",
        "'$headlight'",
        "'$vehicleDescription'"
    ];

    $sql .= "(" . implode(", ", $values) . ")";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Car added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
