<?php
    if(isset($_GET['status']))
    {
        if($_GET['status'] == 'success')
        {
            $success = '<tr>
            <td colspan="7" align="center">
              <h3><font face="calibri" color="#444444">Successfully dataset added!</font></h3>
            </td>
          </tr>

          <tr>
            <td colspan="7"><hr noshade="noshade"></td>
          </tr>';
        }
        else
        {
            $success ="";
        }

    }
    else
    {
        $success ="";
    }

?>