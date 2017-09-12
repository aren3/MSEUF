<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manuel S. Enverga / Online Grade</title>
<link rel="stylesheet" href="css/styles.css" />

<!-- bootstrap carousel-->
<meta charset="utf-8">
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin:0px;
	  padding:0px;
  }
  </style>
<!-- bootstrap carousel end-->

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

<div class="col-md-5" id="nav-header">		
<ul id="header-nav">
<li><a href="signout1.php">Sign Out</a></li>
</ul>			
</div>
</div>
</div><!-- head row end-->
             
<!--container-->                             
<div class="container">                                                   
<!--====================main content===================-->   			
<br />           
<div class="col-md-12" id="nav-content"><ul id="content-menu">
     <li><a href="principal_home_page.php"><div class="col-md-2" id="button-div">Basic Education Department Dash Board</div></a></li>
     </ul></div><br />

<div class="col-md-12" id="admin-content">
<!-- ========== here we put the master list =========-->
<br />

<div class="col-md-2" id="nav-side">
     <div class="col-md-12" id="side-selector-space">&nbsp;</div>
     <a href="#"><div class="col-md-12" id="side-selector-active">GRADE 7</div></a>
     <a href=""><div class="col-md-12" id="side-selector">GRADE 8</div></a>
     <a href=""><div class="col-md-12" id="side-selector">GRADE 9</div></a>
     <a href=""><div class="col-md-12" id="side-selector">GRADE 10</div></a>
     <a href=""><div class="col-md-12" id="side-selector">GRADE 11</div></a>
     <a href=""><div class="col-md-12" id="side-selector">GRADE 12</div></a>
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>      
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>     
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>
<div class="col-md-12" id="side-selector-space">&nbsp;</div><div class="col-md-12" id="side-selector-space">&nbsp;</div>                       
</div>

<div class="col-md-10" id="section-container">
<div id="prod-tab1" class="tab-pane fade in active col-md-12">                
<div class="col-md-12 active" id="prod-cont">

<a data-toggle="tab" href="#rosal"><div class="col-md-4" id="sec-select"> <div class="col-md-12" id="sec-selector">ROSAL</div>
</div></a>
<a data-toggle="tab" href="#gumamela"><div class="col-md-4" id="sec-select"> <div class="col-md-12" id="sec-selector">GUMAMELA
</div></div></a>
<a data-toggle="tab" href="#makahiya"><div class="col-md-4" id="sec-select"> <div class="col-md-12" id="sec-selector">MAKAHIYA
</div></div></a>


<div id="container-section" class="col-md-12" >	
<div id="rosal" class="tab-pane fade in active col-md-12">
<h4>Home Room Adviser: Miss Cherry A. Villanueva | Rosal</h4>
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
	width		: 1050px;
	height		: 200px;
	font-size	: 11px;
}						
</style>

<center><h5>Representation of Average Per Quarter for Section Rosal</h5></center>
<div id="graphDW_div"></div>

