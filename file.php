<?php
	session_start();
  	if(empty($_SESSION['curname']) ){
    	header("location:index.php");
  	}
?>
<?php
		$con=mysql_connect("localhost","root","");
		mysql_query("create database mydata4",$con);
		mysql_select_db('mydata4');
		$tbl2="create table tbl2(
		        id int(20) not null AUTO_INCREMENT PRIMARY KEY,
		        cname varchar(20),
		        name varchar(100),
		        path varchar(400)
		       )";
		mysql_query($tbl2,$con);
?>

<?php
	$cname = $_SESSION ['curname'];
	if(isset($_POST['submit'])){
		$doc_name = $_POST['doc_name'];
		$name = $_FILES['myfile']['name'];
		$tmp_name = $_FILES['myfile']['tmp_name'];
		if($name && $doc_name){
			$location = "documents/$name";
			move_uploaded_file($tmp_name,$location);
			$query = mysql_query("INSERT INTO tbl2 (name,cname,path) VALUES ('$doc_name','$cname','$location')");
		}
		else
		{
			$error = 10;
		}
	}
?>


<?php
	include ("dbcon.php");
	$sql = "SELECT * FROM tbl2 where cname='$cname' ";
	$res = mysql_query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Documents</title>
    <link rel="icon" type="image/png" href="img/arogya.png" />
	<link href="css/style1.css" rel="stylesheet" type="text/css">
	<link href="css/button.css" rel="stylesheet" type="text/css">
  	<link href="css/button1.css" rel="stylesheet" type="text/css">
	<style>
		.alert1 {
		    padding: 10px;
		    background-color: #f44336;
		    color: white;
		    opacity: 1;
		    margin-bottom: 10px;
		    width:268px;
		}
	</style>
</head>
<body>
    <div class="title" style="padding-left: 30em;padding-top: 1em;">
		<a href ="afterlogin1.php"><button class="button"><span>Back to main page</span></button></a>
    </div>

    <form action="file.php" method="post" enctype="multipart/form-data" style="padding-left: 0%;">
		<h1>
			<label>Document Name : </label>
			<input type="text" name="doc_name" style="height: 35px;background-color:#FAFAD2;border-radius: 20px;box-shadow: 10px 10px 5px #888888;">
			<input type="file" name="myfile" style="background-color:#FAFAD2;border-radius: 20px;box-shadow: 10px 10px 5px #888888;">
			<input type="submit" name="submit" value="Upload" style="width: 60px;height: 32px;background-color:#FAFAD2;border-radius: 20px;box-shadow: 10px 10px 5px #888888;">
		</h1>
	</form>
	<?php
		if($error == 10 )
		{
			echo "<center><div class='alert1'> 
      				Please Select a File.
    			  </div></center>";
                $error = 11;
		}
		echo "<br><br>";
		echo "<table>
			  <tr>
			  <th></th>
			  <th>file name</th>
			  <th>Download</th>
			  <th>Delete</th>
			  <tr>";
		while($row = mysql_fetch_array($res)){
			$name = $row['name'];
			$path = $row['path'];

			echo "<tr>";
			echo '<td><img src="img/pdf.ico" width="50px" height="50px" /></td>';
			echo "<td>" . $name ."</td>";
			echo "<td><a href='download.php?dow=$path'>  Download</a></td>";
			echo "<td><a href='delete2.php?del=$path'> DELETE </a><br></td>"; 
			echo "</tr>";		
 		}
 		echo "</table>";

	?>

</body>
</html>