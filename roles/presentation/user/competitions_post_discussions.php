<?php
  require "../../control/logincheck.php"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf(competitions_post_discussions)</title>
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
        <td colspan="8"><br><br></td>
      </tr>

      <tr>
        <td colspan="8">
          <fieldset>
            <h1><font face="calibri" color="#444444">Passenger Screening Algorithm Challenge</font></h1>
            <h2><font face="calibri" color="#888888">Improve the accuracy of the Department of Homeland Security's threat
              recognition algorithms</font></h2>
            <br>
            <table width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                  <p><font face="calibri" color="#888888" size="4">Deadline December 30, 2017</font></p>
                </td>

                <td align="right">
                  <p><font face="calibri" color="#888888" size="4">$1,500,000<br>Prize Money</font></p>
                </td>
              </tr>
            </table>
          </fieldset>
        </td>
      </tr>

      <tr>
        <td colspan="8"><br></td>
      </tr>

      <tr>
        <td colspan="8">
          <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td width="10%" align="center">
                <a href="competitions_post.php">
                  <h4><font face="calibri" color="#888888">Overview</font></h4>
                </a>
              </td>

              <td width="3%" align="center">
                <h4><font face="calibri" color="#444444">&middot;</font></h4>
              </td>

              <td width="6%" align="center">
                <a href="competitions_post_discussions.php">
                  <h4><font face="calibri" color="#444444">Discussions</font></h4>
                </a>
              </td>

              <td width="3%" align="center">
                <h4><font face="calibri" color="#444444">&middot;</font></h4>
              </td>

              <td width="10%" align="center">
                <a href="competitions_post_submissions.php">
                  <h4><font face="calibri" color="#888888">Submissions</font></h4>
                </a>
              </td>

              <td width="62%"></td>

              <td width="6%" align="center">
                <a href="competitions_post_submit.php">
                  <h3><font face="calibri" color="#888888">Submit</font></h3>
                </a>
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
                <form action="">
                  <table width="100%" cellspacing="5" cellpadding="0">
                    <tr>
                      <td width="10%" valign="top" align="center">
                        <img src="../res/website/ic_user_1.png" alt="User Profile Pic" width="45">
                      </td>

                      <td width="90%" valign="top">
                        <p><font face="calibri" color="#444444" size="4"><b>Elon Musk</b></font></p>
                        <p><font face="calibri" color="#888888" size="4">In schema.csv, what's the difference between Worker1
                          and Worker?</font></p>
                      </td>
                    </tr>

                    <!-- temporary -->

                    <tr>
                      <td width="10%" valign="top" align="center">
                        <img src="../res/website/ic_user_2.png" alt="User Profile Pic" width="45">
                      </td>

                      <td width="90%" valign="top">
                        <p><font face="calibri" color="#444444" size="4"><b>Laura Brehm</b></font></p>
                        <p><font face="calibri" color="#888888" size="4">Im a bit confused about the descriptions in
                          RespondentTypeREADME.txt. There seems to be a hierarchical structure in the respondent types.
                          Is this characterization correct?</font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="10%" valign="top" align="center">
                        <img src="../res/website/ic_user_3.png" alt="User Profile Pic" width="45">
                      </td>

                      <td width="90%" valign="top">
                        <p><font face="calibri" color="#444444" size="4"><b>Bradley Cooper</b></font></p>
                        <p><font face="calibri" color="#888888" size="4">Hi, sorry, this is a complete beginners question,
                          but I was curious to know what was used to build the different visualizations--with all of the
                          different filtering options--in the report. I don't think I saw anything about this in the
                          'Kaggle 2017 Survey Results' kernel, but it's very possible I missed this or that it is plainly
                          obvious to everyone here. In any case, I'd be grateful for any friendly pointers in the right
                          direction. Thanks!</font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="10%" valign="top" align="center">
                        <img src="../res/website/ic_user_4.png" alt="User Profile Pic" width="45">
                      </td>

                      <td width="90%" valign="top">
                        <p><font face="calibri" color="#444444" size="4"><b>Elon Musk</b></font></p>
                        <p><font face="calibri" color="#888888" size="4">I have the same question. Hope someone toss some tips
                          and hint here. Thanks.</font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="10%" valign="top" align="center">
                        <img src="../res/website/ic_user_5.png" alt="User Profile Pic" width="45">
                      </td>

                      <td width="90%" valign="top">
                        <p><font face="calibri" color="#444444" size="4"><b>Elon Musk</b></font></p>
                        <p><font face="calibri" color="#888888" size="4">Im a bit confused about the descriptions in
                          RespondentTypeREADME.txt. There seems to be a hierarchical structure in the respondent types.
                          Is this characterization correct?</font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="10%" valign="top" align="center">
                        <img src="../res/website/ic_user_6.png" alt="User Profile Pic" width="45">
                      </td>

                      <td width="90%" valign="top">
                        <p><font face="calibri" color="#444444" size="4"><b>Selena Gomez</b></font></p>
                        <p><font face="calibri" color="#888888" size="4">In schema.csv, what's the difference between Worker1
                          and Worker?</font></p>
                      </td>
                    </tr>

                    <!-- temporary -->

                    <tr>
                      <td valign="top" align="center">
                        <br>
                        <img src="../res/website/ic_user_3.png" alt="User Profile Pic" width="45">
                      </td>

                      <td>
                        <br>
                        <p><font face="calibri" color="#888888" size="4"><b>Write your comment here...</b></font></p>
                        <textarea name="comment" rows="8" cols="123"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td align="right" colspan="2">
                        <br>
                        <input type="submit" name="post" value="Post">
                      </td>
                    </tr>

                  </table>
                </form>
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
