<?php 
     session_start();
     $log1 = $_SESSION['log1'];
     include("dbcon.php"); 
?>
<?php
      if(isset($_COOKIE['$email']) && $_COOKIE['$pass']){
            $curnam = $_SESSION['curname'];
            $curpas = $_SESSION['curpass'];
            $chnpas = $_SESSION['chnpas'];
            $result = mysql_query("SELECT * FROM tbl where password='$curpas' or password='$chnpas' ");
            while($row = mysql_fetch_array($result))
            {
                $surnam = $row['surname'];
            	$curful = $row['name'];
	            $curcom = $row['company'];
	            $curage = $row['age'];
	            $curadr = $row['address'];
	            $curcit = $row['city'];
	            $curpho = $row['phone'];
	            $curtyp = $row['type'];
            }
            
        }
        else if($log1 == 11)
        {
            $curnam = $_SESSION['curname'];
            $curpas = $_SESSION['curpass'];
            $chnpas = $_SESSION['chnpas'];
            $result = mysql_query("SELECT * FROM tbl where password='$curpas' or password='$chnpas' ");
            while($row = mysql_fetch_array($result))
            {
                $surnam = $row['surname'];
            	$curful = $row['name'];
	            $curcom = $row['company'];
	            $curage = $row['age'];
	            $curadr = $row['address'];
	            $curcit = $row['city'];
	            $curpho = $row['phone'];
	            $curtyp = $row['type'];
            }
        }
        else 
        {
           echo '<img src="img/e2.jpg" width="100%" height="100%"  />';  /* here goes the page when destroy the cookies */
           exit;
        }
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PATIENT INFORMATION SYSTEM</title>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/afterlogin1.css" rel="stylesheet">
    <link href="css/afterlogin2.css" rel="stylesheet" type="text/css">
    <link href="css/afterlogin3.css" rel="stylesheet" />
	<link href="color/default.css" rel="stylesheet">
	<link href='css/service1.css' rel='stylesheet' />
    <link href='css/service2.css' rel='stylesheet' />
    <link href="css/button.css" rel="stylesheet" type="text/css">
    <link href="css/button1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/scri.js"></script>
    <script type="text/javascript" src="js/profile.js"></script>
    <script src="js/service2.js" type="text/javascript"></script>
	<script src="js/service1.js" type="text/javascript"></script>
	<style>
       #map {
        height: 650px;
        width: 100%;
    	padding-top: 100px;
       }
    </style>
    <style>
		.fa {
		  padding: 20px;
		  font-size: 20px;
		  width: 60px;
		  text-align: center;
		  text-decoration: none;
		  margin: 5px 13px;
		  border-radius: 50%;
		}
		.fa:hover {
		    opacity: 0.7;
		}
		.fa-facebook {
		  background: #3B5998;
		  color: white;
		}
		.fa-twitter {
		  background: #55ACEE;
		  color: white;
		}
		.fa-linkedin {
		  background: #007bb5;
		  color: white;
		}
		.fa-youtube {
		  background: #bb0000;
		  color: white;
		}
		.fa-yahoo{
		  background: #430297;
		  color: white;
		}
	</style>
	<script type="text/javascript">
	    $().ready(function(){
	        $('[rel="tooltip"]').tooltip();

	    });

	    function rotateCard(btn){
	        var $card = $(btn).closest('.card-container1');
	        console.log($card);
	        if($card.hasClass('hover')){
	            $card.removeClass('hover');
	        } else {
	            $card.addClass('hover');
	        }
	    }
	</script>

	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-46172202-4', 'auto');
		  ga('send', 'pageview');
	</script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav  class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand" href="index.html">
                <div id="mySidenav" class="sidenav">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  <ul class="nav navbar-nav">
						  <li class="dropdown">
						  		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
						  		<ul class="dropdown-menu">
						  			<li><a href="delete.php">Delete</a></li>
						  		</ul>
						  </li>
						  <li class="dropdown">
						  		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Lists <b class="caret"></b></a>
						  		<ul class="dropdown-menu">
						  			<li><a href="doctors.php">Doctors</a></li>
						  			<li><a href="hospital.php">Hospital</a></li>
						  		</ul>
						  </li>
						  <li><a href="event.php">News and Events</a></li>
						  <li><a href="#">Symptoms</a></li>
						  <li><a href="#">Diseases</a></li>
						  <li><a href="#">Cares</a></li>
						  <li><a href="#">Medicines</a></li>
					  </ul>
				</div>
				<div>
					<span style="font-size:40px;cursor:pointer;padding-top:-10px" onclick="openNav()">&#9776;MENU</span>
				</div>
				<script>
					function openNav() {
					    document.getElementById("mySidenav").style.width = "170px";
					    document.getElementById("main").style.marginLeft = "170px";
					    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
					}

					function closeNav() {
					    document.getElementById("mySidenav").style.width = "0";
					    document.getElementById("main").style.marginLeft= "0";
					    document.body.style.backgroundColor = "white";
					}
				</script>
                </a>
            </div>


            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">About</a></li>
		<li><a href="#service">Service</a></li>
		<li><a href="#map">Map</a></li>
		<li><a href="#profile">Profile</a></li>
		<li><a href="logout.php">Logout</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
            </div>
            
        </div>

    </nav>

    <section id="intro" class="intro">
		<div class="slogan">
			<h2>WELCOME TO <span class="text_color"></span> </h2>
			<h2>PATIENT INFORMATION SYSTEM</h2>
		</div>
		<div class="page-scroll">
			<a href="#about" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated" style="padding-left:10px"></i>
			</a>
		</div>
    </section>

    <section id="about" class="home-section text-center">
		<div class="container">
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
         <div class="col-md-4 col-sm-6">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="img/cover1.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/doc1.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Patient infomation</h3>
                                <p class="text-center">The patient record is the principal repository for information concerning a patient's health care.</p>
                            </div>
                            <div class="footer">
                                <div class="rating">
                                     Details More
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="back">
                        <div class="content">
                            <div class="main">
                                <p class="text-center"><h4>A patient record is the repository of information about a single patient. This information is generated by health care professionals as a direct result of interaction with a patient or with individuals who have personal knowledge of the patient (or with both). Traditionally, patient records have been paper and have been used to store patient care data.<h4></p>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div> 
        
        <div class="col-md-4 col-sm-6">
            <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="img/cover1.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/hos1.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">E-health</h3>

                                <p class="text-center">eHealth is an overarching term used today to describe the application of information and communications technologies in the health sector.</p>
                            </div>
                            <div class="footer">
                                <div class="rating">
                                    Details More
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="back">
                        <div class="content">
                            <div class="main">
                                <p class="text-center">e-health is an emerging field in the intersection of medical informatics, public health and business, referring to health services and information delivered or enhanced through the Internet and related technologies.In a broader sense,the term characterizes not only a technical development, but also a state-of-mind, a way of thinking, an attitude, global thinking, to improve health care locally, regionally, and worldwide by using information and communication technology.</p>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div> 

        <div class="col-md-4 col-sm-6">
            <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="img/cover1.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/map1.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Diseases & Cure</h3>

                                <p class="text-center">A disease is a particular abnormal condition, a disorder of a structure or function, that affects part or all of an organism.</p>
                            </div>
                            <div class="footer">
                                <div class="rating">
                                    Details More
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="back">
                        <div class="content">
                            <div class="main">
                                <p class="text-center">There are steps you can take to recover from a heart attack and preventing another one in the future. This is known as “secondary prevention.” First, make sure you understand your type of heart disease. Your doctor will tell you risk factors and how to help prevent future damage to your heart. Then, follow the tips below for a healthy lifestyle.
                                <ul>
                                <li>Stop smoking.</li>
                                <li>Control your blood pressure.</li>
                                <li>Exercise.</li>
                                <li>Eat a heart-healthy diet.</li>
                                <li>Control your cholesterol levels.</li>
                                <li>Check for diabetes.</li></p>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div> 


        </div> 
    </div> 
    <div class="space-200"></div>
