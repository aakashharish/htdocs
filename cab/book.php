<html>
<head>
<style>
     body{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;}

    div{
        background-color: #f2d2bd;
        padding:15px;
        border-radius: 10px;
        box-shadow:5px 10px #888888;
    }
    </style>
</head>
<body>

<?php

$cno = $_POST['cn'];
$cname =  $_POST['cname'];
$email = $_POST['email'];
$mobno =  $_POST['no'];
$bpoint =  $_POST['bpoint'];
$dst =  $_POST['des'];

$con = mysqli_connect("localhost","root","root@1","cabbooking");
if(!$con){
    echo "Connectio error";
}

$res = mysqli_query($con,"insert into cusDetails value($cno,'$cname','$email',$mobno,'$bpoint','$dst')");

if($res){
    $rec = mysqli_query($con,"select * from cusDetails where cnumber=$cno");
    $row = mysqli_fetch_array($rec)
?>
<div>
<h1><?php        echo "Your Cab is Booked Successfully" ?></h1><br>
<?php        echo "Car number is:  ".$row['cnumber']; ?><br>
<?php        echo "Name:  ".$row['cname']; ?><br>
<?php        echo "Email:  ".$row['mail']; ?><br>
<?php        echo "Mobile No:  ".$row['mno']; ?><br>
<?php        echo "Bording Point:  ".$row['bpoint']; ?><br>
<?php        echo "Destination:  ".$row['dest']; ?><br>
</div><?php
} 

else{
    echo "error";
}

?>
</body>
</html>