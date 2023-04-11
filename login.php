<?php
include ("create.php");   
$email =$_POST['email'];
$sql=("INSERT INTO news (email) VALUES('$email')");
 if(mysqli_query($con,$sql))
{
echo '<script> alert("Thank You ");</script>';
}
mysqli_close($con);
?>