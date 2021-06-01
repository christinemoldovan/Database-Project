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
	<td>Doctor username</td>
	<td>Pacient first name</td>
	<td>Pacient last name</td>
	<td>Appointment registered nr.</td>
	<td>Appointment time</td>
	<td>Appointment date</td>
	<td>Diseases</td>
	<td>Allergies</td>
	<td>Prescription</td>
	</tr>
	<?php
	include('func2.php');
include('func.php');
require 'init.php';
$email = $_SESSION['email'];


	$q4="SELECT doctor,fname,lname,ID,apptime,appdate,disease,allergy,prescription FROM prestb WHERE pid IN (SELECT pid FROM patreg WHERE email='$email')";
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