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
	<table>
	<td>Doctor ID</td>
	<td>Doctor username</td>
	<td>Doctor password</td>
	<td>Doctor email</td>
	<td>Doctor specialization</td>
	<td>Doctor fees</td>
	<td>Doctor last name</td>
	<td>Doctor first name</td>

	</tr>
	<?php
	include('func1.php');
	require 'init.php';
$username = $_SESSION['dname'];
$password = $_SESSION['dpass'];
	
	$q4="SELECT idDoc,username,password,email,spec,docFees,lname,fname FROM doctb WHERE username='$username' and password='$password'";
	$Result_set=mysql_query($q4) or die ("Display error");
	while($Row=mysql_fetch_array($Result_set)){
	  echo "<tr>";
	  echo "<td>".$Row[0]."</td>";
	  echo "<td>".$Row[1]."</td>";
	  echo "<td>".$Row[2]."</td>";
	  echo "<td>".$Row[3]."</td>";
	  echo "<td>".$Row[4]."</td>";
	  echo "<td>".$Row[5]."</td>";
	  echo "<td>".$Row[6]."</td>";
	  echo "<td>".$Row[7]."</td>";
   }
	?>
</table>
</body>
</html>