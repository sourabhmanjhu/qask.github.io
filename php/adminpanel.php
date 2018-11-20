<?php 
include("../connection/connection.php");
$popup="";
$load="";
session_start();
?>
<?php include("headerphp.php") ?>
<?php require("adminpanelphp.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/popup.css">
	<link rel="stylesheet" type="text/css" href="../icons/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/adminpanel.css">
	<script type="text/javascript" src="../functions/header.js"></script>
</head>
<body onload="<?php echo $load; ?>">
<?php require("header.php"); ?>
<div id="admincontentdiv">
<h1>List of Users</h1>
<form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<input type="text" name="searchusers" placeholder="Search Users">
</form>
<?php
while($alluserresult=mysqli_fetch_array($alluserquery))
{
	echo "
	<table border=1 cellpadding=0 cellspacing=0>
	<tr><td>Name</td><td>E-Mail</td></tr>
	<tr><td>$alluserresult[1] $alluserresult[2]</td><td>$alluserresult[3]</td></tr>
	</table>
	<form method='POST' action='adminpanel.php'>
	";
	if($alluserresult[17]=='no')
	{
		echo "
	<input type='text' value='$alluserresult[3]' name='email' style='display:none;'>
	<button type='submit' name='block' id='blockbutton'><i class='fas fa-lock'></i> Block</button>
	</form>";
	}
	else
	{
		echo "
	<input type='text' value='$alluserresult[3]' name='email' style='display:none;'>
	<button type='submit' name='unblock' id='blockbutton'><i class='fas fa-lock-open'></i> Unblock</button>
	</form>";
	}
}
?>
</div>
</body>
</html>