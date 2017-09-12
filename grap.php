<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
   <script src="bower_components/jquery/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
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

<div class="row">
<div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">

        <h2><i class="glyphicon glyphicon-shopping-cart" style="color:#0C6;"></i> Monthly Sales Comparison for Dealer and Walk in</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    


<div id="graphDW_div"></div>	
 </div>
</div>
</div>
</div>

</body>
</html>