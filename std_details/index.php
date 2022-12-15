<?php
$rollno=$_GET["uname"];

$con=mysqli_connect("localhost","root","root@1","as");

$res=mysqli_query($con,"update student set name='aswitha' where roll='$rollno'");

if($res)
	echo "updated";
else
	echo"not updated";
?>