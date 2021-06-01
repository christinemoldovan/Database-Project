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
	<table>
	<td>Pacient first name</td>
	<td>Pacient last name</td>
	<td>Pacient gender</td>
	<td>Pacient email</td>
	<td>Pacient contact</td>
	<td>Doctor username</td>
	<td>Doctor fees</td>
	<td>Appointment time</td>
	<td>Appointment date</td>
	</tr>
	<?php
	require 'init.php';

	$q4="SELECT fname,lname,gender,email,contact,doctor,docFees,apptime,appdate FROM appointmenttb";
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
	  echo "<td>".$Row[8]."</td>";
   }
	?>
</table>
</body>
</html>