<?php
    require_once "dbcon.php";

    // create data -------------------------------------------------------------

    function add_admin($name,$email,$username,$password,$phone,$gender,$hire_date)
    {
        $sql = "INSERT INTO admins(`name`,`email`,`username`,`password`,`phone`,`gender`,`hire_date`)
        VALUES
        (
            '$name',
            '$email',
            '$username',
            '$password',
            '$phone',
            '$gender',
            STR_TO_DATE('$hire_date', '%d-%m-%Y')
        )
        ";

        echo $sql;

       return execute_query($sql);

    }


    // create data -------------------------------------------------------------



    // retrieve data -----------------------------------------------------------

    function get_admin_data_V2($username)
    {
      $sql =  "SELECT
      `username`,`name`,`email`,`phone`,`gender`,`hire_date`,`pp_path`
      FROM admins
      where username = '$username'";
      $result = execute_query($sql);

      return mysqli_fetch_assoc($result);
    }

    function get_admin_password($username)
    {

        $sql = "SELECT password from admins where username = '$username'";
        $result = execute_query($sql);

        if (mysqli_num_rows($result) > 0)
        {
            return mysqli_fetch_assoc($result)['password'];
        }
    }

    function get_name($username)
    {
        $sql = "SELECT name from admins where username = '$username'";
        $result = execute_query($sql);

        if (mysqli_num_rows($result) > 0)
        {
            return mysqli_fetch_assoc($result)['name'];
        }
    }

    function get_email($username){

      $sql = "SELECT email from admins where username = '$username'";
      $result = execute_query($sql);

      if(mysqli_num_rows($result) > 0){

        return mysqli_fetch_assoc($result)['email'];
      }
    }

    function get_phone($username){

      $sql = "SELECT phone from admins where username = '$username'";
      $result = execute_query($sql);

      if(mysqli_num_rows($result) > 0){

        return mysqli_fetch_assoc($result)['phone'];
      }
    }

    function get_gender($username){

      $sql = "SELECT gender from admins where username = '$username'";
      $result = execute_query($sql);

      if(mysqli_num_rows($result) > 0){

        return mysqli_fetch_assoc($result)['gender'];
      }
    }

    function get_hire_date($username){

      $sql = "SELECT hire_date from admins where username = '$username'";
      $result = execute_query($sql);

      if(mysqli_num_rows($result) > 0){

        return mysqli_fetch_assoc($result)['hire_date'];
      }
    }

 

    

    // retrieve data -----------------------------------------------------------



    // update data -------------------------------------------------------------

    function update_admin_info($username, $name, $email, $phone, $gender){

      $sql = "UPDATE admins SET
      username='$username',
      name='$name',
      email='$email',
      phone='$phone',
      gender='$gender'
      WHERE username='$username'";

      return execute_query($sql);
    }

    function update_admin_password($username, $password){

      $sql = "UPDATE admins SET password='$password' WHERE username='$username'";

      return execute_query($sql);
    }

    // update data -------------------------------------------------------------



    // delete data -------------------------------------------------------------

    function del_admin($username)
    {

        $sql = "DELETE FROM admins where username = '$username'";
        return execute_query($sql);
    }

    // delete data -------------------------------------------------------------



    // other data --------------------------------------------------------------



    // other data --------------------------------------------------------------

?>
