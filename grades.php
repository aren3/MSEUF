<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manuel S. Enverga / Online Grade</title>
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/123.css" />

<!-- BOOTSTRAP  -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-1.11.3.min.js"></script>
  
    <script src="js/bootstrap.min.js"></script>
<!-- BOOTSTRAP -->
</head>
<body>

<!-- head row -->
<div class="row"> 
<div class="col-md-12" id="header">
<div class="col-md-7" id="logo-cont" style="resize:both;">
<div class="col-md-3" style="resize:none; display:inline-block;"><img src="img/mesuf logo.PNG" class="img-responsive" id="logo"/>
</img></div>
<div class="col-md-8" id="name-title">Manuel S. Enverga
<div class="col-md-12" id="name-title2">University Foundation</div></div></div>
</div>
</div><!-- head row end-->

<?php
function valid($id, $fquarter, $science, $english, $math, $filipino, $makabayan, 
               $mapeh, $tle, $aralpan, $edukpag, $squarter, $science2, $english2, $math2, $filipino2, $makabayan2, $mapeh2, 
			   $tle2, $aralpan2, $edukpag2, $tquarter, $science3, $english3, $math3, $filipino3, $makabayan3, $mapeh3, $tle3,
			   $aralpan3, $edukpag3, $ffquarter, $science4, $english4, $math4, $filipino4, $makabayan4, $mapeh4, $tle4, $aralpan4, 
			   $edukpag4, $error)
{
?>
<?php
if ($error != '')
{
echo '<div  style="padding:4px; border:1px solid red; color:red; ">'.$error.'</div>';
}
?>
<div id="ad">	
<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<table width="100%" border="5"><tr><td></td></tr></table>
<h2>&nbsp;STUDENT GRADES: </h2>
<table width="100%" border="2"><tr><td></td></tr></table>
<h3>&nbsp;&nbsp;First Quarter</h3><br />
<label>&emsp;Science:&emsp;<input type="int" name="sci" value="<?php echo $science; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;English:&emsp;&emsp;&emsp;<input type="int" name="eng" value="<?php echo $english; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;Mathematics:&emsp;<input type="int" name="mat" value="<?php echo $math; ?>" autofocus autocomplete="off" /></label><br />
<label>&emsp;Filipino:&emsp;<input type="int" name="fil" value="<?php echo $filipino; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;Makabayan: &emsp;<input type="int" name="mak" value="<?php echo $makabayan; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;MAPEH: &nbsp;&emsp;&emsp;&emsp;<input type="int" name="map" value="<?php echo $mapeh; ?>" autofocus autocomplete="off" /></label><br />
<label>&emsp;T.L.E.:&emsp;&emsp;<input type="int" name="tles" value="<?php echo $tle; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;Araling Panlipunan:&emsp;<input type="int" name="ap" value="<?php echo $aralpan; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;Edukasyon sa Pagkatao:&emsp;<input type="int" name="ep" value="<?php echo $edukpag; ?>" autofocus autocomplete="off" /></label><br />
<h4><label>&nbsp;&nbsp; First Quarter Average:&emsp;<input type="int" name="fqu" value="<?php echo $fquarter; ?>" autofocus autocomplete="off" />
</label></h4>
<table width="100%" border="2"><tr><td></td></tr></table>
<h3>&nbsp;&nbsp;Second Quarter</h3><br />
<label>&emsp;Science:&emsp;<input type="int" name="sci2" value="<?php echo $science2; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;English:&emsp;&emsp;&emsp;<input type="int" name="eng2" value="<?php echo $english2; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;Mathematics:&emsp;<input type="int" name="mat2" value="<?php echo $math2; ?>" autofocus autocomplete="off" /></label><br />
<label>&emsp;Filipino:&emsp;<input type="int" name="fil2" value="<?php echo $filipino2; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;Makabayan: &emsp;<input type="int" name="mak2" value="<?php echo $makabayan2; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;MAPEH: &nbsp;&emsp;&emsp;&emsp;<input type="int" name="map2" value="<?php echo $mapeh2; ?>" autofocus autocomplete="off" /></label><br />
<label>&emsp;T.L.E.:&emsp;&emsp;<input type="int" name="tles2" value="<?php echo $tle2; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;Araling Panlipunan:&emsp;<input type="int" name="ap2" value="<?php echo $aralpan2; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;Edukasyon sa Pagkatao:&emsp;<input type="int" name="ep2" value="<?php echo $edukpag2; ?>" autofocus autocompete="off" /></label><br />
<h4><label>&nbsp;&nbsp; Second Quarter Average:&emsp;<input type="int" name="squ" value="<?php echo $squarter; ?>" autofocus autocomplete="off" />
</label></h4>
<table width="100%" border="2"><tr><td></td></tr></table>
<h3>&nbsp;&nbsp;Third Quarter</h3><br />
<label>&emsp;Science:&emsp;<input type="int" name="sci3" value="<?php echo $science3; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;English:&emsp;&emsp;&emsp;<input type="int" name="eng3" value="<?php echo $english3; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;Mathematics:&emsp;<input type="int" name="mat3" value="<?php echo $math3; ?>" autofocus autocomplete="off" /></label><br />
<label>&emsp;Filipino:&emsp;<input type="int" name="fil3" value="<?php echo $filipino3; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;Makabayan: &emsp;<input type="int" name="mak3" value="<?php echo $makabayan3; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;MAPEH: &nbsp;&emsp;&emsp;&emsp;<input type="int" name="map3" value="<?php echo $mapeh3; ?>" autofocus autocomplete="off" /></label><br />
<label>&emsp;T.L.E.:&emsp;&emsp;<input type="int" name="tles3" value="<?php echo $tle3; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;Araling Panlipunan:&emsp;<input type="int" name="ap3" value="<?php echo $aralpan3; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;Edukasyon sa Pagkatao:&emsp;<input type="int" name="ep3" value="<?php echo $edukpag3; ?>" autofocus autocomplete="off" /></label><br />
<h4><label>&nbsp;&nbsp;Third Quarter Average:&emsp;<input type="int" name="tqu" value="<?php echo $tquarter; ?>" autofocus autocomplete="off" />
</label></h4>
<table width="100%" border="2"><tr><td></td></tr></table>
<h3>&nbsp;&nbsp;Fourth Quarter</h3><br />
<label>&emsp;Science:&emsp;<input type="int" name="sci4" value="<?php echo $science4; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;English:&emsp;&emsp;&emsp;<input type="int" name="eng4" value="<?php echo $english4; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;Mathematics:&emsp;<input type="int" name="mat4" value="<?php echo $math4; ?>" autofocus autocomplete="off" /></label><br />
<label>&emsp;Filipino:&emsp;<input type="int" name="fil4" value="<?php echo $filipino3; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;Makabayan: &emsp;<input type="int" name="mak4" value="<?php echo $makabayan4; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;MAPEH: &nbsp;&emsp;&emsp;&emsp;<input type="int" name="map4" value="<?php echo $mapeh4; ?>" autofocus autocomplete="off" /></label><br />
<label>&emsp;T.L.E.:&emsp;&emsp;<input type="int" name="tles4" value="<?php echo $tle4; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;&emsp;Araling Panlipunan:&emsp;<input type="int" name="ap4" value="<?php echo $aralpan4; ?>" autofocus autocomplete="off" /></label>
<label>&emsp;Edukasyon sa Pagkatao:&emsp;<input type="int" name="ep4" value="<?php echo $edukpag4; ?>" autofocus autocomplete="off" /></label><br />
<h4><label>&nbsp;&nbsp;Fourth Quarter Average:&emsp;<input type="int" name="ffqu" value="<?php echo $ffquarter; ?>" autofocus autocomplete="off" />
</label></h4>
<table width="100%" border="4"><tr><td></td></tr></table>
<center><h2><input type="submit" name="submit" value="Save"></h2></center>
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
$fquarter = mysql_real_escape_string(htmlspecialchars($_POST['fqu']));
$science = mysql_real_escape_string(htmlspecialchars($_POST['sci']));
$english = mysql_real_escape_string(htmlspecialchars($_POST['eng']));
$math = mysql_real_escape_string(htmlspecialchars($_POST['mat']));
$filipino = mysql_real_escape_string(htmlspecialchars($_POST['fil']));
$makabayan = mysql_real_escape_string(htmlspecialchars($_POST['mak']));
$mapeh = mysql_real_escape_string(htmlspecialchars($_POST['map']));
$tle = mysql_real_escape_string(htmlspecialchars($_POST['tles']));
$aralpan = mysql_real_escape_string(htmlspecialchars($_POST['ap']));
$edukpag = mysql_real_escape_string(htmlspecialchars($_POST['ep']));

$squarter = mysql_real_escape_string(htmlspecialchars($_POST['squ']));
$science2 = mysql_real_escape_string(htmlspecialchars($_POST['sci2']));
$english2 = mysql_real_escape_string(htmlspecialchars($_POST['eng2']));
$math2 = mysql_real_escape_string(htmlspecialchars($_POST['mat2']));
$filipino2 = mysql_real_escape_string(htmlspecialchars($_POST['fil2']));
$makabayan2 = mysql_real_escape_string(htmlspecialchars($_POST['mak2']));
$mapeh2 = mysql_real_escape_string(htmlspecialchars($_POST['map2']));
$tle2 = mysql_real_escape_string(htmlspecialchars($_POST['tles2']));
$aralpan2 = mysql_real_escape_string(htmlspecialchars($_POST['ap2']));
$edukpag2 = mysql_real_escape_string(htmlspecialchars($_POST['ep2']));

$tquarter = mysql_real_escape_string(htmlspecialchars($_POST['tqu']));
$science3 = mysql_real_escape_string(htmlspecialchars($_POST['sci3']));
$english3 = mysql_real_escape_string(htmlspecialchars($_POST['eng3']));
$math3 = mysql_real_escape_string(htmlspecialchars($_POST['mat3']));
$filipino3 = mysql_real_escape_string(htmlspecialchars($_POST['fil3']));
$makabayan3 = mysql_real_escape_string(htmlspecialchars($_POST['mak3']));
$mapeh3 = mysql_real_escape_string(htmlspecialchars($_POST['map3']));
$tle3 = mysql_real_escape_string(htmlspecialchars($_POST['tles3']));
$aralpan3 = mysql_real_escape_string(htmlspecialchars($_POST['ap3']));
$edukpag3 = mysql_real_escape_string(htmlspecialchars($_POST['ep3']));

$ffquarter = mysql_real_escape_string(htmlspecialchars($_POST['ffqu']));
$science4 = mysql_real_escape_string(htmlspecialchars($_POST['sci4']));
$english4 = mysql_real_escape_string(htmlspecialchars($_POST['eng4']));
$math4 = mysql_real_escape_string(htmlspecialchars($_POST['mat4']));
$filipino4 = mysql_real_escape_string(htmlspecialchars($_POST['fil4']));
$makabayan4 = mysql_real_escape_string(htmlspecialchars($_POST['mak4']));
$mapeh4 = mysql_real_escape_string(htmlspecialchars($_POST['map4']));
$tle4 = mysql_real_escape_string(htmlspecialchars($_POST['tles4']));
$aralpan4 = mysql_real_escape_string(htmlspecialchars($_POST['ap4']));
$edukpag4 = mysql_real_escape_string(htmlspecialchars($_POST['ep4']));


if ($fquarter == '' || $science == '' || $english == '' || $math == '' || $filipino == '' || $makabayan == '' || $mapeh == '' 
    || $tle == '' || $aralpan == '' || $edukpag == '' || $squarter == '' || $science2 == '' || $english2 == '' || $math2 == '' 
	|| $filipino2 == '' || $makabayan2 == '' || $mapeh2 == '' || $tle2 == '' || $aralpan2 == '' || $edukpag2 == '' || $tquarter == '' 
	|| $science3 == '' || $english3 == '' || $math3 == '' || $filipino3 == '' || $makabayan3 == '' || $mapeh3 == '' || $tle3 == '' 
	|| $aralpan3 == '' || $edukpag3 == '' || $ffquarter == '' || $science4 == '' || $english4 == '' || $math4 == '' || $filipino4 == '' 
	|| $makabayan4 == '' || $mapeh4 == '' || $tle4 == '' || $aralpan4 == '' || $edukpag4 == '')
{

$error = 'ERROR: Please fill in all required fields!';


valid($id, $fquarter, $science, $english, $math, $filipino, $makabayan,
      $mapeh, $tle, $aralpan, $edukpag,$squarter, $science2, $english2, $math2, $filipino2, $makabayan2, $mapeh2, 
	  $tle2, $aralpan2, $edukpag2, $tquarter, $science3, $english3, $math3, $filipino3, $makabayan3, $mapeh3, $tle3,
	  $aralpan3, $edukpag3, $ffquarter, $science4, $english4, $math4, $filipino4, $makabayan4, $mapeh4, $tle4, $aralpan4,
	  $edukpag4, $error);
}
else
{

mysql_query("UPDATE grade7secrosal SET fquarter='$fquarter', science='$science', english='$english', math='$math', filipino='$filipino', 			            makabayan='$makabayan', mapeh='$mapeh', tle='$tle', aralpan='$aralpan', edukpag='$edukpag', squarter='$squarter',            science2='$science2', english2='$english2', math2='$math2', filipino2='$filipino2', makabayan2='$makabayan2', mapeh2='$mapeh2',
            tle2='$tle2', aralpan2='$aralpan2', edukpag2='$edukpag2', tquarter='$tquarter', science3='$science3', english3='$english3',            math3='$math3', filipino3='$filipino3', makabayan3='$makabayan3', mapeh3='$mapeh3', tle3='$tle3', aralpan3='$aralpan3', 
			edukpag3='$edukpag3', ffquarter='$ffquarter', science4='$science4', english4='$english4', math4='$math4', filipino4='$filipino4',            makabayan4='$makabayan4', mapeh4='$mapeh4', tle4='$tle4', aralpan4='$aralpan4', edukpag4='$edukpag4' WHERE id='$id'")
or die(mysql_error());
header("Location: admin-managesec-7.php");
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
$fquarter=$row['fquarter'];
$science=$row['science'];
$english=$row['english'];
$math=$row['math'];
$filipino=$row['filipino'];
$makabayan=$row['makabayan'];
$mapeh=$row['mapeh'];
$tle=$row['tle'];
$aralpan=$row['aralpan'];
$edukpag=$row['edukpag'];

$squarter=$row['squarter'];
$science2=$row['science2'];
$english2=$row['english2'];
$math2=$row['math2'];
$filipino2=$row['filipino2'];
$makabayan2=$row['makabayan2'];
$mapeh2=$row['mapeh2'];
$tle2=$row['tle2'];
$aralpan2=$row['aralpan2'];
$edukpag2=$row['edukpag2'];

$tquarter=$row['tquarter'];
$science3=$row['science3'];
$english3=$row['english3'];
$math3=$row['math3'];
$filipino3=$row['filipino3'];
$makabayan3=$row['makabayan3'];
$mapeh3=$row['mapeh3'];
$tle3=$row['tle3'];
$aralpan3=$row['aralpan3'];
$edukpag3=$row['edukpag3'];

$ffquarter=$row['ffquarter'];
$science4=$row['science4'];
$english4=$row['english4'];
$math4=$row['math4'];
$filipino4=$row['filipino4'];
$makabayan4=$row['makabayan4'];
$mapeh4=$row['mapeh4'];
$tle4=$row['tle4'];
$aralpan4=$row['aralpan4'];
$edukpag4=$row['edukpag4'];

valid($id, $fquarter, $science, $english, $math, $filipino, $makabayan, $mapeh, $tle, $aralpan, $edukpag,
	  $squarter, $science2, $english2, $math2, $filipino2, $makabayan2, $mapeh2, $tle2, $aralpan2, $edukpag2,
	  $tquarter, $science3, $english3, $math3, $filipino3, $makabayan3, $mapeh3, $tle3, $aralpan3, $edukpag3,
	  $ffquarter, $science4, $english4, $math4, $filipino4, $makabayan4, $mapeh4, $tle4, $aralpan4, $edukpag4, '');
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