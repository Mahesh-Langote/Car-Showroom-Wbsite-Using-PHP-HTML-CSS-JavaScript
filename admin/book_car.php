<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Car Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        .car-info {
            display: inline-block;
            text-align: left;
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 400px;
            margin-bottom: 20px;
        }

        .car-info h2 {
            margin-top: 0;
        }

        .car-info .label {
            font-weight: bold;
        }

        .car-info .value {
            margin-top: 10px;
        }

        .button-container {
            text-align: center;
            margin-bottom: 50px;
        }

        .convert-button {
            display: inline-block;
            font-size: 15px;
            padding: 12px 20px;
            background-color: #ed563b;
            color: #fff;
            text-align: center;
            font-weight: 400;
            text-transform: uppercase;
            transition: all .3s;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Booking Car Details</h1>
        <?php
        // Database connection
        session_start();

        // Check if the user is not logged in
        if (!isset($_SESSION['username'])) {
            header('Location: login.php');
            exit();
        }

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
                ?>
                <form action="book.php" method="post">
                    <div class="car-info">
                        <h2>Car Information</h2>
                        <div class="parent">


                            <div class="label">ID:</div>
                            <div class="value">
                                <input type="text" value="<?php echo $user['id']; ?>" name="carid" readonly>

                            </div>
                        </div>
                        <div class="parent">
                            <div class="label">UserName:</div>
                            <div class="value">
                                <input type="text" value=" <?php echo $_SESSION['username']; ?>" name="username" readonly>

                            </div>
                        </div>
                        <div class="parent">

                            <div class="label">Name:</div>
                            <div class="value">
                                <?php echo $user['carname']; ?>
                            </div>
                        </div>
                        <div class="parent">
                            <div class="label">Price:</div>
                            <div class="value">
                                <?php echo $user['discountprice']; ?>
                            </div>
                        </div>
                        <div class="parent">
                            <div class="label">Company Name:</div>
                            <div class="value">
                                <?php echo $user['companyname']; ?>
                            </div>
                        </div>
                        <div class="parent">
                            <div class="label">Model:</div>
                            <div class="value">
                                <?php echo $user['model']; ?>
                            </div>
                        </div>
                        <div class="parent">
                            <div class="label">Fuel Type:</div>
                            <div class="value">
                                <?php echo $user['fueltype']; ?>
                            </div>
                        </div>
                        <div class="parent">
                            <div class="label">Engine Size:</div>
                            <div class="value">
                                <?php echo $user['enginesize']; ?>
                            </div>
                        </div>
                    </div> 
                    <div class="button-container">
                        <input type="submit" class="convert-button" value="CONFIRM BOOK" onclick="convertToPDF()">
                        <!-- onclick="convertToPDF()" -->
                    </div>
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
        ?>
    </div>

    <script>
        function convertToPDF() {
            // Open a new window
            var printWindow = window.open('', '', 'width=800,height=600');

            // Load the webpage into the new window
            printWindow.document.open();
            printWindow.document.write('<html><head><title>PDF Conversion</title></head><body>' + document.documentElement.innerHTML + '</body></html>');
            printWindow.document.close();

            // Wait for the window to finish loading
            printWindow.onload = function () {
                // Trigger the print functionality
                printWindow.print();
            };
        }
    </script>
</body>

</html>