<?php



if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{

    $con=mysqli_connect('localhost','root','','blood');

    if(!$con)
        die('Could not connect:'.mysqli_connect_error());
    echo "Connected successfully to the Data Base\n";


    $a=$_POST['pname'];
    $b=$_POST['pid'];
    $c=$_POST['page'];
    $d=$_POST['bgrp'];
    $e=$_POST['phn'];
    

    $sql="INSERT INTO blood_table(name,pateint_id,pateint_age,blood_group,phone) VALUES('$a','$b','$c','$d','$e')";

    if(mysqli_query($con,$sql)){
        echo"hi";
        header("Location: view.php");
    }
    else{
        echo("Error description: " . $con -> error);
    }

mysqli_close($con);
}
?>