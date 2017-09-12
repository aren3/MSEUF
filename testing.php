<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script src="amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="data/dataloader.min.js"></script>
        
<script>
            var chart = AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "theme": "light",
  "dataLoader": {"url": "data/data.php"},
  
  
  "valueAxes": [ {
	  "title":"Points",
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[Division]]: [[win_group_points]]",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "win_group_points"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "Division",
  "categoryAxis": {
	  "title":"Division",
	  "labelRotation": 45,
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );
        </script>
<body>
<div id="chartdiv" style="width: 100%; height: 400px;"></div>
</body>
</html>