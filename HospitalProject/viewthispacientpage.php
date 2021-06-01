<html>
<head>
<title>HTML-PHP parameter transmission
</title>
</head>
<style>
table, td {
  border: 1px solid black;
}
 td {
  padding: 15px;
}
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
	<table>
	<td>Pacient first name</td>
	<td>Pacient last name</td>
	<td>Pacient gender</td>
	<td>Pacient contact</td>
	<td>Pacient email</td>
    <td>Pacient password</td>
	</tr>
	<?php
	include('func2.php');
    include('func.php');
	require 'init.php';
	$email = $_SESSION['email'];
    $password = $_SESSION['password'];
	$q4="SELECT fname,lname,gender,contact,email,password FROM patreg WHERE email='$email' and password='$password'";
	$Result_set=mysql_query($q4) or die ("Display error");
	while($Row=mysql_fetch_array($Result_set)){
	  echo "<tr>";
	  echo "<td>".$Row[0]."</td>";
	  echo "<td>".$Row[1]."</td>";
	  echo "<td>".$Row[2]."</td>";
	  echo "<td>".$Row[3]."</td>";
	  echo "<td>".$Row[4]."</td>";
	  echo "<td>".$Row[5]."</td>";

   }
	?>
</table>
</body>
</html>