</div> 
	</section>

    <section id="service" class="home-section text-center bg-gray">
		
		<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
         <div class="col-md-4 col-sm-6">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="img/cover1.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/doc1.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Save Our File and Feedback</h3>
                                <p class="text-center">In this Website you will Save our check up related documents safely
                                and share your experience.</p>
                            </div>
                            <div class="footer">
                                <div class="rating">
                                     Details More
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="back">
                        <div class="content">
                            <div class="main">
                                <p class="text-center"><h4>You can save your file in here when ever you need it. You can show it or
                                delete it.<h4></p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="main">
                                <p class="text-center"><h4>You can Share your experience with others, so that others can benefited.</h4></p>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div> 
        
        <div class="col-md-4 col-sm-6">
            <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="img/cover1.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/hos1.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Hospital and Doctors Lists</h3>

                                <p class="text-center">Here you will Find all Doctors and hospital List
                                who are registered.</p>
                            </div>
                            <div class="footer">
                                <div class="rating">
                                    Details More
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">In this website You can easily find the doctor or a hospital name.</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <p class="text-center">When ever you need any doctors or hospital details you simply go to the
                                Lists option and there you show all the lists.</p>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div> 

        <div class="col-md-4 col-sm-6">
            <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="img/cover1.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/map1.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Location of Hospital</h3>

                                <p class="text-center">Here you find all hospital locations.</p>
                            </div>
                            <div class="footer">
                                <div class="rating">
                                    Details More
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="back">
                        <div class="content">
                            <div class="main">
                                <p class="text-center"><br><br><br><br><br>Here you find all the registered hospital location 
                                in the google map.</p>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div> 


        </div> 
    </div> 
    <div class="space-200"></div>
