<?php

  // $errors = array();

  function is_name_valid($name)
  {
      global $errors;

      if(isset($name) && !empty($name))
      {
          if(!is_numeric($name[0]) and str_word_count($name)>1)
          {
            for($i=0; $i<strlen($name); $i++){

              if(($name[$i] >= 'A' && $name[$i] <= 'Z') || ($name[$i] >= 'a'
              && $name[$i] <= 'z') || ($name[$i] == ".") || ($name[$i] == "-")
              || ($name[$i] == " ")){

                return true;
              }else{

                echo "Name can contain only alphabets, alpha-numerics, dot(.), dash(-) and space!";
                return  false;
              }
            }
          }
          else
          {
              echo "First character of the name must be a letter and name must be more than 1 word";
              return false;
          }
      }
      else
      {
          echo "Name field is null!";
          return false;
      }
  }

  function is_email_valid($email)
  {
      global $errors;
      if(isset($email) && !empty($email))
      {

          $firstCharCheck = (!is_numeric($email[0])); //Stores false if first character is numeric
          $atCheck = strpos($email,'@');
          $dotCheck = strpos($email,'.');

          if($firstCharCheck and $atCheck and $dotCheck)
          {
             return true;
          }
          else
          {
              echo "Email is not valid. Please insert a valid input.";
              return false;
          }
      }
      else
      {
          echo "Email field is null!";
          return false;
      }
  }

  function is_username_valid($username)
  {
      global $errors;
      if(isset($username) && !empty($username))
      {

        // checking if the username is at least 2 characters or not
        if(strlen($username) > 2){

          $allowed = array(".", "-", "_");
          if(ctype_alnum(str_replace($allowed, '', $username ))) { //ctype_alnum : returns true if a string contains only alphanumeric otherwise false
              return true;
          }
          else
          {
              echo "Username can contain only alpha numeric characters, period(.), dash(-) or underscore(_) only.";
              return false;
          }
        }else {

          echo "Username should be atleast 2 characters.";
          return false;
        }
      }
      else
      {
          echo "Username field is null!";
          return false;
      }
  }

  function is_password_valid($password)
  {
      global $errors;
      if(isset($password) and !empty($password))
      {

          if(strlen($password)>=6)
          {
            if(strpos($password, '@') || strpos($password, '#') ||
            strpos($password, '$') || strpos($password, '%')){

                return true;
              }else{

                echo "Password must contain atleas 1 special characters.";
                return $validPassword2 = false;
              }
          }
          else
          {
              echo "Password should be at least 6 character long";
              return false;
          }
      }
      else
      {
          echo "Password field is null!";
          return false;
      }
  }

  function is_password_matching($password1,$password2)
  {
      global $errors;
      if(isset($password1) and !empty($password2) and isset($password2) and !empty($password2))
      {
          return !strcmp($password1,$password2);
      }
      else
      {
          echo "Password Doesn't Match";
          return false;
      }
  }

  function is_phone_valid($phone){

    global $errors;
    if(isset($phone)){

      if(strlen($phone) == 11 && $phone[0] == 0){

        for($i=0; $i<strlen($phone); $i++){

          if($phone[$i] >= 0 && $phone[$i] <= 9){

            return true;
          }else{

            echo "Phone number is not valid. Please insert a valid phone number!";
            return false;
          }
        }
      }else{

        echo "Phone number must contain 11 digits and first digit should be 0!");
        return false;
      }
    }else{

      echo "Phone field is null";
      return false;
    }
  }

  function is_gender_valid($gender)
  {
      if(isset($gender)){

        return true;
      }else{

        echo "Gender field is null!";
        return false;
      }
  }

  function is_date_valid($day,$month,$year)
  {
      global $errors;
      $sysdate = date("Y/m/d");

      if(isset($day) and !empty($day) and isset($month) and !empty($month) and isset($month) and !empty($month))
      {
          if($day>0 and $day<=31 and $month>0 and $month<=12 and $year>=1960 and $year<=2017)
          {
              return true;
          }
          else
          {
              echo "Invalid Date";
              return false;
          }
      }
      else
      {
          echo "Invalid Date";
          return false;
      }
  }

  function is_form_data_valid($name, $email, $username, $password1, $password2,
  $phone, $gender, $day, $month, $year)
  {

      return is_name_valid($name) and is_email_valid($email) and is_username_valid($username) and
      is_password_valid($password1) and is_password_matching($password1,$password2) and is_phone_valid($phone) and
      is_gender_valid($gender) and is_date_valid($day,$month,$year);
  }
?>
