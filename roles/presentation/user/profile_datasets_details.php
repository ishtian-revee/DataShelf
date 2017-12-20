<?php
  require "../../control/logincheck.php"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf(user profile - datasets)</title>
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
          <table width="100%" align="center" cellspacing="0" cellpadding="0">

            <tr>
              <td rowspan="2" width="18%" align="center" valign="top">
                <img src="../res/admin/temp_user.png" alt="Profile Picture" height="150">
              </td>

              <td>
                <h2><font face="calibri" color="#444444"><?=$name?></font></h2>
              </td>
            </tr>

            <tr>
              <td>
                <p><font face="calibri" color="#888888" size="4">Joined 2 months ago</font></p>
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <form action="profile_datasets.php">
                  <table width="100%" align="center" cellspacing="0" cellpadding="0">
                    <tr>
                      <td colspan="10"><br></td>
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
                          <h4><font face="calibri" color="#444444">Datasets</font></h4>
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

                      <td width="30%" align="center"></td>

                      <td width="16%" align="center">
                        <a href="change_password.php">
                          <h3><font face="calibri" color="#888888">Change Password</font></h3>
                        </a>
                      </td>

                      <td width="10%" align="right">
                        <a href="edit_profile.php">
                          <h3><font face="calibri" color="#888888">Edit Profile</font></h3>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="10"><hr noshade="noshade"></td>
                    </tr>

                    <tr>
                      <td colspan="10">
                        <h2><font face="calibri" color="#444444">Datasets Details</font></h2>
                        <hr width="200" align="left" noshade="noshde">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="10"><br></td>
                    </tr>

                    <tr>
                      <td colspan="10">
                        <fieldset>
                          <table width="100%" cellspacing="0" cellpadding="0">
                            <tr>
                              <td>
                                <h1><font face="calibri" color="#444444">Global Terrorism Database</font></h1>
                              </td>

                              <td align="right">
                                <h2><font face="calibri" color="#888888">$1200</font></h2>
                              </td>
                            </tr>

                            <tr>
                              <td colspan="2">
                                <h2><font face="calibri" color="#888888">More than 170,000 terrorist attacks worldwide, 1970-2016</font></h2>
                              </td>
                            </tr>

                            <tr>
                              <td colspan="2">
                                <table width="100%" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td>
                                      <p><font face="calibri" color="#888888" size="4">Updated on October 30, 2017</font></p>
                                    </td>

                                    <td align="right">
                                      <p><font face="calibri" color="#888888" size="4">29 downloads</font></p>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </fieldset>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="2" align="center">
                        <a href="profile_datasets_details.php">
                          <h4><font face="calibri" color="#444444">Overview</font></h4>
                        </a>
                      </td>

                      <td colspan="1" align="center">
                        <h4><font face="calibri" color="#444444">&middot;</font></h4>
                      </td>

                      <td colspan="2" align="center">
                        <a href="profile_datasets_discussions.php">
                          <h4><font face="calibri" color="#888888">Discussions</font></h4>
                        </a>
                      </td>

                      <td colspan="5" align="center"></td>
                    </tr>

                    <tr>
                      <td colspan="10"><hr noshade="noshade"></td>
                    </tr>

                    <tr>
                      <td colspan="10">
                        <h2><font face="calibri" color="#444444">Context</font></h2>

                        <p><font face="calibri" color="#888888" size="4">Information on more than 170,000 Terrorist Attacks
        The Global Terrorism Database (GTD) is an open-source database including information on terrorist attacks around the world
        from 1970 through 2016 (with annual updates planned for the future). The GTD includes systematic data on domestic as well
        as international terrorist incidents that have occurred during this time period and now includes more than 170,000 cases.
        The database is maintained by researchers at the National Consortium for the Study of Terrorism and Responses to Terrorism
        (START), headquartered at the University of Maryland.</font></p>

                        <h2><font face="calibri" color="#444444">Contents</font></h2>

                        <p><font face="calibri" color="#888888" size="4">Geography: Worldwide.
        Time period: 1970-2016, except 1993 (2017 in progress, publication expected June 2018).
        Unit of analysis: Attack.
        Variables: >100 variables on location, tactics, perpetrators, targets, and outcomes.
        Sources: Unclassified media articles (Note: Please interpret changes over time with caution. Global patterns are driven
        by diverse trends in particular regions, and data collection is influenced by fluctuations in access to media coverage
        over both time and place).
        Definition of terrorism: "The threatened or actual use of illegal force and violence by a non-state actor to attain a
        political, economic, religious, or social goal through fear, coercion, or intimidation."
        See the GTD Codebook for important details on data collection methodology, definitions, and coding schema.</font></p>

                        <h2><font face="calibri" color="#444444">Preview</font></h2>
                        <p><font face="calibri" color="#888888" size="4"><b>Screenshot of the data</font></p>
                        <img src="../res/website/dataset.png" alt="Dataset Screenshot" width="50%">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="10" align="right">
                        <br><br>
                        <hr width="200" noshade="noshade" align="right"><br>
                        <input type="submit" name="delete" value="Delete Dataset">
                      </td>
                    </tr>
                  </table>
                </form>
              </td>
            </tr>

            <tr>
              <td colspan="3"><br><br></td>
            </tr>

            <tr>
              <td colspan="3"><hr noshade="noshade"></td>
            </tr>
          </table>
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
