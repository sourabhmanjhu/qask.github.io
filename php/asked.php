<?php include("../connection/connection.php"); ?>
<?php 
session_start();
$popup="";
$load="";
?>
<?php require("askedphp.php"); ?>
<?php include("headerphp.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Asked Questions</title>
	<script type="text/javascript" src="../functions/header.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../icons/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/popup.css"> 
	<link rel="stylesheet" type="text/css" href="../css/homepage.css">
	<link rel="stylesheet" type="text/css" href="../css/asked.css"> 
</head>
<body onload="<?php echo $load; ?>">
	<div id="askeddiv">
<?php include ("header.php"); ?>
<h1>Questions asked by you </h1>
<h3><?php echo "$askcount"; ?> questions in total.</h3>
<?php
while($dataresult=mysqli_fetch_array($askquery))
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
		<h6>Asked by $dataresult[6]</h6>
		<h5>$dataresult[2]<h5>
		<h6>Posted $dataresult[4]</h6>
		<h5 style='font-weight:bold; color: grey;'>$commentcheckresult[0] answers</h5>
		<form name='commentstart' method='get' action='commentstart.php'>
			<input type='text' name='postid' value='$dataresult[0]' style='display: none;'>
			<input type='text' name='category' value='$dataresult[5]' style='display:none;'>";
if($dataresult[3]==$user || $userdetailrow[8]=='admin')
			{
				echo "<button type='submit' name='answersubmit' id='answerhalfbutton'><i class=\"fas fa-pen\"></i> Answer</button>		
				</form>
				<form name=deletepost method='POST' action='asked.php'>
				<input type='text' name='postid' value='$dataresult[0]' style='display: none;'>
				<input type='text' name='category' value='$dataresult[5]' style='display:none;'>
				<button type='submit' name='deletesubmit' id='deletehalfbutton'><i class=\"far fa-trash-alt\"></i> Delete</button>
				</form>
				";
			}
			else
			{
				echo "<button type='submit' name='answersubmit' id='answerbutton'><i class=\"fas fa-pen\"></i> Answer</button>		
				</form>";
			}
echo "</div>";
	}
	?>
</div>
</body>
</html>