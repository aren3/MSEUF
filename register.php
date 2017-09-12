<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$link = mysqli_connect("localhost", "root", "", "bed");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$username=$_POST['username'];
$encrypt_pass=md5( $_POST['psw1'] . "churvaekek");


$sql="INSERT INTO admin(name, username, password)
VALUES('name', '$username', '$encrypt_pass')";

if(mysqli_query($link, $sql)){
echo '   <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        
                	<center><h1><font size="6pt">ACCOUNT SUCCESSFULLY CREATED!</font><h1><br /><br />
					<h2><font size="5pt"><a href="admin.php">LOGIN HERE</font></a></h2></center>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);

?>
</body>
</html>