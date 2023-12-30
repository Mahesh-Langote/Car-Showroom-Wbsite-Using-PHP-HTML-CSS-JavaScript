<?php
// Database connection
require_once '../config.php';
include("adminheader.php");
// Fetch user data from the database
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);
?>
<br><br><br><br>
<style>
   
    .user-table {
        margin-top: 10vh;
        width: 100%;
        border-collapse: collapse;
    }

    .user-table th,
    .user-table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ccc;
    }

    .user-table th {
        background-color: #f2f2f2;
    }

    .user-table tr:hover {
        background-color: #f9f9f9;
    }

    .user-actions {
        display: flex;
        gap: 5px;
    }

    .user-actions a {
        color: black;
        border: 2px solid black;
        /* margin: 14px; */
        padding: 9px;
    }

    .user-actions a:hover {
        color: red;
        border: 2px solid black;
        /* margin: 14px; */
        padding: 9px;
    }
</style>
<!-- Display user data on the webpage -->
<table class="user-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td>
                    <?php echo $row['id']; ?>
                </td>
                <td>
                    <?php echo $row['name']; ?>
                </td>
                <td>
                    <?php echo $row['email']; ?>
                </td>

                <td>
                    <?php echo $row['subject']; ?>
                </td>

                <td>
                    <?php echo $row['message']; ?>
                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
// Close database connection
$conn->close();
include("footer.php");
?>