<?php require_once "../../control/admin/login_check.php" ;
 require_once "../../control/admin/admin_dashboard_controller.php"; 
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf-Admin(dashboard)</title>
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
                  <a href="admin_dashboard.php"><h3><font face="calibri" color="#444444">Dashboard</font></h3></a>
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
                  <h3><font face="calibri" color="#444444">Dashboard</font></h3>
                </fieldset>
              </td>
            </tr>

            <tr>
              <td colspan="4">
                <h2><font face="calibri" color="#444444">Daily Activities</font></h2>
              </td>
            </tr>

            <tr>
              <td width="25%">
                <fieldset>
                  <h1><font face="calibri" color="#444444"><?=$pending?></font></h1>
                  <p><font face="calibri" color="#888888" size="4"><br><b>Pendings</b></font></p>
                </fieldset>
              </td>

              <td width="25%">
                <fieldset>
                  <h1><font face="calibri" color="#444444"><?=$downloads?></font></h1>
                  <p><font face="calibri" color="#888888" size="4"><br><b>Downloads</b></font></p>
                </fieldset>
              </td>

              <td width="25%">
                <fieldset>
                  <h1><font face="calibri" color="#444444"><?=$daily_upload?></font></h1>
                  <p><font face="calibri" color="#888888" size="4"><br><b>Uploads</b></font></p>
                </fieldset>
              </td>

              <td width="25%">
                <fieldset>
                  <h1><font face="calibri" color="#444444">-</font></h1>
                  <p><font face="calibri" color="#888888" size="4"><b>Money<br>Transaction</b></font></p>
                </fieldset>
              </td>
            </tr>

            <tr>
              <td colspan="4"><br><br><hr noshade="noshade"></td>
            </tr>

            <tr>
              <td colspan="4">
                <h2><font face="calibri" color="#444444">Overall</font></h2>
              </td>
            </tr>

            <tr>
              <td width="25%">
                <fieldset>
                  <h1><font face="calibri" color="#444444">-</font></h1>
                  <p><font face="calibri" color="#888888" size="4"><br><b>Users</b></font></p>
                </fieldset>
              </td>

              <td width="25%">
                <fieldset>
                  <h1><font face="calibri" color="#444444"><?=$active_admins?></font></h1>
                  <p><font face="calibri" color="#888888" size="4"><br><b>Admins</b></font></p>
                </fieldset>
              </td>

              <td width="25%">
                <fieldset>
                  <h1><font face="calibri" color="#444444"><?=$dataset?></font></h1>
                  <p><font face="calibri" color="#888888" size="4"><br><b>Datasets</b></font></p>
                </fieldset>
              </td>

              <td width="25%">
                <fieldset>
                  <h1><font face="calibri" color="#444444">-</font></h1>
                  <p><font face="calibri" color="#888888" size="4"><b>Active<br>Competetions</b></font></p>
                </fieldset>
              </td>
            </tr>

            <tr>
              <td colspan="4"><br><br><hr noshade="noshade"></td>
            </tr>

            <tr>
              <td colspan="4">
                <h2><font face="calibri" color="#444444">Top Activities</font></h2>
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <fieldset>
                  <legend>
                    <h3><font face="calibri" color="#444444">Top Buyers</font></h3>
                  </legend>

                  <table  width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                      <th width="4%"><font face="calibri" color="#444444" size="4">SL.</b></font></th>
                      <th width="66%"><font face="calibri" color="#444444" size="4">Username</b></font></th>
                      <th width="30%"><font face="calibri" color="#444444" size="4">Item Bought</b></font></th>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">1.</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">Elon Musk</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">22</b></font></p></td>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">2.</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">Jef Bezos</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">19</b></font></p></td>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">3.</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">Mark Zyckerberg</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">14</b></font></p></td>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">4.</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">Bruce Wayne</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">9</b></font></p></td>
                    </tr>
                  </table>
                </fieldset>
              </td>

              <td colspan="2">
                <fieldset>
                  <legend>
                    <h3><font face="calibri" color="#444444">Top Sellers</font></h3>
                  </legend>

                  <table  width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                      <th width="4%"><font face="calibri" color="#444444" size="4">SL.</b></font></th>
                      <th width="66%"><font face="calibri" color="#444444" size="4">Username</b></font></th>
                      <th width="30%"><font face="calibri" color="#444444" size="4">Item Sold</b></font></th>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">1.</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">Elon Musk</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">22</b></font></p></td>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">2.</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">Jef Bezos</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">19</b></font></p></td>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">3.</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">Mark Zyckerberg</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">14</b></font></p></td>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">4.</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">Bruce Wayne</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">9</b></font></p></td>
                    </tr>
                  </table>
                </fieldset>
              </td>
            </tr>

            <tr>
              <td colspan="4">
                <fieldset>
                  <legend>
                    <h3><font face="calibri" color="#444444">Top Datasets</font></h3>
                  </legend>

                  <table width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                      <th width="8%"><font face="calibri" color="#444444" size="4">SL.</b></font></th>
                      <th width="72%"><font face="calibri" color="#444444" size="4">Datasets</b></font></th>
                      <th width="20%"><font face="calibri" color="#444444" size="4">Downloads</b></font></th>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">1.</b></font></p></td>
                      <td><p><font face="calibri" color="#888888" size="4">Credit Card Fraud Detection</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">22</b></font></p></td>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">2.</b></font></p></td>
                      <td><p><font face="calibri" color="#888888" size="4">Credit Card Fraud Detection</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">19</b></font></p></td>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">3.</b></font></p></td>
                      <td><p><font face="calibri" color="#888888" size="4">Credit Card Fraud Detection</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">14</b></font></p></td>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">4.</b></font></p></td>
                      <td><p><font face="calibri" color="#888888" size="4">Credit Card Fraud Detection</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">9</b></font></p></td>
                    </tr>
                  </table>
                </fieldset>
              </td>
            </tr>

            <tr>
              <td colspan="4">
                <fieldset>
                  <legend>
                    <h3><font face="calibri" color="#444444">Top Competetion Problems</font></h3>
                  </legend>

                  <table width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                      <th width="8%"><font face="calibri" color="#444444" size="4">SL.</b></font></th>
                      <th width="72%"><font face="calibri" color="#444444" size="4">Competitions</b></font></th>
                      <th width="20%"><font face="calibri" color="#444444" size="4">Prize Money</b></font></th>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">1.</b></font></p></td>
                      <td><p><font face="calibri" color="#888888" size="4">Passenger Screening Algorithm Challenge</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">$29800</b></font></p></td>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">2.</b></font></p></td>
                      <td><p><font face="calibri" color="#888888" size="4">Passenger Screening Algorithm Challenge</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">$26790</b></font></p></td>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">3.</b></font></p></td>
                      <td><p><font face="calibri" color="#888888" size="4">Passenger Screening Algorithm Challenge</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">$22180</b></font></p></td>
                    </tr>

                    <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">4.</b></font></p></td>
                      <td><p><font face="calibri" color="#888888" size="4">Passenger Screening Algorithm Challenge</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">$20500</b></font></p></td>
                    </tr>
                  </table>
                </fieldset>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td colspan="2"><br><br></td>
      </tr>
    </table>
  </body>
</html>
