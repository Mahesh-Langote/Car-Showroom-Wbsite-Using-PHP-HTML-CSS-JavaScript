<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: logout.php');
    exit();
}

// Define variables to store user input
$username = '';
$password = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted values
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin") {
        // Login successful
        $_SESSION['username'] = $username;
        header('Location: index1.php');
        exit();
    } else {
        // Login failed
        $loginError = 'Invalid username or password!';
    }
}
?>

<?php include("adminheder1.php") ?>
<!-- ***** Header Area End ***** -->
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

    input {
        background-color: white;
        color: black;
        text-transform: none;
    }

    .btnn {
        background-color: #04AA6D;
        color: white;
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .caption {
        border: 2px solid black;
        width: 100px;
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
        <div class="caption" style="width:350px; align-items: center;">
            <form method="POST" action="" style="display: grid;
    width: 273px; color: white; margin: 36px;">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username"
                        style="background-color: white; color: black; text-transform: none;" required
                        class="input-field">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"
                        style="background-color: white; color: black; text-transform: none;" required
                        class="input-field">
                    <button type="button" id="show-password"
                        onclick="togglePasswordVisibility('password', 'show-password')">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <input class="btnn" type="submit" value="Login" class="btnn" style="
  left: 30%;
  position: absolute;
  bottom: 0;
  margin-bottom: 5px;">
            </form>
        </div>
    </div>

</div>

</section>
<script>
    function togglePasswordVisibility(inputId, buttonId) {
        var passwordInput = document.getElementById(inputId);
        var showPasswordButton = document.getElementById(buttonId);

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
        } else {
            passwordInput.type = "password";
            showPasswordButton.innerHTML = '<i class="fas fa-eye"></i>';
        }
    }
</script>
<!-- ***** Testimonials Item End ***** -->
<?php include("footer.php") ?>