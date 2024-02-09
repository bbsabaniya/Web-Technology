<?php
// Database configuration
$hostname = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Checking if the form is submitted for adding, updating, or deleting
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add"])) {
    } elseif (isset($_POST["update"])) {
    } elseif (isset($_POST["delete"])) {
        $id = $_POST["id"];

        // Delete record
        $sql = "DELETE FROM employees WHERE id = $id";
        mysqli_query($conn, $sql);
    }
}

// Fetching all the records
$sql = "SELECT * FROM employees";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD Application</title>
</head>
<body>

<h2>Employee Records</h2>

<!-- Form to add a new record -->
<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="salary">Salary:</label>
    <input type="text" id="salary" name="salary" required>
    <button type="submit" name="add">Add Employee</button>
</form>

<!-- Displaying records -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Salary</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['salary']; ?></td>
            <td>
                <!-- Form to update a record -->
                <form method="post" action="">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                    <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
                    <input type="hidden" name="salary" value="<?php echo $row['salary']; ?>">
                    <button type="submit" name="update">Update</button>
                </form>

                <!-- Form to delete a record -->
                <form method="post" action="">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="delete">Delete</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
