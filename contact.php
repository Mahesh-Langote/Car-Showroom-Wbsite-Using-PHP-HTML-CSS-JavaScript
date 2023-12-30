<?php include("header.php"); ?>
<section class="section section-bg" id="call-to-action"
  style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="cta-content">
          <br>
          <br>
          <h2>Feel free to <em>Contact Us</em></h2>
          <p>Feel free to reach out to us with any inquiries or questions; we are here to assist you every step of the way</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ***** Features Item Start ***** -->
<section class="section" id="features">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h2>contact <em> info</em></h2>
          <img src="assets/images/line-dec.png" alt="waves">

        </div>
      </div>

      <div class="col-md-4">
        <div class="icon">
          <i class="fa fa-phone"></i>
        </div>

        <h5><a href="#">+91 9284608914</a></h5>

        <br>
      </div>

      <div class="col-md-4">
        <div class="icon">
          <i class="fa fa-envelope"></i>
        </div>

        <h5><a href="#">vishu@gmail.com</a></h5>

        <br>
      </div>

      <div class="col-md-4">
        <div class="icon">
          <i class="fa fa-map-marker"></i>
        </div>

        <h5>Near Zeal College Chouk 411435</h5>

        <br>
      </div>
    </div>
  </div>
</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us" style="margin-top: 0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12">
        <div id="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.8163841741616!2d73.82443261489165!3d18.446644187452126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc29524cd3feef7%3A0x9cfbbf5b761877da!2sZeal%20College%20Chowk!5e0!3m2!1sen!2sin!4v1685289612084!5m2!1sen!2sin"
            width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
 

      </div>
      <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="contact-form section-bg" style="background-image: url(assets/images/contact-1-720x480.jpg)">
          <form id="contact" action="save_contact.php" method="post">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <fieldset>
                  <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                </fieldset>
              </div>
              <div class="col-md-6 col-sm-12">
                <fieldset>
                  <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*"
                    required="">
                </fieldset>
              </div>
              <div class="col-md-12 col-sm-12">
                <fieldset>
                  <input name="subject" type="text" id="subject" placeholder="Subject">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
    function showMessage(messagee) {
      alert("We will Contact Soon");
    }
  </script>

<!-- ***** Contact Us Area Ends ***** -->
<?php include("footer.php"); ?>