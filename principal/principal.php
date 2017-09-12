<?php
session_start();
if(isset($_SESSION["username"]))
{
	header("Location: principal_home_page.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manuel S. Enverga / Online Grade</title>

<link rel="stylesheet" href="css/styles.css" />


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

															<!--<div class="col-md-5" id="nav-header">		
                                            					<ul id="header-nav">
                                            					<li><a href="signin.php">Teacher</a></li>
                                                                <li><ul><a href="student.php">Home</a></li>
                                                                </ul>			
                                                            </div>-->
</div>
</div><!-- head row end-->
                            
<div class="container">    <!--container-->                       
<!--====================main content===================-->   	
<div class="row">
<div class="col-md-12" id="content-area">
<div class="col-md-12" id="student-login-teacher">
<div class="col-md-12" id="s-login-teacher">
<div class="col-md-12" id="s-head-teacher">
Principal Log In
</div>

<div class="col-md-12" >
<form method="post" action="">
<center>
<input name="username" type="username" value="" id="user-teacher" class="img-responsive" placeholder="User Name" 
required/>
<br />
<input name="psw1" type="password" value="" id="pass-teacher" class="img-responsive" placeholder="Password" required/>
<br />
<input name="login" type="submit" value="Log In" id="button-signin" />
</center>
</form>
</div>

<div class="col-md-12" style="text-align:center; margin-top:8%; text-overflow:ellipsis;
overflow:hidden; white-space:nowrap;"><a id="mseuf" href="http://mseuf.edu.ph/">Manuel S. Enverga University Foundation</a></div>

</div>
</div>
</div>
</div>
<!--====================main content end===================-->

<div class="col-md-12" id="spacer"></div>
</div><!-- container end-->

<div class="col-md-12" id="footer">
</div>

<?php
if(isset($_POST['username'])){
$conn= new mysqli("localhost", "root", "", "bed");

$username=$_POST['username'];
$encrypt_pass=md5( $_POST['psw1'] . "churvaekek");

$sql = "SELECT * FROM principal
		WHERE
			username= '$username' AND
			password= '$encrypt_pass' ";
			
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	if($_SESSION["username"]=$username){
    header("Location: principal_home_page.php");
	}
   }
 else {
    echo "0 results";
}
$conn->close();
}
?>

</body>
</html>