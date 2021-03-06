function deal_with_day(day)
{
    day = Math.abs(day)
    if(day>=365)
    {
        year = parseInt((day/365));
        return year==1?year+" year ago":year+" years ago";
    }
    else if(day>=30)
    {
        month = parseInt((day/30));
        return month==1?month+" month ago":month+" months ago";

    }
    else
    {
        return day==0?"Today":(day==1?day+" day ago":day+" days ago");
    }
    
}
////////////////////Search
function search_from_mine(search_term)
{
  search_term = search_term.trim();
  if(search_term != '')
  {
    div_id = 'mp-ds-mine'
    d1 = document.getElementById(div_id);
    d1.innerHTML= '<img src="./loading.gif"/>';

    var request = new XMLHttpRequest();

    request.open('GET','http://localhost/DataShelf/roles/data/sapi.php?api=sm&term='+search_term,true);
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
            var upload_date = deal_with_day(ds[i].upload_date);
            
            var uploader = ds[i].uploader;
            var downloads = ds[i].downloads;
            var tags = ds[i].tags;
            var pp_path = ds[i].pp_path;

            add_dataset(id,title,short_description,upload_date,price,uploader,downloads,tags,div_id,pp_path);
         }
      }
    }
  }
  else
  {
    load_marketplace_datasets_mine();
  }
   
}

function search_from_all(search_term)
{
  search_term = search_term.trim();
  if(search_term != '')
  {
    div_id = 'mp-ds-all'
    d1 = document.getElementById(div_id);
    d1.innerHTML= '<img src="./loading.gif"/>';

    var request = new XMLHttpRequest();

    request.open('GET','http://localhost/DataShelf/roles/data/sapi.php?api=sm&term='+search_term,true);
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
            var upload_date = deal_with_day(ds[i].upload_date);
            
            var uploader = ds[i].uploader;
            var downloads = ds[i].downloads;
            var tags = ds[i].tags;
            var pp_path = ds[i].pp_path;

            add_dataset_V2(id,title,short_description,upload_date,price,uploader,downloads,tags,div_id,pp_path);
         }
      }
    }
  }
  else
  {
    //load_marketplace_datasets_all();
  }
   
}

function search_from_featured(search_term)
{
  search_term = search_term.trim();
  console.log(search_term);
  if(search_term !== null)
  {
    div_id = 'mp-ds'
    d1 = document.getElementById(div_id);
    d1.innerHTML= '<img src="./loading.gif"/>';

    var request = new XMLHttpRequest();

    request.open('GET','http://localhost/DataShelf/roles/data/sapi.php?api=sf&term='+search_term,true);
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
            var upload_date = deal_with_day(ds[i].upload_date);
            
            var uploader = ds[i].uploader;
            var downloads = ds[i].downloads;
            var tags = ds[i].tags;
            var pp_path = ds[i].pp_path;

            add_dataset_V2(id,title,short_description,upload_date,price,uploader,downloads,tags,div_id,pp_path);
         }
      }
    }
  }
  else
  {
    load_marketplace_datasets();
  }
   
}

function add_dataset_V2(id,title,short_description,upload_date,price,uploader,downloads,tags,div_id,pp_path)
      {
        console.log('div-id form add');
       var  template =
        `
        <table width="100%" cellspacing="5" cellpadding="0">
            <tr>
              <td width="10%" align="center">
                <img src="${pp_path}" alt="User Profile Pic" width="60">
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
        d1.innerHTML = '';
        d1.innerHTML+=template;

      }

 function add_dataset(id,title,short_description,upload_date,price,uploader,downloads,tags,div_id,pp_path)
      {
        console.log('div-id form add');
       var  template =
        `
        <table width="100%" cellspacing="5" cellpadding="0">
            <tr>
              <td width="10%" align="center">
                <img src="${pp_path}" alt="User Profile Pic" width="60">
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
      d1.innerHTML= '<img src="./loading.gif"/>';

      var request = new XMLHttpRequest();

      request.open('GET','http://localhost/DataShelf/roles/data/apis.php?api=mpds&filter=featured',true);
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
              var upload_date = deal_with_day(ds[i].upload_date);
              
              var uploader = ds[i].uploader;
              var downloads = ds[i].downloads;
              var tags = ds[i].tags;
              var pp_path = ds[i].pp_path;

              add_dataset(id,title,short_description,upload_date,price,uploader,downloads,tags,div_id,pp_path);
           }
        }
      }
    }
    function load_marketplace_datasets_all()
    {
        div_id="mp-ds-all";
      d1 = document.getElementById(div_id);
      d1.innerHTML= '<img src="./loading.gif"/>';

      var request = new XMLHttpRequest();

      request.open('GET','http://localhost/DataShelf/roles/data/apis.php?api=mpds&filter=all',true);
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
              var upload_date = deal_with_day(ds[i].upload_date);

              var pp_path = ds[i].pp_path;
              //add_dataset(id,title,short_description,upload,date,price,uploader,downloads,tags,div_id);
              add_dataset(id,title,short_description,upload_date,price,uploader,downloads,tags,div_id,pp_path);
            
            }
        }
      }

    }

    function load_marketplace_datasets_mine()
    {
      div_id='mp-ds-mine';
      d1 = document.getElementById(div_id);
      d1.innerHTML= '<img src="./loading.gif"/>';

      var request = new XMLHttpRequest();

      request.open('GET','http://localhost/DataShelf/roles/data/apis.php?api=mpds&filter=mine',true);
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
              var pp_path = ds[i].pp_path;
              var upload_date = deal_with_day(ds[i].upload_date);
            
              add_dataset(id,title,short_description,upload_date,price,uploader,downloads,tags,div_id,pp_path);             
              
           }
        }
      }

}