function profile()
	{
		var a=document.getElementById("profiledivcontent");
		if(a.style.display=="none")
		{
			a.style.display="block";
		}
		else
			a.style.display="none";
	}
	function checksearch()
	{
		var a=document.searchform.search.value;
		a=a.trim();
		if(a=="" || a==null)
		{
			alert("Type something to search")
			searchform.search.focus();
			return false;
		}
	}
	function checkpreference()
	{
		var i=document.changepreferenceform.preference1;
		var j=document.changepreferenceform.preference2;
		var k=document.changepreferenceform.preference3;
		var l=document.changepreferenceform.preference4;
		var m=document.changepreferenceform.preference5;
		var n=document.changepreferenceform.preference6;
		var o=document.changepreferenceform.preference7;
		var p=document.changepreferenceform.preference8;
		if(!i.checked && !j.checked && !k.checked && !l.checked && !m.checked && !n.checked && !o.checked && !p.checked)
			{
			alert("Please select atleast 1 preference");
			return false;
			}
	}
	function checkquestion()
	{
		var a=document.addquestion.category.value;
		var b=document.addquestion.questiontopic.value;
		if(a=="" || a==null)
		{
			alert("Please choose category of the question");
			addquestion.category.focus();
			return false;
		}
		if(b=="" || b==null)
		{
			alert("Please type your Question");
			addquestion.questiontopic.focus();
			return false;
		}
	}
	function checkpassword()
	{
		var a=document.passwordchangeform.oldpassword.value;
		var b=document.passwordchangeform.newpassword.value;
		var c=document.passwordchangeform.renewpassword.value;
		if(a=="" || a==null)
		{
			alert("Enter your Old Password");
			passwordchangeform.oldpassword.focus();
			return false;
		}
		if(b=="" || b==null)
		{
			alert("Enter your New Password");
			passwordchangeform.newpassword.focus();
			return false;
		}
		if(b!=c)
		{
			alert("Passwords do not match");
			passwordchangeform.newpassword.focus();
			return false;
		}
	}