<?php 
include ("../connection/connection.php");
?>
<?php include ("accountdetailsphp.php"); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>QAsk</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
<div id="maindiv">
	<div style="margin-bottom: 2%;">
	<h1>QAsk</h1>
	<h3>A way to learn, share and explore new ideas.</h3>
	<h5>Your account details.</h5>
	<table>
		<tr><td>Email:</td><td><?php echo $secresult[3]; ?></td></tr>
		<tr><td>Password:</td><td><?php echo $secresult[4]; ?></td></tr>
	</table>
	<hr>
	<a href="index.php" id="about">Back to Login Page</a>
	</div>	
</div>
</body>
</html>