<?php  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf-Admin(change password)</title>
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
                  <h3><font face="calibri" color="#444444">Change Password</font></h3>
                </fieldset>
              </td>
            </tr>

            <tr>
              <td width="60%">
                <h2><font face="calibri" color="#444444">Password Info</font></h2>
                <hr width="150" align="left" noshade="noshde">
              </td>

              <td width="20%" align="center">
                <a href="admin_change_password.php">
                  <h3><font face="calibri" color="#444444">Change Password</font></h3>
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
                <form action="admin_profile.php">
                  <table width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="30%"><h3><font face="calibri" color="#444444">Current Password:</font></h3></td>

                      <td><input name="current_password" type="password" size="32"></td>
                    </tr>

                    <tr>
                      <td width="30%"><h3><font face="calibri" color="#444444">New Password:</font></h3></td>

                      <td><input name="new_password" type="password" size="32"></td>
                    </tr>

                    <tr>
                      <td width="30%"><h3><font face="calibri" color="#444444">Retype Password:</font></h3></td>

                      <td><input name="retype_password" type="password" size="32"></td>
                    </tr>

                    <tr>
                      <td colspan="2"><br></td>
                    </tr>

                    <tr>
                      <td colspan="2"><hr noshade="noshade"></td>
                    </tr>

                    <tr>
                      <td colspan="2"><br></td>
                    </tr>

                    <tr>
                      <td colspan="2" align="right">
                        <input type="reset" name="reset" value="Reset">
                        <input type="submit" name="submit" value="Save Changes">
                      </td>
                    </tr>
                  </table>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
