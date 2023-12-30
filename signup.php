<?php
session_start();

require_once 'config.php';

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: index1.php');
    exit();
}

// Define variables to store user input
$name = '';
$username = '';
$password = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted values
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform any necessary input validation

    // Check if the username already exists
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $signupError = 'Username already exists!';
    } else {
        // Insert the new user into the user table
        $insertQuery = "INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password')";
        $insertResult = $conn->query($insertQuery);

        if ($insertResult) {
            // Signup successful
            $_SESSION['name'] = $name;
            header('Location: index1.php');
            exit();

        } else {
            // Signup failed
            $signupError = 'Signup failed. Please try again.';
        }
    }
}
?>
<?php include("header2.php") ?>
<!-- ***** Main Banner Area Start ***** -->
<style>
body {
  font-family: sans-serif;
  background-color: #fff;
}
 
.form-group {
  margin-bottom: 10px;
}

.input-field {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.btnn {
  background-color: #04AA6D;
  color: white;
  font-size: 16px;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

.btn:hover {
  background-color: #009753;
}

.forgot-password {
  text-align: right;
}
</style>
<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <form method="POST" action="" style="display: grid;
    width: 273px; color: white;">
                <div class="form-group">
                    <label for="username">Name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" required class="input-field">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" required class="input-field">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required class="input-field">
                    <button type="button" id="show-password"
                        onclick="togglePasswordVisibility('password', 'show-password')">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <input type="submit" class="btnn" value="Sign Up">
                <a href="login.php" class="forgot-password">Log In</a>

 

            </form>
        </div>
    </div>
    </section>
    <script>
        function togglePasswordVisibility(inputId, buttonId) {
            var passwordInput = document.getElementById(inputId);
            var showPasswordButton = document.getElementById(buttonId);

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                showPasswordButton.innerHTML = '<i class="fas fa-eye-slash" style="background:none;"></i>';
            } else {
                passwordInput.type = "password";
                showPasswordButton.innerHTML = '<i class="fas fa-eye" style="background:none;"></i>';
            }
        }
    </script>
    <!-- ***** Testimonials Item End ***** -->
    <?php include("footer.php") ?>