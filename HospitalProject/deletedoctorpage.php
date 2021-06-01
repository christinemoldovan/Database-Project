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
echo("Doctor with ID:".$idDoc." has been deleted.<br>");


$q3="DELETE FROM doctb WHERE idDoc='$idDoc'";
mysql_query($q3) or die ("Delete error");
echo("Delete successful!");
?>
</body>
</html>