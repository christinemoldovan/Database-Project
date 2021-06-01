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
$password = $_SESSION['password'];
/*$username=$_POST["docs_user"];
$password=$_POST["docs_pass"];*/
$fname=$_POST["pac_fname"];
$lname=$_POST["pac_lname"];

$gender=$_POST["pac_gen"];
$contact=$_POST["pac_cont"];

echo("Pacient first name:".$fname."<br>");
echo("Pacient last name:".$lname."<br>");

echo("Pacient gender:".$gender."<br>");
echo("Pacient contact:".$contact."<br>");



$q1="Update patreg SET contact='$contact', gender='$gender', lname='$lname', fname='$fname' WHERE email='$email' and password='$password'";

mysql_query($q1) or die ("Update error");
echo("Update successful!");
?>
</body>
</html>