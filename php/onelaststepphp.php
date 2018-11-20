<?php
session_start();
if(!isset($_SESSION['FORGOTEMAIL']) || $_SESSION['ISFORGOTEMAIL']!="true")
	{
	header("location:index.php");
	}
	$popup="";
$email=$_SESSION['FORGOTEMAIL'];
$secsql="select * from tbluser where email='$email';";
$secquery=mysqli_query($con,$secsql);
$secresult=mysqli_fetch_row($secquery);
if(isset($_POST['secsubmit']))
	{
	$seca=$_POST['userseca'];
	if($seca==$secresult[6])
		{
		$_SESSION['ISFORGOTEMAIL']="false";
		$_SESSION['ISSECQ']="true";
		header("location:accountdetails.php");
		}
	else
		{
		$popup="Incorrect Answer.";
		$load="document.getElementById('updationdiv').style.display='block'";
		echo "<meta http-equiv='refresh' content='2;url=onelaststep.php'>";
		}
	}
?>