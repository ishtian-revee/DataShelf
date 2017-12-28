
<?php
    require_once '../../data/marketplace_db.php';
    if(isset($_SESSION['is_logged_in']))
    {
        $mine = 
        '
              <td width="4%" align="center">
                <h4><font face="calibri" color="#444444">&middot;</font></h4>
              </td>

              <td width="6%" align="center">
                <a href="marketplace_mine.php">
                  <h4><font face="calibri" color="#888888">Mine</font></h4>
                </a>
              </td>
        ';
        $newdataset = 
        '
        <td align="right">
        <a href="marketplace_new_dataset.php">
          <h3><font face="calibri" color="#888888">New Dataset</font></h3>
        </a>
      </td>
        ';

        $total_featured = get_mp_featured_count();
        $cart_button = 
        '
        <td width="16%" align="right">
        <button type="button" id="cart-add" name="addToCart" onclick="add(<?=$mds_id?>)" >Add to Cart</button>
        <button type="button" style="display: none;" id="cart-remove" name="addToCart" onclick="remove(<?=$mds_id?>)" >Remove from Cart</button>
        </td>
        ';

    }
    else
    {
        $mine='';
        $newdataset = '';
        $total_featured = get_mp_featured_count();
        $cart_button = "";        
        
    }
?>