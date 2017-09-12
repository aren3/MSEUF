<link href="css/teacherhome.css" rel="stylesheet" type="text/css" />
<head>
<title>Grade 7 Rosal Home Page</title>
</head>
<body>
<script src="amcharts/amcharts.js"></script>
<script src="amcharts/serial.js"></script>
<script src="amcharts/amstock.js"></script>
<script src="amcharts/pie.js"></script>
<script src="amcharts/themes/light.js"></script>
<script src="amcharts/plugins/dataloader/dataloader.min.js"></script>
<script type="text/javascript">
var chart = AmCharts.makeChart("graphDW_div", {
	"type": "serial",
     "theme": "light",
	 "legend": {
        "horizontalGap": 10,
        "maxColumns": 1,
        "position": "right",
		"useGraphSettings": true,
		"markerSize": 10
    },
	"categoryField": "grade",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"title": "Quarter",
		"gridPosition": "start",
		"position": "left"
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "grade:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "Grade Per Quarter",
			"type": "column",
			"valueField": "gpq"
		},
	<!--	{
	<!--		"balloonText": "Sales:[[value]]",
	<!--		"fillAlphas": 0.8,
	<!--		"id": "AmGraph-2",
	<!--		"lineAlpha": 0.2,
	<!--		"title": "Walk in",
	<!--		"type": "column",
	<!--		"valueField": "walk in"
	<!--	}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "top",
			"axisAlpha": 0
		}
	],
	"allLabels": [],
	"balloon": {},
	"titles": [],
	"dataProvider": [{
			"grade": "FQuarter",
    "gpq": <?php 
				$conn= new mysqli("localhost", "root", "", "bed");
				$sql= "SELECT AVG(fquarter) as 'fquarter' FROM grade7secrosal  ";
				 $test = $conn->query($sql);
				 $row= $test->fetch_assoc();
				 echo $row['fquarter']; ?>
  }, {
   "grade": "SQuarter",
    "gpq": <?php 
				$conn= new mysqli("localhost", "root", "", "bed");
				$sql= "SELECT AVG(squarter) as 'squarter' FROM grade7secrosal ";
				 $test = $conn->query($sql);
				 $row= $test->fetch_assoc();
				 echo $row['squarter']; ?>	 
  }, {
    "grade": "TQuarter",
    "gpq": <?php 
				$conn= new mysqli("localhost", "root", "", "bed");
				$sql= "SELECT AVG(tquarter) as 'tquarter' FROM grade7secrosal ";
				 $test = $conn->query($sql);
				 $row= $test->fetch_assoc();
				 echo $row['tquarter']; ?>
  }, {
     "grade": "FFQuarter",
    "gpq": <?php 
				$conn= new mysqli("localhost", "root", "", "bed");
				$sql= "SELECT AVG(ffquarter) as 'ffquarter' FROM grade7secrosal ";
				 $test = $conn->query($sql);
				 $row= $test->fetch_assoc();
				 echo $row['ffquarter']; ?>	 
  }
	],
    "export": {
    	"enabled": true
     }

});
</script>

<style>
#graphDW_div {
	width		: 100%;
	height		: 300px;
	font-size	: 11px;
}						
</style>


<div id="container">
<header>
<link rel="stylesheet" href="style.css" type="text/css">
<table id="header"><tr><td>
<img src="img/white_logo.png" alt="a" style="width: 80px;height: 80px"></td><td>
<h3>Enverga University Basic Education Monitoring System | Ms. Cherry A. Villanueva</h3></td></tr>
</table>
</header></div>

<br><br><br><br><br><br><br><br><center>

<h3>Quarterly Grade of Section Rosal</h3></center>
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

echo "<table border = 1 width=1340>
<tr>
<th>ID</th>
<th width=900>Student Name</th>
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
</br> <br>
<center><h5>Representaion of Average Per Quarter for Section Rosal</h5></center>
<div id="graphDW_div"></div>
<br /><a href="signout1.php">Sign Out</a>

<div>
<footer>
<table id="foot"><tr><td><br>
<p>@ 2015. Academic Performance Monitoring System. Application Development Team, Enverga University.</p></td></tr><br></table>
</footer>
</div>
</body>
</html>