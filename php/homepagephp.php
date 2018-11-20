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
if(!isset($_GET['category']))
{
	$title="Feed";
$preference1=$userdetailrow[9];
$preference2=$userdetailrow[10];
$preference3=$userdetailrow[11];
$preference4=$userdetailrow[12];
$preference5=$userdetailrow[13];
$preference6=$userdetailrow[14];
$preference7=$userdetailrow[15];
$preference8=$userdetailrow[16];
$preference1="select * from tbl$preference1";
$preference2="union select * from tbl$preference2";
$preference3="union select * from tbl$preference3";
$preference4="union select * from tbl$preference4";
$preference5="union select * from tbl$preference5";
$preference6="union select * from tbl$preference6";
$preference7="union select * from tbl$preference7";
$preference8="union select * from tbl$preference8";
$datasql="$preference1 $preference2 $preference3 $preference4 $preference5 $preference6 $preference7 $preference8 order by DATE desc limit 0, 50;";

$dataquery=mysqli_query($con,$datasql);
}
else
{
	$category=$_GET['category'];
	$title=$category;
	$datasql="select * from tbl$category order by DATE desc limit 0, 50; ";
	$dataquery=mysqli_query($con,$datasql);
}
if(isset($_POST['deletesubmit']))
{
	$postid=$_POST['postid'];
	$category=$_POST['category'];
	$deletesql="delete from tbl$category where srno=$postid;";
	$deletequery=mysqli_query($con,$deletesql);
	$popup="Post deleted Successfully.";
	$load="document.getElementById('updationdiv').style.display='block'";
	echo "<meta http-equiv='refresh' content='2;url=homepage.php'>";
}
?>