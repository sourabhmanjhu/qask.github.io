<?php 
$user=$_SESSION['USEREMAIL'];
$notifycountsql="select count(*) from tblnotifications where poster='$user' and status='unread';";
$notifycountquery=mysqli_query($con,$notifycountsql);
$notifycountresult=mysqli_fetch_array($notifycountquery);
$userdetailsql="select * from tbluser where email='$user';";
$userdetailquery=mysqli_query($con,$userdetailsql);
$userdetailrow=mysqli_fetch_row($userdetailquery);
if(isset($_POST['questionsubmit']))
{
	$category=$_POST['category'];
	$questiontopic=$_POST['questiontopic'];
	$questiondescription=$_POST['questiondescription'];
	$user=$_SESSION['USEREMAIL'];
	$questiontopic=str_replace("'","\'",$questiontopic);
	$questiondescription=str_replace("'","\'",$questiondescription);
	$newquestionsql="insert into tbl$category(question, description, user, email) values('$questiontopic', '$questiondescription', '$userdetailrow[1] $userdetailrow[2]', '$user');";
	$newquestionquery=mysqli_query($con,$newquestionsql);
	$popup="Question Posted Successfully.";
	$load="document.getElementById('updationdiv').style.display='block'";
	echo "<meta http-equiv='refresh' content='2;url=homepage.php'>";
}
if(isset($_POST['changepasswordsubmit']))
{
	$oldpassword=$_POST['oldpassword'];
	$user=$_SESSION['USEREMAIL'];
	$passwordchecksql="select pwd from tbluser where email='$user'; ";
	$passwordcheckquery=mysqli_query($con,$passwordchecksql);
	$passwordcheckrow=mysqli_fetch_row($passwordcheckquery);
	if($oldpassword==$passwordcheckrow[0])
	{
		$newpassword=$_POST['newpassword'];
		$newpassword=str_replace("'","\'",$newpassword);
		$changepasswordsql="update tbluser set pwd='$newpassword' where email='$user';";
		$changepasswordquery=mysqli_query($con,$changepasswordsql);
		$popup="Password Changed Successfully.";
		$load="document.getElementById('updationdiv').style.display='block'";
		echo "<meta http-equiv='refresh' content='2;url=homepage.php'>";
	}
	else
	{
	$popup="Incorrect Password. Please try again.";
	$load="document.getElementById('updationdiv').style.display='block'";
	echo "<meta http-equiv='refresh' content='2;url=homepage.php'>";	
	}
}
if(isset($_POST['changepreferencesubmit']))
{
	$user=$_SESSION['USEREMAIL'];
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
	$changeprefsql="update tbluser set preference1='$userpreference1', preference2='$userpreference2', preference3='$userpreference3', preference4='$userpreference4', preference5='$userpreference5', preference6='$userpreference6', preference7='$userpreference7', preference8='$userpreference8' where email='$user';";
	$changeprefquery=mysqli_query($con,$changeprefsql);
	$popup="Preferences changed successfully.";
	$load="document.getElementById('updationdiv').style.display='block'";
	echo "<meta http-equiv='refresh' content='2;url=homepage.php'>";	
}
if(isset($_GET['logout']))
{
	session_destroy();
	header("location:index.php");
}
?> 