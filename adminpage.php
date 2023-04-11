<h2> Hello Admin </h2>

    <head>   
    <title>P</title>   
    <link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <style>   
    table {  
        border-collapse: collapse;  
    }  
        .inline{   
            display: inline-block;   
            float: right;   
            margin: 20px 0px;   
        }   
         
        input, button{   
            height: 34px;   
        }   
  
    .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   
        </style>   
  </head>   
  <body>   
  <center>  
  <?php  
      
      // Import the file where we defined the connection to Database.     
          require_once "create.php";   
      
          $per_page_record = 10;  // Number of entries to show in a
            // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record;     
    
        $sql = "SELECT * FROM reservation LIMIT $start_from, $per_page_record";     
        $result = mysqli_query ($con,$sql);    
    ?>    
  
    <div class="container">   
    <br>   
      <div>   
        <h1>Admin Page</h1>   
        <p>Room Bookings
        </p>   
        <table class="table table-striped table-condensed    
                                          table-bordered">   
          <thead>   
            <tr>   
              <th>id</th>   
              <th>Booking Id</th>   
              <th>Name</th>   
              <th>Email</th>  
              <th>Phone No</th>   
              <th>Check-In</th> 
              <th>Check-Out</th>   
              <th>Email</th>   
              <th>Email</th>   
              <th>Email</th>   
              <th>Email</th>   
              <th>Email</th>   
            </tr>   
          </thead>   
          <tbody>   
    <?php     
          while ($row = mysqli_fetch_array($result)) {    
            // Display each field of the records.    
      ?>     
      <tr>     
       <td><?php echo $row["id"]; ?></td>     
      <td><?php echo $row["confirmation"]; ?></td>   
      <td><?php echo $row["name"]; ?></td>   
      <td><?php echo $row["email"]; ?></td>  
      <td><?php echo $row["arrival"]; ?></td>  
      <td><?php echo $row["departure"]; ?></td>  
      <td><?php echo $row["phoneno"]; ?></td>  
      <td><?php echo $row["roomtype"]; ?></td>  
      <td><?php echo $row["request"]; ?></td>  
      <td><?php echo $row["meal"]; ?></td>  
      <td><?php echo $row["adult"]; ?></td>        
      <td><?php echo $row["child"]; ?></td>  
      </tr>     
      <?php     
          };    
      ?>     
    </tbody>   
  </table>   
  <div class="pagination">    
      <?php  
        $sql = "SELECT COUNT(*) FROM reservation";     
        $result = mysqli_query($con, $sql);     
        $row = mysqli_fetch_row($result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);    
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='adminpage.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='adminpage.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='adminpage.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
        if($page<$total_pages){   
            echo "<a href='adminpage.php?page=".($page+1)."'>  Next </a>";   
        }   
        ?>    
        </div>  
        <div class="inline">   
        <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
        placeholder="<?php echo $page."/".$total_pages; ?>" required>   
        <button onClick="go2Page();">Go</button>   
       </div>    
      </div>   
    </div>  
  </center>   
    <script>   
      function go2Page()   
      <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'adminpage.php?page='+page;   
    }   
  </script>  
  </body>   
</html>  