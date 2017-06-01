<?php
        $nam=$_POST['hname'];
        $add=$_POST['address'];
        $emai=$_POST['email'];
        $pas3=$_POST['pass3'];
        $pas4=$_POST['pass4'];        
        $cont=$_POST['contact'];
        $de1=$_POST['dep1'];
        $de2=$_POST['dep2'];
        $de3=$_POST['dep3'];
        $de4=$_POST['dep4'];
        $con=mysql_connect("localhost","root","");
        mysql_select_db('mydata4',$con);
        $ret=mysql_query("select hospital from tbl1",$con);
        $ch=TRUE;
        while ($row=mysql_fetch_array($ret))
        {
            if($row['hospital']==$nam)
                $ch=FALSE;
        }
        if($nam=='' ||$add=='' || $emai=='' || $pas3==''|| $pas4=='' || $cont=='' || $de1=='' || $de2=='' || $de3=='' ||$de4=='')
        {
            echo "<div style='width: 100%;font-size: 30px;background-color: #F0F0F0;border-radius: 20px'>
                       Fill the Form Correctly<br><br></div>";
        }
        else if($pas!=$pas1)
        {
            echo "<div style='width: 100%;font-size: 30px;background-color: #F0F0F0;border-radius: 20px'>
                    Password doesn't match<br><br></div>";
        }
        else if($ch==FALSE)
        {
            echo "<div style='width: 100%;font-size: 30px;background-color: #F0F0F0;border-radius: 20px'>
                    Name already exists<br><br></div>";
        }
        else
        {
        	if($_POST["Submit"]=="Submit"){
                $sql="insert into tbl1 values('$nam','$add','$emai','$pas3','$cont','$de1','$de2','$de3','$de4')";
                if (!mysql_query($sql,$con))
                {
                    die('Error: ' . mysql_error());
                }
            }
            session_start();
            $myPHPcre2=11;
            $_SESSION['myPHPcre2'] = $myPHPcre2;
            include "index.php";
            exit;
          }
?>