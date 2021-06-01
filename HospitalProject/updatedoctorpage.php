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
$idDoc=$_POST["doc_id"];
$username=$_POST["doc_user"];
$password=$_POST["doc_pass"];
$email=$_POST["doc_email"];
$specialization=$_POST["doc_spec"];
$fees=$_POST["doc_fees"];
$lname=$_POST["doc_lname"];
$fname=$_POST["doc_fname"];
echo("Doctor's new username:".$username."<br>");
echo("Doctor's new password:".$password."<br>");
echo("Doctor's new email:".$email."<br>");
echo("Doctor's new specialization:".$specialization."<br>");
echo("Doctor's new fees:".$fees."<br>");
echo("Doctor's new last name:".$lname."<br>");
echo("Doctor's first name:".$fname."<br>");



$q2="Update doctb SET username='$username', email='$email', docFees='$fees', password='$password', lname='$lname', fname='$fname', spec='$specialization' where idDoc='$idDoc'";
mysql_query($q2) or die ("Update error");
echo("Update successful!");


?>
</body>
</html>