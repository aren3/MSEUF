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
<h3>First Quarter Grade</h3>
<?php
if(isset($_POST['submit'])){
$con = mysqli_connect("localhost","root","","bed");
if(!$con){
die("Can't connect" . mysqli_error());	
}
$sql="INSERT INTO grade7secrosal(id, name, science, english, math, filipino, makabayan, mapeh, tle, aralpan, edukpag)
VALUES('','$_POST[stname]','$_POST[sci]','$_POST[eng]','$_POST[mat]','$_POST[fil],'$_POST[mak]','$_POST[map]','$_POST[ap]','$_POST[ep]')";
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

echo "<table border = 1 width=1340>
<tr>
<th>ID</th>
<th scope=col width=900>Student Name</th>
<th scope=col>Science</th>
<th scope=col>English</th>
<th scope=col>Math</th>
<th scope=col>Filipino</th>
<th scope=col>Makabayan</th>
<th scope=col>MAPEH</th>
<th scope=col>T.L.E.</th>
<th scope=col>A.P.</th>
<th scope=col>E.P.</th>
<th scope=col>Action</th>
</tr>";

while($row = mysqli_fetch_array($sql)) {

echo "<tr> ";
echo "<td><center>" . $row['id'] . "</center></td>";
echo "<td>&emsp;" . $row['name'] ."</td>";
echo "<td><center>" . $row['science'] ."</a></td>";
echo "<td><center>" . $row['english'] . "</a></td>";
echo "<td><center>" . $row['math'] . "</a></td>";
echo "<td><center>" . $row['filipino'] . "</a></td>";
echo "<td><center>" . $row['makabayan'] . "</a></td>";
echo "<td><center>" . $row['mapeh'] . "</a></td>";
echo "<td><center>" . $row['tle'] . "</a></td>";
echo "<td><center>" . $row['aralpan'] . "</a></td>";
echo "<td><center>" . $row['edukpag'] . "</a></td>";
echo '<td><a href="grade+7_section+rosal_login5843855_home.php?id=' . $row['id'] . '#######"><center><<</center></a></font></td>';

echo " </tr>";
}
mysqli_close($con);
?>

</td></tr></table>
<center><h3>Second Quarter Grade</h3></center>
<?php
if(isset($_POST['submit'])){
$con = mysqli_connect("localhost","root","","bed");
if(!$con){
die("Can't connect" . mysqli_error());	
}
$sql="INSERT INTO grade7secrosal(id, name, science2, english2, math2, filipino2, makabayan2, mapeh2, tle2, aralpan2, edukpag2)
     VALUES('','$_POST[stname]','$_POST[sci2]','$_POST[eng2]','$_POST[mat2]','$_POST[fil2],'$_POST[mak2]','$_POST[map2]','$_POST[ap2]'
     ,'$_POST[ep2]')";
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

echo "<table border = 1 width=1340>
<tr>
<th>ID</th>
<th scope=col width=900>Student Name</th>
<th scope=col>Science</th>
<th scope=col>English</th>
<th scope=col>Math</th>
<th scope=col>Filipino</th>
<th scope=col>Makabayan</th>
<th scope=col>MAPEH</th>
<th scope=col>T.L.E.</th>
<th scope=col>A.P.</th>
<th scope=col>E.P.</th>
<th scope=col>Action</th>
</tr>";

while($row = mysqli_fetch_array($sql)) {

echo "<tr> ";
echo "<td><center>" . $row['id'] . "</center></td>";
echo "<td>&emsp;" . $row['name'] ."</td>";
echo "<td><center>" . $row['science2'] ."</a></td>";
echo "<td><center>" . $row['english2'] . "</a></td>";
echo "<td><center>" . $row['math2'] . "</a></td>";
echo "<td><center>" . $row['filipino2'] . "</a></td>";
echo "<td><center>" . $row['makabayan2'] . "</a></td>";
echo "<td><center>" . $row['mapeh2'] . "</a></td>";
echo "<td><center>" . $row['tle2'] . "</a></td>";
echo "<td><center>" . $row['aralpan2'] . "</a></td>";
echo "<td><center>" . $row['edukpag2'] . "</a></td>";
echo '<td><a href="grade+7_section+rosal_login5843855_home.php?id=' . $row['id'] . '#######"><center><<</center></a></font></td>';

echo " </tr>";
}
mysqli_close($con);
?>

</td></tr></table>
<center><h3>Third Quarter Grade</h3></center>
<?php
if(isset($_POST['submit'])){
$con = mysqli_connect("localhost","root","","bed");
if(!$con){
die("Can't connect" . mysqli_error());	
}
$sql="INSERT INTO grade7secrosal(id, name, science3, english3, math3, filipino3, makabayan3, mapeh3, tle3, aralpan3, edukpag3)
    VALUES('','$_POST[stname]','$_POST[sci3]','$_POST[eng3]','$_POST[mat3]','$_POST[fil3],'$_POST[mak3]','$_POST[map3]','$_POST[ap3]'
    ,'$_POST[ep3]')";
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

echo "<table border = 1 width=1340>
<tr>
<th>ID</th>
<th scope=col width=900>Student Name</th>
<th scope=col>Science</th>
<th scope=col>English</th>
<th scope=col>Math</th>
<th scope=col>Filipino</th>
<th scope=col>Makabayan</th>
<th scope=col>MAPEH</th>
<th scope=col>T.L.E.</th>
<th scope=col>A.P.</th>
<th scope=col>E.P.</th>
<th scope=col>Action</th>
</tr>";

while($row = mysqli_fetch_array($sql)) {

echo "<tr> ";
echo "<td><center>" . $row['id'] . "</center></td>";
echo "<td>&emsp;" . $row['name'] ."</td>";
echo "<td><center>" . $row['science3'] ."</a></td>";
echo "<td><center>" . $row['english3'] . "</a></td>";
echo "<td><center>" . $row['math3'] . "</a></td>";
echo "<td><center>" . $row['filipino3'] . "</a></td>";
echo "<td><center>" . $row['makabayan3'] . "</a></td>";
echo "<td><center>" . $row['mapeh3'] . "</a></td>";
echo "<td><center>" . $row['tle3'] . "</a></td>";
echo "<td><center>" . $row['aralpan3'] . "</a></td>";
echo "<td><center>" . $row['edukpag3'] . "</a></td>";
echo '<td><a href="grade+7_section+rosal_login5843855_home.php?id=' . $row['id'] . '#######"><center><<</center></a></font></td>';

echo " </tr>";
}
mysqli_close($con);
?>

</td></tr></table>
<center><h3>Fourth Quarter Grade</h3></center>
<?php
if(isset($_POST['submit'])){
$con = mysqli_connect("localhost","root","","bed");
if(!$con){
die("Can't connect" . mysqli_error());	
}
$sql="INSERT INTO grade7secrosal(id, name, science4, english4, math4, filipino4, makabayan4, mapeh4, tle4, aralpan4, edukpag4)
     VALUES('','$_POST[stname]','$_POST[sci4]','$_POST[eng4]','$_POST[mat4]','$_POST[fil4],'$_POST[mak4]','$_POST[map4]','$_POST[ap4]'
     ,'$_POST[ep]')";
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

echo "<table border = 1 width=1340>
<tr>
<th>ID</th>
<th scope=col width=900>Student Name</th>
<th scope=col>Science</th>
<th scope=col>English</th>
<th scope=col>Math</th>
<th scope=col>Filipino</th>
<th scope=col>Makabayan</th>
<th scope=col>MAPEH</th>
<th scope=col>T.L.E.</th>
<th scope=col>A.P.</th>
<th scope=col>E.P.</th>
<th scope=col>Action</th>
</tr>";

while($row = mysqli_fetch_array($sql)) {

echo "<tr> ";
echo "<td><center>" . $row['id'] . "</center></td>";
echo "<td>&emsp;" . $row['name'] ."</td>";
echo "<td><center>" . $row['science4'] ."</a></td>";
echo "<td><center>" . $row['english4'] . "</a></td>";
echo "<td><center>" . $row['math4'] . "</a></td>";
echo "<td><center>" . $row['filipino4'] . "</a></td>";
echo "<td><center>" . $row['makabayan4'] . "</a></td>";
echo "<td><center>" . $row['mapeh4'] . "</a></td>";
echo "<td><center>" . $row['tle4'] . "</a></td>";
echo "<td><center>" . $row['aralpan4'] . "</a></td>";
echo "<td><center>" . $row['edukpag4'] . "</a></td>";
echo '<td><a href="grade+7_section+rosal_login5843855_home.php?id=' . $row['id'] . '#######"><center><<</center></a></font></td>';

echo " </tr>";
}
mysqli_close($con);
?>
</td></tr></table>

<br /><br />
<div>
<footer>
<table id="foot"><tr><td><br>
<p>@ 2015. Academic Performance Monitoring System. Application Development Team, Enverga University.</p></td></tr><br></table>
</footer>
</div>
</body>
</html>