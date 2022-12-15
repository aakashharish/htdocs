<?php

$uname = $_GET['uname'];
$age = $_GET['age'];

$conn = mysqli_connect("localhost","root","root@1","register");
if($conn->connect_error){
    echo "Not connect";
}
else{
    $res = mysqli_query($conn,"insert into reg value('$uname','$age')");

    if($res){
        echo "Record inserted";
        $sh = mysqli_query($conn,"select * from reg");
        
        echo "<table border='1'>
        <tr>
        <th>name</th>
        <th>age</th>
        </tr>";

        while($row = mysqli_fetch_array($sh))
        {
        echo "<tr>";
        echo "<td>" . $row['uname'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
        
    }
    else{
        echo "Error in inserting";
    }
}

?>