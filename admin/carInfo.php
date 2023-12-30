<?php include("adminheader.php") ?>


<style>
  .form-group label {
    font-size: 16px;
    color: red; 
  }
  .form-group input, textarea, select{ 
    width: 100%;
    border-radius: 5px;
  }

  .form-group {
    display: flex;
    width: 100%;
    align-items: start;
    color: Black;
    margin-top: 22vh;
    margin-left: 50px;
  }
</style>

<form method="POST" action="insert_car.php" enctype="multipart/form-data"  >
  <div class="form-group" style="  display: flex;
    justify-content: center;
    align-items: center;  ">
    <div style=" margin-right:150px;">
      <label for="img">Image 1:</label>
      <input type="file" name="img1" id="img1" required><br><br>

      <label for="img">Image 2:</label>
      <input type="file" name="img2" id="img2" required><br><br>

      <label for="img">Image 3:</label>
      <input type="file" name="img3" id="img3" required><br><br>

      <label for="originalprice">Original Price:</label>
      <input type="text" name="originalprice" required><br><br>

      <label for="discountprice">Discount Price:</label>
      <input type="text" name="discountprice" required><br><br>

      <label for="carname">Car Name:</label>
      <input type="text" name="carname" required><br><br>

      <label for="type">Type:</label>
      <select name="type" required>
        <option value="Sport Car">Sport Car</option>
        <option value="Old Car">Old Car</option>
        <option value="New Car">New Car</option>
      </select><br><br>

      <label for="companyname">Company Name:</label>
      <input type="text" name="companyname" required><br><br>

      <label for="model">Model:</label>
      <input type="text" name="model" required><br><br>

      <label for="mileage">Mileage:</label>
      <input type="text" name="mileage" required><br><br>

      <label for="enginesize">Engine Size:</label>
      <input type="text" name="enginesize" required><br><br>

      <label for="fueltype">Fuel Type:</label>
      <input type="text" name="fueltype" required><br><br>
      
    </div>

    <div>


    <label for="gearbox">Gear Type:</label>
      <input type="text" name="gearbox" required><br><br>


      <label for="numberofseats">Number of Seats:</label>
      <input type="text" name="numberofseats" required><br><br>

      <label for="doors">Doors:</label>
      <input type="text" name="doors" required><br><br>

      <label for="color">Color:</label>
      <input type="text" name="color" required><br><br>

      <label for="power">Power:</label>
      <input type="text" name="power" required><br><br>

      <label for="breaktype">Brake Type:</label>
      <input type="text" name="breaktype" required><br><br>

      <label for="steeringtype">Steering Type:</label>
      <input type="text" name="steeringtype" required><br><br>

      <label for="seattype">Seat Type:</label>
      <input type="text" name="seattype" required><br><br>

      <label for="headlight">Headlight:</label>
      <input type="text" name="headlight" required><br><br>

      <label for="vehicledescription">Vehicle Description:</label>
      <textarea name="vehicledescription" required></textarea><br><br>

    </div>
  </div>
  <input type="submit" value="Add Car" style="position: absolute;
    left: 51vw;     display: inline-block;
    font-size: 15px;
    padding: 12px 20px;
    background-color: #ed563b;
    color: #fff;
    text-align: center;
    font-weight: 400;
    text-transform: uppercase;
    transition: all .3s; 
     ">
    <br><br><br> <br><br>
</form>
<?php include("footer.php") ?>