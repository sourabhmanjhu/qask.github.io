<?php include("../connection/connection.php"); ?>
<?php 
session_start();
$popup="";
?>
<?php 
if(!isset($_SESSION['USEREMAIL']))
{
	header("location:index.php");
}
$user=$_SESSION['USEREMAIL'];
$readsql="update tblnotifications set status='read' where poster='$user';";
$readquery=mysqli_query($con,$readsql);
$notifysql="select * from tblnotifications where poster='$user' order by date desc;";
$notifyquery=mysqli_query($con,$notifysql);
?>
<?php include("headerphp.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Notifications</title>
	<script type="text/javascript" src="../functions/header.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../icons/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/popup.css">
	<link rel="stylesheet" type="text/css" href="../css/notifications.css">
</head>
<body>
<?php include ("header.php"); ?>
<div id="notificationcontent">
<h1>Notifications </h1>
<?php 
while($newnotifyresult=mysqli_fetch_array($notifyquery))
{
	echo"
	<a id='notificationsanchor' href='commentstart.php?postid=$newnotifyresult[3]&category=$newnotifyresult[4]&answersubmit='>$newnotifyresult[1] commented on your post.<h6>$newnotifyresult[6]</h6></a> 
	";
}
?>
</div>
</body>
</html>