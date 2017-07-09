<?php
    if(isset($_POST['Submit'])){
        $nam1=$_POST['uname'];
        $eml1=$_POST['ueamil'];
        $con=mysql_connect("localhost","root","");
        mysql_select_db('mydata4',$con);
        $ret=mysql_query("select * from tbl where name = '$nam1'",$con);
        while($row = mysql_fetch_array($ret))
        {
            if($row['name']==$nam1  && $nam1!='')
            {
                    session_start();
                    $for1=11;
                    $_SESSION['for1'] = $for1;
                    $pass1 = $row['password'];
                    $_SESSION['pass1'] = $pass1;
                    //echo $pass1;
                    //echo $row['name'];
                    //echo $row['surname'];
                    //echo $row['email'];
                    //echo $row['company'];
                    header("Location:forgetpass.php");
                    exit;
            }
        }
        session_start(); 
        $for1=13;
        $_SESSION['for1'] = $for1;
        header("Location:forgetpass.php");
        exit;
    }
?>