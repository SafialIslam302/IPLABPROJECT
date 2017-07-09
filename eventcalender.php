<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/button2.css" rel="stylesheet" type="text/css">
	<link href="css/style3.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#ADA96E">
	<center>
		<form name='eventform' method='POST' action="<?php $_SERVER['PHP_SELF']; ?>?month=<?php echo $month;?>&day=<?php echo $day;?>&year=<?php echo $year; ?>&v=true&add=true">
			<table width='400px' border='0'>
				<tr>
					<td width='150px'>Title:</td>
					<td width='250px'><input class="input" type='text' name='txttitle'></td>
				</tr>
				<tr>
					<td width='150px'>Detail:</td>
					<td width='250px'><textarea name='txtdetail'></textarea></td>
				</tr>
				<tr>
					<td colspan='2' align='center'><input type='submit' class="button2" name='btnadd' value='Add'></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
