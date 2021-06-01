<html>
<head>
<title>HTML-PHP parameter transmission
</title>
</head>
<body>
<?php
require 'init.php';
$pid=$_POST["pat_id"];
// $fname=$_POST["pac_fname"];
// $lname=$_POST["pac_lname"];
// $email=$_POST["pac_email"];
// $gender=$_POST["pac_gen"];
// $contact=$_POST["pac_cont"];
$username=$_POST["doc_user"];
// $fees=$_POST["doc_fees"];
$appdate=$_POST["year"]."-".$_POST["month"]."-".$_POST['day'];
$apptime$_POST["appt"];
echo("Pacient id:".$pid."<br>");
// echo("Pacient first name:".$fname."<br>");
// echo("Pacient last name:".$lname."<br>");
// echo("Pacient email:".$email."<br>");
// echo("Pacient gender:".$gender."<br>");
// echo("Pacient contact:".$contact."<br>");
echo("Doctor username:".$username."<br>");
// echo("Doctor fees:".$fees."<br>");
echo("Time of appointment:".$apptime."<br>");
echo("Date of appointment:".$appdate."<br>");
$q1=
"INSERT INTO appointmenttb(pid,fname,lname,gender,email,contact,doctor,docFees,appdate,apptime)
     VALUES(SELECT p.pid,p.fname,p.lname,p.gender,p.email,p.contact,d.username,d.docFees,'$appdate','$apptime'
		FROM patreg p
		INNER JOIN doctb d ON p.username=d.username;
		WHERE p.pid='$pid', d.username='$username')";
mysql_query($q1) or die ("Insert error");
echo("Insert successful!");
?>
</body>
</html>