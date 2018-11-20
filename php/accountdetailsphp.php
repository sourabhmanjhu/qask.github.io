<?php
session_start();
if(!isset($_SESSION['FORGOTEMAIL']) || $_SESSION['ISSECQ']!="true")
	{
	header("location:index.php");
	}
$email=$_SESSION['FORGOTEMAIL'];
$secsql="select * from tbluser where email='$email';";
$secquery=mysqli_query($con,$secsql);
$secresult=mysqli_fetch_row($secquery);

?>