<?php
    header("Location:afterlogin11.php");
    session_start();
    include("dbcon.php");
    if(empty($_SESSION['curname']) ){
        header("location:index.php");
    }
?>
<?php
        $pas1 = $_SESSION['curpas1'];
        $result = mysql_query("SELECT * FROM tbl1 where password1='$pas1' ");
        while($row = mysql_fetch_array($result))
        {
            $curnam = $row['hospital'];
            $curadr = $row['address'];
            $cureml = $row['email'];
            $curcon = $row['contact'];
            $curde1 = $row['department1'];
            $curde2 = $row['department2'];
            $curde3 = $row['department3'];
            $curde4 = $row['department4'];
        }
?>
<?php
        $con=mysql_connect("localhost","root","");
        mysql_select_db('mydata4',$con);
        $ret=mysql_query("select hospital from tbl1",$con);
        $ch=TRUE; 
        while ($row=mysql_fetch_array($ret))
        {
            if($row['hospital']==$_POST['hname'])
               $ch=FALSE;
            if($curnam==$_POST['hname'])
               $ch=TRUE;
        }
        if($ch==TRUE)
        {
            $upd="update tbl1 set hospital='$_POST[hname]',address='$_POST[address]',email='$_POST[email]',password1='$_POST[pass3]'
                  ,contact='$_POST[contact]',department1='$_POST[dep1]',department2='$_POST[dep2]',department3='$_POST[dep3]',department4='$_POST[dep4]'
                  where hospital='$curnam' and address='$curadr' and email='$cureml' and password1='$pas1' and contact='$curcon' and department1='$curde1' 
                  and department2='$curde2' and department3='$curde3' and department4='$curde4' ";
            if (!mysql_query($upd,$con))
            {
                die('Error: ' . mysql_error());
            }
            $_SESSION['chnpas3'] = $_POST['pass3'];
        }
?>