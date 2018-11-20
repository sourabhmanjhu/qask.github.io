<?php 
if(!isset($_GET['search']))
{
	header("location:homepage.php");
}
else
{
	$searchi=$_GET['search'];
	$search=str_replace("'","\'",$searchi);
	$countsql="select * from tbltechnology where question like'%$search%' union select * from tblscience where question like'%$search%' union select * from tblhealth where question like'%$search%' union select * from tblsports where question like'%$search%' union select * from tblfood where question like'%$search%' union select * from tblmovies where question like'%$search%' union select * from tblsocial where question like'%$search%' union select * from tblbusiness where question like'%$search%' order by date desc limit 0, 50;";
	$countquery=mysqli_query($con,$countsql);
	$countrows=mysqli_num_rows($countquery);
}
?>