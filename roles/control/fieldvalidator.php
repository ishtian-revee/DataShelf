<?php 

    $errors = array();
    function is_name_valid($name)
    {
        global $errors;

        if(isset($name) && !empty($name))
        {
            if(!is_numeric($name[0]) and str_word_count($name)>1)
            {
               
                return true;
            }
            else
            {
                array_push($errors,"Invalid Name");                
                return false;   
            }
        }
        else
        {
            array_push($errors,"Invalid Name");
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
                array_push($errors,"Invalid Email");   
                return false;      
            }
        }
        else
        {
            array_push($errors,"Invalid Email");
            return false;
        }
       
    }

    function is_username_valid($username)
    {
        global $errors;
        if(isset($username) && !empty($username))
        {
                $allowed = array(".", "-", "_"); 
                if(ctype_alnum(str_replace($allowed, '', $username ))) { //ctype_alnum : returns true if a string contains only alphanumeric otherwise false
                    return true;
                } 
                else 
                {
                    array_push($errors,"Invalid Username");
                    return false;
                }
        }
    }

    function is_password_valid($password)
    {
        global $errors;
        if(isset($password) and !empty($password))
        {
           
            if(strlen($password)>=6)
            {
                return true;
            }
            else
            {
                array_push($errors,"Password should be at least 6 character long");
                return false;                
            }
        }
        else
        {
            array_push($errors,"Invalid Password");
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
            array_push($errors,"Password Doesn't Match");
            return false;
        }
    }

    function is_gender_valid($gender)
    {
        return $gender == "Male" or $gender =="Female" or $gender == "Other"?True:False;
    }

    function is_date_valid($day,$month,$year)
    {
        global $errors;
        $sysdate = date("Y/m/d");
        
        if(isset($day) and !empty($day) and isset($month) and !empty($month) and isset($month) and !empty($month))
        {
            if($day>0 and $day<=31 and $month>0 and $month<=12 and $year>=1970 and $year<=1999)
            {
                return true;
            }
            else
            {
                array_push($errors,"Invalid Date");
                return false;
            }
        }
        else
        {
            array_push($errors,"Invalid Date");
            return false;
        }
    }

    function is_form_data_valid($name,$email,$username,$password1,$password2,$gender,$day,$month,$year)
    {
     
        return is_name_valid($name) and is_email_valid($email) and is_username_valid($username) and is_password_valid($password1) 
        and is_password_matching($password1,$password2) and is_gender_valid($gender) and is_date_valid($day,$month,$year);
    }
?>