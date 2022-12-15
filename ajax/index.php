<?php
$con = mysqli_connect("localhost","root","root@1","student");

$rno = trim($_GET['q']);
$res = mysqli_query($con,"select * from stdu where rno='$rno'");
$row = mysqli_fetch_array($res);
echo $row['rno']."<br>";
echo $row['name']."<br>";
echo $row['dept']."<br>";
echo $row['mail']."<br>";

?>