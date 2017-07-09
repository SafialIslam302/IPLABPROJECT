<?php
	session_start();
  	if(empty($_SESSION['curname']) ){
    	header("location:index.php");
  	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Medicines</title>
	<link rel="icon" type="image/png" href="img/arogya.png" />
	<link href="css/style1.css" rel="stylesheet" type="text/css">
	<link href="css/button1.css" rel="stylesheet" type="text/css">
	<style>
</style>
</head>
<body>

	<div class="title" style="padding-left: 30em;padding-top: 1em;">
		<a href ="afterlogin1.php"><button class="button1"><span>Back to main page</span></button></a>
    </div>
	<?php
		echo "<br><br>";
		echo "<table>
			  <tr>
			  <th></th>
			  <th>file name</th>
			  <th>Download</th>
			  <tr>";

		echo "<tr>";
		echo '<td><img src="img/pdf.ico" width="50px" height="50px" /></td>';
		echo "<td>SQUARE</td>";
		echo "<td><a href='file/square.pdf'>  Download</a></td>";
		echo "</tr>";
		echo "<tr>";
		echo '<td><img src="img/pdf.ico" width="50px" height="50px" /></td>';
		echo "<td>Essential medicine 1</td>";
		echo "<td><a href='file/drug2.pdf'>  Download</a></td>";
		echo "</tr>";
		echo "<tr>";
		echo '<td><img src="img/pdf.ico" width="50px" height="50px" /></td>';
		echo "<td>Essential medicine 2</td>";
		echo "<td><a href='file/drug1.pdf'>  Download</a></td>";
		echo "</tr>";
		echo "<tr>";
		echo '<td><img src="img/pdf.ico" width="50px" height="50px" /></td>';
		echo "<td>ACI</td>";
		echo "<td><a href='file/aci.pdf'>  Download</a></td>";
		echo "</tr>";		
 		echo "</table>";
	?>
</body>
</html>