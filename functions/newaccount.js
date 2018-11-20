function check1()
{
var a=document.register.userfirstname.value;
a=a.trim();
var b=document.register.userlastname.value;
b=b.trim();
var c=document.register.useremail.value;
c=c.trim();
var d=document.register.userpassword.value;
d=d.trim();
var e=document.register.userconpassword.value;
e=e.trim();
if(a=="" || a==null)
	{
	alert("Please enter your First name");
	register.userfirstname.focus();
	return false;
	}
if(a.search(" ")!=-1)
	{
	alert("Space isn't allowed in First Name");
	register.userfirstname.focus();
	return false;
	}
if(b=="" || b==null)
	{
	alert("Please enter your Last name");
	register.userlastname.focus();
	return false;
	}
if(b.search(" ")!=-1)
	{
	alert("Space isn't allowed in Last Name");
	register.userlastname.focus();
	return false;
	}
if(c=="" || c==null)
	{
	alert("Please enter your Email address");
	register.useremail.focus();
	return false;
	}
if(c.search(" ")!=-1)
	{
	alert("Please enter a valid e-mail address");
	register.useremail.focus();
	return false;
	}
if(c.search("@")==-1)
	{
	alert("Please enter a valid e-mail address");
	register.useremail.focus();
	return false;
	}
if(d=="" || d==null)
	{
	alert("Please enter your Password");
	register.userpassword.focus();
	return false;
	}
if(d.search(" ")!=-1)
	{
	alert("Space isn't allowed in Password");
	register.userpassword.focus();
	return false;
	}
if(e=="" || e==null)
	{
	alert("Please re-enter your Password");
	register.userconpassword.focus();
	return false;
	}
if(d!=e)
	{
	alert("Passwords do not match");
	register.userpassword.focus();
	return false;
	}
else
	{
	document.getElementById('registerdiv1').style.display="none";
	document.getElementById('registerdiv2').style.display="block";
	}
}
function check2()
{
var a=document.register.usersecq.value;
var b=document.register.userseca.value;
var c=document.register.usermobile.value;
a=a.trim();
b=b.trim();
c=c.trim();
if(a=="" || a==null)
	{
	alert("Please enter your Security Question");
	register.usersecq.focus();
	return false;
	}
if(b=="" || b==null)
	{
	alert("Please enter your Security Answer");
	register.userseca.focus();
	return false;
	}
if(c=="" || c==null)
	{
	alert("Please enter your Mobile Number");
	register.usermobile.focus();
	return false;
	}
if(c.search(" ")!=-1)
	{
	alert("Please enter a valid Mobile Number");
	register.usermobile.focus();
	return false;
	}
if(c.length!=10)
	{
	alert("Please enter a valid Mobile Number");
	register.usermobile.focus();
	return false;
	}
if(isNaN(c))
	{
	alert("Please enter a valid Mobile Number");
	register.usermobile.focus();
	return false;
	}
else
	{
	document.getElementById('registerdiv2').style.display="none";
	document.getElementById('registerdiv3').style.display="block";
	}
}
function check3()
{
var a=document.register.userfirstname.value;
a=a.trim();
var b=document.register.userlastname.value;
b=b.trim();
var c=document.register.useremail.value;
c=c.trim();
var d=document.register.userpassword.value;
d=d.trim();
var e=document.register.userconpassword.value;
e=e.trim();
if(a=="" || a==null)
	{
	alert("Please enter your First name");
	register.userfirstname.focus();
	return false;
	}
if(a.search(" ")!=-1)
	{
	alert("Space isn't allowed in First Name");
	register.userfirstname.focus();
	return false;
	}
if(b=="" || b==null)
	{
	alert("Please enter your Last name");
	register.userlastname.focus();
	return false;
	}
if(b.search(" ")!=-1)
	{
	alert("Space isn't allowed in Last Name");
	register.userlastname.focus();
	return false;
	}
if(c=="" || c==null)
	{
	alert("Please enter your Email address");
	register.useremail.focus();
	return false;
	}
if(c.search(" ")!=-1)
	{
	alert("Please enter a valid e-mail address");
	register.useremail.focus();
	return false;
	}
if(c.search("@")==-1)
	{
	alert("Please enter a valid e-mail address");
	register.useremail.focus();
	return false;
	}
if(d=="" || d==null)
	{
	alert("Please enter your Password");
	register.userpassword.focus();
	return false;
	}
if(d.search(" ")!=-1)
	{
	alert("Space isn't allowed in Password");
	register.userpassword.focus();
	return false;
	}
if(e=="" || e==null)
	{
	alert("Please re-enter your Password");
	register.userconpassword.focus();
	return false;
	}
if(d!=e)
	{
	alert("Passwords do not match");
	register.userpassword.focus();
	return false;
	}
document.getElementById('registerdiv1').style.display="none";
document.getElementById('registerdiv2').style.display="block";
var f=document.register.usersecq.value;
var g=document.register.userseca.value;
var h=document.register.usermobile.value;
f=f.trim();
g=g.trim();
h=h.trim();
if(f=="" || f==null)
	{
	alert("Please enter your Security Question");
	register.usersecq.focus();
	return false;
	}
if(g=="" || g==null)
	{
	alert("Please enter your Security Answer");
	register.userseca.focus();
	return false;
	}
if(h=="" || h==null)
	{
	alert("Please enter your Mobile Number");
	register.usermobile.focus();
	return false;
	}
if(h.search(" ")!=-1)
	{
	alert("Please enter a valid Mobile Number");
	register.usermobile.focus();
	return false;
	}
if(h.length!=10)
	{
	alert("Please enter a valid Mobile Number");
	register.usermobile.focus();
	return false;
	}
if(isNaN(h))
	{
	alert("Please enter a valid Mobile Number");
	register.usermobile.focus();
	return false;
	}
document.getElementById('registerdiv2').style.display="none";
document.getElementById('registerdiv3').style.display="block";
var i=document.register.preference1;
var j=document.register.preference2;
var k=document.register.preference3;
var l=document.register.preference4;
var m=document.register.preference5;
var n=document.register.preference6;
var o=document.register.preference7;
var p=document.register.preference8;
if(!i.checked && !j.checked && !k.checked && !l.checked && !m.checked && !n.checked && !o.checked && !p.checked)
	{
	alert("Please select atleast 1 preference to create your new account");
	return false;
	}
}