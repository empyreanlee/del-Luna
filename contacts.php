<?php
$servername = "localhost: 3306";
$username = "root";
$password = "";
$dbname = "hotel";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$subject = mysqli_real_escape_string($con, $_POST['subject']);
$message = mysqli_real_escape_string($con, $_POST['message']);

$sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if (mysqli_query($con, $sql)) {
       echo '<script> alert("Thank You ");</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>