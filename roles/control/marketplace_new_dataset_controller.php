<?php
    if(isset($_GET['status']))
    {
        if($_GET['status'] == 'success')
        {
            $success = '
            <div id="status">
            <tr>
            <td colspan="7" align="center">
              <h3><font face="calibri" color="GREEN">Successfully dataset added!</font></h3>
            </td>
          </tr>

          <tr>
            <td colspan="7"><hr noshade="noshade"></td>
          </tr>
          </div>'
          ;
        }
        else if($_GET['status'] == 'failed')
        {
            $success =
            '
            <div id="status">            
            <tr>
            <td colspan="7" align="center">
              <h3><font face="calibri" color="RED">Upload Failed !</font></h3>
            </td>
          </tr>

          <tr>
            <td colspan="7"><hr noshade="noshade"></td>
          </tr>
            </div>            
          
            ';
        }

    }
    else
    {
        $success ="";
    }

?>