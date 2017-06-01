<!DOCTYPE html>
<html>
<head>
	<title>FIRST LOGIN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="img/arogya.png" />
	<link rel="stylesheet" type="text/css" href="css/sign1.css" />
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


      
  <form action="create.php" method="post" name="form1" onsubmit="return ValidateContactForm1()">
	    <h1>Please Fill Up the Sign up Form to Continue Login</h1>
	    
    <div class="contentform">

    	<div class="leftcontact">
			<div class="form-group">
			<p>Surname<span>*</span>
				<input type="text" placeholder="  SURNAME" name="name" id="name" />
       		</div> 

            <div class="form-group">
            <p>Name <span>*</span></p>
				<input type="text" placeholder="  NAME" name="prename" id="prename" />
			</div>

			<div class="form-group">
			<p>E-mail <span>*</span></p>	
                <input type="email" placeholder="  E-MAIL" name="email" id="email"/>
			</div>	

			<div class="form-group">
			<p>Company</p>
				<input type="text" placeholder="  COMPANY" name="society" id="society" />
			</div>

			<div class="form-group">
			<p>Age <span>*</span></p>
				<input type="text" placeholder="  AGE" name="age" id="age" />
			</div>

			<div class="form-group">
			<p>Address <span>*</span></p>
				<input type="text"  placeholder="  ADDRESS" name="address" id="address" />
			</div>	
	</div>
	<div class="rightcontact">	
			<div class="form-group">
			<p>City <span>*</span></p>
				<input type="text" placeholder="  CITY" name="city" id="city"/>
			</div>	

			<div class="form-group">
			<p>Phone number <span>*</span></p>	
				<input type="text" placeholder=" PHONE NUMBER" name="phone" id="phone"/>
			</div>

			<div class="form-group">
			<p>Password<span>*</span></p>
                <input type="password" placeholder="  PASSWORD" name="pass1" id="pass1"/>
			</div>

			<div class="form-group">
			<p>Conform Password<span>*</span></p>	
                <input type="password" placeholder="  PASSWORD" name="pass2" id="pass2" />
			</div>

			<div class="form-group">
			<p>TYPE<span>*</span></p>
				<input type="text" placeholder="  TYPE" name="type" id="type"/>
            </div>
			
	</div>
		</div>
			<div class="form-group">
			<br><br>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp<span>*</span> Must be filled</p>
		</div>	
        <input class="button1" type="submit" name="Submit" value="Submit"></a>
	
</form>	

  
</body>
</html>