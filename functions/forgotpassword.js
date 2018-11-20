function check()
{
var a=document.forgotpassword.useremail.value;
var b=document.forgotpassword.usermobile.value;
a=a.trim();
b=b.trim();
if(a=="" || a==null)
	{
	alert("Please enter your Email address");
	forgotpassword.useremail.focus();
	return false;
	}
if(b=="" || b==null)
	{
	alert("Please enter your Mobile Number");
	forgotpassword.usermobile.focus();
	return false;
	}
}