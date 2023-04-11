<html>
<link rel="stylesheet" href=".css">
		<link rel="stylesheet" href="C:\Users\Jeremy\Desktop\museo_sans_ssv\Museo Sans 100">

<form method="POST" action="cont.php" >
  <input type="text" name="name" placeholder="Your name">
  <input type="text" name="message" placeholder="Enter message">
  <button type="submit" name="send">Send</button>
</form>
<style>
   form {
    display: flex;
    flex-direction: column;
}
.form {
    width: 50%;
    padding: 20px;
    box-sizing: border-box;
}
input, textarea {
    padding: 5px;
    margin-top: 5px;
    border-bottom: 1px solid black;
    border-radius: 2px;
    background-color: whitesmoke;
    border-top: 0; border-left: 0; border-right: 0;
    width: 50%;
}
button {
    margin-top: 15px;
    padding: 9px;
    background-color: goldenrod;
    color: white;
    border: none;
    border-radius: 4px;
    width: 30%;
    font-size: 20px;
}
button:hover {
    background-color: white;
    color: goldenrod;
}

 html{
    font-family: garamond;
    font-size: x-large;
    background-color: whitesmoke;
 }
   </style>
</html>
<?php
// Connect to database
include ("create.php");   

if (isset($_POST['send'])) {
  // Get name and message from form and escape special characters
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $message = mysqli_real_escape_string($con, $_POST['message']);
  
  // Determine user type (admin or guest)
  if ($name == 'admin') {
    $usertype = 'admin';
  } else {
    $usertype = 'guest';
  }
  // Insert message into database
  $sql = "INSERT INTO chat (usertype, name, message) VALUES ('$usertype', '$name', '$message')";
  mysqli_query($con, $sql);
}
?>
<?php
// Connect to database
include ("create.php");   
// Get chat history from database
$five_minutes_ago = date('Y-m-d H:i:s', strtotime('-5 minutes'));
$sql = "SELECT * FROM chat WHERE timestamp > '$five_minutes_ago' ORDER BY id ASC";
$result = mysqli_query($con, $sql);
// Display chat history
while ($row = mysqli_fetch_assoc($result)) {
  if ($row['usertype'] == 'admin') {
    echo "<p><strong>Admin:</strong> " . $row['message'] . "</p>";
  } else {
    echo "<p><strong>" . $row['name'] . ":</strong> " . $row['message'] . "</p>";
  }
}
?>
<script>
setInterval(function() {
  // Get chat history from server
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'cont.php', true);
  xhr.send();

  // Update chat history on page
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      document.getElementById('cont').innerHTML = xhr.responseText;
    }
  }
}, 3000); 
</script>

