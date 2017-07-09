<?php
    header("Location:afterlogin1.php");
    session_start();
    include("dbcon.php");
    if(empty($_SESSION['curname']) ){
        header("location:index.php");
    }
?>
<?php
        $pas2 = $_SESSION['curpas2'];
        $result = mysql_query("SELECT * FROM tbl where password='$pas2' ");
        while($row = mysql_fetch_array($result))
        {
            $nam = $row['surname'];
            $ful = $row['name'];
            $eml = $row['email'];
            $com = $row['company'];
            $age = $row['age'];
            $adr = $row['address'];
            $cit = $row['city'];
            $pho = $row['phone'];
            $typ = $row['type'];
        }
?>
<?php
        $con=mysql_connect("localhost","root","");
        mysql_select_db('mydata4',$con);
        $ret=mysql_query("select surname from tbl",$con);
        $ch=TRUE; 
        while ($row=mysql_fetch_array($ret))
        {
            if($row['surname']==$_POST['name'])
               $ch=FALSE;
            if($nam==$_POST['name'])
               $ch=TRUE;
        }
        if($ch==TRUE)
        {
            $upd="update tbl set surname='$_POST[name]',name='$_POST[prename]',email='$_POST[email]',company='$_POST[society]',age='$_POST[age]'
                  ,address='$_POST[address]',city='$_POST[city]',phone='$_POST[phone]',password='$_POST[pass1]',type='$_POST[type]'
                  where surname='$nam' and name='$ful' and email='$eml' and company='$com' and age='$age' and address='$adr' and city='$cit' 
                  and phone='$pho' and type='$typ' ";
            if (!mysql_query($upd,$con))
            {
                die('Error: ' . mysql_error());
            }

            $_SESSION['chnpas'] = $_POST['pass1'];
        }
?>