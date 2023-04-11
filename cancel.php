
<?php
/*include ("create.php"); */
$con = "";
	$host = "localhost: 3306";
	$username = "root";
	$password = "";
		$db_name = "hotel";
    $con = mysqli_connect($host, $username, $password, $db_name);  
    if(mysqli_connect_errno()) { 
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
}   
// Retrieve the booking ID from the form data
$confirmation = $_POST['confirmation'];
// Query the database to check if the booking exists
$sql = "SELECT * FROM reservation WHERE confirmation = '$confirmation'";
$result = mysqli_query($con, $sql);
if (!$result) {
    die("Error: " . mysqli_error($con));
  }
if(mysqli_num_rows($result) > 0) {
  // The booking exists, so delete it from the database
  $sql = "DELETE FROM reservation WHERE confirmation = '$confirmation'";
  mysqli_query($con, $sql);
  echo "Your booking has been cancelled.";
} else {
  // The booking does not exist
  echo "";
}
// Close the database connection
mysqli_close($con);
?>
