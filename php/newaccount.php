<?php 
include ("../connection/connection.php");
include ("newaccountphp.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Register now...</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/popup.css">
<script type="text/javascript" src="../functions/newaccount.js"></script>
</head>
<body onload="<?php echo $load; ?>">
<div id="maindiv">
	<form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<h1>QAsk</h1>
		<h3>A way to learn, share and explore new ideas.</h3>
		<h5>Register</h5>
		<div id="registerdiv1">
		<h6>Step 1 of 3<br />Please fill your basic details to continue.</h6>
		<input type="text" name="userfirstname" placeholder="First Name" />
		<input type="text" name="userlastname" placeholder="Last Name" />
		<input type="text" name="useremail" placeholder="E-Mail Address" />
		<input type="password" name="userpassword" placeholder="Enter your Password" />
		<input type="password" name="userconpassword" placeholder="Confirm your Password" />
		<input type="reset" value="Reset" style="margin-left:58%; background-color: #df4930;"/>
		<input type="button" value="Next" style="margin-left:0;" onClick=" check1() "/>
		</div>
		<div id="registerdiv2">
		<h6>Step 2 of 3<br />Details for account security.</h6>
		<input type="text" name="usersecq" placeholder="Please type your security question" />
		<input type="text" name="userseca" placeholder="Security Answer" />
		<input type="text" name="usermobile" placeholder="Mobile Number" />
		<input type="button" value="Back" style="margin-left: 25%;" onClick="document.getElementById('registerdiv2').style.display='none', document.getElementById('registerdiv1').style.display='block' "/>
		<input type="reset" value="Reset" style="margin-left:24.5%; background-color: #df4930;" onClick="document.getElementById('registerdiv2').style.display='none', document.getElementById('registerdiv1').style.display='block' "/>
		<input type="button" value="Next" style="margin-left:0;" onClick="check2()"/>
		</div>
		<div id="registerdiv3">
		<h6>Step 3 of 3<br>Pick your Preferences.</h6>
		<div id="preferences">
		<input type="checkbox" name="preference1" value="technology" />Technology<br />
		<input type="checkbox" name="preference2" value="science" />Science<br />
		<input type="checkbox" name="preference3" value="health" />Health<br />
		<input type="checkbox" name="preference4" value="sports" />Sports<br />		
		<input type="checkbox" name="preference5" value="business" />Business<br />
		<input type="checkbox" name="preference6" value="food" />Food<br />
		<input type="checkbox" name="preference7" value="social" />Social<br />
		<input type="checkbox" name="preference8" value="movies" />Movies<br />
		</div>		
		<input type="button" value="Back" style="margin-left: 25%;" onClick="document.getElementById('registerdiv3').style.display='none', document.getElementById('registerdiv2').style.display='block' "/>
		<input type="reset" value="Reset" style="margin-left:22%; background-color: #df4930;" onClick="document.getElementById('registerdiv3').style.display='none', document.getElementById('registerdiv1').style.display='block' " />
		<input type="submit" name="createaccount" value="Create" style="margin-left:0; width: 10%;" onClick="return check3() "/>
		</div>
		<hr>
		<a href="index.php" id="about">Back to Login Page</a>	
	</form>
</div>
<?php include ("popup.php"); ?>
</body>
</html>