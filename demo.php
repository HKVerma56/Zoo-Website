<?php
include 'conn.php';
$q1="select max(t_id) as t_id from `ticketbooking` ;";
$quey = mysqli_query($con,$q1);
$a=mysqli_fetch_array($quey);
$b=(int)$a['t_id'];
echo $b;
?>
