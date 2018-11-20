<?php 
include ("../connection/connection.php");
include ("forgotpasswordphp.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forgot Password?</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/popup.css">
<script type="text/javascript" src="../functions/forgotpassword.js"></script>
</head>
<body onLoad="<?php echo $load; ?>">
<div id="maindiv">
	<form name="forgotpassword" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<h1>QAsk</h1>
		<h3>A way to learn, share and explore new ideas.</h3>
		<h5>Forgot Password?</h5>
		<h6>Just fill out your details and we will do the rest.</h6>
		<input type="text" name="useremail" placeholder="Email" />
		<input type="text" name="usermobile" placeholder="Mobile Number" />
		<input type="reset" value="Reset" style="margin-left:58%; background-color: #df4930;"/>
		<input type="submit" name="forgotsubmit" value="Next" style="margin-left:0;" onClick="return check()"/>
		<hr>
		<a href="index.php" id="about">Back to Login Page</a>	
	</form>
</div>
<?php include ("popup.php"); ?>
</body>
</html>