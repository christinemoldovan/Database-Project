
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
	background-image: url(img/new.jpg);
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
include('func1.php');
$username = $_SESSION['dname'];

$ID=$_POST["appid"];
$disease=$_POST["TextBoxDisease"];
$allergy=$_POST["TextBoxAllergy"];
$prescription=$_POST["TextBoxPrescription"];


echo("Appointment id:".$ID."<br>");
echo("Disease:".$disease."<br>");
echo("Allergy:".$allergy."<br>");
echo("Prescription:".$prescription."<br>");


$q1="UPDATE prestb 
 SET disease='$disease', allergy='$allergy',prescription='$prescription'
 WHERE ID='$ID' AND doctor='$username'";
mysql_query($q1) or die ("Update error");
echo("Update successful!");
?>
</body>
</html>