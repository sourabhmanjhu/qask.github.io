<?php 
include("../connection/connection.php");
session_start();
$popup=""; 
$check="";
?>
<?php include("headerphp.php"); ?>
<?php include("commentstartphp.php"); ?>
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../functions/header.js"></script>
	<title>QAsk</title>
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../icons/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/popup.css">
	<link rel="stylesheet" type="text/css" href="../css/homepage.css">
	<link rel="stylesheet" type="text/css" href="../css/commentstart.css">
	<script type="text/javascript">
		function myfunction()
		{
			var a=document.commentform.commentdata.value;
			if(a=="" || a==null)
			{
				alert("Please type something to comment");
				commentform.commentdata.focus();
				return false;
			}
		}
	</script>
</head>
<body onLoad="<?php echo($load); ?>">
<?php include("header.php"); ?>
<?php echo"
<div id='maincontenttab'>
		<h6>Question in $postresult[5]</h6>
		<h2>$postresult[1]</h2>
		<h6>Asked by $postresult[6]</h6>
		<h5>$postresult[2]<h5>
		<h6>Posted $postresult[4]</h6>
</div>";
?>
<form name="commentform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?postid='.$postid.'&category='.$category.'&answersubmit='; ?>" method="post">
	<textarea name="commentdata" placeholder="Type your comment here"></textarea>
	<input type="submit" name="commentsubmit" value="Post" id="postbutton" onClick="return myfunction()">	
</form>
<div id="answertab">
	<h2>Showing <?php echo($commentcount); ?> Answer(s)</h2>
</div>
<?php
while($commentresult=mysqli_fetch_array($commentquery)) 
{
	echo"<div id='commenttab'>
			<h6>$commentresult[2] says</h6>
			<h6>on $commentresult[4]</h6>
			<h2>$commentresult[1]</h2>";
			if($commentresult[3]==$user || $userdetailrow[8]=='admin')
			{
				echo "
			<form method='POST' action='$form'>
			<input type='text' name='postid' value='$commentresult[0]' style='display:none;'>
			<input type='text' name='category' value='$commentresult[5]' style='display:none;'>
			<button type='submit' name='deletesubmit' id='deletebutton'><i class='far fa-trash-alt'></i> Delete</button>
			</form>";
			}
		echo "</div>
		";
}	
?>
</body>
</html>