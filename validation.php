<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server side form validation</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="number">Number:</label>
        <input type="number" id="number" name="number"><br><br>
        <input type="submit" value = "Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        // Name should be at least 3 characters long and no longer than 20
        $check = preg_match('/^[a-zA-Z]{3,19}+$/',$name);
        if(!$check){
            echo "<p style='color:red'>Invalid name! Only letters between 2 and 20 are allowed.</p>";
        }
        //Email verification
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:red'>Invalid email address format! Please enter a valid email.</p>";
        }
        //Number verification
        if(empty($number) || !is_numeric($number)){
            echo "<p style='color:red'>Number must not be empty and it must be numeric</p>";
        }
        elseif(!preg_match('/^\d{10}$/', $number)){
            echo "<p style='color:red'>Number must be of 10 digits.</p>";
        }
    }
    ?>
</body>
</html>