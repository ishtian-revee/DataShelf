<?php require_once "../../control/admin/login_check.php" ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf-Admin(post competetions details)</title>
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
                  <a href="admin_posts.php"><h3><font face="calibri" color="#444444">Posts</font></h3></a>
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
              <td colspan="2">
                <fieldset align="center">
                  <h3><font face="calibri" color="#444444">Competetion</font></h3>
                </fieldset>
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <form action="admin_posts_competitions.php">
                  <table width="100%" cellspacing="0" cellpadding="8">
                    <tr>
                      <td colspan="2">
                        <h2><font face="calibri" color="#444444">Competetion Info</font></h2>
                        <hr width="200" align="left" noshade="noshde">
                      </td>
                    </tr>

                    <tr>
                      <td width="15%" valign="top">
                        <h3><font face="calibri" color="#444444">Title:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>Passenger Screening Algorithm Challenge</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="15%" valign="top">
                        <h3><font face="calibri" color="#444444">Short Desc:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>Improve the accuracy of the Department of Homeland
                          Security's threat recognition algorithms</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="15%" valign="top">
                        <h3><font face="calibri" color="#444444">Tags:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>terrorism, image, object detection</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="15%" valign="top">
                        <h3><font face="calibri" color="#444444">Prize Money:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>$12000</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="15%" valign="top">
                        <h3><font face="calibri" color="#444444">Description:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>While long lines and frantically shuffling luggage into
                          plastic bins isn’t a fun experience, airport security is a critical and necessary requirement for safe
                          travel. No one understands the need for both thorough security screenings and short wait times more than
                          U.S. Transportation Security Administration (TSA). They’re responsible for all U.S. airport security,
                          screening more than two million passengers daily. As part of their Apex Screening at Speed Program, DHS has
                          identified high false alarm rates as creating significant bottlenecks at the airport checkpoints. Whenever
                          TSA’s sensors and algorithms predict a potential threat, TSA staff needs to engage in a secondary, manual
                          screening process that slows everything down. And as the number of travelers increase every year and new
                          threats develop, their prediction algorithms need to continually improve to meet the increased demand.
                          Currently, TSA purchases updated algorithms exclusively from the manufacturers of the scanning equipment used.
                          These algorithms are proprietary, expensive, and often released in long cycles. In this competition, TSA is
                          stepping outside their established procurement process and is challenging the broader data science community
                          to help improve the accuracy of their threat prediction algorithms. Using a dataset of images collected on the
                          latest generation of scanners, participants are challenged to identify the presence of simulated threats under
                          a variety of object types, clothing types, and body types. Even a modest decrease in false alarms will help
                          TSA significantly improve the passenger experience while maintaining high levels of security. This is a
                          two-stage competition. Please read our two-stage FAQs to understand more about what this means. All persons
                          contained in the dataset are volunteers who have agreed to have their images used for this competition. The
                          images may contain sensitive content. We kindly request that you conduct yourself with professionalism, respect,
                          and maturity when working with this data.</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="15%" valign="top">
                        <h3><font face="calibri" color="#444444">Evaluation:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>Submissions are evaluated on Mean Absolute Error between
                          the predicted log error and the actual log error. The log error is defined as
                          logerror=log(Zestimate)−log(SalePrice) logerror=log(Zestimate)−log(SalePrice) and it is recorded in the
                          transactions training data. If a transaction didn't happen for a property during that period of time,
                          that row is ignored and not counted in the calculation of MAE.</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="15%" valign="top">
                        <h3><font face="calibri" color="#444444">Submission Files:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>For each property (unique parcelid), you must predict a
                          log error for each time point. You should be predicting 6 timepoints: October 2016 (201610), November
                          2016 (201611), December 2016 (201612), October 2017 (201710), November 2017 (201711), and December 2017
                          (201712). The file should contain a header and have the following format:
                          'ParcelId,201610,201611,201612,201710,201711,201712' or
                          '10754147,0.1234,1.2234,-1.3012,1.4012,0.8642-3.1412'</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="15%" valign="top">
                        <h3><font face="calibri" color="#444444">Prizes:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>First Place: $500,000 Second Place: $300,000
                          Third Place: $200,000 Fourth Place: $100,000 Fifth Place: $100,000 Sixth Place: $100,000 Seventh
                          Place: $100,000 Eighth Place: $100,000</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="15%" valign="top">
                        <h3><font face="calibri" color="#444444">Timeline:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>December 4, 2017 - Pre-trained models and external data
                          posting deadline. December 4, 2017 - Entry & Team Merger deadline. You must accept the competition rules
                          before this date in order to compete. December 10, 2017 - Model upload & first stage deadline. This is
                          the last day you may upload your model to be eligible for a prize. December 11, 2017 - Second stage starts.
                          We will release an unseen test dataset for prediction on this date. December 15, 2017 - Final submission
                          deadline. All deadlines are at 11:59 PM UTC on the corresponding day unless otherwise noted. The
                          competition organizers reserve the right to update the contest timeline if they deem it necessary.</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="15%" valign="top">
                        <h3><font face="calibri" color="#444444">Competetion Data:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>all.zip</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td width="15%" valign="top">
                        <h3><font face="calibri" color="#444444">Data Description:</font></h3>
                      </td>

                      <td>
                        <p><font face="calibri" color="#888888" size="4"><b>This dataset contains a large number of body scans
                          acquired by a new generation of millimeter wave scanner called the High Definition-Advanced Imaging
                          Technology (HD-AIT) system. The competition task is to predict the probability that a given body zone
                          (out of 17 total body zones) has a threat present. The images in the dataset are designed to capture
                          real scanning conditions. They are comprised of volunteers wearing different clothing types (from light
                          summer clothes to heavy winter clothes), different body mass indices, different genders, different
                          numbers of threats, and different types of threats. Due to restrictions on revealing the types of threats
                          for which the TSA screens, the threats in the competition images are "inert" objects with varying
                          material properties. These materials were carefully chosen to simulate real threats. The volunteers used
                          in the first and second stage of the competition will be different (i.e. your algorithm should generalize
                          to unseen people). In addition, you should not make assumptions about the number, distribution, or location
                          of threats in the second stage. All volunteers have agreed to have their images used for this competition.
                          The images may contain sensitive content. We kindly request that you conduct yourself with professionalism,
                          respect, and maturity when working with this data.</b></font></p>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="2"><br><hr noshade="noshade"></td>
                    </tr>

                    <tr>
                      <td>
                        <a href="admin_posts_competitions.php">
                          <p><font face="calibri" color="#888888" size="4"><b>Back</b></font></p>
                        </a>
                      </td>

                      <td align="right">
                        <input type="submit" name="approve" value="Delete">
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
