<?php
  require "../../control/logincheck.php"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf(home)</title>
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
          <a href="home.php"><h3><font face="calibri" color="#444444">Home</font></h3></a>
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
          <h1><font face="calibri" color="#444444" size="8">Welcome To DataShelf</font></h1>
          <h1><font face="calibri" color="#888888">The Home of Data Science And Machine Learning And The Marketplace For Monetizing And Acquiring Data</font></h1>
        </td>
      </tr>

      <tr>
        <td colspan="8">
          <br><br><br>
          <table width="100%" align="center" cellspacing="15" cellpadding="0">
            <tr>
              <td width="33%" align="center">
                <img width="100" src="../res/website/ic_data_science.png" alt="Data Science Icon">
                <h1><font face="calibri" color="#444444">Data Science</font></h1>
                <p><font face="calibri" color="#888888" size="5"><b>Datashelf offers data scientists to contribute and share their precious datasets,
                  trained data etc. which could be utilize in creating modules and finding effective solutions with high accuracy</b></font></p>
              </td>

              <td width="34%" align="center">
                <img width="100" src="../res/website/ic_machine_learning.png" alt="Machine Learning Icon">
                <h1><font face="calibri" color="#444444">Machine Learning</font></h1>
                <p><font face="calibri" color="#888888" size="5"><b>To acquire the trained data from these raw datasets data scientists and engineers uses
                  machine learning technology which can learn from data, instead of explicitly programmed instructions</b></font></p>
              </td>

              <td width="33%" align="center">
                <img width="100" src="../res/website/ic_predictive_modelling.png" alt="Predictive Modelling Icon">
                <h1><font face="calibri" color="#444444">Predictive Modelling</font></h1>
                <p><font face="calibri" color="#888888" size="5"><b>Datashelf is a platform for predictive modelling and analytics competitions in which
                  statisticians and data miners compete to produce the best models for predicting and describing the datasets</b></font></p>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td colspan="8">
          <br><br><br>
          <table width="100%" align="center" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="3">
                <a name="about">
                  <h1><font face="calibri" color="#444444">About</font></h1>
                </a>
                <hr align="left" noshade="noshde">
              </td>
            </tr>

            <tr>
              <td colspan="3"><br><br><br></td>
            </tr>

            <tr>
              <td width="40%" align="center" valign="center">
                <img width="150" src="../res/website/ic_marketplace.png" alt="Marketplace Icon">
              </td>

              <td colspan="2">
                <h1><font face="calibri" color="#444444">Seek In The<br>Marketplace</font></h1>
                <p><font face="calibri" color="#888888" size="5"><b>Take advantage of the marketplace to monetize or acquire data around the
                  entire world. Also promote and exchange your data with your partners, such as subsidiaries, clients, and suppliers, with
                  complete security and privacy</b></font></p>
              </td>
            </tr>

            <tr>
              <td colspan="3"><br><br><br><br><br></td>
            </tr>

            <tr>
              <td colspan="2" align="right">
                <h1><font face="calibri" color="#444444">Join In<br>Competetions</font></h1>
                <p><font face="calibri" color="#888888" size="5"><b>Challenge yourself with real-world machine learning problems by getting the
                  data and use whatever tools or methods you prefer to make predictions and finally upload your prediction file</b></font></p>
              </td>

              <td width="40%" align="center" valign="center">
                <img width="150" src="../res/website/ic_competetions.png" alt="Competetions Icon">
              </td>
            </tr>

            <tr>
              <td colspan="3"><br><br><br><br><br></td>
            </tr>

            <tr>
              <td width="40%" align="center" valign="center">
                <img width="150" src="../res/website/ic_discussions.png" alt="Discussions Icon">
              </td>

              <td colspan="2">
                <h1><font face="calibri" color="#444444">Collaborate With<br>Others</font></h1>
                <p><font face="calibri" color="#888888" size="5"><b>Contribute knowledge and discuss over the problem as well as solution
                  techniques for more and better efficiency. In the end, get the feedback from the experts, share and also acknowledge
                  others work</b></font></p>
              </td>
            </tr>

            <tr>
              <td colspan="3"><br><br><br></td>
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

    <script>

    </script>
  </body>
</html>
