<?php
if(!isset($_SESSION['USEREMAIL']))
{
	header("location:index.php");
} 
$user=$_SESSION['USEREMAIL'];
//error_reporting(0);
$userdetailsql="select * from tbluser where email='$user';";
$userdetailquery=mysqli_query($con,$userdetailsql);
$userdetailrow=mysqli_fetch_row($userdetailquery);
if($userdetailrow[8]!="admin")
{
	header("location:homepage.php");
};
if(isset($_GET['searchusers']))
{
	$searchusers=$_GET['searchusers'];
	$searchusers=str_replace("'", "\'", $searchusers);
$allusersql="select * from tbluser where type='user' and (firstname like'%$searchusers%' or lastname like'%$searchusers%');";
$alluserquery=mysqli_query($con,$allusersql);
}
else
{
$allusersql="select * from tbluser where type='user';";
$alluserquery=mysqli_query($con,$allusersql);
}
if(isset($_POST['block']))
{
$email=$_POST['email'];
$blocksql="update tbluser set block='yes' where email='$email';";
$blockquery=mysqli_query($con,$blocksql);
$popup="User blocked Successfully.";
$load="document.getElementById('updationdiv').style.display='block'";
echo "<meta http-equiv='refresh' content='2;url=adminpanel.php'>";
}
if(isset($_POST['unblock']))
{
$email=$_POST['email'];	
$unblocksql="update tbluser set block='no' where email='$email';";
$unblockquery=mysqli_query($con,$unblocksql);
$popup="User Unblocked Successfully.";
$load="document.getElementById('updationdiv').style.display='block'";
echo "<meta http-equiv='refresh' content='2;url=adminpanel.php'>";
}
?>