<?php
    require "dbcon.php";

    // create data -------------------------------------------------------------

    function add_user($name,$email,$username,$password,$phone,$profession,$gender,$dob)
    {
        $sql = "INSERT INTO users(`name`,`email`,`username`,`password`,`phone`,`profession`,`gender`,`dob`)
        VALUES
        (
            '$name',
            '$email',
            '$username',
            '$password',
            '$phone',
            '$profession',
            '$gender',
            STR_TO_DATE('$dob', '%d-%m-%Y')
        )
        ";

        echo $sql;

       return execute_query($sql);

    }

    // create data -------------------------------------------------------------



    // retrieve data -----------------------------------------------------------

    function get_user_password($username)
    {

        $sql = "SELECT password from users where username = '$username'";
        $result = execute_query($sql);

        if (mysqli_num_rows($result) > 0)
        {
            return mysqli_fetch_assoc($result)['password'];
        }
    }

    function get_name($username)
    {
        $sql = "SELECT name from users where username = '$username'";
        $result = execute_query($sql);

        if (mysqli_num_rows($result) > 0)
        {
            return mysqli_fetch_assoc($result)['name'];
        }
    }

    function get_email($username){

      $sql = "SELECT email from users where username = '$username'";
      $result = execute_query($sql);

      if(mysqli_num_rows($result) > 0){

        return mysqli_fetch_assoc($result)['email'];
      }
    }

    function get_phone($username){

      $sql = "SELECT phone from users where username = '$username'";
      $result = execute_query($sql);

      if(mysqli_num_rows($result) > 0){

        return mysqli_fetch_assoc($result)['phone'];
      }
    }

    function get_profession($username){

      $sql = "SELECT profession from users where username = '$username'";
      $result = execute_query($sql);

      if(mysqli_num_rows($result) > 0){

        return mysqli_fetch_assoc($result)['profession'];
      }
    }

    function get_gender($username){

      $sql = "SELECT gender from users where username = '$username'";
      $result = execute_query($sql);

      if(mysqli_num_rows($result) > 0){

        return mysqli_fetch_assoc($result)['gender'];
      }
    }

    function get_dob($username){

      $sql = "SELECT dob from users where username = '$username'";
      $result = execute_query($sql);

      if(mysqli_num_rows($result) > 0){

        return mysqli_fetch_assoc($result)['dob'];
      }
    }

    function get_total_pending_users()
    {

        $sql = "";

    }

    function get_total_active_users()
    {
        $sql = "";
    }

    // retrieve data -----------------------------------------------------------



    // update data -------------------------------------------------------------

    function update_user_info($username, $name, $email, $phone, $profession, $gender, $dob){

      $sql = "UPDATE users SET
      username='$username',
      name='$name',
      email='$email',
      phone='$phone',
      profession='$profession',
      gender='$gender',
      dob=STR_TO_DATE('$dob', '%d-%m-%Y')
      WHERE username='$username'";

      return execute_query($sql);
    }

    function update_user_password($password){


    }

    // update data -------------------------------------------------------------



    // delete data -------------------------------------------------------------

    function del_user($username)
    {

        $sql = "DELETE FROM users where username = '$username'";
        return execute_query($sql);
    }

    // delete data -------------------------------------------------------------



    // other data --------------------------------------------------------------

    function approve_user($username)
    {

        $sql = "";

    }

    // other data --------------------------------------------------------------

?>
