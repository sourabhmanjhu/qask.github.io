<?php
session_start();
if(isset($_SESSION['USEREMAIL']))
	{
	header("location:homepage.php");
	}
	$popup="";
$change="";
$load="";
if(isset($_POST['createaccount']))
	{
	$useremail=$_POST['useremail'];
	$useremail=trim($useremail);
	$useremail=str_replace("'","\'",$useremail);
	$checksql="select * from tbluser where email='$useremail';";
	$checkquery=mysqli_query($con,$checksql);
	if(mysqli_num_rows($checkquery)==1)
	{
	$popup="Account already exists with the given email address.";
	$load="document.getElementById('updationdiv').style.display='block'";
	echo "<meta http-equiv='refresh' content='2;url=newaccount.php'>";
	}
	else
	{
	$userfirstname=$_POST['userfirstname'];
	$userfirstname=str_replace("'","\'",$userfirstname);	
	$userlastname=$_POST['userlastname'];
	$userlastname=str_replace("'","\'",$userlastname);
	$userpassword=$_POST['userpassword'];
	$userpassword=str_replace("'","\'",$userpassword);
	$usersecq=$_POST['usersecq'];
	$usersecq=str_replace("'","\'",$usersecq);
	$userseca=$_POST['userseca'];
	$userseca=str_replace("'","\'",$userseca);
	$usermobile=$_POST['usermobile'];
	$userpreference1="";
	if(isset($_POST['preference1']))
		{
		$userpreference1=$_POST['preference1'];
		}
	$userpreference2="";
	if(isset($_POST['preference2']))
		{
		$userpreference2=$_POST['preference2'];
		}	
	$userpreference3="";
	if(isset($_POST['preference3']))
		{
		$userpreference3=$_POST['preference3'];
		}	
	$userpreference4="";
	if(isset($_POST['preference4']))
		{
		$userpreference4=$_POST['preference4'];
		}	
	$userpreference5="";
	if(isset($_POST['preference5']))
		{
		$userpreference5=$_POST['preference5'];
		}	
	$userpreference6="";
	if(isset($_POST['preference6']))
		{
		$userpreference6=$_POST['preference6'];
		}	
	$userpreference7="";
	if(isset($_POST['preference7']))
		{
		$userpreference7=$_POST['preference7'];
		}	
	$userpreference8="";
	if(isset($_POST['preference8']))
		{
		$userpreference8=$_POST['preference8'];
		}	
	$userfirstname=trim($userfirstname);
	$userlastname=trim($userlastname);
	$userpassword=trim($userpassword);
	$usersecq=trim($usersecq);
	$userseca=trim($userseca);
	$usermobile=trim($usermobile);
	$registersql="insert into tbluser(firstname, lastname, email, pwd, question, answer, mobile, preference1, preference2, preference3, preference4, preference5, preference6, preference7, preference8) 
	values('$userfirstname','$userlastname','$useremail','$userpassword','$usersecq','$userseca','$usermobile','$userpreference1', '$userpreference2', '$userpreference3', '$userpreference4', '$userpreference5', '$userpreference6', '$userpreference7', '$userpreference8' );";
	$registerquery=mysqli_query($con,$registersql);
	$_SESSION['USEREMAIL']=$useremail;
	$popup="Account Created Successfully";
	$load="document.getElementById('updationdiv').style.display='block'";
	echo "<meta http-equiv='refresh' content='2;url=homepage.php'>";
	}
	}
?>