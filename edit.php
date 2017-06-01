<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>FIRST LOGIN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="img/arogya.png" />
	<link rel="stylesheet" type="text/css" href="css/edit1.css" />
	<link href="css/button2.css" rel="stylesheet" type="text/css">
	<script>
            function ValidateContactForm1()
            {
                var name1 = document.form1.name;
                var name2 = document.form1.prename;
                var email1 = document.form1.email;
                var society1 = document.form1.society;
                var age1 = document.form1.age;
                var address1 = document.form1.address;
                var city1 = document.form1.city;
                var phone1 = document.form1.phone;
                var password1 = document.form1.pass1;
                var password2 = document.form1.pass2;
                var type1 = document.form1.type;
                if (name1.value == "")
                {
                    window.alert("Please enter your Surname.");
                    name1.focus();
                    return false;
                }
                if (name2.value == "")
                {
                    window.alert("Please enter your name.");
                    name2.focus();
                    return false;
                }
                if (email1.value == "")
                {
                    window.alert("Please enter an Email Address.");
                    email1.focus();
                    return false;
                }
                if (society1.value == "")
                {
                    window.alert("Please enter a Company name.");
                    society1.focus();
                    return false;
                }
                if (age1.value == "")
                {
                    window.alert("Please enter your Age.");
                    age1.focus();
                    return false;
                }
                if (address1.value == "")
                {
                    window.alert("Please enter your Address.");
                    address1.focus();
                    return false;
                }
                if (city1.value == "")
                {
                    window.alert("Please enter your City.");
                    city1.focus();
                    return false;
                }
                if (phone1.value == "")
                {
                    window.alert("Please enter Your Phone Number.");
                    phone1.focus();
                    return false;
                }
                if (password1.value == "")
                {
                    window.alert("Please enter a password.");
                    password1.focus();
                    return false;
                }
                if (password2.value == "")
                {
                    window.alert("Please enter a confirm password.");
                    password2.focus();
                    return false;
                }
                if (type1.value == "")
                {
                    window.alert("Please enter your Type.");
                    type1.focus();
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
                function ShowHideDiv1(chkPassport1) {
                    var dvPassport1 = document.getElementById("dvPassport1");
                    dvPassport1.style.display = chkPassport1.checked ? "block" : "none";
                }
            </script>
            <script type="text/javascript">
                function ShowHideDiv2(chkPassport2) {
                    var dvPassport2 = document.getElementById("dvPassport2");
                    dvPassport2.style.display = chkPassport2.checked ? "block" : "none";
                }
            </script>
            <script type="text/javascript">
                function ShowHideDiv3(chkPassport3) {
                    var dvPassport3 = document.getElementById("dvPassport3");
                    dvPassport3.style.display = chkPassport3.checked ? "block" : "none";
                }
            </script>
            <script type="text/javascript">
                function ShowHideDiv4(chkPassport4) {
                    var dvPassport4 = document.getElementById("dvPassport4");
                    dvPassport4.style.display = chkPassport4.checked ? "block" : "none";
                }
            </script>
            <script type="text/javascript">
                function ShowHideDiv5(chkPassport5) {
                    var dvPassport5 = document.getElementById("dvPassport5");
                    dvPassport5.style.display = chkPassport5.checked ? "block" : "none";
                }
            </script>
            <script type="text/javascript">
                function ShowHideDiv6(chkPassport6) {
                    var dvPassport6 = document.getElementById("dvPassport6");
                    dvPassport6.style.display = chkPassport6.checked ? "block" : "none";
                }
            </script>
            <script type="text/javascript">
                function ShowHideDiv7(chkPassport7) {
                    var dvPassport7 = document.getElementById("dvPassport7");
                    dvPassport7.style.display = chkPassport7.checked ? "block" : "none";
                }
            </script>
            <script type="text/javascript">
                function ShowHideDiv8(chkPassport8) {
                    var dvPassport8 = document.getElementById("dvPassport8");
                    dvPassport8.style.display = chkPassport8.checked ? "block" : "none";
                }
            </script>
            <script type="text/javascript">
                function ShowHideDiv9(chkPassport9) {
                    var dvPassport9 = document.getElementById("dvPassport9");
                    dvPassport9.style.display = chkPassport9.checked ? "block" : "none";
                }
            </script>
            <script type="text/javascript">
                function ShowHideDiv10(chkPassport10) {
                    var dvPassport10 = document.getElementById("dvPassport10");
                    dvPassport10.style.display = chkPassport10.checked ? "block" : "none";
                }
            </script>
</head>

<body>
	  <h1>Sign Up Form.</h1>

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
                $curpas2 = $_SESSION['curpas2'];
                $result = mysql_query("SELECT * FROM tbl where password='$curpas2' ");
                while($row = mysql_fetch_array($result))
                {
                    $surnam = $row['surname'];
                    $curful = $row['name'];
                    $cureml = $row['email'];
                    $curcom = $row['company'];
                    $curage = $row['age'];
                    $curadr = $row['address'];
                    $curcit = $row['city'];
                    $curpho = $row['phone'];
                    $curtyp = $row['type'];
                }
        ?>


      
  <form action="update.php" method="post" name="form1" onsubmit="return ValidateContactForm1()">
	    <h1>Please Fill Up the Sign up Form to Continue Login</h1>
    <div class="contentform">

    	<div class="leftcontact">
			<div class="form-group">
                <label for="chkPassport">
                    <label for="chkPassport"></label>
                    <input type="checkbox" id="chkPassport" onclick="ShowHideDiv(this)" />Surname
                </label>
                <div id="dvPassport" style="display: none">
    			     <input class="input" type="text" placeholder="  SURNAME" name="name" id="name" value="<?php echo $surnam ?>" />
                </div>
       		</div> 

            <div class="form-group">
                <label for="chkPassport1">
                    <label for="chkPassport1"></label>
                    <input type="checkbox" id="chkPassport1" onclick="ShowHideDiv1(this)" />Name
                </label>
                <div id="dvPassport1" style="display: none">
				    <input class="input" type="text" placeholder="  NAME" name="prename" id="prename" value="<?php echo $curful ?>"/>
                </div>
			</div>

			<div class="form-group">
                <label for="chkPassport2">
                    <label for="chkPassport2"></label>
                    <input type="checkbox" id="chkPassport2" onclick="ShowHideDiv2(this)" />E-mail
                </label>
                <div id="dvPassport2" style="display: none">
                    <input class="input" type="email" placeholder="  E-MAIL" name="email" id="email" value="<?php echo $cureml ?>"/>
                </div>
			</div>	

			<div class="form-group">
                <label for="chkPassport3">
                    <label for="chkPassport3"></label>
                    <input type="checkbox" id="chkPassport3" onclick="ShowHideDiv3(this)" />Company
                </label>
                <div id="dvPassport3" style="display: none">
				    <input class="input" type="text" placeholder="  COMPANY" name="society" id="society" value="<?php echo $curcom ?>"/>
                </div>
			</div>

			<div class="form-group">
                <label for="chkPassport4">
                    <label for="chkPassport4"></label>
                    <input type="checkbox" id="chkPassport4" onclick="ShowHideDiv4(this)" />Age
                </label>
                <div id="dvPassport4" style="display: none">
				    <input class="input" type="text" placeholder="  AGE" name="age" id="age" value="<?php echo $curage ?>"/>
                </div>
			</div>

			<div class="form-group">
                <label for="chkPassport5">
                    <label for="chkPassport5"></label>
                    <input type="checkbox" id="chkPassport5" onclick="ShowHideDiv5(this)" />Address 
                </label>
                <div id="dvPassport5" style="display: none">
				    <input class="input" ype="text"  placeholder="  ADDRESS" name="address" id="address" value="<?php echo $curadr ?>"/>
                </div>
			</div>	
	</div>
	<div class="rightcontact">	
			<div class="form-group">
                <label for="chkPassport6">
                    <label for="chkPassport6"></label>
                    <input type="checkbox" id="chkPassport6" onclick="ShowHideDiv6(this)" />City
                </label>
                <div id="dvPassport6" style="display: none">
				    <input class="input" type="text" placeholder="  CITY" name="city" id="city" value="<?php echo $curcit ?>"/>
                </div>
			</div>	

			<div class="form-group">
                <label for="chkPassport7">
                    <label for="chkPassport7"></label>
                    <input type="checkbox" id="chkPassport7" onclick="ShowHideDiv7(this)" />Phone number
                </label>
                <div id="dvPassport7" style="display: none">
				    <input class="input" type="text" placeholder=" PHONE NUMBER" name="phone" id="phone" value="<?php echo $curpho ?>"/>
                </div>
			</div>

			<div class="form-group">
                <label for="chkPassport8">
                    <label for="chkPassport8"></label>
                    <input type="checkbox" id="chkPassport8" onclick="ShowHideDiv8(this)" />Password
                </label>
                <div id="dvPassport8" style="display: none">
                    <input class="input" type="password" placeholder="  PASSWORD" name="pass1" id="pass1" value="<?php echo $curpas2 ?>"/>
                </div>
			</div>

			<div class="form-group">
                <label for="chkPassport9">
                    <label for="chkPassport9"></label>
                    <input type="checkbox" id="chkPassport9" onclick="ShowHideDiv9(this)" />Conform Password
                </label>
                <div id="dvPassport9" style="display: none">
                    <input class="input" type="password" placeholder="  PASSWORD" name="pass2" id="pass2" value="<?php echo $curpas2 ?>"/>
                </div>
			</div>

			<div class="form-group">
                <label for="chkPassport10">
                    <label for="chkPassport10"></label>
                    <input type="checkbox" id="chkPassport10" onclick="ShowHideDiv10(this)" />TYPE 
                </label>
                <div id="dvPassport10" style="display: none">
				    <input class="input" type="text" placeholder="  TYPE" name="type" id="type" value="<?php echo $curtyp ?>"/>
                </div>
            </div>
			
	</div>
		</div>
        <input class="button1" type="submit" name="Submit" value="Submit"></a>
	
</form>	

  
</body>
</html>