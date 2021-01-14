<?php
$a=$_POST["uname"];
$b=$_POST["pname"];
$c=$_POST["pid"];
$d=$_POST["mobile"];
$e=$_POST["address"];
$f=$_POST["paid"];


$con=mysqli_connect("localhost","root","","detailDb");
if(!$con)
echo"server could not connected";
$s="insert into std values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."')";
$check=mysqli_query($con,$s);

if($check!=0)
header("location:confirm.php");
else
echo"unable to register";
?>