<?php
    session_start();
    if(empty($_SESSION['curname']) ){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="icon" type="image/png" href="img/arogya.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="img/arogya.png" />
	<link rel="stylesheet" type="text/css" href="css/edit1.css" />
	<link href="css/button3.css" rel="stylesheet" type="text/css">
	<script>
            function ValidateContactForm1()
            {
                var name1 = document.form2.hname;
                var address1 = document.form2.address;
                var email1 = document.form2.email;
                var password3 = document.form2.pass3;
                var password4 = document.form2.pass4;
                var contact1 = document.form2.contact;
                var de1 = document.form2.dep1;
                var de2 = document.form2.dep2;
                var de3 = document.form2.dep3;
                var de4 = document.form2.dep4;
                
                if (name1.value == "")
                {
                    window.alert("Please enter the hospital name.");
                    name1.focus();
                    return false;
                }
                if (address1.value == "")
                {
                    window.alert("Please enter the hospital address.");
                    address1.focus();
                    return false;
                }
                if (email1.value == "")
                {
                    window.alert("Please enter an Email Address.");
                    email1.focus();
                    return false;
                }
                if (password3.value == "")
                {
                    window.alert("Please enter a password.");
                    password3.focus();
                    return false;
                }
                if (password4.value == "")
                {
                    window.alert("Please enter a confirm password.");
                    password4.focus();
                    return false;
                }
                if (contact1.value == "")
                {
                    window.alert("Please enter a contact number.");
                    contact1.focus();
                    return false;
                }
                if (de1.value == "" || de2.value == "" || de3.value == "" || de4.value == "")
                {
                    window.alert("Please enter your Age.");
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
            $tbl="create table tbl1(
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
                $curpas1 = $_SESSION['curpas1'];
                $result = mysql_query("SELECT * FROM tbl1 where password1='$curpas1' ");
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


      
  <form action="update1.php" method="post" name="form2" onsubmit="return ValidateContactForm1()">
	    <h1>Please Fill Up the Sign up Form to Continue Login</h1>
    <div class="contentform">

    	<div class="leftcontact">
			<div class="form-group">
                <label for="chkPassport">
                    <label for="chkPassport"></label>
                    <input type="checkbox" id="chkPassport" onclick="ShowHideDiv(this)" />Hospital Name
                </label>
                <div id="dvPassport" style="display: none">
    			     <input class="input" type="text" placeholder="  HOSPITAL NAME" name="hname" id="hname" value="<?php echo $curnam ?>" />
                </div>
       		</div> 

            <div class="form-group">
                <label for="chkPassport1">
                    <label for="chkPassport1"></label>
                    <input type="checkbox" id="chkPassport1" onclick="ShowHideDiv1(this)" />Address
                </label>
                <div id="dvPassport1" style="display: none">
				    <input class="input" type="text" placeholder="  ADDRESS" name="address" id="address" value="<?php echo $curadr ?>"/>
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
                    <input type="checkbox" id="chkPassport3" onclick="ShowHideDiv3(this)" />Password
                </label>
                <div id="dvPassport3" style="display: none">
				    <input class="input" type="password" placeholder="  Password" name="pass3" id="pass3" value="<?php echo $curpas1 ?>"/>
                </div>
			</div>

			<div class="form-group">
                <label for="chkPassport4">
                    <label for="chkPassport4"></label>
                    <input type="checkbox" id="chkPassport4" onclick="ShowHideDiv4(this)" />Conform Password
                </label>
                <div id="dvPassport4" style="display: none">
				    <input class="input" type="password"  placeholder="  Password" name="pass4" id="pass4" value="<?php echo $curpas1 ?>"/>
                </div>
			</div>
	</div>
	<div class="rightcontact">	
			<div class="form-group">
                <label for="chkPassport6">
                    <label for="chkPassport6"></label>
                    <input type="checkbox" id="chkPassport6" onclick="ShowHideDiv6(this)" />Contact
                </label>
                <div id="dvPassport6" style="display: none">
				    <input class="input" type="text" placeholder="  Phone Number" name="contact" id="contact" value="<?php echo $curcon ?>"/>
                </div>
			</div>	

			<div class="form-group">
                <label for="chkPassport7">
                    <label for="chkPassport7"></label>
                    <input type="checkbox" id="chkPassport7" onclick="ShowHideDiv7(this)" />Department 1
                </label>
                <div id="dvPassport7" style="display: none">
				    <input class="input" type="text" placeholder=" Department" name="dep1" id="dep1" value="<?php echo $curde1 ?>"/>
                </div>
			</div>

			<div class="form-group">
                <label for="chkPassport8">
                    <label for="chkPassport8"></label>
                    <input type="checkbox" id="chkPassport8" onclick="ShowHideDiv8(this)" />Department 2
                </label>
                <div id="dvPassport8" style="display: none">
                    <input class="input" type="text" placeholder="  Department" name="dep2" id="dep2" value="<?php echo $curde2 ?>"/>
                </div>
			</div>

			<div class="form-group">
                <label for="chkPassport9">
                    <label for="chkPassport9"></label>
                    <input type="checkbox" id="chkPassport9" onclick="ShowHideDiv9(this)" />Department 3
                </label>
                <div id="dvPassport9" style="display: none">
                    <input class="input" type="text" placeholder="  Department" name="dep3" id="dep3" value="<?php echo $curde3 ?>"/>
                </div>
			</div>

			<div class="form-group">
                <label for="chkPassport10">
                    <label for="chkPassport10"></label>
                    <input type="checkbox" id="chkPassport10" onclick="ShowHideDiv10(this)" />Department 4 
                </label>
                <div id="dvPassport10" style="display: none">
				    <input class="input" type="text" placeholder="  Department" name="dep4" id="dep4" value="<?php echo $curde4 ?>"/>
                </div>
            </div>
			
	</div>
		</div>
        <input class="button3" type="submit" name="Submit" value="Submit"></a>
	
</form>	

  
</body>
</html>