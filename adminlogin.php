<!DOCTYPE html>

<html>

<style>

   

    /*assign full width inputs*/

    input[type=text],

    input[type=password] {

        width: 100%;

        padding: 12px 20px;

        margin: 8px 0;

        display: inline-block;

        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    button {
        background-color: darkgoldenrod;
        color: white;
        padding: 17px 23px;
        font-family:garamond;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        font-size:x-large;
        margin-right: 7px;
    }
    .butt{
        display: flex;
        justify-content: center;
        align-items:center;
        margin-top: 6cm;
    }
    h2{
        font-size: 35px;
        text-align:center;
    }

   

    /* set a hover effect for the button*/

    button:hover {

        opacity: 0.8;

    }

   

    /*set extra style for the cancel button*/

    .cancelbtn {

        width: auto;

        padding: 10px 18px;

        background-color: #f44336;

    }

   

    /*centre the display image inside the container*/

    .imgcontainer {

        text-align: center;

        margin: 24px 0 12px 0;

        position: relative;

    }

   

    /*set image properties*/

    img.avatar {

        width: 40%;

        border-radius: 50%;

    }

   

    /*set padding to the container*/

    .container {

        padding: 16px;

    }

     

    /*set the forgot password text*/

    span.psw {

        float: right;

        padding-top: 16px;

    }

   

    /*set the Modal background*/

    .modal {

        display: none;

        position: fixed;

        z-index: 1;

        left: 0;

        top: 0;

        width: 100%;

        height: 100%;

        overflow: auto;

        background-color: rgb(0, 0, 0);

        background-color: rgba(0, 0, 0, 0.4);

        padding-top: 60px;

    }

   

    /*style the model content box*/

    .modal-content {

        background-color: #fefefe;

        margin: 5% auto 15% auto;

        border: 1px solid #888;

        width: 80%;

    }

   

    /*style the close button*/

    .close {

        position: absolute;

        right: 25px;

        top: 0;

        color: #000;

        font-size: 35px;

        font-weight: bold;

    }

     

    .close:hover,

    .close:focus {

        color: red;

        cursor: pointer;

    }

   

    /* add zoom animation*/

    .animate {

        -webkit-animation: animatezoom 0.6s;

        animation: animatezoom 0.6s

    }

     

    @-webkit-keyframes animatezoom {

        from {

            -webkit-transform: scale(0)

        }

        to {

            -webkit-transform: scale(1)

        }

    }

     

    @keyframes animatezoom {

        from {

            transform: scale(0)

        }

        to {

            transform: scale(1)

        }

    }

     

    @media screen and (max-width: 300px) {

        span.psw {

            display: block;

            float: none;

        }

        .cancelbtn {

            width: 100%;

        }

    }

</style>
 

<body>
 

    <h2  > LOGIN  </h2>

    <!--Step 1 : Adding HTML-->
<div class="butt">
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; ">Admin Login</button>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; "> Login</button>
</div>
<div class="butt">
</div>

    <div id="id01" class="modal">
 
<div class="modal-content animate">
        <form action="validate.php" method="post">

            <div class="imgcontainer">

                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>

                <img src="h/deluna.png" style="width: 30%;" alt="Avatar" class="avatar">

            </div>
 

            <div class="container">

                <label><b>Username</b></label>

                <input type="text" placeholder="Enter Username" name="username" required>
 

                <label><b>Password</b></label>

                <input type="password" placeholder="Enter Password" name="password" required>
 

                <button type="submit">Login</button>

                <input type="checkbox" checked="checked"> Remember me

            </div>
 

            <div class="container" style="background-color:#f1f1f1">

                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

                <span class="psw">Forgot <a href="#">password?</a></span>

            </div>

        </form>

    </div>
 

    <script>

        var modal = document.getElementById('id01');

        window.onclick = function(event) {

            if (event.target == modal) {

                modal.style.display = "none";

            }

        }

    </script>
</div>

</body>
 

</html>