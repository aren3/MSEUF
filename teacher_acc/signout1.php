<center>
<table border="0" height="500" width="950">
<tr>
<td align="center">
<?php

session_start();
session_unset(); 
session_destroy();

 echo '<meta http-equiv="refresh" content="2;url=teacher_menu.php####">';
 echo'<span><font size="5" color="#666">Logging out please wait...</font><br><img width="60" height="60" src="img/ajax-loader.gif"></span>';


?>
</td>
</tr>
</table>
</center>
