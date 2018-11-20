<?php
$user=$_SESSION['USEREMAIL']; 
$userdetailsql="select * from tbluser where email='$user';";
$userdetailquery=mysqli_query($con,$userdetailsql);
$userdetailrow=mysqli_fetch_row($userdetailquery);
if(!isset($_SESSION['USEREMAIL']))
{
	header("location:index.php");
}
if(!isset($_GET['postid']) || !isset($_GET['category']))
{
	header("location: homepage.php");
}
else
{
	$postid=$_GET['postid'];
	$category=$_GET['category'];
	$postsql="select * from tbl$category where srno=$postid;";
	$postquery=mysqli_query($con,$postsql);
	$postresult=mysqli_fetch_array($postquery);
	$commentsql="select * from comment$category where postid=$postid order by date desc";
	$commentquery=mysqli_query($con,$commentsql);
	$commentcount=mysqli_num_rows($commentquery);
	$form="commentstart.php?postid=$postid&category=$category&answersubmit=";
}
if(isset($_POST['commentsubmit']))
{
	$comment=$_POST['commentdata'];
	$comment=str_replace("'", "\'", $comment);
	if($user!=$postresult[3])
	{
	$notificationssql="insert into tblnotifications(commenter, poster, postno, category) values('$userdetailrow[1] $userdetailrow[2]','$postresult[3]','$postid', '$category');";
	$notificationsquery=mysqli_query($con,$notificationssql);
	}
	$insertsql="insert into comment$category(comment, user, email, category, postid) values('$comment','$userdetailrow[1] $userdetailrow[2]', '$user', '$category', '$postid') ";
	$insertquery=mysqli_query($con,$insertsql);
//	header("location:commentstart.php?postid=$postid&category=$category&answersubmit=");
	echo "<meta http-equiv='refresh' content='0,commentstart.php?postid=$postid&category=$category&answersubmit='";
}
if(isset($_POST['deletesubmit']))
{
	$postid=$_POST['postid'];
	$category=$_POST['category'];
	$deletesql="update comment$category set COMMENT='This post has been removed' where sno=$postid;";
	$deletequery=mysqli_query($con,$deletesql);
	$popup="Post removed Successfully.";
	$load="document.getElementById('updationdiv').style.display='block'";
	echo "<meta http-equiv='refresh' content='2;url=$form'>";
}
?>