<center>
<table border="0" height="500" width="950">
<tr>
<td align="center">
<?php

session_start();
session_unset(); 
session_destroy();

 echo '<meta http-equiv="refresh" content="20;url=admin.php">';
 echo'<span><font size="10" color="#666">Logging out please wait...</font><br><img width="300" height="200" src="img/saddog.gif"></span>';


?>
</td>
</tr>
</table>
</center>
