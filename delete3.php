<?php 

include("dbcon.php");

if(isset($_GET['del'])){
	$path = $_GET['del'];
	$res = mysql_query("DELETE FROM tbl4 WHERE path='$path'");
	header("Location:file1.php");
}