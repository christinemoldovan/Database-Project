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
$fname=$_POST["pac_fname"];
$lname=$_POST["pac_lname"];
$email=$_POST["pac_email"];
$gender=$_POST["pac_gen"];
$contact=$_POST["pac_cont"];
$password=$_POST["pac_pass1"];
$cpassword=$_POST["pac_pass2"];
echo("Pacient first name:".$fname."<br>");
echo("Pacient last name:".$lname."<br>");
echo("Pacient email:".$email."<br>");
echo("Pacient gender:".$gender."<br>");
echo("Pacient contact:".$contact."<br>");
echo("Pacient password:".$password."<br>");
echo("Pacient reentered password:".$cpassword."<br>");


$q1="Insert into patreg(fname,lname,gender,email,contact,password,cpassword) values('$fname','$lname','$gender','$email','$contact','$password','$cpassword')";
mysql_query($q1) or die ("Insert error");
echo("Insert successful!");
?>
</body>
</html>