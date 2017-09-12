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
<li><a href="signout.php">Sign Out</a></li>
</ul>			
</div>
</div>
</div><!-- head row end-->
             
<!--container-->                             
<div class="container">                                                   
<!--====================main content===================-->   			
<br />           
<div class="col-md-12" id="nav-content"><ul id="content-menu">
     <li><a href="admin-master1.php"><div class="col-md-2" id="button-div">MASTER LIST</div></a></li>
      <li><a href="admin-managesec-7.php"><div class="col-md-2" id="active-tab">Grades</div></a></li>
     <li><a href="admin-managesubj.php"><div class="col-md-2" id="button-div">Accounts</div></a></li>
      </ul></div>

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
     <div class="col-md-12" id="side-selector-space">&nbsp;</div>
     <div class="col-md-12" id="side-selector-space">&nbsp;</div>                       
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
<h3>Home Room Adviser: Miss Cherry A. Villanueva | Rosal</h3>
<?php
if(isset($_POST['submit'])){
$con = mysqli_connect("localhost","root","","bed");
if(!$con){
die("Can't connect" . mysqli_error());	
}
$sql="INSERT INTO grade7secrosal(id, studnum, name)
VALUES('','$_POST[stnum]','$_POST[stname]')";
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
<th>Student Number</th>
<th>Student Name</th>
<th><center>Action</center></th>
</tr>";

while($row = mysqli_fetch_array($sql)) {

echo "<tr> ";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['studnum'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo '<td><a href="grades.php?id=' . $row['id'] . '"><center>Grades</center></a></font></td>';

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
<h3>Home Room Adviser: Mrs. Rowena H. Carpena | Gumamela</h3>
<?php
if(isset($_POST['submit'])){
$con = mysqli_connect("localhost","root","","bed");
if(!$con){
die("Can't connect" . mysqli_error());	
}

$sql="INSERT INTO grade7secgumamela(id, studnum, name, gender)
VALUES('','$_POST[stnum]','$_POST[stname]','$_POST[gend]')";

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
<th>ID</th>
<th>Student Number</th>
<th>Student Name</th>
<th>Gender</th>
<th><center>Action</center></th>
</tr>";

while($row = mysqli_fetch_array($sql)) {
	
echo "<tr> ";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['studnum'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo '<td><a href="gumamelaupdate.php?id=' . $row['id'] . '">Update Student Info</a></font></td><td>';
echo '<!--<!--<a href="delete.php?id=' . $row['id'] . '">Remove Product</a></b></td>-->';

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
<h3>Home Room Adviser: Mr. Victor R. Oribe | Makahiya</h3>
<?php
if(isset($_POST['submit'])){
$con = mysqli_connect("localhost","root","","bed");
if(!$con){
die("Can't connect" . mysqli_error());	
}
$sql="INSERT INTO grade7secmakahiya(id, studnum, name, gender)
VALUES('','$_POST[stnum]','$_POST[stname]','$_POST[gend]')";
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
<th>ID</th>
<th>Student Number</th>
<th>Student Name</th>
<th>Gender</th>
<th><center>Action</center></th>
</tr>";

while($row = mysqli_fetch_array($sql)) {

echo "<tr> ";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['studnum'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo '<td><a href="makahiyaupdate.php?id=' . $row['id'] . '">Update Student Info</a></font></td><td>';
echo '<!--<!--<a href="delete.php?id=' . $row['id'] . '">Remove Product</a></b></td>-->';

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