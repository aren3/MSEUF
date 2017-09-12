<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manuel S. Enverga / Online Grade</title>
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/update.css" />

<!-- BOOTSTRAP  -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-1.11.3.min.js"></script>
  
    <script src="js/bootstrap.min.js"></script>
<!-- BOOTSTRAP -->
</head>
<center>
<body>
<!-- head row -->
<div class="row"> 
<div class="col-md-12" id="header">
<div class="col-md-7" id="logo-cont" style="resize:both;">
<div class="col-md-3" style="resize:none; display:inline-block;"><img src="img/mesuf logo.PNG" class="img-responsive" id="logo"/>
</img></div>
<div class="col-md-8" id="name-title">Manuel S. Enverga
<div class="col-md-12" id="name-title2">University Foundation</div></div></div>

<div class="col-md-5" id="nav-header">		
<ul id="header-nav">
<li><a href="signout.php">Sign Out</a></li>
</ul>			
</div>
</div>
</div><!-- head row end-->


<div id="title"><h2>Grade 7 Section ROSAL Student Information Page Editor</h2></div>
<div id="content">
<?php
function valid($id, $studnum, $name, $gender, $address, $prev, $error)
{
?>
<?php
if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red; ">'.$error.'</div>';
}
?>
<div id="ad">	
<h1> STUDENT INFO: </h1>
<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<table width="600">

<tr><td>
<label>Student Number: </td><td> <input type="varchar" name="stnum" value="<?php echo $studnum; ?>" autofocus autocomplete="off" required></label><br /><br /></td></tr>

<tr><td>
<label>Student Name: </td><td><input type="text" name="stname" value="<?php echo $name; ?>" autofocus autocomplete="off" required></label><br /><br /></td></tr>

<tr><td>
<label>Gender: </td><td><input type="text" name="gend" value="<?php echo $gender; ?>" autofocus autocomplete="off" required /></label><br /><br /></td></tr>

<tr><td>
<label>Address: </td><td><input type="varchar" name="add" row="5" cols="40" value="<?php echo $address; ?>" autofocus autocomplete="off" required /></label><br /><br /></td></tr>

<tr><td>
<label>Previous School: </td><td><input type="text" name="previ" row="5" cols="40" value="<?php echo $prev; ?>" autofocus autocomplete="off" required /></label><br /><br /></td></tr>
</table>
<input type="submit" name="submit" value="Save">
</form>
</div>
</div>
</body>
</html>
<?php
}
mysql_connect("localhost", "root","") or die (mysql_error ());
	mysql_select_db("bed") or die(mysql_error());

if (isset($_POST['submit']))
{

if (is_numeric($_POST['id']))
{

$id = $_POST['id'];
$studnum = mysql_real_escape_string(htmlspecialchars($_POST['stnum']));
$name = mysql_real_escape_string(htmlspecialchars($_POST['stname']));
$gender = mysql_real_escape_string(htmlspecialchars($_POST['gend']));
$address = mysql_real_escape_string(htmlspecialchars($_POST['add']));
$prev = mysql_real_escape_string(htmlspecialchars($_POST['previ']));

if ($studnum == '' || $name == '' || $gender == '' || $address == '' || $prev == '')
{

$error = 'ERROR: Please fill in all required fields!';


valid($id, $studnum, $name, $gender, $address, $prev, $error);
}
else
{

mysql_query("UPDATE grade7secrosal SET studnum='$studnum', name='$name', gender='$gender', address='$address', prev='$prev' WHERE id='$id'")
or die(mysql_error());
header("Location: admin-master1.php");
}
}
else
{

echo 'Error!';
}
}
else

{

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysql_query("SELECT * FROM grade7secrosal WHERE id=$id")
or die(mysql_error());
$row = mysql_fetch_array($result);
if($row)
{
$id = $row['id'];
$studnum=$row['studnum'];
$name=$row['name'];
$gender=$row['gender'];
$address=$row['address'];
$prev=$row['prev'];


valid($id, $studnum, $name, $gender, $address, $prev, '');
}
else
{
echo "No results!";
}
}
else

{
echo 'Error!';
}
}

?>

<div class="col-md-12" id="spacer"></div>
</div><!-- container end-->



<div class="col-md-12" id="footer">

</div>

</body>
</html>