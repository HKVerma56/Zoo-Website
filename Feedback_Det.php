<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo/logo.png" type="image/icon type">
  <title>Zoo Tickets Details</title>
  <link rel="stylesheet" href="styles2.css">
  <script src="myScript.js"></script>
</head>

<body>
  <div class= topnav>
    <a id="icon" href="index.html"> <img src="logo/logo.png" height=80px> </a>
    <a  href="DashBoard.html">Dashboard</a>
    <a href="Employees.html">Employee's Details</a>
    <a href="Animals.html">Animal's Details</a>
    <a class="active" href="Tickets_S.html">Ticket Details</a>
    <a href="index.html">Log Out</a>
    </div>

    <div class= topnav2>
      <a href="Tickets_S.html">Ticket Details</a>
      <a class="active" href="Feedback_Det.html">Feedback Details</a>
      <a href="Saffari_Det.html">Saffari Details</a>
      </div>

    <div class=home id="home">
      <div style="float: left;padding:20px" width='50%'class=home1>
        <br>
        <h1 style="font-size:xxx-large;">
          Z-00</h1>
          <p style="font-size:xxx-large;">Feedback.</p>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "Z-00db";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM feedback";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Rating</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>".$row["F_id"]."</td><td>".$row["F_FName"]." ".$row["F_LName"]."</td><td>".row$["F_Rating"]"</td></tr>";
            }
            echo "</table>";
          } else {
            echo "0 results";
          }
          $conn->close();
          ?>

      </div>
      <div style="text-align: right;">
      <img src="images/ber.png"  width="50%"></div>

  </div>


      <div class="container3">
        <center>DBMS mini project by Harshit Kant Verma , Rahul Saraf And Santosh </center></div>
  </body>
  </html>
