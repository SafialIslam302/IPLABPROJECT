<?php
    if(isset($_POST['Submit'])){
        $nam1=$_POST['uname'];
        $eml1=$_POST['ueamil'];
        $con=mysql_connect("localhost","root","");
        mysql_select_db('mydata4',$con);
        $ret=mysql_query("select * from tbl1 where hospital = '$nam1'",$con);
        while($row = mysql_fetch_array($ret))
        {
            if($row['hospital']==$nam1  && $nam1!='')
            {
                    session_start();
                    $for1=11;
                    $_SESSION['for1'] = $for1;
                    $pass1 = $row['password1'];
                    $_SESSION['pass1'] = $pass1;
                    //echo $pass1;
                    //echo $row['hospital'];
                    header("Location:forgetpass2.php");
                    exit;
            }
        }
        session_start(); 
        $for1=15;
        $_SESSION['for1'] = $for1;
        header("Location:forgetpass2.php");
        exit;
    }
?>