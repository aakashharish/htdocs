<?php

$rollno=$_GET['rno'];
$name=$_GET['uname'];
$dept=$_GET['dept'];

$con=mysqli_connect("localhost","root","root@1","as");

$res=mysqli_query($con,"insert into student values('$rollno','$name','$dept')");
$raa=mysqli_query($con,"select* from student where roll='$rollno' ");


$row=mysqli_fetch_array($raa);
echo $row['roll']."<br>";
echo $row['name']."<br>";
echo $row['dept']."<br>";

?>