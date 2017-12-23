<?php
  require_once "../../control/logincheck.php";
  require_once "../../control/marketplace_post_controller.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf(marketplace_post_overview)</title>
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
          <a href="marketplace.php"><h3><font face="calibri" color="#444444">Marketplace</font></h3></a>
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
        <td colspan="8"><br><br></td>
      </tr>

      <tr>
        <td colspan="8">
          <fieldset>
            <table width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                  <h1><font face="calibri" color="#444444"><?=$title?></font></h1>
                </td>

                <td align="right">
                  <h2><font face="calibri" color="#888888"><?=$price?></font></h2>
                </td>
              </tr>

              <tr>
                <td colspan="2">
                  <h2><font face="calibri" color="#888888"><?=$short_description?></font></h2>
                </td>
              </tr>

              <tr>
                <td colspan="2">
                  <table width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>
                        <p><font face="calibri" color="#888888" size="4">Uploaded : <?=$upload_date?></font></p>
                      </td>

                      <td align="right">
                        <p><font face="calibri" color="#888888" size="4"><?=$downloads?></font></p>
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
        <td colspan="8"><br></td>
      </tr>

      <tr>
        <td colspan="8">
          <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td width="10%" align="center">
                <a href="marketplace_post.php?id=<?=$mds_id?>">
                  <h4><font face="calibri" color="#444444">Overview</font></h4>
                </a>
              </td>

              <td width="3%" align="center">
                <h4><font face="calibri" color="#444444">&middot;</font></h4>
              </td>

              <td width="6%" align="center">
                <a href="marketplace_post_data.php?id=<?=$mds_id?>">
                  <h4><font face="calibri" color="#888888">Data</font></h4>
                </a>
              </td>

              <td width="3%" align="center">
                <h4><font face="calibri" color="#444444">&middot;</font></h4>
              </td>

              <td width="10%" align="center">
                <a href="marketplace_post_discussions.php?id=<?=$mds_id?>">
                  <h4><font face="calibri" color="#888888">Discussions</font></h4>
                </a>
              </td>

              <td width="52%"></td>

              <td width="16%" align="right">
                <a href="cart.php">
                  <button type="button" name="addToCart">Add to Cart</button>
                </a>
              </td>
            </tr>

            <tr>
              <td colspan="7"><hr noshade="noshade"></td>
            </tr>

            <tr>
              <td colspan="7">
                <h2><font face="calibri" color="#444444">Context</font></h2>

                <p><font face="calibri" color="#888888" size="4"><?=$contextd?></font></p>

                <h2><font face="calibri" color="#444444">Contents</font></h2>

                <p><font face="calibri" color="#888888" size="4"><?=$contentd?></font></p>
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
