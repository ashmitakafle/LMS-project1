<?php
include "navbar.php";
include "connection.php";
?>
<!DOCTYPE html>
<html>
  <head>  
    <title>Books</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
     <!------------------------Using Bootstrap-------------------------------------------------------------------->  
 <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
      body {
        font-family: "Lato", sans-serif;
        background-color:#0d2628; 
        height:1200px;
  
      }


      .name{
        color:white;
        margin-left:20px;
       
      }
      .siden{
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
      }
      

      .siden:hover{
        background-color:#088b34;
      }

      .student__container{
        margin-left:1200px;
      }
      .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        margin-top:70px;
        background-color:black;
      }

      .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }

      .sidenav a:hover {
        color: #f1f1f1;
      }

      .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
      }

      #main {
        transition: margin-left 0.5s;
        padding: 16px;
      }

      @media screen and (max-height: 450px) {
        .sidenav {
          padding-top: 15px;
        }
        .sidenav a {
          font-size: 18px;
        }
      }
    </style>
  </head>
  <body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
        >&times;</a
      >

      <?php
      if(isset($_SESSION['login_username'])){
        
        echo "<img style='height:150px;width:150px;border-radius:50%;padding:5px;margin-left:20px;' src='images/".$_SESSION['image']."'>";
        ?>
        <div class="name">
          <?php
         echo "Welcome ".$_SESSION['login_username'];
         ?>
         </div>
         <br>
        
         <div class="siden"><a href="profile.php">My Profile</a></div>
        <div class="siden"><a href="addbook.php">Add Books</a></div>
        <div class="siden"><a href="deletebook.php">Delete Books</a></div>
        <div class="siden"><a href="bookrequest.php">Book Request</a></div>
        <div class="siden"><a href="issue.php">Issue Information</a></div>
        <div class="siden"><a href="expired.php">Expired List</a></div>
        <div class="siden"><a href="fine.php">Fines</a></div>
         
         <?php
       
      }

      else{
        ?>
        
      <div class="siden"><a href="profile.php">My Profile</a></div>
     <div class="siden"><a href="addbook.php">Add Books</a></div>
     <div class="siden"><a href="deletebook.php">Delete Books</a></div>
     <div class="siden"><a href="bookrequest.php">Book Request</a></div>
     <div class="siden"><a href="issue.php">Issue Information</a></div>
     <div class="siden"><a href="expired.php">Expired List</a></div>
     <div class="siden"><a href="fine.php">Fines</a></div>
    
        <?php
      }

      ?>
    </div>

    <div id="main">
      <span style="font-size: 30px; cursor: pointer;color:white;" onclick="openNav()"
        >&#9776;
      </span>
    

    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }
    </script>

    <h2 style="text-align:center;color:white;margin-top:150px;">Fines Collection</h2>

    <?php

        if($_SESSION['login_username'])
        {
        
            $sql="SELECT * FROM `fines` ORDER BY `fines`.`returned` DESC";
            $res=mysqli_query($conn,$sql);

            
                echo "<table class='table table-bordered table-hover' style='width:99%;'>";
                echo "<tr style='background-color:#6db6b9e6'>";
                echo "<th>"; echo "Username"; echo "</th>";
                echo "<th>"; echo "Book ID"; echo "</th>";
                echo "<th>"; echo "Returned Date"; echo "</th>";
                echo "<th>"; echo "Expired Date"; echo "</th>";
                echo "<th>"; echo "Status"; echo "</th>";
                echo "<th>"; echo "Days"; echo "</th>";
                echo "<th>"; echo "Fine in Rs."; echo "</th>";
              
            
                echo "</tr>";
               while($row=mysqli_fetch_assoc($res)){
                echo "<tr style='color:white;'>";
                echo "<td>"; echo $row['username']; echo "</td>";
                echo "<td>"; echo $row['bid']; echo "</td>";
                echo "<td>"; echo $row['returned']; echo "</td>";
                echo "<td>"; echo $row['expired']; echo "</td>";
                echo "<td>"; echo $row['status']; echo "</td>";
                echo "<td>"; echo $row['day']; echo "</td>";
                echo "<td>"; echo $row['fine']; echo "</td>";
          
            
                echo "</tr>";
            
               }
            
                echo "</table>";
               
            }
        
      



        
    ?>

 
</div>
  </body>
</html>
