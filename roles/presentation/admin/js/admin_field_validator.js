// function validateForm(){
//
//   // input data
//   var name = document.forms["signup_form"]["name"].value;
//   var email = document.forms["signup_form"]["email"].value;
//   var username = document.forms["signup_form"]["username"].value;
//   var password = document.forms["signup_form"]["password"].value;
//   var phone = document.forms["signup_form"]["phone"].value;
//   var profession = document.forms["signup_form"]["profession"].value;
//   var gender = document.forms["signup_form"]["gender"].value;
//   var day = document.forms["signup_form"]["day"].value;
//   var month = document.forms["signup_form"]["month"].value;
//   var year = document.forms["signup_form"]["year"].value;
//   var term = document.forms["signup_form"]["term"].value;
//
//   if(name == ""){
//
//     alert("Please provide your name!");
//     name.focus();
//     return false;
//   }
//
//   if(email == ""){
//
//     alert("Please provide your email!");
//     email.focus();
//     return false;
//   }
//
//   if(username == ""){
//
//     alert("Please provide your username!");
//     username.focus();
//     return false;
//   }
//
//   if(password == ""){
//
//     alert("Please provide your password!");
//     password.focus();
//     return false;
//   }
//
//   if(phone == ""){
//
//     alert("Please provide your phone!");
//     phone.focus();
//     return false;
//   }
//
//   if(profession == ""){
//
//     alert("Please provide your profession!");
//     profession.focus();
//     return false;
//   }
//
//   if(gender == ""){
//
//     alert("Please provide your gender!");
//     gender.focus();
//     return false;
//   }
//
//   if(day == "" || month == "" || year == ""){
//
//     alert("Please provide your date of birth!");
//     day.focus();
//     month.focus();
//     year.focus();
//     return false;
//   }
//
//   if(term == ""){
//
//     alert("Please check the checkbox of terms and services policies!");
//     term.focus();
//     return false;
//   }
// }

// this function checks if the name is valid or not
function is_name_valid(name){

  // first checking for null input
  if(name == ""){

    alert("Please provide your name!");
    return false;
  }else{

    // counting words for name
    var count = 0;
    for(var i=0; i<name.length; i++) {

       if(name.charAt(i) == " ") {

            count++;
        }
    }

    // checking for first name character and total words
    if(!isNaN(name[0]) && count > 0){

      // checking if the name contains valid characters or not
      for(var i=0; i<name.length; i++){

        if((name[i] >= 'A' && name[i] <= 'Z') || (name[i] >= 'a' && name[i] <= 'z') ||
        (name[i] == ".") || (name[i] == "-") || (name[i] == " ")){

          return true;
        }else{

          alert("Name can contain only alphabets, alpha-numerics, dot(.), dash(-) and space!");
          return false;
        }
      }
    }else{

      alert("First character of the name must be a letter and name must be more than 1 word");
      return false;
    }
  }
}

// this function checks if the email is valid or not
function is_email_valid(email){

  // first checking for null input
  if(email == ""){

    alert("Please provide your email!");
    return false;
  }else{

    var atCheck = email.indexOf("@");
    var dotCheck = email.indexOf(".com");

    // checking if the mail is valid or not
    if(atCheck && dotCheck){

      return true;
    }else{

      alert("Email is not valid. Please insert a valid input.");
      return false;
    }
  }
}

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

// this function checks if the password is valid or not
function is_phone_valid(phone){

  // first checking for null input
  if(phone == ""){

    alert("Please provide your phone number!");
    return false;
  }else{

    // checking if the phone number is in 11 digit or not and the first digit is 0
    if(strlen(phone) >= 11 && phone[0] == 0){

      // checking if all the characters are alpha numeric or not
      for(var i=0; i<phone.length; i++){

        if(phone[i] >= 0 && phone[i] <= 9){

          return true;
        }else {

          alert("Phone number is not valid. Please insert a valid phone number!");
          return false;
        }
      }
    }else {

      alert("Phone number must contain 11 digits and first digit should be 0!");
      return false;
    }
  }
}

// this function checks if the gender is valid or not
function is_gender_valid(gender){

  // first checking for null input
  if(gender == ""){

    alert("Please provide your gender information!");
    return false;
  }else{

    return true;
  }
}

// this function checks if the date of birth is valid or not
function is_date_valid(day, month, year){

  var isLeapYear = false;

  // first checking for null input
  if(gender == ""){

    alert("Please provide your gender information!");
    return false;
  }else{

    // chcking for valid month
    if((month < 0) || (month > 12)){
      alert("Invalid Month. Insert a proper date.");
      return false;
    }

    // chcking for valid year
    if((year < 1953) || (year > 1998)){
      alert("Invalid Year. Insert a proper date.");
      return false;
    }

    // leap year calculation
    if(year%4 == 0){

      if(year%100 == 0){

        if(year%400 == 0){

          isLeapYear = true;
        }
      }else {

        isLeapYear = true;
      }
    }

    // checking for leap year
    if(isLeapYear){

      if(month == 2){

        if((day < 0) || (day > 29)){

          alert("The year is a leap year. Insert a day between (1-29).");
          return false;
        }
      }else{

        if((day < 0) || (day > 31)){

          alert("Invalid Day. Insert a proper date.");
          return false;
        }
      }
    }else{

      if((day < 0) || (day > 31)){

        alert("Invalid Day. Insert a proper date.");
        return false;
      }
    }

    return true;
  }
}