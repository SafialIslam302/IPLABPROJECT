<?php
                if(isset($_POST['log'])){
                $eml1=$_POST['uemail'];
                $pas1=$_POST['upass'];
                $con=mysql_connect("localhost","root","");
                mysql_select_db('mydata4',$con);
                $result=mysql_query("select email,password from tbl",$con);
                while($row = mysql_fetch_array($result))
                {
                    if($row['email']==$eml1 && $row['password']==$pas1 && $eml1!='' && $pas1!='')
                    {
                        if(isset($_POST['remember']))
                        {
                            session_start();
                            setcookie('$email',$_POST['uemail'],time()+3600);
                            setcookie('$pass',$_POST['upass'],time()+3600);
                            $_SESSION['curname']=$eml1;
                            $_SESSION['curpass']=$pas1;
                            header("Location:afterlogin1.php");
                            exit;
                        }
                        else
                        {
                            session_start();
                            $log1=11;
                            $_SESSION['log1'] = $log1;
                            $_SESSION['curname']=$eml1;
                            $_SESSION['curpass']=$pas1;
                            header("Location:afterlogin1.php");
                            exit;
                        }
                    }
                }
                session_start();                      
                $myPHPvar1=10;
                $_SESSION['myPHPvar1'] = $myPHPvar1;
                header("Location:index.php");
                exit;
        }
?>