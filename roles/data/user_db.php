<?php
    require_once "dbcon.php";

    // create data -------------------------------------------------------------

    function add_user($name,$email,$username,$password,$phone,$profession,$gender,$status,$dob)
    {
        $sql = "INSERT INTO users(`name`,`email`,`username`,`password`,`phone`,`profession`,`gender`,`status`,`dob`)
        VALUES
        (
            '$name',
            '$email',
            '$username',
            '$password',
            '$phone',
            '$profession',
            '$gender',
            '$status',
            STR_TO_DATE('$dob', '%d-%m-%Y')
        )
        ";

        echo $sql;

       return execute_query($sql);
    }

    // function add_user($name,$email,$username,$password,$phone,$profession,$gender,$dob)
    // {
    //
    //    $sql = "INSERT INTO users(`name`,`email`,`username`,`password`,`phone`,`profession`,`gender`,`dob`)
    //    VALUES
    //    (
    //        '$name',
    //        '$email',
    //        '$username',
    //        '$password',
    //        '$phone',
    //        '$profession',
    //        '$gender',
    //        STR_TO_DATE('$dob', '%d-%m-%Y')
    //    )
    //    ";
    //
    //    echo $sql;
    //
    //   return execute_query($sql);
    //
    // }

    // create data -------------------------------------------------------------



    // retrieve data -----------------------------------------------------------

    function get_user_data_V2($username)
    {
      $sql =  "SELECT
      `username`,`name`,`email`,`phone`,`profession`,`gender`,`dob`,`pp_path`,
      DATEDIFF(CURRENT_TIMESTAMP,`registration_date`) as registration_date
      FROM users
      where username = '$username'";
      $result = execute_query($sql);

      return mysqli_fetch_assoc($result);
    }

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

   function get_registration_date()
   {
     $username = $_SESSION['username'];
    $sql = "SELECT registration_date from users where username = '$username' ";
    $result = execute_query($sql);
    $timestamp = mysqli_fetch_assoc($result)['registration_date'];
    return explode(" ",$timestamp)[0];
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

    function update_user_password($username, $password){

      $sql = "UPDATE users SET password='$password' WHERE username='$username'";

      return execute_query($sql);
    }

    function update_pp_path()
    {
      $username = $_SESSION['username'];
      $sql = "INSERT into users SET pp_path = '$path' where username = '$username'";

      return execute_query($sql);
    }
    function approve_user($username)
    {

        $sql = "";

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

    // other data --------------------------------------------------------------

?>
