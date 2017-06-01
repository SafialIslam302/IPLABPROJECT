<?php
session_start();
?>
<?php
		$con=mysql_connect("localhost","root","");
		mysql_select_db('mydata4',$con);
        if(isset($_COOKIE['$hos']) && $_COOKIE['$hpass']){
            $hos=$_COOKIE['$hos'];
            $pas=$_COOKIE['$hpass'];
        }
        else
        {
            $hos=$_COOKIE['$hos'];
            $pas=$_COOKIE['$hpass'];
        }
		$dlt="delete from tbl1 where hospital = '$hos' and password1 = '$pas' ";
		if(mysql_query($dlt,$con)){
			$myPHPvar7=10;
            $_SESSION['myPHPvar7'] = $myPHPvar7;
            header("Location:index.php");
		}
		mysql_close($con);
?>