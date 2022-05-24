<?php
include 'conn.php';
if(isset($_POST['done']))
{
$D_Name=$_POST['D_Name'];
$D_phone=$_POST['D_phone'];
$D_gender=$_POST['D_gender'];
$D_amount=$_POST['D_amount'];
$q="INSERT INTO `donation`(`D_name`, `D_phone`, `D_gender`, `D_amount`) VALUES ('$D_Name','$D_phone','$D_gender','$D_amount');";
mysqli_query($con,$q);
header('Location:Donation.html');
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo/logo.png" type="image/icon type">
  <title>Zoo</title>
  <link rel="stylesheet" href="styles2.css">
  <script src="myScript.js"></script>
  <style>
    #Book {
       background:#f4da01;
       color:black;
       border:1pxsolid#eee;
       border-radius:20px;
       box-shadow:5px5px5px#eee;
       text-shadow:none;
       padding: 20px 20px 20px 20px;
       font-size:x-large;
    }
    #Book:hover {
       background:black;
       color:white;
       border:1pxsolid#eee;
       border-radius:20px;
       box-shadow:5px5px5px#000000;
       text-shadow:none;
       padding:  20px 20px 20px 20px;
       font-size:x-large;
    }

    #box{
      font-family: inherit;
      width: 100%;
      border: 0;
      border-bottom: 2px solid black;
      outline: 0;
      font-size: 1.3rem;
      color: $white;
      padding: 7px 0;
      background: transparent;
      transition: border-color 0.2s;
    }


  </style>
</head>

<body>
  <div class= topnav>
    <a id="icon" href="index.html"> <img src="logo/logo.png" height=80px> </a>

    <a  href="Donation.html">GO Back</a>

    </div>



    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>

        <h1 style="font-size:xxx-large;">
          Z-00 Donation</h1>
          <p style="font-size:x-large;">Entry Form</p>
          <form method="post">
            <label class="D_Name">Doner's Name</label>
            <input class="D_Name" id="box"type="text" name="D_Name"><br><br>
            <label class="D_phone">Phone Number</label>
            <input class="D_phone"  id="box"type="text" name="D_phone"><br><br>
            <label class="D_gender">Gender</label>
            <input class="D_gender"  id="box"type="text" name="D_gender"><br><br>
            <label class="D_amount">Donation Amount</label>
            <input class="D_amount"  id="box"type="number" name="D_amount"><br><br>
            <button class="btn btn-success"  id="Book" type="submit" name="done">Submit</button>

            </form>


      </div>
      <div style="text-align: right;">
      <img src="images/wol.png"  width="50%"></div>

  </div>


      <div class="container3">
        <center>DBMS mini project by Harshit Kant Verma , Rahul Saraf And Santosh </center></div>
  </body>
  </html>
