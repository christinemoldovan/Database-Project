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
include('func1.php');
require 'init.php';
$username = $_SESSION['dname'];
$password = $_SESSION['dpass'];
/*$username=$_POST["docs_user"];
$password=$_POST["docs_pass"];*/
$email=$_POST["docs_email"];
$fees=$_POST["docs_fees"];
$lname=$_POST["docs_lname"];
$fname=$_POST["docs_fname"];

echo("Doctor email:".$email."<br>");
echo("Doctor fees:".$fees."<br>");
echo("Doctor last name:".$lname."<br>");
echo("Doctor first name:".$fname."<br>");


$q1="Update doctb SET email='$email', docFees='$fees', lname='$lname', fname='$fname' WHERE username='$username' and password='$password'";

mysql_query($q1) or die ("Update error");
echo("Update successful!");
?>
</body>
</html>