<?php

$rollno=$_GET["uname"];

$con=mysqli_connect("localhost","root","root@1","as");

$res=mysqli_query($con,"select* from student where roll='$rollno' ");

$row=mysqli_fetch_array($res);

echo $row['roll']."<br>";
echo $row['name']."<br>";
echo $row['dept']."<br>";

?>

