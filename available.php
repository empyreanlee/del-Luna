<!-- View Available Rooms Button -->
<button class="modal-btn">View Available Rooms</button>

<!-- Modal -->
<div class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2 >Available Rooms</h2>
    <table>
      <thead>
        <tr>
            <div class="ten">
          <th width="10%;">Room Type</th>
          <th>Price per night</th>
          <th> Rooms Available</th>
</div>
        </tr>
      </thead>
      <tbody>
        <?php
      $servername = "localhost: 3306";
      $username = "root";
      $password = "";
      $dbname = "hotel";
      
      $con = mysqli_connect($servername, $username, $password, $dbname);
      
      if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
      }
          
// Select all rooms from the database
$sql = "SELECT  roomtype, price, availablerooms FROM room";
$result = mysqli_query($con, $sql);

// Display the rooms in a table

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row["roomtype"]."</td>";
    echo "<td>".$row["price"]."</td>";
    echo "<td>".$row["availablerooms"]."</td>";
    echo "</tr>";
}

          // close database connection
          mysqli_close($con);
        ?>
      </tbody>
    </table>
  </div>
</div>
<style>
/* Modal Styles */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
  max-width: 800px;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
h2{
    font-family: garamond;
    font-size: x-large;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
    </style>
    <script>
        // Get the modal
var modal = document.querySelector('.modal');

// Get the button that opens the modal
var btn = document.querySelector('.modal-btn');

// Get the <span> element that closes the modal
var span = document.querySelector('.close');

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

        </script>