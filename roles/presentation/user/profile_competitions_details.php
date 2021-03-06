<?php
  require_once "../../control/logincheck.php";
  require_once "../../control/profile_controller.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf(user profile - competitions details)</title>
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

        <?=$cart?>

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
                          <h4><font face="calibri" color="#888888">Datasets</font></h4>
                        </a>
                      </td>

                      <td width="4%" align="center">
                        <h4><font face="calibri" color="#444444">&middot;</font></h4>
                      </td>

                      <td width="10%" align="center">
                        <a href="profile_competitions.php">
                          <h4><font face="calibri" color="#444444">Competitions</font></h4>
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
                        <h2><font face="calibri" color="#444444">Competition Details</font></h2>
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
                              <td colspan="2">
                                <h1><font face="calibri" color="#444444">Passenger Screening Algorithm Challenge</font></h1>
                                <h2><font face="calibri" color="#888888">Improve the accuracy of the Department of Homeland Security's threat
                                  recognition algorithms</font></h2>
                              </td>
                            </tr>

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
                      <td colspan="2" align="center">
                        <a href="profile_competitions_details.php">
                          <h4><font face="calibri" color="#444444">Overview</font></h4>
                        </a>
                      </td>

                      <td colspan="1" align="center">
                        <h4><font face="calibri" color="#444444">&middot;</font></h4>
                      </td>

                      <td colspan="2" align="center">
                        <a href="profile_competitions_discussions.php">
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
                        <h2><font face="calibri" color="#444444">Description</font></h2>

                        <p><font face="calibri" color="#888888" size="4">While long lines and frantically shuffling luggage into plastic bins isn’t a fun experience, airport security is a critical and necessary requirement for safe travel. No one understands the need for both thorough security screenings and short wait times more than U.S. Transportation Security Administration (TSA). They’re responsible for all U.S. airport security, screening more than two million passengers daily. As part of their Apex Screening at Speed Program, DHS has identified high false alarm rates as creating significant bottlenecks at the airport checkpoints. Whenever TSA’s sensors and algorithms predict a potential threat, TSA staff needs to engage in a secondary, manual screening process that slows everything down. And as the number of travelers increase every year and new threats develop, their prediction algorithms need to continually improve to meet the increased demand. Currently, TSA purchases updated algorithms exclusively from the manufacturers of the scanning equipment used. These algorithms are proprietary, expensive, and often released in long cycles. In this competition, TSA is stepping outside their established procurement process and is challenging the broader data science community to help improve the accuracy of their threat prediction algorithms. Using a dataset of images collected on the latest generation of scanners, participants are challenged to identify the presence of simulated threats under a variety of object types, clothing types, and body types. Even a modest decrease in false alarms will help TSA significantly improve the passenger experience while maintaining high levels of security. This is a two-stage competition. Please read our two-stage FAQs to understand more about what this means. All persons contained in the dataset are volunteers who have agreed to have their images used for this competition. The images may contain sensitive content. We kindly request that you conduct yourself with professionalism, respect, and maturity when working with this data.
                        </font></p>

                        <h2><font face="calibri" color="#444444">Evaluation</font></h2>

                        <p><font face="calibri" color="#888888" size="4">Submissions are evaluated on Mean Absolute Error between the predicted log error and the actual log error. The log error is defined as logerror=log(Zestimate)−log(SalePrice) logerror=log(Zestimate)−log(SalePrice) and it is recorded in the transactions training data. If a transaction didn't happen for a property during that period of time, that row is ignored and not counted in the calculation of MAE.</font></p>

                        <h2><font face="calibri" color="#444444">Prizes</font></h2>

                        <p><font face="calibri" color="#888888" size="4">First Place: $500,000 Second Place: $300,000 Third Place: $200,000 Fourth Place: $100,000 Fifth Place: $100,000 Sixth Place: $100,000 Seventh Place: $100,000 Eighth Place: $100,000</font></p>

                        <h2><font face="calibri" color="#444444">Timeline</font></h2>

                        <p><font face="calibri" color="#888888" size="4">December 4, 2017 - Pre-trained models and external data posting deadline. December 4, 2017 - Entry & Team Merger deadline. You must accept the competition rules before this date in order to compete. December 10, 2017 - Model upload & first stage deadline. This is the last day you may upload your model to be eligible for a prize. December 11, 2017 - Second stage starts. We will release an unseen test dataset for prediction on this date. December 15, 2017 - Final submission deadline. All deadlines are at 11:59 PM UTC on the corresponding day unless otherwise noted. The competition organizers reserve the right to update the contest timeline if they deem it necessary.</font></p>

                        <h2><font face="calibri" color="#444444">Data Description</font></h2>

                        <p><font face="calibri" color="#888888" size="4">This dataset contains a large number of body scans acquired by a new generation of millimeter wave scanner called the High Definition-Advanced Imaging Technology (HD-AIT) system. The competition task is to predict the probability that a given body zone (out of 17 total body zones) has a threat present. The images in the dataset are designed to capture real scanning conditions. They are comprised of volunteers wearing different clothing types (from light summer clothes to heavy winter clothes), different body mass indices, different genders, different numbers of threats, and different types of threats. Due to restrictions on revealing the types of threats for which the TSA screens, the threats in the competition images are "inert" objects with varying material properties. These materials were carefully chosen to simulate real threats. The volunteers used in the first and second stage of the competition will be different (i.e. your algorithm should generalize to unseen people). In addition, you should not make assumptions about the number, distribution, or location of threats in the second stage. All volunteers have agreed to have their images used for this competition. The images may contain sensitive content. We kindly request that you conduct yourself with professionalism, respect, and maturity when working with this data.</font></p>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="10" align="right">
                        <br><br>
                        <hr width="200" noshade="noshade" align="right"><br>
                        <input type="submit" name="remove" value="Remove Competition">
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
