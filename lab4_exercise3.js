function validateForm(fm)
{
  
  // check for username
  var username = document.forms["interaction"]["username"].value;
    var atpos = username.indexOf("@") +1;
    var dotpos = username.lastIndexOf(".") +1;
    if(username == "")
    {
      alert("Cannot leave username blank");
      return false;
    } 
    if(atpos < 1 || atpos+2 >= dotpos || dotpos > username.length - 2)
    {
      alert("Username should be an email and your input is not valid");
      return false;
    }
    //check for password
    var password = document.forms["interaction"]["password"].value;
    if(password == "")
    {
      alert("Password cannot be blank");
      return false;
    }

    //check for quantaties
    var quan1 = document.forms["interaction"]["unit1"].value;
    var quan2 = document.forms["interaction"]["unit2"].value;
    var quan3 = document.forms["interaction"]["unit3"].value;
    if(quan1 == "" || quan1 < 0 || quan2 == "" || quan2 < 0 || quan3 == "" || quan3 < 0)
    {
      alert("Your unit number in item are not valid (put 0 if you dont buy the item)");
      return false;
    }

    //check for shipping options
    var ship = document.forms["interaction"]["shipping"].value;
    if(ship == "")
    {
      alert("Please choose a shipping option");
      return false;
    }

    
}