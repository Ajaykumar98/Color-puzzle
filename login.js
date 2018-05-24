function validatepwd()
{
	var p=document.rform.password.value;
	if(p=="")
	{
		
		document.rform.password.focus();
		return false;
	}		
	if(document.rform.uname.value==p)
	{
		
		document.rform.password.focus();
		return false;
	}
	re=/[0-9]/;
	if(!re.test(p))
	{
		
		document.rform.password.focus();	
		return false;
	}
	re=/[A-Z]/;
	if(!re.test(p))
	{
		
		document.rform.password.focus();	
		return false;
	}
	if(p.length<6)
	{
		
		document.rform.password.focus();
		return false;
	}
	return true;
}
function validate()
{
	if(document.rform.uname.value=="")
	{
		alert("Please enter your username!");
		document.rform.uname.focus();
		return false;
	}
	else
	{
		<!--var result=validatepwd();
		if(result==false)
		{
			return false;
		}-->
	}
	return(true);
}