<?php
session_start();
$un=$_POST["username"];
$pwd=$_POST["password"];
$con=mysqli_connect("localhost","root","","shoplaza");
if(!$con)
die("server not found");
$s="select*from regform where mail='".$un."'";
$rs=mysqli_query($con,$s);
$data=mysqli_fetch_assoc($rs);
if($data["password"]==$pwd)
{
$_SESSION["UserName"]=$un;
header("location:service.php");
}
else
header("location:shoplazalogin.php?error=1");
?>