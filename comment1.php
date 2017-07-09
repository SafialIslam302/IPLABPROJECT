<?php
	session_start();
	function setComments($con){
		if(isset($_POST['submit']))
		{
			$cname = $_SESSION ['curname'];
			$date = $_POST['date'];
			$message = $_POST['message'];
			$sql = "INSERT INTO comments1 (cname,date, message) VALUES ('$cname','$date','$message')";
			if (!mysql_query($sql,$con))
			{
			  die('Error: ' . mysql_error());
			}
		}
	}


	function getComments($con)
	{
		$cname = $_SESSION ['curname'];
		deleteComments($con);
		$result=mysql_query("select * from comments1 where cname='$cname' ",$con);
        while($row = mysql_fetch_array($result))
        {
        	echo "<center><div class='comment-box' ><center><p>";
        	echo "Name: ".$cname."&nbsp&nbsp&nbsp";
        	echo "Time: ".$row['date']."<br><br>";
        	echo "<hr/>";
        	echo nl2br($row['message']);
		    echo "</p>
		        <form class='delete-form' method='POST' action=' ".deleteComments($con)."'>
		        	<input type='hidden' name='cid' value='".$row['cid']."'>
		        	<button type='submit' name='deleteComment' >DELETE</button>
		        </form>
		        <form class='edit-form' method='POST' action='editcomments1.php'>
		        	<input type='hidden' name='cid' value='".$row['cid']."'>
		        	<input type='hidden' name='cname' value='".$row['cname']."'>
		        	<input type='hidden' name='date' value='".$row['date']."'>
		        	<input type='hidden' name='message' value='".$row['message']."'>
		        	<button>EDIT</button>
		        </form>
		        <center>
	        </div></center>";
        }
	}

	
	function allComments($con)
	{
		$result=mysql_query("select * from comments1",$con);
		$cname = $_SESSION ['curname'];
        while($row = mysql_fetch_array($result))
        {
        	echo "<center><div class='comment-box' ><p>";
	        	echo "Name: ".$cname."&nbsp&nbsp&nbsp"; 
	        	echo "Time: ".$row['date']."<br>";
	        	echo "<hr/>";
	            echo nl2br($row['message']);
	        echo "</p></div><br><br></center>"; 
        }
	}

	function editComments($con){
		if(isset($_POST['edit']))
		{
			$cid = $_POST['cid'];
			$date = $_POST['date'];
			$message = $_POST['message'];
			$sql = "UPDATE comments1 SET message='$message' WHERE cid='$cid' ";
			if (!mysql_query($sql,$con))
			{
			  die('Error: ' . mysql_error());
			}
		}
	}

	function deleteComments($con){
		if(isset($_POST['deleteComment'])){
			$cid = $_POST['cid'];
			$sql = "DELETE FROM comments1 WHERE cid='$cid' ";
		    if (!mysql_query($sql,$con))
			{
			  die('Error: ' . mysql_error());
			}
		}
	}	
?>
