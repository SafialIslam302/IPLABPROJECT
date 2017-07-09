<?php
	session_start();
  	if(empty($_SESSION['curname']) ){
    	header("location:index.php");
  	}
?>
<?php 
	include("dbcon.php");

	if(isset($_GET['dow'])){
		$path = $_GET['dow'];

		$res = mysql_query("SELECT * FROM tbl2 WHERE path='$path'");

		header('Content-Type: application/octetstream');
		header('Content-Disposition: attachment; filename=" '.basename($path).' " ');
		header('Content-Length: ' .filesize($path));
		readfile($path);
	}
?>