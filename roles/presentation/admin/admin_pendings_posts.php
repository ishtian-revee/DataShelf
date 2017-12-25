<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf-Admin(pendings_posts)</title>
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
                  <h3><font face="calibri" color="#444444">Pendings</font></h3>
                </fieldset>
              </td>
            </tr>

            <!-- necessary codes of users table and admin table will be written from here -->

            <tr>
              <td width="12%" align="center">
                <a href="admin_pendings.php">
                  <h3><font face="calibri" color="#888888">Users</font></h3>
                </a>
              </td>

              <td width="4%">
                <h3><font face="calibri" color="#444444">&middot;</font></h3>
              </td>

              <td width="66%">
                <a href="admin_pendings_posts.php">
                  <h3><font face="calibri" color="#444444">Posts</font></h3>
                </a>
              </td>

              <td width="18%" align="right">
                <h3><font face="calibri" color="#888888">5 posts</font></h3>
              </td>
            </tr>

            <tr>
              <td colspan="4"><hr noshade="noshade"></td>
            </tr>

            <tr>
              <td colspan="4">
                <br><br>
                <table border="1" width="100%" cellspacing="0" cellpadding="0">
                  <tr>
                    <th width="4%"><font face="calibri" color="#444444">SL.</font></th>
                    <th width="20%"><font face="calibri" color="#444444">User Name</font></th>
                    <th width="42%"><font face="calibri" color="#444444">Datasets</font></th>
                    <th width="34%"><font face="calibri" color="#444444">Action</font></th>
                  </tr>

                  <tr>
                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>1.</b></font></p>
                    </td>

                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>Bruce Wayne</b></font></p>
                    </td>

                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>Credit Card Fraud Detection</b></font></p>
                    </td>

                    <td align="center">
                      <table width="100%" cellspacing="0">
                        <tr>
                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>View</b></font></p>
                            </a>
                          </td>

                          <td align="center"><p><font face="calibri" color="#888888" size="4"><b>|</b></font></p></td>

                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>Approve</b></font></p>
                            </a>
                          </td>

                          <td align="center"><p><font face="calibri" color="#888888" size="4"><b>|</b></font></p></td>

                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>Reject</b></font></p>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <!-- __________ temporary __________ -->

                  <tr>
                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>2.</b></font></p>
                    </td>

                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>Diana Prince</b></font></p>
                    </td>

                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>Credit Card Fraud Detection</b></font></p>
                    </td>

                    <td align="center">
                      <table width="100%" cellspacing="0">
                        <tr>
                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>View</b></font></p>
                            </a>
                          </td>

                          <td align="center"><p><font face="calibri" color="#888888" size="4"><b>|</b></font></p></td>

                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>Approve</b></font></p>
                            </a>
                          </td>

                          <td align="center"><p><font face="calibri" color="#888888" size="4"><b>|</b></font></p></td>

                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>Reject</b></font></p>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <tr>
                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>3.</b></font></p>
                    </td>

                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>Bruce Wayne</b></font></p>
                    </td>

                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>Credit Card Fraud Detection</b></font></p>
                    </td>

                    <td align="center">
                      <table width="100%" cellspacing="0">
                        <tr>
                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>View</b></font></p>
                            </a>
                          </td>

                          <td align="center"><p><font face="calibri" color="#888888" size="4"><b>|</b></font></p></td>

                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>Approve</b></font></p>
                            </a>
                          </td>

                          <td align="center"><p><font face="calibri" color="#888888" size="4"><b>|</b></font></p></td>

                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>Reject</b></font></p>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <tr>
                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>4.</b></font></p>
                    </td>

                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>Diana Prince</b></font></p>
                    </td>

                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>Credit Card Fraud Detection</b></font></p>
                    </td>

                    <td align="center">
                      <table width="100%" cellspacing="0">
                        <tr>
                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>View</b></font></p>
                            </a>
                          </td>

                          <td align="center"><p><font face="calibri" color="#888888" size="4"><b>|</b></font></p></td>

                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>Approve</b></font></p>
                            </a>
                          </td>

                          <td align="center"><p><font face="calibri" color="#888888" size="4"><b>|</b></font></p></td>

                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>Reject</b></font></p>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <tr>
                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>5.</b></font></p>
                    </td>

                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>Bruce Wayne</b></font></p>
                    </td>

                    <td align="center">
                      <p><font face="calibri" color="#888888" size="4"><b>Credit Card Fraud Detection</b></font></p>
                    </td>

                    <td align="center">
                      <table width="100%" cellspacing="0">
                        <tr>
                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>View</b></font></p>
                            </a>
                          </td>

                          <td align="center"><p><font face="calibri" color="#888888" size="4"><b>|</b></font></p></td>

                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>Approve</b></font></p>
                            </a>
                          </td>

                          <td align="center"><p><font face="calibri" color="#888888" size="4"><b>|</b></font></p></td>

                          <td align="center">
                            <a href="admin_pendings_post_details.php">
                              <p><font face="calibri" color="#888888" size="4"><b>Reject</b></font></p>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <!-- __________ temporary __________ -->

                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
