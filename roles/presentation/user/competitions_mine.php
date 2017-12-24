<?php
  require "../../control/logincheck.php"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf(competitions_mine)</title>
    <link rel="stylesheet" type="text/css" href="dpbtn.css">
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
          <a href="competitions.php"><h3><font face="calibri" color="#444444">Competitions</font></h3></a>
        </td>

        <td width="12%" align="center">
          <a href="discussions.php"><h3><font face="calibri" color="#888888">Discussions</font></h3></a>
        </td>

        <?=$cart?>

        <td width="3%" align="center">
          <h3><font face="calibri" color="#444444">|</font></h3>
        </td>

        <td width="7%" align="center">
          <a href="<?= $target ?>"><h3><font face="calibri" color="#888888"><?=$context?></font></h3></a>
        </td>
      </tr>

      <tr>
        <td colspan="8" align="center">
          <br><br>
          <h1><font face="calibri" color="#444444">Welcome To DataShelf Competitions</font></h1>
          <h2><font face="calibri" color="#888888">Challenge yourself with real-world machine learning problems</font></h2>
            <br><br>
            <hr width="250" align="center" noshade="noshade">
        </td>
      </tr>

      <tr>
        <td colspan="8"><br><br></td>
      </tr>

      <tr>
        <td colspan="8">
          <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="6">
                <h3><font face="calibri" color="#888888">3 your competitions</font></h3>
              </td>

              <td align="right">
                <a href="competitions_create_competition.php">
                  <h3><font face="calibri" color="#888888">Create Competition</font></h3>
                </a>
              </td>
            </tr>

            <tr>
              <td width="9%" align="center">
                <a href="competitions.php">
                  <h4><font face="calibri" color="#888888">Active</font></h4>
                </a>
              </td>

              <td width="4%" align="center">
                <h4><font face="calibri" color="#444444">&middot;</font></h4>
              </td>

              <td width="5%" align="center">
                <a href="competitions_all.php">
                  <h4><font face="calibri" color="#888888">All</font></h4>
                </a>
              </td>

              <td width="4%" align="center">
                <h4><font face="calibri" color="#444444">&middot;</font></h4>
              </td>

              <td width="6%" align="center">
                <a href="competitions_mine.php">
                  <h4><font face="calibri" color="#444444">Mine</font></h4>
                </a>
              </td>

              <td width="36%%" align="right">
                <p><font face="calibri" color="#888888" size="4"><b>Search</b></font></p>
              </td>

              <td width="36%" align="center">
                <input type="text" name="search" value="" size="45">
              </td>
            </tr>

            <tr>
              <td colspan="7"><hr noshade="noshade"></td>
            </tr>

            <tr>
              <td colspan="7"><br><br></td>
            </tr>

            <tr>
              <td colspan="7">
                <table width="100%" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="10%" align="center">
                      <img src="../res/website/ic_user_3.png" alt="User Profile Pic" width="60">
                    </td>

                    <td width="72%" valign="top">
                      <a href="profile_competitions_details.php">
                        <p><font face="calibri" color="#444444" size="4"><b>Passenger Screening Algorithm Challenge</b><br>Improve
                          the accuracy of the Department of Homeland Security's threat recognition algorithms</font></p>
                      </a>
                      <p><font face="calibri" color="#888888" size="3"><b>Elon Musk</b> &middot; deadline november 30, 2017
                        &middot; <b>Tags:</b> terrorism, image, object detection</font></p>
                      <br>
                    </td>

                    <td width="18%" align="center" valign="center">
                      <label><font face="calibri" color="#888888" size="4">$25000</font></label><br>
                      <label><font face="calibri" color="#888888" size="4">17 participants</font></label>
                    </td>
                  </tr>

                  <!-- temporary -->

                  <tr>
                    <td width="10%" align="center">
                      <img src="../res/website/ic_user_3.png" alt="User Profile Pic" width="60">
                    </td>

                    <td width="72%" valign="top">
                      <a href="profile_competitions_details.php">
                        <p><font face="calibri" color="#444444" size="4"><b>Passenger Screening Algorithm Challenge</b><br>Improve
                          the accuracy of the Department of Homeland Security's threat recognition algorithms</font></p>
                      </a>
                      <p><font face="calibri" color="#888888" size="3"><b>Elon Musk</b> &middot; deadline december 3, 2017
                        &middot; <b>Tags:</b> terrorism, image, object detection</font></p>
                      <br>
                    </td>

                    <td width="18%" align="center" valign="center">
                      <label><font face="calibri" color="#888888" size="4">$21470</font></label><br>
                      <label><font face="calibri" color="#888888" size="4">16 participants</font></label>
                    </td>
                  </tr>

                  <tr>
                    <td width="10%" align="center">
                      <img src="../res/website/ic_user_3.png" alt="User Profile Pic" width="60">
                    </td>

                    <td width="72%" valign="top">
                      <a href="profile_competitions_details.php">
                        <p><font face="calibri" color="#444444" size="4"><b>Passenger Screening Algorithm Challenge</b><br>Improve
                          the accuracy of the Department of Homeland Security's threat recognition algorithms</font></p>
                      </a>
                      <p><font face="calibri" color="#888888" size="3"><b>Elon Musk</b> &middot; deadline december 13, 2017
                        &middot; <b>Tags:</b> terrorism, image, object detection</font></p>
                      <br>
                    </td>

                    <td width="18%" align="center" valign="center">
                      <label><font face="calibri" color="#888888" size="4">$11300</font></label><br>
                      <label><font face="calibri" color="#888888" size="4">14 participants</font></label>
                    </td>
                  </tr>

                  <!-- temporary -->
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td colspan="8"><br><br></td>
      </tr>

      <tr>
        <td colspan="8"><hr noshade="noshade"></td>
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
