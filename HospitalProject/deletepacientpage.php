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
echo("Pacient with ID:".$pid." has been deleted.<br>");


$q3="DELETE FROM patreg WHERE pid='$pid'";
mysql_query($q3) or die ("Delete error");
echo("Delete successful!");
?>
</body>
</html>