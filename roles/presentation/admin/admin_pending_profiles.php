<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf-Admin(pending profiles)</title>
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
          <a href="admin_profile.php"><h3><font face="calibri" color="#888888">Admin</font></h3></a>
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
                  <a href="admin_profile.php"><h3><font face="calibri" color="#888888">My Profile</font></h3></a>
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
                  <a href="admin_pendings.php"><h3><font face="calibri" color="#444444">Pendings</font></h3></a>
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
                  <h3><font face="calibri" color="#444444">Pending Profiles</font></h3>
                </fieldset>
              </td>
            </tr>

            <tr>
              <td width="60%">
                <h2><font face="calibri" color="#444444">Profile Info</font></h2>
                <hr width="150" align="left" noshade="noshde">
              </td>

              <td width="20%" align="center">

              </td>

              <td width="3%" align="center">

              </td>

              <td width="12%" align="center">

              </td>
            </tr>

            <!-- <tr>
              <td colspan="4">
                <br>
                <form action="">
                  <table width="100%" cellspacing="10" cellpadding="0">
                    <tr>
                      <td width="25%">
                        <h3><font face="calibri" color="#444444">Name:</font></h3>
                      </td>

                      <td width="45%">
                        <p><font face="calibri" color="#888888" size="4"><b>Bruce Wayne</b></font></p>
                      </td>

                      <td width="30%" align="center" valign="center" rowspan="4">
                        <img src="../res/admin/temp_user.png" alt="Profile Picture" height="220">
                      </td>
                    </tr>

                    <tr>
                      <td width="25%">
                        <h3><font face="calibri" color="#444444">Username:</font></h3>
                      </td>

                      <td width="45%">
                        <p><font face="calibri" color="#888888" size="4"><b>bruce</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="25%">
                        <h3><font face="calibri" color="#444444">Email:</font></h3>
                      </td>

                      <td width="45%">
                        <p><font face="calibri" color="#888888" size="4"><b>bruce@wayne.batman</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="25%">
                        <h3><font face="calibri" color="#444444">Phone:</font></h3>
                      </td>

                      <td width="45%">
                        <p><font face="calibri" color="#888888" size="4"><b>01777777777</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="25%">
                        <h3><font face="calibri" color="#444444">Gender:</font></h3>
                      </td>

                      <td colspan="2">
                        <p><font face="calibri" color="#888888" size="4"><b>Male</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="25%">
                        <h3><font face="calibri" color="#444444">Hire Date:</font></h3>
                      </td>

                      <td colspan="2">
                        <p><font face="calibri" color="#888888" size="4"><b>01.01.2000</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="3"><hr noshade="noshade"></td>
                    </tr>

                    <tr>
                      <td colspan="3" align="right">
                        <br>
                        <input type="submit" name="reject" value="Reject">
                        <input type="submit" name="approve" value="Approve">
                      </td>
                    </tr>
                  </table>
                </form>
              </td>
            </tr> -->

            <tr>
              <td colspan="4">
                <br>
                <form action="admin_pendings.php">
                  <table width="100%" cellspacing="10" cellpadding="0">
                    <tr>
                      <td width="25%">
                        <h3><font face="calibri" color="#444444">Name:</font></h3>
                      </td>

                      <td width="45%">
                        <p><font face="calibri" color="#888888" size="4"><b>Bruce Wayne</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="25%">
                        <h3><font face="calibri" color="#444444">Username:</font></h3>
                      </td>

                      <td width="45%">
                        <p><font face="calibri" color="#888888" size="4"><b>bruce</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="25%">
                        <h3><font face="calibri" color="#444444">Email:</font></h3>
                      </td>

                      <td width="45%">
                        <p><font face="calibri" color="#888888" size="4"><b>bruce@wayne.batman</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="25%">
                        <h3><font face="calibri" color="#444444">Phone:</font></h3>
                      </td>

                      <td width="45%">
                        <p><font face="calibri" color="#888888" size="4"><b>01777777777</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="25%">
                        <h3><font face="calibri" color="#444444">Gender:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>Male</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="25%">
                        <h3><font face="calibri" color="#444444">Hire Date:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>01.01.2000</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="2"><hr noshade="noshade"></td>
                    </tr>

                    <tr>
                      <td>
                        <a href="admin_pendings.php">
                          <p><font face="calibri" color="#888888" size="4"><b>Back</b></font></p>
                        </a>
                      </td>

                      <td align="right">
                        <input type="submit" name="reject" value="Reject">
                        <input type="submit" name="approve" value="Approve">
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