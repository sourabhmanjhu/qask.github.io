<div id="header">
	<div id="header1">
		<a style="margin-left: 13%;" href="homepage.php"><h1>Qask</h1></a>
		<a href="homepage.php" id="homepagea" style="margin-left: 5%;"><h2 id="homepageh"><i class="fas fa-home"></i> Home</h2></a>
		<a href="asked.php" id="answera"><h2 id="answerh"><i class="far fa-edit"></i> Asked Questions</h2></a>
		<a href="notifications.php" id="notificationsa"><h2 id="notificationsh"><i class="far fa-envelope"></i> Notifications <span><?php if($notifycountresult[0]!=0)
		{
			echo "$notifycountresult[0]";
			} ?></span></h2></a>
		<form name="searchform" method="get" action="search.php" onsubmit="return checksearch()">
		<input type="text" name="search" placeholder="Search..." style="margin-left: 4%;" />	
		<input type="button" value="Add Question +" onClick="document.getElementById('newquestion').style.display='block'" />
		</form>
	</div>	
		<img src="../images/login.jpg" onclick="profile()">
</div>
<div id="newquestion">
	<div id="newquestioncontent" class="animate">
		<div id="newquestiontitle">
			<i class="fas fa-times" id="close" title="Close" onclick="document.getElementById('newquestion').style.display='none'"></i>
			<h1>Add Question</h1>
		</div>
		<div id="tips">
			<h2>How to quickly get a good answer.</h2>
			<ul>
				<li>Keep your question short and to the point</li>
				<li>Check for grammar or spelling errors</li>
				<li>Phrase it like a question</li>
				<li>Make sure you pick up the right category</li>
			</ul>
		</div>
		<div id="mainquestion">
		<form name="addquestion" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<select name="category">
				<option value="">Select Category</option>
				<option value="technology">Technology</option>
				<option value="science">Science</option>
				<option value="health">Health</option>
				<option value="sports">Sports</option>
				<option value="business">Business</option>
				<option value="food">Food</option>
				<option value="social">Social</option>
				<option value="movies">Movies</option>
			</select>	
			<input type="text" name="questiontopic" placeholder='Start your Question with "What", "Why", "How" etc. ' />
			<h3>Description (optional):</h3>
			<textarea name="questiondescription" placeholder=" Description"></textarea>
			<input type="submit" name="questionsubmit" value="Post" onclick="return checkquestion()" />
		</form>
		</div>
	</div>
</div>
<div id="profiledivcontent">
		<input type="button" name="changepassword" value="Change Password" onclick="document.getElementById('changepassworddiv').style.display='block'"><hr>
		<input type="button" name="changepreference" value="Change Preferences" onclick="document.getElementById('changepreference').style.display='block'"><hr>
		<?php
		if($userdetailrow[8]=='admin')
		{
			echo "
		<input type='button' value='Admin Panel' onclick='window.location.assign(\"adminpanel.php\")''><hr>";
		}
		?>		
		<input type="button" name="logout" value="Log Out" onclick="window.location.assign('homepage.php?logout=true')">
</div>
<div id="changepassworddiv">
	<div id="changepassworddivcontent" class="animate">
		<i class="fas fa-times" id="close" title="Close" onclick="document.getElementById('changepassworddiv').style.display='none'"></i>
	<div id="changepassworddivtitle">
		<h2>Change Password</h2>
	</div>
	<form name="passwordchangeform" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<table>
			<tr><td>Enter your Old Password:</td><td><input type="Password" name="oldpassword"></td></tr>
			<tr><td>Enter your New Password:</td><td><input type="password" name="newpassword"></td></tr>
			<tr><td>Re-Enter your New Password:</td><td><input type="password" name="renewpassword"></td></tr>
		</table>
			<input type="submit" name="changepasswordsubmit" value="Change" onclick="return checkpassword()">
	</form>
	</div>
</div>
<div id="changepreference">
	<div id="changepreferencecontent" class="animate">
		<div id="changepreferencetitle">
		<i class="fas fa-times" id="close" title="Close" onclick="document.getElementById('changepreference').style.display='none'"></i>
		<h2>Pick your Preferences</h2>
		</div>
		<form name="changepreferenceform" method="POST"	action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
		<input type="checkbox" name="preference1" value="technology" style="margin-top: 4%;" />Technology<br />
		<input type="checkbox" name="preference2" value="science" />Science<br />
		<input type="checkbox" name="preference3" value="health" />Health<br />
		<input type="checkbox" name="preference4" value="sports" />Sports<br />		
		<input type="checkbox" name="preference5" value="business" />Business<br />
		<input type="checkbox" name="preference6" value="food" />Food<br />
		<input type="checkbox" name="preference7" value="social" />Social<br />
		<input type="checkbox" name="preference8" value="movies" />Movies<br />
		<input type="submit" name="changepreferencesubmit" value="Change" onclick="return checkpreference()" style="margin-left: 36%; width: 20%;">	
		</form>	
	</div>	
</div>
<?php require("popup.php") ?>