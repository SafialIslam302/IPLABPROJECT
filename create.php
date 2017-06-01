<?php
        $nam=$_POST['name'];
        $pnum=$_POST['prename'];
        $emai=$_POST['email'];
        $socie=$_POST['society'];
        $ag=$_POST['age'];
        $addr=$_POST['address'];
        $cit=$_POST['city'];
        $pho=$_POST['phone'];
        $pas=$_POST['pass1'];
        $pas1=$_POST['pass2'];
        $typ=$_POST['type'];
        $con=mysql_connect("localhost","root","");
        mysql_select_db('mydata4',$con);
        $ret=mysql_query("select name from tbl",$con);
        $ch=TRUE;
        while ($row=mysql_fetch_array($ret))
        {
            if($row['name']==$nam)
                $ch=FALSE;
        }
        if($nam=='' ||$pnum=='' || $emai=='' || $socie==''|| $ag=='' || $addr=='' || $cit=='' || $pho=='' || $pas=='' ||$pas1=='' || $typ=='')
        {
            echo "<div style='width: 100%;font-size: 30px;background-color: #F0F0F0;border-radius: 20px'>
                       Fill the Form Correctly<br><br></div>";
        }
        else if($pas!=$pas1)
        {
            echo "<div style='width: 100%;font-size: 30px;background-color: #F0F0F0;border-radius: 20px'>
                    Password doesn't match<br><br></div>";
        }
        else
        {
        	if($_POST["Submit"]=="Submit"){
                $sql="insert into tbl values('$nam','$pnum','$emai','$socie','$ag','$addr','$cit','$pho','$pas','$typ')";
                if (!mysql_query($sql,$con))
                {
                    die('Error: ' . mysql_error());
                }
            }
            session_start();
            $myPHPcre1=10;
            $_SESSION['myPHPcre1'] = $myPHPcre1;
            header("Location:index.php");
            exit;
          }
?>