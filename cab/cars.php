<html>
<head?>
<style>
    h1{
        text-align:center;
        color:#a95c68;
    }
    table{
        border-collapse : collapse;
        margin-left:auto;
        margin-right:auto;
        font-size: 0.9em;
        font-family:sans-serif;
        min-width:400px;
        box-shadow:0 0 20px rgba(0,0,0,0.15);

    }
    thead tr{
        background-color:#009879;
        color:#fff;
        text-align:left;
    }
    th,td{
        padding: 12px 15px;
    }
    td{
        text-align:left;
    }
    * {
  margin: 0%;
  padding: 0%;
  box-sizing: border-box;
}

.navbar {
  background-color: #000;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.navbar h1 {
  color: #fff;
  margin-left: 90px;
}
.navbar ul {
  margin: 20px 70px 20px 20px;
}
.navbar ul li {
  display: inline-block;
  margin-right: 20px;
}
.navbar ul li a {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.navbar ul li a:hover {
  text-decoration: underline;
}

</style></head>
<body>
<nav class="navbar">
      <h1>A1 CAB</h1>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.html">Contact </a></li>
        <li></li>
      </ul>
    </nav>    
<?php

$con = mysqli_connect("localhost","root","root@1","cabbooking");

$res = mysqli_query($con, "select * from cars");
?>
<h1>CARS DETAILS</h1>
<table><thead>
<tr><th>Car No</th><th>Car Naame</th><th>Driver Name</th><th>KM</th>
<th>Amount</th><th>Persons Allow</th><th>Book</th></tr>
</thead>

<?php
while($row = mysqli_fetch_array($res)){
?>
<tr>
<td><?php echo $row['sno']; ?></td>
<td><?php echo $row['car']; ?></td>
<td><?php echo $row['dname']; ?></td>
<td><?php echo $row['km']; ?></td>
<td><?php echo $row['amount']; ?></td>
<td><?php echo $row['persons']; ?></td>
<td><a href="book.html"><?php echo $row['link']; ?></a></td>
</tr>

<?php
}
?>
</table>
</body>
</html>