<?php require_once '../config.php'; ?>
<?php include("header2.php"); ?>
<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action"
    style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Our <em>Cars</em></h2>
                    <p>Experience automotive excellence at its finest with our remarkable collection of meticulously crafted and exhilarating cars.</p>
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
        <div class="row">
            <?php
            $query = "SELECT * FROM cars";
            $result = mysqli_query($conn, $query);

            // Loop through the query results
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $image = $row['img'];
                $originalPrice = $row['originalprice'];
                $discountPrice = $row['discountprice'];
                $carName = $row['carname'];
                $mileage = $row['mileage'];
                $engineSize = $row['enginesize'];
                $gearbox = $row['gearbox'];
            ?>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="down-content">
                        <span>
                            <del><sup>$</sup> <?php echo $originalPrice; ?></del> &nbsp; <sup>$</sup> <?php echo $discountPrice; ?>
                        </span>

                        <h4><?php echo $carName; ?></h4>

                        <p>
                            <i class="fa fa-dashboard"></i> <?php echo $mileage; ?> &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cube"></i> <?php echo $engineSize; ?> cc &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cog"></i> <?php echo $gearbox; ?> &nbsp;&nbsp;&nbsp;
                        </p>

                        <ul class="social-icons">
                        <li><a href="car-details.php?id=<?php echo $id; ?>">+ View Car</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>

        <br>
 
    </div>
</section>
<!-- ***** Fleet Ends ***** -->
 
<?php include("footer.php"); ?>
