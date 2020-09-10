function errorScroll1()
{
  $('html, body').animate({
    scrollTop: ($('.error-message').offset().top - 80)
}, 500);
}

function errorScroll2()
{
  $('html, body').animate({
    scrollTop: ($('.error-message').offset().top - (-250))
}, 500);
}

function validation()
{

  var firstname = document.getElementById("fname").value;
  var lastname = document.getElementById("lname").value;
  var username = document.getElementById("uname").value;
  var email = document.getElementById("uemail").value;
  var age = document.getElementById("age").value;
  var course = document.getElementById("course").value;
  var password = document.getElementById("pass").value;
  var confirm_password = document.getElementById("cf_pass").value;

  if(firstname  == "")
  {
    var errorMessage = document.getElementsByClassName("error-message")[0];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* First name cannot be empty *";
    
    errorScroll1();
    return false;
  }

  if(firstname.length <=1 || firstname.length>=30)
  {
    var errorMessage = document.getElementsByClassName("error-message")[0];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Please enter firstname in the range of 1 - 30 characters *";
    
    errorScroll1();
    return false;
  }

  if (!firstname.match(/^[a-zA-Z]+$/)) 
  {
    var errorMessage = document.getElementsByClassName("error-message")[0];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Only letters allowed in username *";

    errorScroll1();
    return false;
  }

  if(lastname  == "")
  {
    var errorMessage = document.getElementsByClassName("error-message")[1];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Last name cannot be empty *";
    
    errorScroll1();
    return false;
  }

  if (!lastname.match(/^[a-zA-Z]+$/)) 
  {
    var errorMessage = document.getElementsByClassName("error-message")[1];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Only letters allowed in lastname *";
    errorScroll1();
    return false;
  }

  if(lastname.length <=1 || lastname.length>=30)
  {
    var errorMessage = document.getElementsByClassName("error-message")[1];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Please enter lastname in the range of 1 - 30 characters *";
    
    errorScroll1();
    return false;
  }



  if(username  == "")
  {
    var errorMessage = document.getElementsByClassName("error-message")[2];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Username cannot be empty *";
    errorScroll1();
    return false;
  }

  if(username.length <=2 || username.length>=15)
  {
    var errorMessage = document.getElementsByClassName("error-message")[2];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Please enter lastname in the range of 2 - 30 characters *";
    
    errorScroll1();
    return false;
  }

  if(email  == "")
  {
    var errorMessage = document.getElementsByClassName("error-message")[3];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Email cannot be empty *";
    errorScroll2();
    return false;
  }

  if(age  == "")
  {
    var errorMessage = document.getElementsByClassName("error-message")[4];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Age cannot be empty *";
    errorScroll2();
    return false;
  }
  if(age <=16 || age>=50)
  {
    var errorMessage = document.getElementsByClassName("error-message")[4];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Age should be in the range of 16 and 50 *";
    errorScroll2();
    return false;
  }
  if(isNaN(age))
  {
    var errorMessage = document.getElementsByClassName("error-message")[4];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Age can only be a number *";
    errorScroll2();
    return false;
  }

  if(course  == "")
  {
    var errorMessage = document.getElementsByClassName("error-message")[5];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Course cannot be empty *";
    errorScroll2();
    return false;
  }

  if(password  == "")
  {
    var errorMessage = document.getElementsByClassName("error-message")[6];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Password cannot be empty *";
    return false;
  }

  if(confirm_password  == "")
  {
    var errorMessage = document.getElementsByClassName("error-message")[7];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Comfirm password cannot be empty *";
    return false;
  }

  if(!(password  == confirm_password))
  {
    var errorMessage = document.getElementsByClassName("error-message")[7];
    errorMessage.style.color = "#D90429";
    errorMessage.style.fontSize = "1.5rem";
    errorMessage.innerHTML = "* Passwords don't match please re enter *";
    return false;

  }
  return true;
  
}





