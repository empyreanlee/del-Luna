                   <img src="h/mainn.jpg" width="1800" height="300"   alt="" />
<style> 
body{
  background-color: whitesmoke;
  font-family: garamond;
}
p1{
  font-size: 26px;
  color: goldenrod;
  font-weight: bolder;
}
p{
  font-size: 20px; 
}
p2{
  font-size: 18.5px ;
}
div.gallery img {
  width: 100%;
  height: auto;
}
div.desc {
  padding: 15px;
  font-size: larger;
  height:300px;
  padding-bottom: 20px;
  background-color: white;
}
* {
  box-sizing: border-box;
}
.responsive {
  padding: 0 10px;
  padding-bottom:  15px;
  float: left;
  width: 33%;
  border-sizing: content-box;

}

@media only screen and (max-width: 1000px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 768px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
h2{
  text-align: center;
  color: goldenrod;
  font-size: 52px;
}

</style>
</head>
<body>

<h2>ROOMS $ SUITES</h2>

<p style="text-align: center; font-size: xx-large;"> Featuring a pleasant blend of functionality, modern feel and elegance, the decor and furnishings create an inviting ambience <br>fostering relaxation and a great sense of well-being from the moment you check in.With a the diverse blend of rooms options,<br> you will definitely find that ideal accommodation option that suites your taste and budget.</p>
<div class="but">
<button class="modal-btn">View Available Rooms</button>
</div>
<!-- Modal -->
<div class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2 >Available Rooms</h2>
    <table>
      <thead>
        <tr>
            <div class="ten">
          <th>Room Type</th>
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
table{
  border-collapse: collapse;
  display: inline-block;
  justify-content: center;
  align-items: center;  
  font-size: larger;
  margin-left: 5rem;
}
button{
  background-color: goldenrod;
  color: white;
  font-size: larger;
}
.but{
  height: 40px;
  text-align: center;
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
.modal-content h2{
    font-family: garamond;
    font-size: 35px;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
    </style>
    <script>
var modal = document.querySelector('.modal');
var btn = document.querySelector('.modal-btn');
var span = document.querySelector('.close');
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
        </script>

<div class="responsive">
  <div class="gallery">
    
      <img src="h/1.jpg" alt="Cinque Terre" width="800" height="600">
  
    <div class="desc">

         <p1>Royal Suite</p1>  <br><br>
         <p2>4 Pax<br>
Offer Rates From KShs 30,500/= (Bed & Breakfast)</p2>        
        <p>Hotel del Luna is the perfect location for families seeking a serene and family-oriented adventure destination. To make sure we deliver to all the discerning families that come to the resort, we have special interconnecting rooms specifically meant for families.</p>
    </div>
  </div>
</div>



<div class="responsive">
  <div class="gallery">
    
      <img src="h/1.jpg" alt="Cinque Terre" width="800" height="600">
  
    <div class="desc">
        <p1>Family Interconnecting Room</p1><br><br>
       <p2> Max 4 Pax (Adults & Children)<br>
Offer Rates From KShs 13,000/= (Bed & Breakfast)</p2>
        <p>Hotel del Luna is the perfect location for families seeking a serene and family-oriented adventure destination. To make sure we deliver to all the discerning families that come to the resort, we have special interconnecting rooms specifically meant for families.</p>
    </div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">

      <img src="h/2.jpg" alt="Forest" width="800" height="600">
    <div class="desc">
      <p1>Family Deluxe</p1><br><br>
      <p2>Max 3 Pax (Adults & Children)<br>
Offer Rates From KSh. 20,000/= (Bed & Breakfast)</p2>
      <p>The Family Deluxe room at FK Resort & Spa has a capacity of two. The interior wall design includes superior wooden cladding and an oversized mirror for that exquisite overall effect.</p>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  
      <img src="h/3.jpg" alt="Northern Lights" width="800" height="600">

    <div class="desc">
      <p1>Superior Twin</p1><br><br>
      <p2>Max 2 Pax (Adults & Children)<br>
Offer Rates From KShs 8,500/= (Bed & Breakfast)</p2>
        <p>The superior twin is ideal for people who come to the resort for conference meetings or events and don’t mind sharing the same room. The rooms comes complete with parquet floors, huge balcony windows and a stunning bathroom with all bathroom amenities.</p></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">

      <img src="h/4.jpg" alt="Mountains" width="800" height="600">
    
    <div class="desc">
      <p1>Superior Room</p1><br><br>
     <p2> Max 1 Pax<br>
Offer Rates From KShs 7,500/= (Bed & Breakfast)</p2>
      <p>The superior room at Hotel del Luna is perfect for couples. The compact structure, functionality and balcony views make it ideal for the private couples who appreciate elegance and minimalism.<p>
    </div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">

      <img src="h/4.jpg" alt="Mountains" width="
      800" height="600">
  
    <div class="desc">
         <p1>Standard Room</p1><br><br>
        <p2> Max 1 Pax<br>
Offer Rates From KShs 6,000/= (Bed & Breakfast)</p2>
      <p>When you are on a budget, this may be the ideal room for you. Don't let the name “Standard” fool you though, this room still comes complete with all the amenities that will guarantee you the much needed comfort.</p></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">

      <img src="h/4.jpg" alt="Mountains" width="
      800" height="600">
  
    <div class="desc">
         <p1>Standard Twin</p1><br><br>
         <p2>Max 2 Pax (Adults & Children)<br>
Offer Rates From KShs 7,000/= (Bed & Breakfast)</p2>
      <p>For budget travellers who would like to share the same room with their friend, family or business colleagues, we’ve got you covered.The capacity for this room is 2 people.</p></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">

      <img src="h/4.jpg" alt="Mountains" width="
      800" height="600">
  
    <div class="desc">
         <p1>Executive Room</p1><br><br>
         <p2>Max 2 Pax<br>
Offer Rates From KShs 12,500/= (Bed & Breakfast)</p2>
      <p>When you are on a budget, this may be the ideal room for you. Don't let the name “Standard” fool you though, this room still comes complete with all the amenities that will guarantee you the much needed comfort.</p></div>
  </div>
</div>


<div class="clearfix"></div>
</body>