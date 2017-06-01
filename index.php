<?php 
  session_start();
?>
<!DOCTYPE HTML>
<head>
<meta charset="utf-8">
<title>Maxim - Modern One Page Bootstrap Template</title>
<link href="css/log1.css" rel="stylesheet">
<link href="css/log2.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap1.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/button.css" rel="stylesheet" type="text/css">
<link href="css/button1.css" rel="stylesheet" type="text/css">
		<style>
			.alert {
			    padding: 10px;
			    background-color: #f44336;
			    color: white;
			    opacity: 1;
			    margin-bottom: 10px;
			    width:268px;
			}
		</style>
		<style>
			.alert1 {
			    padding: 10px;
			    background-color: #f44336;
			    color: white;
			    opacity: 1;
			    margin-bottom: 10px;
			    width:268px;
			}
		</style>
</head>
<div class="navbar-wrapper"></div>
		<?php
            $con=mysql_connect("localhost","root","");
            mysql_query("create database mydata4",$con);
            mysql_select_db('mydata4');
            $tbl="create table tbl(
                    surname varchar(20),
                    name varchar(20),
                    email varchar(20),
                    company varchar(20),
                    age varchar(10),
                    address varchar(20),
                    city varchar(20),
                    phone varchar(20),
                    password varchar(20),
                    type varchar(20)
                    )";
            mysql_query($tbl,$con);
        ?>
        

		<?php
            $con=mysql_connect("localhost","root","");
            mysql_query("create database mydata4",$con);
            mysql_select_db('mydata4');
            $tbl1="create table tbl1(
                    hospital varchar(20),
                    address varchar(20),
                    email varchar(20),
                    password1 varchar(20),
                    contact varchar(20),
                    department1 varchar(20),
                    department2 varchar(20),
                    department3 varchar(20),
                    department4 varchar(20)
                    )";
            mysql_query($tbl1,$con);
        ?>
        <?php
              $myPHPvar1 = $_SESSION['myPHPvar1'];
              $myPHPvar2 = $_SESSION['myPHPvar2'];
              $myPHPcre1 = $_SESSION['myPHPcre1'];
              $myPHPcre2 = $_SESSION['myPHPcre2'];
              $myPHPvar6 = $_SESSION['myPHPvar6'];
              $myPHPvar7 = $_SESSION['myPHPvar7'];
        ?>
        
		

<div id="header-wrapper" class="header-slider">
	<header class="clearfix">
	<div class="title">
		<a href ="about.php"><button class="button"><span>About the WebSite</span></button></a>
		<div align="center">
		<?php
            if($myPHPcre1  == 10)
            {
                echo "<div class='alert1'> 
      					Account created Succesfully.
    					  </div>";
                $myPHPcre1 = 11;
                $_SESSION['myPHPcre1'] = $myPHPcre1;
            }
            if($myPHPcre2  == 11)
            {
                echo "<div class='alert1'> 
      					Account created Succesfully.
    					  </div>";
                $myPHPcre2 = 11;
                $_SESSION['myPHPcre2'] = $myPHPcre2;
            }
            if($myPHPvar6  == 10)
            {
                echo "<div class='alert1'> 
                Account deleted Succesfully.
                </div>";
                $myPHPvar6 = 11;
                $_SESSION['myPHPvar6'] = $myPHPvar6;
            }
            if($myPHPvar7  == 10)
            {
                echo "<div class='alert1'> 
                Account deleted Succesfully.
                </div>";
                $myPHPvar7 = 11;
                $_SESSION['myPHPvar7'] = $myPHPvar7;
            }
    ?>
        </div>
	</div>

	<table>
	<tr>
	<td style="width: 700px;height: 200px;text-align: center">
	<div class="logo">
		<div align="center">
			<form class="login" action="log1.php" method="post" name="form3">
				<p class="title">Log in for Patient/Doctor</p>
		        <input type="text" placeholder="Email" name="uemail" value="<?php echo $_COOKIE['$email'] ?>"/>
	    	    <i class="fa fa-user"></i>
				<input type="password" placeholder="Password" name="upass" value="<?php echo $_COOKIE['$pass'] ?>"/>
				<i class="fa fa-key"></i>
				<input type="checkbox" name="remember" <?php if(isset($_COOKIE["$email"]) and isset($_COOKIE["$pass"])) { ?> checked <?php }?> > <b>Remember Me</b><br>
				<i class="fa fa-key"></i>
				<a href="sign1.php"><span><h2>SIGN UP</h2></span></a>
    		<input class="button1" type="submit" value="log in" name="log"></a>
    			<?php
                    if($myPHPvar1  == 10)
                    {
                        echo "<div class='alert1'> 
          							<strong>Warning!</strong> Wrong email or password.
        						    </div>";
                        $myPHPvar1 = 11;
                        $_SESSION['myPHPvar1'] = $myPHPvar1;
                    }
                ?>
			</form>
   		</div>
   		
   	</div>
   	</td>

   	<td style="width: 700px;height: 200px;text-align: center">
   	<div class="logo">
		<div align="center">
			<form class="login" action="log2.php" method="post" name="form4">
				<p class="title">Log in for hospital</p>
		        <input type="text" placeholder="Hospital" name="hname" value="<?php echo $_COOKIE['$hos'] ?>"/>
	    	    <i class="fa fa-user"></i>
				<input type="password" placeholder="Password" name="hpass" value="<?php echo $_COOKIE['$hpass'] ?>"/>
				<i class="fa fa-key"></i>
				<input type="checkbox" name="remember1" <?php if(isset($_COOKIE["$hos"]) and isset($_COOKIE["$hpass"])) { ?> checked <?php }?> > <b>Remember Me</b><br>
				<i class="fa fa-key"></i>
				<a href="sign2.php"><span><h2>SIGN UP</h2></span></a>
    			<input class="button1" type="submit" value="log in" name="log1"></a>
    			<?php
                    if($myPHPvar2 == 12)
                    {
                        echo "<div class='alert1'> 
          							<strong>Warning!</strong> Wrong name or password.
        						    </div>";
                        $myPHPvar2 = 11;
                        $_SESSION['myPHPvar2'] = $myPHPvar2;
                    }
                ?>
			</form>
   		</div>
   	</div>
   	</td>

   	</tr>
   	</table>
    
	<br><br><br><br>
	<div align="center" id="main-flexslider">
					<ul class="slides">
						<li><p>The greatest wealth is Health</p></li>
						<li><p>Eat Good Feel Good</p></li>
						<li><p>Take Care of Your Body</p></li>
					</ul>
				</div>
	
	</header>

<script src="js/jquery.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.localscroll-1.2.7-min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/custom1.js"></script>

</body>
</html>