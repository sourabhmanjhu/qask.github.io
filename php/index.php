<?php 
include ("../connection/connection.php");
include ("indexphp.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>QAsk</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/popup.css">
<script type="text/javascript" src="../functions/loginfunctions.js"></script>
</head>
<body onLoad="<?php echo $load; ?>">
<div id="maindiv">
	<form name="login" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<h1>QAsk</h1>
		<h3>A way to learn, share and explore new ideas.</h3>
		<h5>Login</h5>
		<input type="text" name="useremail" placeholder="Email" />
		<input type="password" name="userpassword" placeholder="Password" />
		<a href="forgotpassword.php" id="forgotpassword">Forgot Password?</a>
		<input type="submit" value="Login" name="userlogin" onClick="return mylogin()" />
		<a href="newaccount.php" id="newaccount">Don't have an Account? Create an Account here.</a>
		<hr>
		<a href="about.php" id="about">About</a>
		<a href="Contactus.php" id="contactus">Contact Us</a>	
	</form>
</div>
<?php include ("popup.php"); ?>
</body>
</html>