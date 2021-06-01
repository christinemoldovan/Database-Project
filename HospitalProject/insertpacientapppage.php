
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
$username=$_POST["doc_user"];

$appdate=$_POST["year"]."-".$_POST["month"]."-".$_POST['day'];
$apptime=$_POST["appt"];


echo("Doctor username:".$username."<br>");

echo("Time of appointment:".$apptime."<br>");
echo("Date of appointment:".$appdate."<br>");
$q1=
"INSERT INTO appointmenttb(pid,fname,lname,gender,email,contact,doctor,docFees,appdate,apptime)
     (SELECT p.pid,p.fname,p.lname,p.gender,p.email,p.contact,d.username,d.docFees,'$appdate','$apptime'
		FROM patreg p, doctb d
		WHERE p.email='$email' AND d.username='$username')";
mysql_query($q1) or die ("Insert error");
echo("Insert successful!");
?>
</body>
</html>