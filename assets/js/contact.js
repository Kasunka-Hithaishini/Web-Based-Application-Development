function validation() {
	var fname= document.getElementById("fname").value;
	var lname= document.getElementById("lname").value;
	var email= document.getElementById("email").value;
	var province= document.getElementById("province").value;
	var messege= document.getElementById("messege").value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	error.style.padding="10px";

    if(fname=="")
    {
    	text="Enter First Name";
    	error.innerHTML=text;
    	return false;
    }
   if(lname=="")
    {
    	text="Enter Last Name";
    	error.innerHTML=text;
    	return false;
    }
    
    if(email=="")
    {
    	text="Enter Email";
    	error.innerHTML=text;
    	return false;
    }

    if(!email.match(mailformat))
    {
    
        text="Invalid Email";
    	error.innerHTML=text;
    	return false;
    }


    if(province=="Default")
    {
    	text="Select a Province";
    	error.innerHTML=text;
        return false;
    }


    if(messege=="")
    {
    	text="Enter Messege";
    	error.innerHTML=text;
    	return false;
    }
   
    
    return true;

}


