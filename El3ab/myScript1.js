function validateRegister()
{
   var un = document.forms["myForm"]["uname"].value;
   var pasw = document.forms["myForm"]["psw"].value; 
   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
   var mail = document.forms["myForm"]["email"].value;

  if (un == "")
  {
	 alert("Name must be filled out");
     return false;
	 
  } 
  if (pasw.length < 10  )
  {
	 alert("your Password length can't be less than 10 characters");
	 return false ;
  }
  /*
  if (pasw.search[/A-Z/i] < 0 )
  {
	 alert("No");
	 return false ;
  }	
*/  

}


/*

  if (pasw.length < 10 || y.test(/[A-Z]/) < 1 )
  {
	 alert("your Password length can't be less than 10 characters and contains at least 1 upper case character");
  }
  if (mail.value.match(mailformat)
  {
	  return true ;
  }
  else 
  {
	  alert("You have entered an invalid email address!");
	  return false ;
  }	 
*/