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
body{
	background-image: url(img/doctor.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	text-align: center;
	color: white;
	font-size: 20px;
	text-shadow: 2px 2px 2px black;"
}
</style>
<body>
<?php
include('func2.php');
include('func.php');
require 'init.php';
$email = $_SESSION['email'];

$ID=$_POST["reg_app"];


echo("Your appointment id:".$ID." has been deleted!<br>");


$q1="DELETE FROM appointmenttb WHERE ID='$ID' and email='$email'";
mysql_query($q1) or die ("Delete error");
echo("Delete successful!");
?>
</body>
</html>

