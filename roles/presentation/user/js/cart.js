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
        }
    }
    http.send(params)
}
function remove(mds_id)
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
            addBtn = document.getElementById('cart-add');
            addBtn.style.display = "initial";
            removeBtn = document.getElementById('cart-remove');
            removeBtn.style.display = "none";
        }
    }
    http.send(params)
}