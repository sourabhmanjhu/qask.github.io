<?php 
include ("../connection/connection.php");
?>
<?php
include ("onelaststepphp.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forgot Password?</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/popup.css">
<script>
function check()
{
var a=document.secq.userseca.value;
a=a.trim();
if(a=="" || a==null)
	{
	alert("Please enter your security answer");
	secq.userseca.focus();
	return false;
	}
}
</script>
</head>
<body onLoad="<?php echo $load; ?>">
<div id="maindiv">
	<form name="secq" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<h1>QAsk</h1>
		<h3>A way to learn, share and explore new ideas.</h3>
		<h5>One last step...</h5>
		<h6>Answer your security question to unlock your account details.</h6>
		<h6><?php echo "Question: $secresult[5]?"; ?></h6>
		<input type="text" name="userseca" placeholder="Security Answer" />
		<input type="reset" value="Reset" style="margin-left:58%; background-color: #df4930;"/>
		<input type="submit" name="secsubmit" value="Next" style="margin-left:0;" onClick="return check()"/>
		<hr>
		<a href="index.php" id="about">Back to Login Page</a>
	</form>
</div>
<?php include ("popup.php"); ?>
</body>
</html>