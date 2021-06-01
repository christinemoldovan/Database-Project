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
$pid=$_POST["pat_id"];
$fname=$_POST["pac_fname"];
$lname=$_POST["pac_lname"];
$email=$_POST["pac_email"];
$gender=$_POST["pac_gen"];
$contact=$_POST["pac_cont"];
$password=$_POST["pac_pass1"];
$cpassword=$_POST["pac_pass2"];
echo("Pacient new first name:".$fname."<br>");
echo("Pacient new last name:".$lname."<br>");
echo("Pacient new email:".$email."<br>");
echo("Pacient new gender:".$gender."<br>");
echo("Pacient new contact:".$contact."<br>");
echo("Pacient new password:".$password."<br>");
echo("Pacient new reentered password:".$cpassword."<br>");


$q2="Update patreg SET fname='$fname', lname='$lname',email='$email',gender='$gender',contact='$contact',password='$password',cpassword='$cpassword' where pid='$pid'";
mysql_query($q2) or die ("Updatr error");
echo("Update successful!");
?>
</body>
</html>