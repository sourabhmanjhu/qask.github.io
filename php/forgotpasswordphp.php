<?php
session_start();
$popup="";
$_SESSION['ISFORGOTEMAIL']="false";
if(isset($_SESSION['USEREMAIL']))
	{
	header("location:homepage.php");
	}
if(isset($_POST['forgotsubmit']))
	{
	$useremail=$_POST['useremail'];
	$usermobile=$_POST['usermobile'];
	$useremail=str_replace("'","\'",$useremail);
	$forgotsql="select * from tbluser where email='$useremail' and mobile=$usermobile;";
	$forgotquery=mysqli_query($con,$forgotsql);
	if(mysqli_num_rows($forgotquery)==1)
		{
		$_SESSION['ISFORGOTEMAIL']="true";
		$_SESSION['FORGOTEMAIL']=$useremail;
		header("location:onelaststep.php");
		}
	else
		{
		$popup="Invalid E-mail and mobile combination.";
		$load="document.getElementById('updationdiv').style.display='block'";
		echo "<meta http-equiv='refresh' content='2;url=forgotpassword.php'>";
		}
	}
?>