<?php
// Database connection
require_once '../config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $userId = $_POST['id'];
  $originalPrice = $_POST['originalprice'];
  $discountPrice = $_POST['discountprice'];
  $carname = $_POST['carname'];
  $type = $_POST['type'];
  $companyname = $_POST['companyname'];
  $model = $_POST['model'];
  $mileage = $_POST['mileage'];
  $enginesize = $_POST['enginesize'];
  $fueltype = $_POST['fueltype'];
  $gearbox = $_POST['gearbox'];
  $numberofseats = $_POST['numberofseats'];
  $doors = $_POST['doors'];
  $color = $_POST['color'];
  $power = $_POST['power'];
  $breaktype = $_POST['breaktype'];
  $steeringtype = $_POST['steeringtype'];
  $seattype = $_POST['seattype'];
  $headlight = $_POST['headlight'];
  $vehiclediscription = $_POST['vehiclediscription'];
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
  // Update the user data in the database
  $sql = "UPDATE cars SET discountprice = '$discountPrice', carname = '$carname', type ='$type', companyname = '$companyname', model = '$model', mileage = '$mileage', enginesize='$enginesize',fueltype = '$fueltype', gearbox = '$gearbox',numberofseats='$numberofseats',doors='$doors',color='$color', power='$power',breaktype='$breaktype', steeringtype='$steeringtype',seattype='$seattype',headlight='$headlight', vehiclediscription='$vehiclediscription' ,img='$uploadedFiles[0]',img1='$uploadedFiles[1]',img2='$uploadedFiles[2]'  WHERE id = '$userId'";


  if ($conn->query($sql) === TRUE) {
    echo '<script>alert("User Updated ");</script>';
    echo '<script>window.location.href = "view_cars.php";</script>';
  } else {
    echo "Error updating user: " . $conn->error;
  }

  // Close database connection
  $conn->close();
}
?>