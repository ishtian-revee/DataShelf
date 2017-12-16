<?php
    require "dbcon.php";

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

    function del_user($username)
    {
        
        $sql = "DELETE FROM users where username = '$username'";
        return execute_query($sql);
    }

    function approve_user($username)
    {
        
        $sql = "";

    }

    function get_user_password($username)
    {
        
        $sql = "SELECT password from users where username = '$username'";
        $result = (execute_query($sql));
        
        if (mysqli_num_rows($result) > 0)
        {
            return mysqli_fetch_assoc($result)['password'];
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


?>