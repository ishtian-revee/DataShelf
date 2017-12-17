<?php
  require "../../control/logincheck.php"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf(edit user profile)</title>
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
          <br><br><br>
          <form action="profile.php">
            <table width="100%" align="center" cellspacing="0" cellpadding="0">
              <tr>
                <td rowspan="2" width="18%" align="center" valign="top">
                  <img src="../res/admin/temp_user.png" alt="Profile Picture" height="150">
                  <br>
                  <input type="file" name="profile_picture">
                </td>

                <td>
                  <input name="username" type="text" size="30" value="Bruce Wayne">
                </td>
              </tr>

              <tr>
                <td>
                  <p><font face="calibri" color="#888888" size="4">Joined 2 months ago</font></p>
                </td>
              </tr>

              <tr>
                <td colspan="2">
                  <table width="100%" align="center" cellspacing="0" cellpadding="0">
                    <tr>
                      <td colspan="9"><br></td>
                    </tr>

                    <tr>
                      <td width="5%" align="center">
                        <a href="profile.php">
                          <h4><font face="calibri" color="#888888">About</font></h4>
                        </a>
                      </td>

                      <td width="4%" align="center">
                        <h4><font face="calibri" color="#444444">&middot;</font></h4>
                      </td>

                      <td width="7%" align="center">
                        <a href="profile_datasets.php">
                          <h4><font face="calibri" color="#888888">Datasets</font></h4>
                        </a>
                      </td>

                      <td width="4%" align="center">
                        <h4><font face="calibri" color="#444444">&middot;</font></h4>
                      </td>

                      <td width="10%" align="center">
                        <a href="profile_competitions.php">
                          <h4><font face="calibri" color="#888888">Competitions</font></h4>
                        </a>
                      </td>

                      <td width="4%" align="center">
                        <h4><font face="calibri" color="#444444">&middot;</font></h4>
                      </td>

                      <td width="10%" align="center">
                        <a href="profile_bought_items.php">
                          <h4><font face="calibri" color="#888888">Bought Items</font></h4>
                        </a>
                      </td>

                      <td width="46%" align="center"></td>

                      <td width="10%" align="right">
                        <a href="edit_profile.php">
                          <h3><font face="calibri" color="#444444">Edit Profile</font></h3>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="9"><hr noshade="noshade"></td>
                    </tr>

                    <tr>
                      <td colspan="9">
                        <h2><font face="calibri" color="#444444">Profile Info</font></h2>
                        <hr width="150" align="left" noshade="noshde">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="4">
                        <h3><font face="calibri" color="#444444">Username:</font></h3>
                      </td>

                      <td colspan="5">
                        <input name="username" type="text" size="30" value="bruce">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="4">
                        <h3><font face="calibri" color="#444444">Email:</font></h3>
                      </td>

                      <td colspan="5">
                        <input name="email" type="text" size="30" value="bruce@wayne.batman">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="4">
                        <h3><font face="calibri" color="#444444">Profession:</font></h3>
                      </td>

                      <td colspan="5">
                        <input name="username" type="text" size="30" value="MAchine Learning Engineer">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="4">
                        <h3><font face="calibri" color="#444444">Phone:</font></h3>
                      </td>

                      <td colspan="5">
                        <input name="phone" type="text" value="01777777777">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="4">
                        <h3><font face="calibri" color="#444444">Gender:</font></h3>
                      </td>

                      <td colspan="5">
                        <select name="gender">
                              <option>Female</option>
                              <option selected>Male</option>
                              <option>Other</option>
                          </select>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="4">
                        <h3><font face="calibri" color="#444444">Date of Birth:</font></h3>
                      </td>

                      <td colspan="5">
                        <input type="text" name="day" size="5" value="1">
                        <label><font face="calibri" color="#444444" size="4">/</font></label>
                        <input type="text" name="month" size="5" value="1">
                        <label><font face="calibri" color="#444444" size="4">/</font></label>
                        <input type="text" name="year" size="5" value="1990">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="9" align="right">
                        <br><hr width="200" noshade="noshade" align="right"><br>
                        <input name="reset" type="reset" value="Reset">
                        <input name="save_changes" type="submit" value="Save Changes">
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td colspan="3"><br><br></td>
              </tr>

              <tr>
                <td colspan="3"><hr noshade="noshade"></td>
              </tr>
            </table>
          </form>
        </td>
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