</div> 
	</section>

	<section id="map">
		<div id="map"></div>
		<script src="js.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfw6b-GbfaBHzhyvaPe7afNLUxVyXJAAo&callback=initMap"></script>
	</section>

	<section id="profile" class="home-section text-center bg-gray">
<div class="container">
      <div class="row">
     
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo "$curful" ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Full Name</td>
                        <td><?php echo "$curful" ?></td>
                      </tr>
                      <tr>
                        <td>SurName</td>
                        <td><?php echo "$surnam" ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com"><?php echo "$curnam" ?></a></td>
                      </tr>  
                       <tr>
                        <td>Company</td>
                        <td><?php echo "$curcom" ?></td>
                      </tr>
                        <tr>
                        <td>Age</td>
                        <td><?php echo "$curage" ?></td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td><?php echo "$curadr" ?></td>
                      </tr>
                      <tr>
                        <td>City</td>
                        <td><?php echo "$curcit" ?></td>     
                      </tr>
                       <tr>
                        <td>Phone</td>
                        <td><?php echo "$curpho" ?></td>     
                      </tr>
                       <tr>
                        <td>Type</td>
                        <td><?php echo "$curtyp" ?></td>     
                      </tr>
                    </tbody>
                  </table>
                  
                   <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                   	   <?php
                   	   		$_SESSION['curpas2'] = $curpas;
                   	   ?>
			           <a href="edit.php">Edit Profile</a>
			      </div>
                </div>
              </div>
            </div>
                <div class="panel-footer">
                        <a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-linkedin"></a>
						<a href="#" class="fa fa-youtube"></a>
						<a href="#" class="fa fa-yahoo"></a>
                </div>
          </div>
        </div>
      </div>
    </div>
	</section>


    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form id="contact-form" action="" method="post" role="form" class="contactForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Main Office</h5>
				
				<address>
				  <strong>Squas Design, Inc.</strong><br>
				  Tower 795 Folsom Ave, Beautiful Suite 600<br>
				  San Francisco, CA 94107<br>
				  <abbr title="Phone">P:</abbr> (123) 456-7890
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">email.name@example.com</a>
				</address>	
				<address>
				  <strong>We're on social networks</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>	
				</address>					
			</div>	
		</div>
    </div>	
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
						<div align="center">
						    <i class="fa fa-angle-double-up animated"></i>
						</div>
						</a>
					</div>
					</div>
					<p>&copy;SquadFREE. All rights reserved.</p>
                    <div class="credits">
                        
                        <a href="https://bootstrapmade.com/free-one-page-bootstrap-themes-website-templates/">One Page Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
				</div>
			</div>	
		</div>
	</footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
</body>
</html>