<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK </title>
    <link rel="stylesheet" href="design.css">
    <style>
table {
  border-collapse: collapse;
  width: 50%;
}
th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
  background-color: #04AA6D;
  color: white;
}
input[type=submit]{
  background-color: #FFBF00;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  font-weight: bold;
  font-size: large;
}
.container{
    margin: auto;
    width: 60.5%;
    box-shadow: 6px 6px 6px 6px ;
    padding: 15px;
    background-image:url('bg2.jpg');
    border: 15px solid black;
    opacity: 0.75;
    background-size:100%;
}
button[type="submit"]{
    text-align: center;
    background-color: orange;
    width: 70px;
    height: 40px;
    border-radius: 10px;
}
.btn{
    text-align:center;
    margin-top:5%;
    margin-left:43%;
}
body{
    background-image: url('blood.jpg');
    background-size:100%;
}

</style>

</head>
<body>
<form action="" method="POST">   
<div class="container">
    <h1>DATABASE VIEW</h1>
    <hr>
    <label for="ent">Enter Id:</label><br>
    <input type="text" name="ent" id="ent"><br><br>

<h3>DETAILS IN FEEDBACK</h3>
    <hr>
<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{

    $con=mysqli_connect('localhost','root','','blood');

    if(!$con)
        die('Could not connect:'.mysqli_connect_error());
    
    $z=$_POST['ent'];
    $sql="SELECT name,pateint_age,blood_group,phone FROM blood_table where pateint_id=$z";
    
    $result = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($result) > 0) 
    {
        echo "<table>";
        echo "<tr><th>Name</th><th>Pateint Age</th><th>Blood Group</th><th>Phone</tr>";
      while($row = mysqli_fetch_assoc($result)) 
      {
          echo "<tr><td>" .$row['name']. "</td>";
          echo"<td>".$row['pateint_age']."</td>";
          echo"<td>".$row['blood_group']."</td>";
          echo"<td>".$row['phone']."</td></tr>";
      }
      echo "</table>";
    } 
    else 
      echo "0 results";
    
mysqli_close($con);
}

?>
<button type="submit" name="submit" class="btn">Submit</button>
</div>

</form>
</body>
</html>
