<?php
   session_start();

$con= mysqli_connect("localhost","root","","ecopath");

$adminid = $_POST['log'];
$adminid = mysqli_real_escape_string($con, $adminid);
$password = $_POST['pass'];
$password = mysqli_real_escape_string($con, $password);

// Query checks if the email and password are present in the database. 
$query = "SELECT * FROM euser WHERE e_username='" . $adminid . "' and se_password='".$password."'";

$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = "<span class='red'>Please enter correct id and Password</span>";
  header('location: al.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['adminid'] = $row['se_username'];
  $_SESSION['id'] = $row['e_id'];
  $_SESSION['name'] = $row['e_name'];
  header('location: elogin.php');
}

?>