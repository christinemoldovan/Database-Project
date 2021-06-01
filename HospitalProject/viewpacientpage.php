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
	<td>Pacient ID</td>
	<td>Pacient first name</td>
	<td>Pacient last name</td>
	<td>Pacient gender</td>
	<td>Pacient email</td>
	<td>Pacient contact</td>
	<td>Pacient password</td>
	<td>Pacient verified password</td>
	
	</tr>
	<?php
	require 'init.php';

	$q4="SELECT pid,fname,lname,gender,email,contact,password,cpassword FROM patreg";
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