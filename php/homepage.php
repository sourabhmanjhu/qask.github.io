<?php
session_start();
include ("../connection/connection.php"); 
?>
<?php include('headerphp.php'); ?>
<?php require('homepagephp.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>QAsk</title>
<script type="text/javascript" src="../functions/header.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../icons/css/all.css">
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/sidemenu.css">
<link rel="stylesheet" type="text/css" href="../css/popup.css">
<link rel="stylesheet" type="text/css" href="../css/homepage.css">
</head>
<body onload="<?php echo $load; ?>">
<?php require("header.php") ?>
<?php require("sidemenu.php") ?>
<div id="mainquestiontab">
<div id="newquestiontab" onclick="document.getElementById('newquestion').style.display='block'">
	<h6><?php echo "$userdetailrow[1] $userdetailrow[2]"; ?></h6>
	<h4>What is your Question?</h4>
</div>
<h1>Showing <?php echo "$title"; ?>:</h1>
<?php
while($dataresult=mysqli_fetch_array($dataquery))
	{
		$commentcategory=$dataresult[5];
		$postid=$dataresult[0];
		$commentchecksql="select count(*) from comment$commentcategory where postid=$postid;";
		$commentcheckquery=mysqli_query($con,$commentchecksql);
		$commentcheckresult=mysqli_fetch_array($commentcheckquery);
		echo"
<div id='maincontenttab'>
		<h6>Question in $dataresult[5]</h6>
		<h2>$dataresult[1]</h2>
		<h6>Asked by $dataresult[6]</h6>
		<h5>$dataresult[2]<h5>
		<h6>Posted $dataresult[4]</h6>
		<h5 style='font-weight:bold; color: grey;'>$commentcheckresult[0] answers</h5>
		<form name='commentstart' method='GET' action='commentstart.php'>
			<input type='text' name='postid' value='$dataresult[0]' style='display: none;'>
			<input type='text' name='category' value='$dataresult[5]' style='display:none;'>";
			if($dataresult[3]==$user || $userdetailrow[8]=='admin')
			{
				echo "<button type='submit' name='answersubmit' id='answerhalfbutton'><i class=\"fas fa-pen\"></i> Answer</button>		
				</form>
				<form name=deletepost method='POST' action='homepage.php'>
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