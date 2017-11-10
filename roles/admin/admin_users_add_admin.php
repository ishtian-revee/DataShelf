<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf-Admin(users/add_admins)</title>
  </head>

  <body>
    <br>
    <table width="1000" align="center" cellspacing="0" cellpadding="0">
      <tr>
        <td width="800">
          <a href="../admin/admin_dashboard.html">
            <img src="../res/datashelf_admin_logo.png" alt="DataShelf Company Logo" height="45" title="DataShelf Admin">
          </a>
        </td>

        <td align="center">
          <a href="#"><h3><font face="calibri" color="#444444">Admin</font></h3></a>
        </td>

        <td width="36" align="center">
          <a href="#"><img src="../res/ic_admin.png" alt="Admin Logo" width="22"></a>
        </td>

        <td width="10" align="center"><h3><font face="calibri" color="#444444"> | </font></h3></td>

        <td width="80" align="center">
          <a href="#"><h3><font face="calibri" color="#444444">Logout</font></h3></a>
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
                  <img src="../res/ic_dashboard.png" alt="Dashboard Icon" width="22">
                </td>

                <td>
                  <a href="../admin/admin_dashboard.html"><h3><font face="calibri" color="#888888">Dashboard</font></h3></a>
                </td>
              </tr>

              <tr>
                <td width="25%" align="center">
                  <img src="../res/ic_profile.png" alt="Profile Icon" width="22">
                </td>

                <td>
                  <a href="../admin/admin_profile.html"><h3><font face="calibri" color="#888888">My Profile</font></h3></a>
                </td>
              </tr>

              <tr>
                <td width="25%" align="center">
                  <img src="../res/ic_users.png" alt="Users Icon" width="22">
                </td>

                <td>
                  <a href="../admin/admin_users.html"><h3><font face="calibri" color="#444444">Users</font></h3></a>
                </td>
              </tr>

              <tr>
                <td width="25%" align="center">
                  <img src="../res/ic_posts.png" alt="Posts Icon" width="22">
                </td>

                <td>
                  <a href="../admin/admin_posts.html"><h3><font face="calibri" color="#888888">Posts</font></h3></a>
                </td>
              </tr>

              <tr>
                <td width="25%" align="center">
                  <img src="../res/ic_pendings.png" alt="Pendings Icon" width="22">
                </td>

                <td>
                  <a href="../admin/admin_pendings.html"><h3><font face="calibri" color="#888888">Pendings</font></h3></a>
                </td>
              </tr>

              <tr>
                <td width="25%" align="center">
                  <img src="../res/ic_history.png" alt="History Icon" width="22">
                </td>

                <td>
                  <a href="../admin/admin_history.html"><h3><font face="calibri" color="#888888">History</font></h3></a>
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
                  <h3><font face="calibri" color="#444444">Add Admin</font></h3>
                </fieldset>
              </td>
            </tr>

            <!-- necessary codes of users table and admin table will be written from here -->

            <tr>
              <td width="8%" align="center">
                <a href="../admin/admin_users.html">
                  <h3><font face="calibri" color="#888888">Users</font></h3>
                </a>
              </td>

              <td width="4%" align="center">
                <h3><font face="calibri" color="#444444">&middot;</font></h3>
              </td>

              <td width="68%">
                <a href="../admin/admin_users_admins.html">
                  <h3><font face="calibri" color="#888888">Admins</font></h3>
                </a>
              </td>

              <td width="20%" align="right">
                <a href="../admin/admin_users_add_admin.html">
                  <h3><font face="calibri" color="#444444">+ Add Admin</font></h3>
                </a>
              </td>
            </tr>

            <tr>
              <td colspan="4"><hr noshade="noshade"></td>
            </tr>

            <tr>
              <td colspan="4">
                <form action="">
                  <table width="100%" cellspacing="10" cellpadding="0">
                    <tr>
                      <td colspan="2">
                        <h2><font face="calibri" color="#444444">Basic Info</font></h2>
                        <hr width="150" align="left" noshade="noshde">
                      </td>
                    </tr>

                    <tr>
                      <td width=50%>
                        <p><font face="calibri" color="#888888" size="4"><b>Name</b></font></p>
                        <input type="text" name="admin_name" size="35">
                      </td>

                      <td width="50%">
                        <p><font face="calibri" color="#888888" size="4"><b>Email</b></font></p>
                        <input type="email" name="admin_email" size="35">
                      </td>
                    </tr>

                    <tr>
                      <td width=50%>
                        <p><font face="calibri" color="#888888" size="4"><b>Phone</b></font></p>
                        <input type="number" name="admin_phone" size="35">
                      </td>

                      <td width="50%">
                        <fieldset>
                          <legend><p><font face="calibri" color="#888888" size="4"><b>Gender</b></font></p></legend>

                          <input type="radio" name="admin_gender" value="Male">
                          <label><font face="calibri" color="#888888">Male</font></label>
                          <input type="radio" name="admin_gender" value="Female">
                          <label><font face="calibri" color="#888888">Female</font></label>
                          <input type="radio" name="admin_gender" value="Other">
                          <label><font face="calibri" color="#888888">Other</font></label>
                        </fieldset>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="2">
                        <fieldset>
                          <legend><p><font face="calibri" color="#888888" size="4"><b>Hire Date</b></font></p></legend>

                          <input type="number" name="hire_day">
                          <label><font face="calibri" color="#444444" size="4">/</font></label>
                          <input type="number" name="hire_month">
                          <label><font face="calibri" color="#444444" size="4">/</font></label>
                          <input type="number" name="hire_year">
                          <label>
                            <font face="calibri" color="#444444" size="4"><i>(dd/mm/yyyy)</i></font>
                          </label>
                        </fieldset>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="2"><br><br><hr noshade="noshade"><br></td>
                    </tr>

                    <tr>
                      <td colspan="2">
                        <h2><font face="calibri" color="#444444">Login Info</font></h2>
                        <hr width="150" align="left" noshade="noshde">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="2">
                        <p><font face="calibri" color="#888888" size="4"><b>Username</b></font></p>
                        <input type="text" name="admin_username" size="35">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="2">
                        <p><font face="calibri" color="#888888" size="4"><b>Password</b></font></p>
                        <input type="password" name="admin_password" size="35">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="2">
                        <p><font face="calibri" color="#888888" size="4"><b>Confirm Password</b></font></p>
                        <input type="password" name="admin_confirm" size="35">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="2" align="right">
                        <br>
                        <input type="reset" name="reset" value="Reset"></button>
                        <input type="submit" name="Add" value="Add Admin"></button>
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
