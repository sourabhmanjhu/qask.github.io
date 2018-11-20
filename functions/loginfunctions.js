function mylogin()
{
var a=document.login.useremail.value;
if(a.trim()=="" || a.trim()==null)
	{
	alert("Please enter your Username");
	return false;
	}
var b=document.login.userpassword.value;
if(b.trim()=="" || b.trim()==null)
	{
	alert("Please enter your Password");
	return false;
	}
}