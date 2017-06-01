<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PATIENT INFORMATION SYSTEM</title>

    <link href="css/afterlogin2.css" rel="stylesheet" type="text/css">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/afterlogin3.css" rel="stylesheet" />
    <link href="css/afterlogin1.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link href='css/service1.css' rel='stylesheet' />
    <link href='css/service2.css' rel='stylesheet' />
    <script src="js/service2.js" type="text/javascript"></script>
	<script src="js/service1.js" type="text/javascript"></script>
	<script>
		function myFunction() {
		    var answer = confirm ("Please Log in to continue.")
			if (answer)
				window.location="index.php"
		}
	</script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">About</a></li>
		<li><a href="#service">Service</a></li>
		<li><a href="index.php">Log in</a></li>
		<li><a href="#" onclick="myFunction()">Map</a></li>
		<li><a href="#" onclick="myFunction()">Profile</a></li>
        <li><a href="#" onclick="myFunction()">Contact</a></li>
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
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
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
                                <p class="text-center">e-health is an emerging field in the intersection of medical informatics, public health and business, referring to health services and information delivered or enhanced through the Internet and related technologies. In a broader sense, the term characterizes not only a technical development, but also a state-of-mind, a way of thinking, an attitude, and a commitment for networked, global thinking, to improve health care locally, regionally, and worldwide by using information and communication technology.</p>
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

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
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