<?php include("../connection/connection.php"); ?>
<?php 
session_start();
$popup="";
?>
<?php include("headerphp.php"); ?>
<?php include("searchphp.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<script type="text/javascript" src="../functions/header.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../icons/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/popup.css">
	<link rel="stylesheet" type="text/css" href="../css/homepage.css">
	<style type="text/css">
		h1
		{
			margin-top: 6%;
			margin-left: 25%;
			color: #333;
			font-size: 2.5vw;
			margin-bottom: 0;
		}
		h3
		{
			margin-left: 25%;
			color: #666;
			font-size: 1.5vw;
			margin-top: 0.5%;
		}
	</style>
</head>
<body>
<?php include ("header.php"); ?>
<h1>Showing results for "<?php echo $searchi; ?>" </h1>
<h3><?php echo "$countrows"; ?> match(es) found.</h3>
<?php
while($dataresult=mysqli_fetch_array($countquery))
	{
		$commentcategory=$dataresult[5];
		$postid=$dataresult[0];
		$commentchecksql="select count(*) from comment$commentcategory where postid=$postid;";
		$commentcheckquery=mysqli_query($con,$commentchecksql);
		$commentcheckresult=mysqli_fetch_array($commentcheckquery);
		echo"
<div id='maincontenttab' style='width: 52%;'>
		<h6>Question in $dataresult[5]</h6>
		<h2>$dataresult[1]</h2>
		<h6>Asked by $dataresult[3]</h6>
		<h5>$dataresult[2]<h5>
		<h6>Posted $dataresult[4]</h6>
		<h5 style='font-weight:bold; color: grey;'>$commentcheckresult[0] answers</h5>
		<form name='commentstart' method='get' action='commentstart.php'>
			<input type='text' name='postid' value='$dataresult[0]' style='display: none;'>
			<input type='text' name='category' value='$dataresult[5]' style='display:none;'>
			<button type='submit' name='answersubmit' id='answerbutton'><i class=\"fas fa-pen\"></i> Answer or View</button>		
		</form>
</div>";
	}
	?>
</body>
</html>