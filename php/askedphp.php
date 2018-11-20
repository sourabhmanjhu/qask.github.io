<?php 
if(!isset($_SESSION['USEREMAIL']))
{
	header("location:index.php");
}
$user=$_SESSION['USEREMAIL'];
$asksql="select * from tblbusiness where email='$user' union select * from tblhealth where email='$user' union select * from tblfood where email='$user' union select * from tblsports where email='$user' union select * from tblsocial where email='$user' union select * from tblscience where email='$user' union select * from tbltechnology where email='$user' order by date desc; ";
$askquery=mysqli_query($con,$asksql);
$askcount=mysqli_num_rows($askquery);
$userdetailsql="select * from tbluser where email='$user';";
$userdetailquery=mysqli_query($con,$userdetailsql);
$userdetailrow=mysqli_fetch_row($userdetailquery);
if(isset($_POST['deletesubmit']))
{
	$postid=$_POST['postid'];
	$category=$_POST['category'];
	$deletesql="delete from tbl$category where srno=$postid;";
	$deletequery=mysqli_query($con,$deletesql);
	$popup="Post deleted Successfully.";
	$load="document.getElementById('updationdiv').style.display='block'";
	echo "<meta http-equiv='refresh' content='2;url=asked.php'>";
}
 ?>