<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("Location: admin.php");
}
?>
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




							<div class="row"> <!-- head row -->
										<div class="col-md-12" id="header">
											<div class="col-md-7" id="logo-cont" style="resize:both;">
                                            		<div class="col-md-3" style="resize:none; display:inline-block;"><img src="img/mesuf logo.PNG" class="img-responsive" id="logo"/></img></div>
                                                    	<div class="col-md-8" id="name-title">Manuel S. Enverga
                                                        		<div class="col-md-12" id="name-title2">University Foundation</div></div></div>

															<div class="col-md-5" id="nav-header">		
                                            					<ul id="header-nav">
                                            					<li><a href="signout.php">Sign Out</a></li>
                                                                </ul>			
                                                            </div>
										</div>
							</div><!-- head row end-->
                            
                            
 <div class="container">    <!--container-->                       
                            
                            
											<!--====================main content===================-->   	
			<!--<div class="col-md-12" id="nav-content">
                       <ul id="content-menu">
                             <li><a data-toggle="tab" data-target="#prod-tab1" href="#prod-tab1"><div class="col-md-2" id="button-div">COMPUTERS</div></a></li>
                             <li><a data-toggle="tab" data-target="#prod-tab2" href="#prod-tab2"><div class="col-md-2" id="button-div">PARTS</div></a></li>
                             <li><a data-toggle="tab" data-target="#prod-tab3" href="#prod-tab2"><div class="col-md-2" id="button-div">ACCESSORIES</div></a></li>
                       </ul>
           </div>-->
           
           
            <div class="col-md-12" id="nav-content"><ul id="content-menu">
                             <li><div class="col-md-2" id="active-tab">MASTER LIST</div></li>
                             <li><a href="admin-managesec-7.php"><div class="col-md-2" id="button-div">MANAGE SECTION</div></a></li>
                             <li><a href="admin-managesubj.php"><div class="col-md-2" id="button-div">MANAGE SUBJECT</div></a></li>
                       </ul></div>




<div class="col-md-12" id="admin-content">
<center>
<table><tr><td>
<center><table width="1000"><tr><td><center><h2>List of Students Enrolled for the 2015 - 2016 School Year</h2></td></tr></table>
<center>
	<form name="search_form" method="POST" action="masterlist.php">
		<input type="text" placeholder="Search Here...	" name="search_box" value=""/>
        <input type="submit" name="search" value="Filter Table"/>
    </form>
         </center><br />

<?php
$con = mysqli_connect("localhost","root","","bed");

if(!$con){
die("Can't connect" . mysqli_error());
}

$sql = mysqli_query($con,"SELECT * FROM studlist");

if (isset($_POST['search'])){
	$search_term = mysql_real_escape_string($_POST['search_box']);
	$sql .= "WHERE name = '{$search_term}'";
}


echo "<table border = 1 width = 1000>
<tr>
<th>ID</th>
<th>Student Number</th>
<th>Name</th>
<th>Gender</th>
<th>Age</th>
<th>Grade</th>
</tr>";

while($row = mysqli_fetch_array($sql)) {

echo "<tr> ";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['studnum'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['grade'] . "</td>";
echo " </tr>";
}
mysqli_close($con);
?>
</td></tr></table></center>
<!-- ========== here we put the master list =========-->




                                        

</div>






</div>												<!--====================main content end===================-->


<div class="col-md-12" id="spacer"></div>
 	
</div><!-- container end-->







<div class="col-md-12" id="footer">

</div>

</body>
</html>