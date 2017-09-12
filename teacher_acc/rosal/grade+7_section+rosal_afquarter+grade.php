<link href="css/teacherhome.css" rel="stylesheet" type="text/css" />
<head>
<title>Grade 7 Rosal Home Page</title>
</head>
<body>


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
<br /><br />
<div>
<footer>
<table id="foot"><tr><td><br>
<p>@ 2015. Academic Performance Monitoring System. Application Development Team, Enverga University.</p></td></tr><br></table>
</footer>
</div>
</body>
</html>