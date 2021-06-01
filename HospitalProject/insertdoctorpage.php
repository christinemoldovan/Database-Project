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
$username=$_POST["doc_user"];
$password=$_POST["doc_pass"];
$email=$_POST["doc_email"];
$specialization=$_POST["doc_spec"];
$fees=$_POST["doc_fees"];
$lname=$_POST["doc_lname"];
$fname=$_POST["doc_fname"];
echo("Doctor username:".$username."<br>");
echo("Doctor password:".$password."<br>");
echo("Doctor email:".$email."<br>");
echo("Doctor specialization:".$specialization."<br>");
echo("Doctor fees:".$fees."<br>");
echo("Doctor last name:".$lname."<br>");
echo("Doctor first name:".$fname."<br>");



$q1="Insert into doctb(username, password, email, spec, docFees, lname, fname) values('$username','$password','$email','$specialization','$fees','$lname','$fname')";
mysql_query($q1) or die ("Insert error");
echo("Insert successful!");
?>
</body>
</html>