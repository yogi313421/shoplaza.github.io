<?php
$a=$_POST["Name"];
$b=$_POST["mail"];
$c=$_POST["password"];
$d=$_POST["mobile"];

$con=mysqli_connect("localhost","root","","shoplaza");
if(!$con)
echo"server could not connected";
$s="insert into regform values('".$a."','".$b."','".$c."','".$d."')";
$check=mysqli_query($con,$s);

if($check!=0)
header("location:index.php");
else
echo"unable to register";
?>