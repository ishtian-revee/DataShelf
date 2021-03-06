<?php
  require "../../control/logincheck.php"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf(cart)</title>
    <link rel="stylesheet" type="text/css" href="dpbtn.css">
  </head>

  <body onload="load_cart()">
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
            <a href="cart.php"><h3><font face="calibri" color="#444444">Cart</font></h3></a>
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
                <td align="center">
                  <h2><font face="calibri" color="#444444">Shopping Cart</font></h2>
                  <hr noshade="noshade" width="300">
                </td>
              </tr>
              <tr>
                <td>
                  <br><br>
                  <table width="100%" align="center" cellspacing="0" cellpadding="0" id='cart'>

                  <tr>
                      <th width="4%"><font face="calibri" color="#444444">SL.</font></th>
                      <th width="48%"><font face="calibri" color="#444444">Dataset</font></th>
                      <th width="26%"><font face="calibri" color="#444444">Uploader</font></th>
                      <th width="10%"><font face="calibri" color="#444444">Price</font></th>
                      <th width="12%"><font face="calibri" color="#444444">Action</font></th>
                  </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td align="right" id="total">
                  <br><br>
                  <hr width="300" noshade="noshde" align="right">
                  <label><font face="calibri" color="#888888" size="5"><b>Cart Total: </b></font></label>
                  <label><font face="calibri" color="#444444" size="5"><b id="ct"></b></font></label>
                </td>
              </tr>

              <tr>
                <td><br><br></td>
              </tr>

              <tr>
                <td align="right">
                  <input type="submit" name="proceed" value="Proceed To Checkout" onclick ='window.location = "../../control/purchase_controller.php"'>
                </td>
              </tr>

              <tr>
                <td colspan="3"><br><br><br><hr noshade="noshade"></td>
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
    <script type="text/javascript" src="./js/cartV2.js"></script>
  </body>
</html>
