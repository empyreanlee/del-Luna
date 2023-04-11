<html>
<button class="modal-btn">Cancel reservation</button>

<link rel="stylesheet" href="C:\Users\Jeremy\Desktop\museo_sans_ssv\Museo Sans 100">
<div class="modal">
<div class="modal-content">
<span class="close">&times;</span>
<form method="POST" action="cancel.php">
  <label for="confirmation">Booking ID:</label>
  <input type="text" id="confirmation" name="confirmation" required>
  <button type="submit" name="cancel_booking">Cancel Booking</button>
</form>
</div>
</div>
<style>
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
.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
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
</html>