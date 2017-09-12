<link href="css/teacherhome.css" rel="stylesheet" type="text/css" />
<head>
<title>Grade 7 Rosal Home Page</title>
</head>

<div id="container">
<header>
<table id="header"><tr><td>
<img src="img/white_logo.png" alt="a" style="width: 80px;height: 80px"></td><td>
<h3>Enverga University Basic Education Monitoring System | Ms. Cherry A. Villanueva</h3></td></tr>
</table>
</header></div>

<br><br><br><br><br><br><br><br><center>
<h3>Quarterly Grade of Section Rosal</h3>
<?php
if(isset($_POST['submit'])){
$con = mysqli_connect("localhost","root","","bed");
if(!$con){
die("Can't connect" . mysqli_error());	
}
$sql="INSERT INTO grade7secrosal(id, name, fquarter, squarter, tquarter, ffquarter)
VALUES('','$_POST[stname]','$_POST[fq]','$_POST[sq]','$_POST[tq],'$_POST[ffq]')";
mysqli_query($con, $sql);
mysqli_close($con);

}
?>
<table><tr><td>
<?php
$con = mysqli_connect("localhost","root","","bed");
if(!$con){
die("Can't connect" . mysqli_error());
}
$sql = mysqli_query($con,"SELECT * FROM grade7secrosal");

echo "<table border = 1 width=900>
<tr>
<th>ID</th>
<th width=400>Student Name</th>
<th><a href=grade+7_section+rosal_afquarter+grade.php#######>First Quarter</a></th>
<th><a href=grade+7_section+rosal_asquarter+grade.php#######>Second Quarter</a></th>
<th><a href=grade+7_section+rosal_atquarter+grade.php#######>Third Quarter</a></th>
<th><a href=grade+7_section+rosal_auffquarter+grade.php#######>Fourth Quarter</a></th>
<th><center>Action</center></th>
</tr>";

while($row = mysqli_fetch_array($sql)) {

echo "<tr> ";
echo "<td><center>" . $row['id'] . "</center></td>";
echo "<td>&emsp;" . $row['name'] . "</td>";
echo "<td><center>" . $row['fquarter'] ."</a></td>";
echo "<td><center>" . $row['squarter'] . "</a></td>";
echo "<td><center>" . $row['tquarter'] . "</a></td>";
echo "<td><center>" . $row['ffquarter'] . "</a></td>";
echo '<td><a href="grade+7_section+rosal_azquarter+grade.php?id=' . $row['id'] . '#######"><center>>></center></a></font></td>';

echo " </tr>";
}
mysqli_close($con);
?>
</td></tr></table>
<br /><a href="signout1.php">Sign Out</a>

<div>
<footer>
<table id="foot"><tr><td><br>
<p>@ 2015. Academic Performance Monitoring System. Application Development Team, Enverga University.</p></td></tr><br></table>
</footer>
</div>
</body>
</html>