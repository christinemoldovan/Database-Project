<html>
<head>
<title>HTML-PHP parameter transmission
</title>
</head>
<style>
body, html {
   height: 100%;
  margin: 0;
  font-family: 'IBM Plex Sans';
}
body {
	background-image: url(img/admin.jpg);
	opacity: 1.0;
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	text-align: center;
	color: white;
	font-size: 20px;
	text-shadow: 2px 2px 2px black;
}
</style>
<body>
<?php
require 'init.php';


$ID=$_POST["appid"];


echo("Appointment id:".$ID." has been deleted!<br>");


$q1="DELETE FROM appointmenttb WHERE ID='$ID'";
mysql_query($q1) or die ("Delete error");
echo("Delete successful!");
?>
</body>
</html>

