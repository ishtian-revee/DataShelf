<?php
  require "../../control/logincheck.php"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DataShelf(marketplace_featured_post)</title>
  </head>

  <body onload="load_marketplace_datasets()">
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
        <td colspan="8" align="center">
          <br><br>
          <h1><font face="calibri" color="#444444">Welcome To DataShelf Marketplace</font></h1>
          <h2><font face="calibri" color="#888888">Expand your data sourcing and access a diverse array of data providers who are ready
            to distribute their data</font></h2>
            <br>
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
                <h3><font face="calibri" color="#888888">1320 featured datasets</font></h3>
              </td>

              <td align="right">
                <a href="marketplace_new_dataset.php">
                  <h3><font face="calibri" color="#888888">New Dataset</font></h3>
                </a>
              </td>
            </tr>

            <tr>
              <td width="9%" align="center">
                <a href="marketplace.php">
                  <h4><font face="calibri" color="#444444">Featured</font></h4>
                </a>
              </td>

              <td width="4%" align="center">
                <h4><font face="calibri" color="#444444">&middot;</font></h4>
              </td>

              <td width="5%" align="center">
                <a href="marketplace_all.php">
                  <h4><font face="calibri" color="#888888">All</font></h4>
                </a>
              </td>

              <td width="4%" align="center">
                <h4><font face="calibri" color="#444444">&middot;</font></h4>
              </td>

              <td width="6%" align="center">
                <a href="marketplace_mine.php">
                  <h4><font face="calibri" color="#888888">Mine</font></h4>
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
                <div id="mp-ds"></div>
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

    <script type="text/javascript">
      function add_dataset(title,short_description,price,uploader,downloads,tags)
      {

       var  template =
        `

        <table width="100%" cellspacing="5" cellpadding="0">
            <tr>
              <td width="10%" align="center">
                <img src="../res/website/ic_user_1.png" alt="User Profile Pic" width="60">
              </td>

              <td width="72%" valign="top">
                <a href="marketplace_post.php">
                  <p><font face="calibri" color="#444444" size="4"><b>${title}</b><br>${short_description}</font></p>
                </a>
                <p><font face="calibri" color="#888888" size="3"><b>${uploader}</b> &middot; updated 2 days ago &middot; <b>Tags:</b> ${tags}</font></p>
                <br>
              </td>

              <td width="18%" align="center" valign="center">
                <a href="marketplace_post.php">
                  <label><font face="calibri" color="#888888" size="4">$ ${price}</font></label><br>
                  <label><font face="calibri" color="#888888" size="4">${downloads} downloads</font></label>
                </a>
              </td>
            </tr>

          </table>

        `;
        d1 = document.getElementById('mp-ds');
        d1.insertAdjacentHTML('afterend', template);

      }




    function load_marketplace_datasets()
    {

      var request = new XMLHttpRequest();

      request.open('GET','http://localhost/DataShelf/roles/data/apis.php?api=mpds',true);
      request.send();

      request.onreadystatechange = function()
      {
          if (this.readyState == 4 && this.status == 200)
          {
            var ds = JSON.parse(request.responseText);
           console.log(ds.length);
           for(i=0;i<ds.length;i++)
           {
              var title = (ds[i].title);
              console.log(title);
              var short_description = ds[i].short_description;
              var price = ds[i].price;
              var uploader = ds[i].uploader;
              var context = ds[i].context;
              var content = ds[i].content;
              var downloads = ds[i].downloads;
              var tags = ds[i].tags;

              add_dataset(title,short_description,price,uploader,downloads,tags);
           }


        }
      }
    }




    </script>
  </body>
</html>
