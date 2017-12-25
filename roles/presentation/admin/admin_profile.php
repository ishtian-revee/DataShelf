<?php
require_once "../../control/admin/login_check.php";
require_once "../../control/admin/admin_profile_controller.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf-Admin(profile)</title>
  </head>

  <body>
    <br>
    <table width="1000" align="center" cellspacing="0" cellpadding="0">
      <tr>
        <td width="800">
          <a href="admin_dashboard.php">
            <img src="../res/admin/datashelf_admin_logo.png" alt="DataShelf Company Logo" height="45" title="DataShelf Admin">
          </a>
        </td>

        <td align="center">
          <a href="admin_profile.php"><h3><font face="calibri" color="#444444">Admin</font></h3></a>
        </td>

        <td width="36" align="center">
          <a href="admin_profile.php"><img src="../res/admin/ic_admin.png" alt="Admin Logo" width="22"></a>
        </td>

        <td width="10" align="center"><h3><font face="calibri" color="#444444"> | </font></h3></td>

        <td width="80" align="center">
          <a href="logout.php"><h3><font face="calibri" color="#444444">Logout</font></h3></a>
        </td>
      </tr>
    </table>
    <br>
    <table width="1000" align="center" cellspacing="0" cellpadding="0">
      <tr height="400">
        <td width="220" valign="top">
          <fieldset>
            <table width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td width="25%" align="center">
                  <img src="../res/admin/ic_dashboard.png" alt="Dashboard Icon" width="22">
                </td>

                <td>
                  <a href="admin_dashboard.php"><h3><font face="calibri" color="#888888">Dashboard</font></h3></a>
                </td>
              </tr>

              <tr>
                <td width="25%" align="center">
                  <img src="../res/admin/ic_profile.png" alt="Profile Icon" width="22">
                </td>

                <td>
                  <a href="admin_profile.php"><h3><font face="calibri" color="#444444">My Profile</font></h3></a>
                </td>
              </tr>

              <tr>
                <td width="25%" align="center">
                  <img src="../res/admin/ic_users.png" alt="Users Icon" width="22">
                </td>

                <td>
                  <a href="admin_users.php"><h3><font face="calibri" color="#888888">Users</font></h3></a>
                </td>
              </tr>

              <tr>
                <td width="25%" align="center">
                  <img src="../res/admin/ic_posts.png" alt="Posts Icon" width="22">
                </td>

                <td>
                  <a href="admin_posts.php"><h3><font face="calibri" color="#888888">Posts</font></h3></a>
                </td>
              </tr>

              <tr>
                <td width="25%" align="center">
                  <img src="../res/admin/ic_pendings.png" alt="Pendings Icon" width="22">
                </td>

                <td>
                  <a href="admin_pendings.php"><h3><font face="calibri" color="#888888">Pendings</font></h3></a>
                </td>
              </tr>

              <tr>
                <td width="25%" align="center">
                  <img src="../res/admin/ic_history.png" alt="History Icon" width="22">
                </td>

                <td>
                  <a href="admin_history.php"><h3><font face="calibri" color="#888888">History</font></h3></a>
                </td>
              </tr>
            </table>

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </fieldset>
        </td>

        <td valign="top">
          <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="4">
                <fieldset align="center">
                  <h3><font face="calibri" color="#444444">My Profile</font></h3>
                </fieldset>
              </td>
            </tr>

            <tr>
              <td width="60%">
                <h2><font face="calibri" color="#444444">Profile Info</font></h2>
                <hr width="150" align="left" noshade="noshde">
              </td>

              <td width="20%" align="center">
                <a href="admin_change_password.php">
                  <h3><font face="calibri" color="#888888">Change Password</font></h3>
                </a>
              </td>

              <td width="3%" align="center">
                <h3><font face="calibri" color="#444444">&middot;</font></h3>
              </td>

              <td width="12%" align="center">
                <a href="admin_edit_profile.php">
                  <h3><font face="calibri" color="#888888">Edit Profile</font></h3>
                </a>
              </td>
            </tr>

            <tr>
              <td colspan="4">
                <br>
                <table width="100%" cellspacing="10" cellpadding="0">
                  <tr>
                    <td width="25%">
                      <h3><font face="calibri" color="#444444">Name:</font></h3>
                    </td>

                    <td width="45%">
                      <p><font face="calibri" color="#888888" size="4"><b><?=$name?></b></font></p>
                    </td>

                    <td width="30%" align="center" valign="center" rowspan="4">
                      <img src="../res/admin/temp_user.png" alt="Profile Picture" height="220">
                      <!-- <br>
                      <a href="admin_change_picture.php">
                        <h4><font face="calibri" color="#888888">Change Picture</font></h4>
                      </a> -->
                    </td>
                  </tr>

                  <tr>
                    <td width="25%">
                      <h3><font face="calibri" color="#444444">Username:</font></h3>
                    </td>

                    <td width="45%">
                      <p><font face="calibri" color="#888888" size="4"><b><?=$username?></b></font></p>
                    </td>
                  </tr>

                  <tr>
                    <td width="25%">
                      <h3><font face="calibri" color="#444444">Email:</font></h3>
                    </td>

                    <td width="45%">
                      <p><font face="calibri" color="#888888" size="4"><b><?=$email?></b></font></p>
                    </td>
                  </tr>

                  <tr>
                    <td width="25%">
                      <h3><font face="calibri" color="#444444">Phone:</font></h3>
                    </td>

                    <td width="45%">
                      <p><font face="calibri" color="#888888" size="4"><b><?=$phone?></b></font></p>
                    </td>
                  </tr>

                  <tr>
                    <td width="25%">
                      <h3><font face="calibri" color="#444444">Gender:</font></h3>
                    </td>

                    <td colspan="2">
                      <p><font face="calibri" color="#888888" size="4"><b><?=$gender?></b></font></p>
                    </td>
                  </tr>

                  <tr>
                    <td width="25%">
                      <h3><font face="calibri" color="#444444">Hire Date:</font></h3>
                    </td>

                    <td colspan="2">
                      <p><font face="calibri" color="#888888" size="4"><b><?=$hire_date?></b></font></p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
