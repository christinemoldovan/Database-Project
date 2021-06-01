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

$username=$_POST["doc_user"];

$appdate=$_POST["year"]."-".$_POST["month"]."-".$_POST['day'];
$apptime=$_POST["appt"];

echo("Appointment id:".$ID."<br>");
echo("Doctor username:".$username."<br>");
echo("New time of appointment:".$apptime."<br>");
echo("New date of appointment:".$appdate."<br>");

$q1="UPDATE appointmenttb a, doctb d
     SET a.doctor=d.username, a.docFees=d.docFees, a.appdate='$appdate', a.apptime='$apptime'
	 WHERE a.ID='$ID' AND d.username='$username'";
mysql_query($q1) or die ("Update error");
echo("Update successful!");
?>
</body>
</html>

