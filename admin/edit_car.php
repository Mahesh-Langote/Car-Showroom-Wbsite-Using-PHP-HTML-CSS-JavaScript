<?php
// Database connection
include("adminheader.php");
require_once '../config.php'; 
// Check if the user ID is provided
if (isset($_GET['id'])) {
  $userId = $_GET['id'];

  // Fetch user data from the database based on the provided ID
  $sql = "SELECT * FROM cars WHERE id = '$userId'";
  $result = $conn->query($sql);

  // Check if a user with the provided ID exists
  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Render the edit form with pre-filled details
    ?>
    <style>
      
  .form-group label {
    font-size: 16px;
    color: red; 
  }
  .form-group input, textarea, select{ 
    width: 100%;
    border-radius: 5px;
  }
img{
  width: 80px;
}
  .form-group {
    display: flex;
    width: 100%;
    align-items: start;
    color: Black;
    margin-top: 14vh;
    margin-left: 50px;
    justify-content: center; 
    align-items: center;
  }
      </style>
    <form method="POST" action="update_car.php" enctype="multipart/form-data">
    <br><br><br><br>
    <div style="text-align:center;"><h1>Update Car Details</h1></div>
      
      <div class="form-group">
        <div style=" margin-right:150px;">

          <label for="name"> ID : 
            
            <input type="text" name="id" id="id" value="<?php echo $user['id']; ?>" readonly>
          </label>
          <br>
          <label for="img">Image 1:</label>
          <img src="<?php echo $user['img']; ?>"  > 
          <input type="file" name="img1" id="img1" value="<?php echo $user['img']; ?>" required  ><br><br>

          <label for="img">Image 2:</label>
          <img src="<?php echo $user['img1']; ?>" > 
          <input type="file" name="img2" id="img2" value="<?php echo $user['img1']; ?>" required><br><br>

          <label for="img">Image 3:</label>
          <img src="<?php echo $user['img2']; ?>" > 
          <input type="file" name="img3" id="img3" value="<?php echo $user['img2']; ?>" required><br><br>

          <label for="originalprice">Original Price:</label>
          <input type="text" name="originalprice" required value="<?php echo $user['originalprice']; ?>"><br><br>

          <label for="discountprice">Discount Price:</label>
          <input type="text" name="discountprice" required value="<?php echo $user['discountprice']; ?>"><br><br>

          <label for="carname">Car Name:</label>
          <input type="text" name="carname" required value="<?php echo $user['carname']; ?>"><br><br>

          <label for="type">Type:</label>
          <select name="type" required >
            <option value="Sport Car">Sport Car</option>
            <option value="Old Car">Old Car</option>
            <option value="New Car">New Car</option>
          </select><br><br>

          <label for="companyname">Company Name:</label>
          <input type="text" name="companyname" required value="<?php echo $user['companyname']; ?>"> <br><br>

          <label for="model">Model:</label>
          <input type="text" name="model" required value="<?php echo $user['model']; ?>"><br><br>

          <label for="mileage">Mileage:</label>
          <input type="text" name="mileage" required value="<?php echo $user['mileage']; ?>"><br><br>

          <label for="enginesize">Engine Size:</label>
          <input type="text" name="enginesize" required value="<?php echo $user['enginesize']; ?>"><br><br>

          <label for="fueltype">Fuel Type:</label>
          <input type="text" name="fueltype" required value="<?php echo $user['fueltype']; ?>"><br><br>

        </div>

        <div>


          <label for="gearbox">Gear Type:</label>
          <input type="text" name="gearbox" required value="<?php echo $user['gearbox']; ?>"><br><br>


          <label for="numberofseats">Number of Seats:</label>
          <input type="text" name="numberofseats" required value="<?php echo $user['numberofseats']; ?>"><br><br>

          <label for="doors">Doors:</label>
          <input type="text" name="doors" required value="<?php echo $user['doors']; ?>"><br><br>

          <label for="color">Color:</label>
          <input type="text" name="color" required value="<?php echo $user['color']; ?>"><br><br>

          <label for="power">Power:</label>
          <input type="text" name="power" required value="<?php echo $user['power']; ?>"><br><br>

          <label for="breaktype">Brake Type:</label>
          <input type="text" name="breaktype" required value="<?php echo $user['breaktype']; ?>"><br><br>

          <label for="steeringtype">Steering Type:</label>
          <input type="text" name="steeringtype" required value="<?php echo $user['steeringtype']; ?>"><br><br>

          <label for="seattype">Seat Type:</label>
          <input type="text" name="seattype" required value="<?php echo $user['seattype']; ?>"><br><br>

          <label for="headlight">Headlight:</label>
          <input type="text" name="headlight" required value="<?php echo $user['headlight']; ?>"><br><br>

          <label for="vehicledescription">Vehicle Description:</label>
          <textarea name="vehiclediscription" cols="20" rows="10" required ><?php echo $user['vehiclediscription']; ?></textarea><br><br>

        </div>
      </div>
      <input type="submit" value="Update Car"
        style="position: absolute; left: 51vw;     display: inline-block; font-size: 15px; padding: 12px 20px;  background-color: #ed563b; color: #fff;  text-align: center; font-weight: 400; text-transform: uppercase; transition: all .3s;  ">
      <br><br><br> <br><br>
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
include("footer.php")
?>