<?php
if(isset($_POST['submit'])){
$con = mysqli_connect("localhost","root","","bed");
if(!$con){
die("Can't connect" . mysqli_error());	
}
$sql="INSERT INTO grade7secrosal(id, name, fquarter, squarter, tquarter, ffquarter)
VALUES('','$_POST[stname]','$_POST[fq]','$_POST[sq]','$_POST[tq]','$_POST[ffq]')";
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
<th><center>ID</th>
<th width=600><center>Student Name</th>
<th><center>First Quarter</th>
<th><center>Second Quarter</th>
<th><center>Third Quarter</th>
<th><center>Fourth Quarter</th>
<th><center><a href=principal_home_page.php><center>Action</center></a></th>
</tr>";

while($row = mysqli_fetch_array($sql)) {

echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>&emsp;" . $row['name'] . "</td>";
echo "<td><center>" . $row['fquarter'] . "</td>";
echo "<td><center>" . $row['squarter'] . "</td>";
echo "<td><center>" . $row['tquarter'] . "</td>";
echo "<td><center>" . $row['ffquarter'] . "</td>";
echo "<td><center>" . "</td>";
echo " </tr>";
}
mysqli_close($con);
?>
</td></tr></table>
</div>
<div class="col-md-12" id="spacer"></div>
</div><!-- container end-->
<div class="col-md-12" id="footer">
</div>
</div>
        
<div id="container-section" class="col-md-12" >
<div id="gumamela" class="tab-pane fade col-md-12">
<h4>Home Room Adviser: Mrs. Rowena H. Carpena | Gumamela</h4>
<script src="amcharts/amcharts.js"></script>
<script src="amcharts/serial.js"></script>
<script src="amcharts/amstock.js"></script>
<script src="amcharts/pie.js"></script>
<script src="amcharts/themes/light.js"></script>
<script src="amcharts/plugins/dataloader/dataloader.min.js"></script>
<script type="text/javascript">
var chart = AmCharts.makeChart("graphGUM_div", {
	"type": "serial",
     "theme": "light",
	 "legend": {
        "horizontalGap": 10,
        "maxColumns": 1,
        "position": "right",
		"useGraphSettings": true,
		"markerSize": 10
    },
	"categoryField": "grade1",
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
			"balloonText": "grade1:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "Grade Per Quarter",
			"type": "column",
			"valueField": "gpq1"
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
			"grade1": "FQuarter",
    "gpq1": <?php 
				$conn= new mysqli("localhost", "root", "", "bed");
				$sql= "SELECT AVG(gfquarter) as 'gfquarter' FROM grade7secgumamela  ";
				 $test = $conn->query($sql);
				 $row= $test->fetch_assoc();
				 echo $row['gfquarter']; ?>
  }, {
   "grade1": "SQuarter",
    "gpq1": <?php 
				$conn= new mysqli("localhost", "root", "", "bed");
				$sql= "SELECT AVG(gsquarter) as 'gsquarter' FROM grade7secgumamela ";
				 $test = $conn->query($sql);
				 $row= $test->fetch_assoc();
				 echo $row['gsquarter']; ?>	 
  }, {
    "grade1": "TQuarter",
    "gpq1": <?php 
				$conn= new mysqli("localhost", "root", "", "bed");
				$sql= "SELECT AVG(gtquarter) as 'gtquarter' FROM grade7secgumamela ";
				 $test = $conn->query($sql);
				 $row= $test->fetch_assoc();
				 echo $row['gtquarter']; ?>
  }, {
     "grade1": "FFQuarter",
    "gpq1": <?php 
				$conn= new mysqli("localhost", "root", "", "bed");
				$sql= "SELECT AVG(gffquarter) as 'gffquarter' FROM grade7secgumamela ";
				 $test = $conn->query($sql);
				 $row= $test->fetch_assoc();
				 echo $row['gffquarter']; ?>	 
  }
	],
    "export": {
    	"enabled": true
     }

});
</script>

<style>
#graphGUM_div {
	width		: 1050px;
	height		: 200px;
	font-size	: 11px;
}						
</style>

<center><h5>Representation of Average Per Quarter for Section Gumamela</h5></center>
<div id="graphGUM_div"></div>

