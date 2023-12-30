<?php
require_once '../config.php';
include("header.php");

// Retrieve the car ID from the query parameter
$carId = $_GET['id'];

// Fetch car details from the database using $carId
$query = "SELECT * FROM cars WHERE id = $carId";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Display the car details
?>
<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(<?php echo $row['img']; ?>)">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="cta-content">
          <br>
          <br>
          <h2><small><del>$
                <?php echo $row['discountprice']; ?>
              </del></small> <em>$
              <?php echo $row['originalprice']; ?>
            </em></h2>
          <p>
            <?php echo $row['carname']; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
  <div class="container">
    <br>
    <br>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo $row['img']; ?>" height="500px" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $row['img1']; ?>" height="500px" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $row['img2']; ?>" height="500px" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <br>
    <br>

    <div class="row" id="tabs">
      <div class="col-lg-4">
        <ul>
          <li><a href='#tabs-1'><i class="fa fa-cog"></i> Vehicle Specs</a></li>
          <li><a href='#tabs-2'><i class="fa fa-info-circle"></i> Vehicle Description</a></li>
          <li><a href='#tabs-3'><i class="fa fa-plus-circle"></i> Vehicle Extras</a></li>
        </ul>
      </div>
      <div class="col-lg-8">
        <section class='tabs-content' style="width: 100%;">
          <article id='tabs-1'>
            <h4>Vehicle Specs</h4>

            <div class="row">
              <div class="col-sm-6">
                <label>Type</label>

                <p>
                  <?php echo $row['type']; ?>
                </p>
              </div>

              <div class="col-sm-6">
                <label>Make</label>

                <p>
                  <?php echo $row['companyname']; ?>
                </p>
              </div>

              <div class="col-sm-6">
                <label> Model</label>

                <p>
                  <?php echo $row['model']; ?>
                </p>
              </div>


              <div class="col-sm-6">
                <label>Mileage</label>

                <p>
                  <?php echo $row['mileage']; ?>
                </p>
              </div>

              <div class="col-sm-6">
                <label>Fuel</label>

                <p>
                  <?php echo $row['fueltype']; ?>
                </p>
              </div>

              <div class="col-sm-6">
                <label>Engine size</label>

                <p>
                  <?php echo $row['enginesize']; ?> cc
                </p>
              </div>



              <div class="col-sm-6">
                <label>Gearbox</label>

                <p>
                  <?php echo $row['gearbox']; ?>
                </p>
              </div>

              <div class="col-sm-6">
                <label>Number of seats</label>

                <p>
                  <?php echo $row['numberofseats']; ?>
                </p>
              </div>

              <div class="col-sm-6">
                <label>Doors</label>

                <p>
                  <?php echo $row['doors']; ?>
                </p>
              </div>

              <div class="col-sm-6">
                <label>Color</label>

                <p>
                  <?php echo $row['color']; ?>
                </p>
              </div>
            </div>
          </article>
          <article id='tabs-2'>
            <h4>Vehicle Description</h4>

            <p>
              <?php echo $row['vehiclediscription']; ?>
            </p>
          </article>
          <article id='tabs-3'>
            <h4>Vehicle Extras</h4>

            <div class="row">
              <div class="col-sm-6">
                <p>Break Type:
                  <?php echo $row['breaktype']; ?>
                </p>
              </div>
              <div class="col-sm-6">
                <p>Seat Type:
                  <?php echo $row['seattype']; ?>
                </p>
              </div>
              <div class="col-sm-6">
                <p>Steering Type:
                  <?php echo $row['steeringtype']; ?>
                </p>
              </div>
              <div class="col-sm-6">
                <p>Headlight type:
                  <?php echo $row['headlight']; ?>
                </p>
              </div>
              <div class="col-sm-6">
                <p>Power :
                  <?php echo $row['power']; ?> HP
                </p>
              </div>
            </div>
          </article>

        </section>
      </div>
    </div>
    <div class="main-button"></div>
    <a class="btnn" href="book_car.php?id=<?php echo $row['id']; ?>" style="position:absolute; left:49%;">BOOK NOW</a>
  </div>
</section>
<!-- ***** Fleet Ends ***** -->
<?php include("footer.php"); ?>