function verify(form)
	{
		valid=false;
		var phn=document.forms[0].elements[2].value;
		var phnr=new RegExp("^[\\d]+$","g"); 
		if(phn.match(phnr))
		{
			valid=true;
		}
		else
		{
			alert("Please enter proper Number");
			return false;
		}
		if(phn.length<10)
		{
			alert("Please check for the number of digits");
			return(false);
		}
		var x=document.getElementById("html").checked;
		var y=document.getElementById("css").checked;
    	var z=document.getElementById("js").checked;
    	res=x&&y&&z;
    	if(res==false)
    	{
	    	alert("Select atleast one of the Subject");
	    	return false;
	    	document.forms[0].elements[6].focus();
    	}
    	else
    	{
	    	valid=true; 
    	}

	}
	function result()
	{
		var phn=document.getElementById("phn").value;
		var email=document.getElementById("email").value;
		var name=document.getElementById("name").value;
		var clg=document.getElementById("clg").value;
		document.write("Name:"+name);
		document.write("<br>");
		document.write("<br>");

		document.write("Email:"+email);
		document.write("<br>");
		document.write("<br>");

		document.write("Phoneno.:"+phn);
		document.write("<br>");
		document.write("<br>");

		document.write("College:"+clg);
		document.write("<br>");
	}






