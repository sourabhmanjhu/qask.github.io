<?php
session_start();
$popup="";
$_SESSION['ISFORGOTEMAIL']="false";
$_SESSION['ISSECQ']="false";
if(isset($_SESSION['USEREMAIL']))
	{
	header("location:homepage.php");
	}
if(isset($_POST['userlogin']))
	{
	$useremail=$_POST['useremail'];
	$userpassword=$_POST['userpassword'];
	$useremail=str_replace("'","\'",$useremail);
	$userpassword=str_replace("'","\'",$userpassword);
	$loginsql="select * from tbluser where email='$useremail' and pwd='$userpassword';";
	$loginquery=mysqli_query($con,$loginsql);
	$loginresult=mysqli_fetch_array($loginquery);
	if($loginresult[17]=='yes')
	{
		$popup="Your account has been blocked by the admin.";
		$load="document.getElementById('updationdiv').style.display='block'";
		echo "<meta http-equiv='refresh' content='2;url=index.php'>";
	}
	else
	{
	if(mysqli_num_rows($loginquery)==1)
		{
		$_SESSION['USEREMAIL']=$useremail;
		header("location:homepage.php");
		}
	else
		{
		$popup="Invalid Username and Password combination.";
		$load="document.getElementById('updationdiv').style.display='block'";
		echo "<meta http-equiv='refresh' content='2;url=index.php'>";
		}
	}
	}
?>