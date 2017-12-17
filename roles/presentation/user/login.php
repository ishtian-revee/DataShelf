<?php
  require "../../control/logincheck.php"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf(login)</title>
  </head>

  <body>
    <br>
    <table width="1000" align="center" cellspacing="0" cellpadding="0">
      <tr>
        <td width="36%">
          <a href="home.php">
            <img src="../res/website/datashelf_logo.png" alt="DataShelf Company Logo" height="45" title="DataShelf">
          </a>
        </td>

        <td width="8%" align="center">
          <a href="home.php"><h3><font face="calibri" color="#888888">Home</font></h3></a>
        </td>

        <td width="12%" align="center">
          <a href="marketplace.php"><h3><font face="calibri" color="#888888">Marketplace</font></h3></a>
        </td>

        <td width="13%" align="center">
          <a href="competitions.php"><h3><font face="calibri" color="#888888">Competitions</font></h3></a>
        </td>

        <td width="12%" align="center">
          <a href="discussions.php"><h3><font face="calibri" color="#888888">Discussions</font></h3></a>
        </td>

        <td width="9%" align="center">
          <a href="cart.php"><h3><font face="calibri" color="#888888">Cart</font></h3></a>
        </td>

        <td width="3%" align="center">
          <h3><font face="calibri" color="#444444">|</font></h3>
        </td>

        <td width="7%" align="center">
          <a href="<?= $target ?>"><h3><font face="calibri" color="#888888"><?=$context?></font></h3></a>
        </td>
      </tr>

      <tr>
        <td colspan="8">
          <br><br><br><br><br>
          <form action="../../control/login_control.php" method="POST">
            <table width="400" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="20%">
                  <a href="login.php"><h2><font face="calibri" color="#444444">Log In</font></h2></a>
                </td>

                <td width="7%">
                  <h2><font face="calibri" color="#444444">&middot;</font></h2>
                </td>

                <td width="30%">
                  <a href="registration.php"><h2><font face="calibri" color="#888888">Sign Up</font></h2></a>
                </td>

                <td width="43%"></td>
              </tr>

              <tr>
                <td colspan="4"><br></td>
              </tr>

              <tr>
                <td colspan="4">
                  <h3><font face="calibri" color="#444444">Username</font></h3>
                  <input type="text" name="username" size="40">
                  <h3><font face="calibri" color="#444444">Password</font></h3>
                  <input type="password" name="password" size="40">
                  <br><br>

                  <input type="checkbox" name="loggedin">
                  <label><font face="calibri" color="#888888" size="4"><b>Keep me logged in</b></font></label>

                  <br><br><hr noshade="noshade">
                </td>
              </tr>

              <tr>
                <td colspan="4" align="right">
                  <br>
                  <input type="reset" name="reset" value="Reset">
                  <input type="submit" name="login" value="Login">
                </td>
              </tr>
            </table>
          </form>
        </td>
      </tr>

      <tr>
        <td colspan="8"><br><br><br><hr noshade="noshade"></td>
      </tr>

      <tr>
        <td colspan="8">
          <table width="100%" align="center" cellspacing="0" cellpadding="0">

            <tr>
              <td colspan="3"><br></td>
            </tr>

            <tr>
              <td width="20%">
                <a href="home.php">
                  <img src="../res/website/datashelf_logo.png" alt="DataShelf Company Logo" height="30" title="DataShelf">
                </a>
              </td>

              <td width="55%"  align="center">
                <p><font face="calibri" color="#888888" size="4"><b>Copyright &copy; 2017 DataShelf inc.</b></font></p>
              </td>

              <td width="20%">
                <table width="100%" align="center" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="32%" align="center">
                      <a href="#about">
                        <p><font face="calibri" color="#888888" size="4"><b>About</b></font></p>
                      </a>
                    </td>

                    <td width="32%" align="center">
                      <a href="team.php">
                        <p><font face="calibri" color="#888888" size="4"><b>Team</b></font></p>
                      </a>
                    </td>

                    <td width="36%" align="center">
                      <a href="contact.php">
                        <p><font face="calibri" color="#888888" size="4"><b>Contact</b></font></p>
                      </a>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>

            <tr>
              <td colspan="3"><br><br></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
