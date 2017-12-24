function add(mds_id)
{
    var http = new XMLHttpRequest();
    var url = "http://localhost/DataShelf/roles/data/cart_api.php";
    var params = `mds_id=${mds_id}&action=add`;
    http.open("POST", url, true);


    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    http.onreadystatechange = function() {
        if(http.readyState == 4 && http.status == 200) {
           status = JSON.parse((http.responseText)).status;
           alert(status);
          //status_code = JSON.parse((http.responseText)).status_code;
          addBtn = document.getElementById('cart-add');
          addBtn.style.display = "none";
          removeBtn = document.getElementById('cart-remove');
          removeBtn.style.display = "initial";
          get_cart_total();
          
        }
    }
    http.send(params)
}
function remove(mds_id,row)
{
    var http = new XMLHttpRequest();
    var url = "http://localhost/DataShelf/roles/data/cart_api.php";
    var params = `mds_id=${mds_id}&action=remove`;
    http.open("POST", url, true);


    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    http.onreadystatechange = function() {
        if(http.readyState == 4 && http.status == 200) {
            status = JSON.parse((http.responseText)).status;            
            alert(JSON.parse((http.responseText)).status);
            document.getElementById(row).innerHTML="";
            get_cart_total();
            
        }
    }
    http.send(params)
}

function generate_cart(SL,dataset,uploader,price,mds_id,div_id)
{
    var temp = `
    <tr id="${SL}">
                      <td align="center"><p><font face="calibri" color="#888888" size="4">${SL}.</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">${dataset}</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">${uploader}</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">$ ${price}</b></font></p></td>
                      <td align="center">
                        <button type="button" name="remove" onclick="remove(${mds_id},${SL})">Remove</button>
                      </td>
    </tr>
    `;
    document.getElementById(div_id).innerHTML += (temp); 
    // load_cart();
}

function get_cart_total()
{
   
     // cart.innerHTML= '<img src="https://i.pinimg.com/originals/05/74/15/05741525b70c7ca6bcb88afd4aa16632.gif"/>';

      var request = new XMLHttpRequest();
     // document.getElementById('ct').innerHTML="";

      request.open('GET','http://localhost/DataShelf/roles/data/cart_api.php?action=cart_total',true);
      request.send();
    
      request.onreadystatechange = function()
      {
          if (this.readyState == 4 && this.status == 200)
          {
            //cart.innerHTML = "";
            var cart_total = JSON.parse(request.responseText);
            total_price = cart_total[0].total;
           // console.log(cart_total[0].total);
            document.getElementById('ct').innerHTML = "$ "+(total_price===null?0:total_price);
          }
          
           
      }
}
function load_cart()
{

     var div_id = "cart";
     var cart = document.getElementById(div_id);
     // cart.innerHTML= '<img src="https://i.pinimg.com/originals/05/74/15/05741525b70c7ca6bcb88afd4aa16632.gif"/>';

      var request = new XMLHttpRequest();

      request.open('GET','http://localhost/DataShelf/roles/data/cart_api.php?action=loadcart',true);
      request.send();
    
      request.onreadystatechange = function()
      {
          if (this.readyState == 4 && this.status == 200)
          {
            //cart.innerHTML = "";
            var carts = JSON.parse(request.responseText);
           for(i=0;i<carts.length;i++)
           {
              var SL = i+1;
              var dataset = carts[i].title;
              var uploader = carts[i].uploader;
              var price = carts[i].price;
              var mds_id = carts[i].mds_id;
              generate_cart(SL,dataset,uploader,price,mds_id,div_id);
            
           }
        }
      }
      get_cart_total();
}
