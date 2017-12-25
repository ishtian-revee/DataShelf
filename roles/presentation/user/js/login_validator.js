// this function checks if the username is valid or not
function is_username_valid(username){

  // first checking for null input
  if(username == ""){

    alert("Please provide your username!");
    return false;
  }else{

    // checking if the username contains at least 2 characters
    if(strlen(username) > 1){

      // checking if the username is valid or not
      for(var i=0; i<username.length; i++){

        if((username[i] >= 'A' && username[i] <= 'Z') || (username[i] >= 'a' && username[i] <= 'z') ||
        (username[i] >= 0 && username[i] <= 9) || (username[i] == ".") || (username[i] == "-")
        || (username[i] == " ")){

          return true;
        }else{

          alert("Username can contain only alpha numeric characters, period(.), dash(-) or underscore(_) only.");
          return false;
        }
      }
    }else{

      alert("Username should be atleast 2 characters.");
      return false;
    }
  }
}

// this function checks if the password is valid or not
function is_password_valid(password){

  // first checking for null input
  if(password == ""){

    alert("Please provide your password!");
    return false;
  }else{

    // checking for 8 characters password
    if(strlen(password) >= 8){

      // checking if the password contains a special character or not
      if(password.search("@") || password.search("#") || password.search("$") || password.search("%")){

        return true;
      }else {

        alert("Password must contain atleas 1 special characters.");
        return false;
      }
    }else{

      alert("Password should be atleast 8 characters.");
      return false;
    }
  }
}

// this function will validate every input
function validateForm(){

  // input data
  var username = document.forms["signup_form"]["username"].value;
  var password = document.forms["signup_form"]["password"].value;

  return is_username_valid(username) && is_password_valid(password);
}