<?php
if(isset($_POST['submit'])){
$con = mysqli_connect("localhost","root","","bed");
if(!$con){
die("Can't connect" . mysqli_error());	
}
$sql="INSERT INTO grade7secgumamela(id, name, gfquarter, gsquarter, gtquarter, gffquarter)
VALUES('','$_POST[stname]','$_POST[gq]','$_POST[gsq]','$_POST[gtq]','$_POST[gffq]')";
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
$sql = mysqli_query($con,"SELECT * FROM grade7secgumamela");

echo "<table border = 1 width=900>
<tr>
<th><center>ID</th>
<th width=600><center>Student Name</th>
<th><center>First Quarter</th>
<th><center>Second Quarter</th>
<th><center>Third Quarter</th>
<th><center>Fourth Quarter</th>
<th><center><a href=principal_home_page.php><center>Action</center></a></th>
</tr>";

while($row = mysqli_fetch_array($sql)) {

echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>&emsp;" . $row['name'] . "</td>";
echo "<td><center>" . $row['gfquarter'] . "</td>";
echo "<td><center>" . $row['gsquarter'] . "</td>";
echo "<td><center>" . $row['gtquarter'] . "</td>";
echo "<td><center>" . $row['gffquarter'] . "</td>";
echo "<td><center>" . "</td>";
echo " </tr>";
}
mysqli_close($con);
?>
</td></tr></table>
</div>
<div class="col-md-12" id="spacer"></div>
</div><!-- container end-->
<div class="col-md-12" id="footer">
</div>
</div>
        
<div id="container-section" class="col-md-12" >
<div id="makahiya" class="tab-pane fade col-md-12">
<h4>Home Room Adviser: Mr. Victor R. Oribe | Makahiya</h4>
<script src="amcharts/amcharts.js"></script>
<script src="amcharts/serial.js"></script>
<script src="amcharts/amstock.js"></script>
<script src="amcharts/pie.js"></script>
<script src="amcharts/themes/light.js"></script>
<script src="amcharts/plugins/dataloader/dataloader.min.js"></script>
<script type="text/javascript">
var chart = AmCharts.makeChart("graphMAK_div", {
	"type": "serial",
     "theme": "light",
	 "legend": {
        "horizontalGap": 10,
        "maxColumns": 1,
        "position": "right",
		"useGraphSettings": true,
		"markerSize": 10
    },
	"categoryField": "grade2",
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
			"balloonText": "grade2:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "Grade Per Quarter",
			"type": "column",
			"valueField": "gpq2"
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
			"grade2": "FQuarter",
    "gpq2": <?php 
				$conn= new mysqli("localhost", "root", "", "bed");
				$sql= "SELECT AVG(mfquarter) as 'mfquarter' FROM grade7secmakahiya  ";
				 $test = $conn->query($sql);
				 $row= $test->fetch_assoc();
				 echo $row['mfquarter']; ?>
  }, {
   "grade2": "SQuarter",
    "gpq2": <?php 
				$conn= new mysqli("localhost", "root", "", "bed");
				$sql= "SELECT AVG(msquarter) as 'msquarter' FROM grade7secmakahiya ";
				 $test = $conn->query($sql);
				 $row= $test->fetch_assoc();
				 echo $row['msquarter']; ?>	 
  }, {
    "grade2": "TQuarter",
    "gpq2": <?php 
				$conn= new mysqli("localhost", "root", "", "bed");
				$sql= "SELECT AVG(mtquarter) as 'mtquarter' FROM grade7secmakahiya ";
				 $test = $conn->query($sql);
				 $row= $test->fetch_assoc();
				 echo $row['mtquarter']; ?>
  }, {
     "grade2": "FFQuarter",
    "gpq2": <?php 
				$conn= new mysqli("localhost", "root", "", "bed");
				$sql= "SELECT AVG(mffquarter) as 'mffquarter' FROM grade7secmakahiya ";
				 $test = $conn->query($sql);
				 $row= $test->fetch_assoc();
				 echo $row['mffquarter']; ?>	 
  }
	],
    "export": {
    	"enabled": true
     }

});
</script>

<style>
#graphMAK_div {
	width		: 1050px;
	height		: 200px;
	font-size	: 11px;
}						
</style>

<center><h5>Representation of Average Per Quarter for Section Makahiya</h5></center>
<div id="graphMAK_div"></div>
<?php
if(isset($_POST['submit'])){
$con = mysqli_connect("localhost","root","","bed");
if(!$con){
die("Can't connect" . mysqli_error());	
}
$sql="INSERT INTO grade7secmakahiya(id, name, mfquarter, msquarter, mtquarter, mffquarter)
VALUES('','$_POST[stname]','$_POST[mfq]','$_POST[msq]','$_POST[mtq]','$_POST[mffq]')";
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
$sql = mysqli_query($con,"SELECT * FROM grade7secmakahiya");

echo "<table border = 1 width=900>
<tr>
<th><center>ID</th>
<th width=600><center>Student Name</th>
<th><center>First Quarter</th>
<th><center>Second Quarter</th>
<th><center>Third Quarter</th>
<th><center>Fourth Quarter</th>
<th><center><a href=principal_home_page.php><center>Action</center></a></th>
</tr>";

while($row = mysqli_fetch_array($sql)) {

echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>&emsp;" . $row['name'] . "</td>";
echo "<td><center>" . $row['mfquarter'] . "</td>";
echo "<td><center>" . $row['msquarter'] . "</td>";
echo "<td><center>" . $row['mtquarter'] . "</td>";
echo "<td><center>" . $row['mffquarter'] . "</td>";
echo "<td><center>" . "</td>";
echo " </tr>";
}
mysqli_close($con);
?>
</td></tr></table>

</div>
<!-- <div class="col-md-12" style="margin-top:30px;"><button name="update" type="input" value="Update" id="button-login"/>Update</button></div> -->                                     
</div><!--====================main content end===================-->


<div class="col-md-12" id="spacer"></div>
</div><!-- container end-->
<div class="col-md-12" id="footer">
</div>

</body>
</html>