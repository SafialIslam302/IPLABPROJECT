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
      
  <form action="create1.php" method="post" name="form2" onsubmit="return ValidateContactForm1()">
        <h1>Please Fill Up the Sign up Form to Continue Login</h1>
        
    <div class="contentform">

        <div class="leftcontact">
            <div class="form-group">
            <p>Hospital Name <span>*</span></p>
                <input type="text" placeholder="  HOSPITAL NAME" name="hname" id="hname" />
                <div class="validation"></div>
            </div>

            <div class="form-group">
            <p>Address <span>*</span></p>   
                <input type="text" placeholder="  ADDRESS" name="address" id="address"/>
                <div class="validation"></div>
            </div>  

            <div class="form-group">
            <p>E-mail</p>
                <input type="email" placeholder="  E-MAIL" name="email" id="email" />
                <div class="validation"></div>
            </div>

            <div class="form-group">
            <p>Password<span>*</span></p>
                <input type="password" placeholder="  Password" name="pass3" id="pass3" />
                <div class="validation"></div>
            </div>

            <div class="form-group">
            <p>Conform Password<span>*</span></p>
                <input type="password"  placeholder="  Password" name="pass4" id="pass4" />
                <div class="validation"></div>
            </div>  
    </div>
    <div class="rightcontact">  
            <div class="form-group">
            <p>Contact<span>*</span></p>
                <input type="text" placeholder="  Phone Number" name="contact" id="contact"/>
                <div class="validation"></div>
            </div>  

            <div class="form-group">
            <p>Department 1<span>*</span></p>   
                <input type="text" placeholder=" Department" name="dep1" id="dep1"/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
            <p>Department 2<span>*</span></p>
                <input type="text" placeholder="  Department" name="dep2" id="dep2"/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
            <p>Department 3<span>*</span></p>   
                <input type="text" placeholder="  Department" name="dep3" id="dep3" />
                <div class="validation"></div>
            </div>

            <div class="form-group">
            <p>Department 4<span>*</span></p>
                <input type="text" placeholder="  Department" name="dep4" id="dep4"/>
                <div class="validation"></div>
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