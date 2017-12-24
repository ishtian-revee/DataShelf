 function add_dataset(id,title,short_description,upload_date,price,uploader,downloads,tags,div_id)
      {

       var  template =
        `
        <table width="100%" cellspacing="5" cellpadding="0">
            <tr>
              <td width="10%" align="center">
                <img src="../res/website/ic_user_1.png" alt="User Profile Pic" width="60">
              </td>

              <td width="72%" valign="top">
                <a href="marketplace_post.php?id=${id}">
                  <p><font face="calibri" color="#444444" size="4"><b>${title}</b><br>${short_description}</font></p>
                </a>
                <p><font face="calibri" color="#888888" size="3"><b>${uploader}</b> &middot; Updated ${upload_date} &middot; <b>Tags:</b> ${tags}</font></p>
                <br>
              </td>

              <td width="18%" align="center" valign="center">
                <a href="marketplace_post.php?id=${id}">
                  <label><font face="calibri" color="#888888" size="4">$${price}</font></label><br>
                  <label><font face="calibri" color="#888888" size="4">${downloads} downloads</font></label>
                </a>
              </td>
            </tr>

          </table>

        `;
        d1 = document.getElementById(div_id);
        d1.insertAdjacentHTML('afterend', template);

      }
    function load_marketplace_datasets()
    {
        div_id="mp-ds";
      d1 = document.getElementById('mp-ds');
      d1.innerHTML= '<img src="https://i.pinimg.com/originals/05/74/15/05741525b70c7ca6bcb88afd4aa16632.gif"/>';

      var request = new XMLHttpRequest();

      request.open('GET','http://localhost/DataShelf/roles/data/apis.php?api=mpds',true);
      request.send();
    
      request.onreadystatechange = function()
      {
          if (this.readyState == 4 && this.status == 200)
          {
            d1.innerHTML = "";
            var ds = JSON.parse(request.responseText);
           console.log(ds.length);
           for(i=0;i<ds.length;i++)
           {
              var id = ds[i].mds_id;
              //console.log(id);
              var title = (ds[i].title);
              console.log(title);
              var short_description = ds[i].short_description;
              var price = ds[i].price;
              var upload_date = ds[i].upload_date==0?"Today":ds[i].upload_date+" days ago";
              
              var uploader = ds[i].uploader;
              var downloads = ds[i].downloads;
              var tags = ds[i].tags;

              add_dataset(id,title,short_description,upload_date,price,uploader,downloads,tags,div_id);
           }
        }
      }
    }
    function load_marketplace_datasets_all()
    {
        div_id="mp-ds-all";
      d1 = document.getElementById(div_id);
      d1.innerHTML= '<img src="https://i.pinimg.com/originals/05/74/15/05741525b70c7ca6bcb88afd4aa16632.gif"/>';

      var request = new XMLHttpRequest();

      request.open('GET','http://localhost/DataShelf/roles/data/apis.php?api=mpds',true);
      request.send();
    
      request.onreadystatechange = function()
      {
          if (this.readyState == 4 && this.status == 200)
          {
            d1.innerHTML = "";
            var ds = JSON.parse(request.responseText);
           console.log(ds.length);
           for(i=0;i<ds.length;i++)
           {
              var id = ds[i].mds_id;
              //console.log(id);
              var title = (ds[i].title);
              console.log(title);
              var short_description = ds[i].short_description;
              var price = ds[i].price;
              var uploader = ds[i].uploader;
              var context = ds[i].context;
              var content = ds[i].content;
              var downloads = ds[i].downloads;
              var tags = ds[i].tags;

              add_dataset(id,title,short_description,upload,date,price,uploader,downloads,tags,div_id);
           }
        }
      }

    }

    function load_marketplace_datasets_mine()
    {
      div_id="mp-ds-mine";
      d1 = document.getElementById(div_id);
      d1.innerHTML= '<img src="https://i.pinimg.com/originals/05/74/15/05741525b70c7ca6bcb88afd4aa16632.gif"/>';

      var request = new XMLHttpRequest();

      request.open('GET','http://localhost/DataShelf/roles/data/apis.php?api=mpds',true);
      request.send();
    
      request.onreadystatechange = function()
      {
          if (this.readyState == 4 && this.status == 200)
          {
            d1.innerHTML = "";
            var ds = JSON.parse(request.responseText);
           console.log(ds.length);
           for(i=0;i<ds.length;i++)
           {
              var id = ds[i].mds_id;
              //console.log(id);
              var title = (ds[i].title);
              console.log(title);
              var short_description = ds[i].short_description;
              var price = ds[i].price;
              var uploader = ds[i].uploader;
              var context = ds[i].context;
              var content = ds[i].content;
              var downloads = ds[i].downloads;
              var tags = ds[i].tags;

              add_dataset(id,title,short_description,price,uploader,downloads,tags,div_id);
           }
        }
      }

    }

 
