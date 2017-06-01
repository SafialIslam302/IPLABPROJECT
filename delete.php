<?php
session_start();
?>
<?php
		$con=mysql_connect("localhost","root","");
		mysql_select_db('mydata4',$con);
        if(isset($_COOKIE['$email']) && $_COOKIE['$pass']){
            $nam=$_COOKIE['$email'];
            $pas=$_COOKIE['$pass'];
        }
        else
        {
            $nam=$_COOKIE['$email'];
            $pas=$_COOKIE['$pass'];
        }
		$dlt="delete from tbl where email='$nam' and password='$pas' ";
		if(mysql_query($dlt,$con)){
			$myPHPvar6=10;
            $_SESSION['myPHPvar6'] = $myPHPvar6;
            header("Location:index.php");
		}
		mysql_close($con);
?>