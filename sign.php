<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration form</title>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 3){$("#user-result").html('');return;}
		
		if(username.length >= 3){
			$.post('check_username.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});	
});
</script>

<script type="text/javascript">
$(document).ready(function() {
	$("#name").keyup(function (e) {
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var name = $(this).val();
		if(name.length < 3){$("#user-result").html('');return;}
		
		if(name.length >= 3){
			$.post('check_name.php', {'name':name}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});	
});
</script>

<script>
function pakicheckmuna() {
var p1= document.forms["form1"]["psw1"].value;
var p2= document.forms["form1"]["psw2"].value;

if (p1 != p2) {
	alert("Password doesn't match");
	return false;
}

return true;
}
</script>
<link href="regstyle.css" rel="stylesheet" type="text/css" />
<link href="regstyle2.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="date">
<script>
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
				"Thursday","Friday","Saturday");

// Array of month Names
var monthNames = new Array(
"January","February","March","April","May","June","July",
"August","September","October","November","December");

var now = new Date();
document.write(dayNames[now.getDay()] + ", " + 
monthNames[now.getMonth()] + " " + 
now.getDate() + ", " + now.getFullYear());

</script>
</div>

    </ul>
<form method="post" action="register.php" name="form1" onsubmit="return pakicheckmuna()"><h4>
<div class="reg">
<label for="name">Full Name:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="name"  id="name" placeholder="Type name here" autofocus autocomplete="off" required><span id="user-result"></span></label><br /><br />
<label for="username">Username:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="username"  id="username" autofocus autocomplete="off" required><span id="user-result"></span></label>
</br></br>Password: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="password" name="psw1" required><br /><br />
Confirm password:&emsp;&emsp;&nbsp;<input type="password" name="psw2" required><br /><br />
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="button" value="Cancel" onclick="window.location='admin.php'">&emsp;<input type="submit" value="Submit"></h4>
</form>
</div>
</body>
</html>