<?php
if(isset($_GET['status']))
  {
    $status = $_GET['status'];
    if($status == "failed")
    {
      $status = ' <h3><font face="calibri" color="red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid Credentials</font></h3>';
    }

  }
  else
  {
    $status = '';
  }

  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf-Admin(login)</title>
  </head>

  <body>
    <form name="login_form" action="../../control/admin/login_control.php" onsubmit="return validateForm()" method="POST">
      <table width="400" align="center" valign="center" cellspacing="0" cellpadding="0">
        <tr>
          <td><br><br><br><br><br><br></td>
        </tr>

        <tr>
          <td align="center" valign="center">
            <img src="../res/admin/datashelf_admin_logo.png" alt="DataShelf Company Logo" height="45" title="DataShelf Admin">
            <br><br><hr width="300" noshade="noshade"><br>
          </td>
        </tr>

        <tr>
          <td>
            <h1><font face="calibri" color="#444444">Login</font></h1>
            <fieldset>
              <p><font face="calibri" color="#444444" size="4"><b>Username</b></font></p>
              <input type="text" name="username" size="45">
              <p><font face="calibri" color="#444444" size="4"><b>Password</b></font></p>
              <input type="password" name="password" size="45"><br>

              <br><hr noshade="noshade"><br>
              
              <?=$status?>

              <input type="submit" name="login" value="LOGIN">
            </fieldset>
          </td>
        </tr>
      </table>
    </form>

    <script src="/js/login_validator.js"></script>
  </body>
</html>
