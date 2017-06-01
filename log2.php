<?php
		        if(isset($_POST['log1'])){
		        $hnam1=$_POST['hname'];
		        $hpas1=$_POST['hpass'];
		        $con=mysql_connect("localhost","root","");
		        mysql_select_db('mydata4',$con);
		        $result=mysql_query("select hospital,password1 from tbl1",$con);
		        while($row = mysql_fetch_array($result))
		        {
		            if($row['hospital']==$hnam1 && $row['password1']==$hpas1 && $hnam1!='' && $hpas1!='')
		            {
		                if(isset($_POST['remember1']))
		                {
		                	session_start();
		                    setcookie('$hos',$_POST['hname'],time()+3600);
		                    setcookie('$hpass',$_POST['hpass'],time()+3600);
		                    $_SESSION['curname']=$hnam1;
		                    $_SESSION['curpass']=$hpas1;
		                    header("Location:afterlogin11.php");
		                    exit;
		                }
		                else
		                {
		                    session_start();
		                    $log11=11;
                            $_SESSION['log11'] = $log11;
		                    $_SESSION['curname']=$hnam1;
		                    $_SESSION['curpass']=$hpas1;
		                    header("Location:afterlogin11.php");
		                    exit;
		                }
		            }
		        }
		        session_start();                      
                $myPHPvar2=12;
                $_SESSION['myPHPvar2'] = $myPHPvar2;
                header("Location:index.php");
                exit;
		    }
		?>
