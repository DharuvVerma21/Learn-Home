<?php
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "learnathome";
    $name_error = '';
    $designation_error = '';
    $email_error = '';
    $success = 'Thank you for your response.';
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)){
        $name_error = 'Only letters and white spaces are allowed in Name section.';
    }
    if (!preg_match("/^[a-zA-Z-' ]*$/", $designation)){
        $designation_error = 'Only letters and white spaces are allowed in Designation section.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error = 'Invalid Email address.';
    }

    $conn = new mysqli($servername, $username, $password, $dbname);
    // if ($conn->connect_error){
        //     die("Connection failed: " . $conn->connect_error);
        // }
        // echo "Connected Successfully <br>";
    $select = mysqli_query($conn, "SELECT email FROM testimonials WHERE email = '".$email."'");
    if(mysqli_num_rows($select)) {
        $email_error = 'One Email can give review only once.';
    }
    if ($name_error == '' && $designation_error == '' && $email_error == ''){
        $sql = "INSERT INTO testimonials (`name`, `designation`, `email`, `message`) VALUES ('$name', '$designation', '$email', '$message')";
        if ($conn->query($sql) === TRUE){
            echo '<div class="my_class">';
            echo "<h2>" . $success . "</h2>";
            echo '</div>';
        }
    }
    else{
        if ($name_error != ''){
            echo '<div class="my_class">';
            echo '<div class="error">';
            echo "ERROR!";
            echo "<br>";
            echo "<br>";
            echo '</div>';
            echo "<h2>" . $name_error . "</h2>";
            echo '</div>';
        }
        else{
            if ($designation_error != ''){
                echo '<div class="my_class">';
                echo '<div class="error">';
                echo "ERROR!";
                echo "<br>";
                echo "<br>";
                echo '</div>';
                echo "<h2>" . $designation_error . "</h2>";
                echo '</div>';
            }
            else{
                echo '<div class="my_class">';
                echo '<div class="error">';
                echo "ERROR!";
                echo "<br>";
                echo "<br>";
                echo '</div>';
                echo "<h2>" . $email_error . "</h2>";
                echo '</div>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn@Home</title>
    <link rel="icon" type="image/png" href="../images/icon.png">
    <link rel="stylesheet" type="text/css"  href="../css/submit.css">
</head>
<body>
</body>
</html>
    