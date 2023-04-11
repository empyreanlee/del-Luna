
<?php

$con = "";


	$host = "localhost: 3306";
	$username = "root";
	$password = "";

		$db_name = "hotel";

    $con = mysqli_connect($host, $username, $password, $db_name);  
    if(mysqli_connect_errno()) { 
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 
    $roomtype=$_POST['roomtype'];
        $meal =$_POST['meal'];
        $arrival = $_POST['arrival'];
        $departure = $_POST['departure'];
        $adult = $_POST['adult'];
        $child = $_POST['child'];
        $name = $_POST['name'];
        $phoneno = $_POST['phoneno'];
        $email = $_POST['email'];
        $request = $_POST['request'];
        do{
            $confirmation = rand(100000, 999999);
            $sql = "SELECT * FROM reservation WHERE confirmation = $confirmation";
            $result = mysqli_query($con, $sql);
        } while (mysqli_num_rows($result) > 0);
       
            $sql=("INSERT INTO reservation (roomtype, meal,arrival, departure, adult, child ,name, phoneno,email, request,confirmation)/* confirmation, room_no, status,*/  VALUES (?,?,?,?,?,?,?,?,?,?,?)");    
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "sssssssissi", $roomtype, $meal, $arrival, $departure, $adult, $child, $name, $phoneno, $email, $request, $confirmation);
(mysqli_stmt_execute($stmt));

$sql = "UPDATE room SET availablerooms = availablerooms - 1 WHERE roomtype = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "s", $roomtype);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_execute($stmt))
{    // Display the booking details to the user
    echo "<p>Booking ID: " . $confirmation . "</p>";
    echo "<p>Name          : " . $name . "</p>";
    echo "<p>Email         : " . $email . "</p>";
    echo "<p>Phone no      : " . $phoneno . "</p>";
    echo "<p>Check-in Date : " . $arrival . "</p>";
    echo "<p>Check-out Date: " . $departure . "</p>";
    echo "<p>Room Type     : " . $roomtype . "</p>";
    echo  "<p></p>";
    echo   "<p> Thank You</p>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_stmt_error($stmt);
}
/*mysqli_stmt_close($stmt);*/      
mysqli_close($con);
            ?>                                                         
            