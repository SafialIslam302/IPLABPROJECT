<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forget Password</title>
    <link rel="icon" type="image/png" href="img/arogya.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="img/arogya.png" />
	<link rel="stylesheet" type="text/css" href="css/edit1.css" />
    <link href="css/button.css" rel="stylesheet" type="text/css">
    <link href="css/button1.css" rel="stylesheet" type="text/css">
	<link href="css/button2.css" rel="stylesheet" type="text/css">
	<script>
            function ValidateContactForm1()
            {
                var name1 = document.form1.uname;
                var email1 = document.form1.uemail;
                if (name1.value == "")
                {
                    window.alert("Please enter your name.");
                    name1.focus();
                    return false;
                }
                if (email1.value == "")
                {
                    window.alert("Please enter an Email Address.");
                    email1.focus();
                    return false;
                }
            }
            </script>
             <script type="text/javascript">
                function ShowHideDiv(chkPassport) {
                    var dvPassport = document.getElementById("dvPassport");
                    dvPassport.style.display = chkPassport.checked ? "block" : "none";
                }
            </script>
            <script type="text/javascript">
                function ShowHideDiv2(chkPassport2) {
                    var dvPassport2 = document.getElementById("dvPassport2");
                    dvPassport2.style.display = chkPassport2.checked ? "block" : "none";
                }
            </script>
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

<body>
	  <h1><a href ="index.php"><button class="button"><span>Back to main page</span></button></a></h1>
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
              $for1 = $_SESSION['for1'];
        ?>

      
    <form action="passrec2.php" method="post" name="form1" onsubmit="return ValidateContactForm1()">
	    <h1><center>Fill the following form to recover the Password</center></h1>
    
    <div class="contentform">
			<div class="form-group">
                <label for="chkPassport">
                    <label for="chkPassport"></label>
                    <input type="checkbox" id="chkPassport" onclick="ShowHideDiv(this)" />Hospital Name 
                </label>
                <div id="dvPassport" style="display: none">
    			     <input class="input" type="text" placeholder="  NAME" name="uname" id="uname" />
                </div>
       		</div> 


			<div class="form-group">
                <label for="chkPassport2">
                    <label for="chkPassport2"></label>
                    <input type="checkbox" id="chkPassport2" onclick="ShowHideDiv2(this)" />E-mail
                </label>
                <div id="dvPassport2" style="display: none">
                    <input class="input" type="text" placeholder="  E-MAIL" name="uemail" id="uemail"/>
                </div>
			</div>	
    </div>
    <center><input class="button2" type="submit" name="Submit" value="Submit"></a></center>
    <?php
        if($for1  == 11)
        {
            echo "<center><div class='alert1'> 
                <strong>Password is :".
                $_SESSION['pass1']."
                </div></center>";
            $for1 = 12;
            $_SESSION['for1'] = $for1;
        }
        if($for1  == 15)
        {
            echo "<center><div class='alert1'> 
                <strong>Wrong Name or Gmail.
                Give the correct one.
                </div></center>";
            $for1 = 16;
            $_SESSION['for1'] = $for1;
        }
    ?>
	
</form>	

  
</body>
</html>