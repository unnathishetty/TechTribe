<?php

$con=mysqli_connect("localhost","root","","ecopath");
$id=rand(10000,99999);
$name=$_POST['nam'];
$uname=$_POST['un'];
$pass=$_POST['pas'];
$em=$_POST['email'];
$br=$_POST['branch'];
$g=$_POST['gender'];
$ag=$_POST['age'];
$conno=$_POST['cn'];


$sql="INSERT INTO euser (e_id,e_name,e_branch,e_age,e_gender,e_email,e_conno,e_username,e_password) VALUES('$id','$name','$br','$ag','$g','$em','$conno','$uname','$pass')";
mysqli_query($con,$sql);
header('location:elogin.html');
?>
