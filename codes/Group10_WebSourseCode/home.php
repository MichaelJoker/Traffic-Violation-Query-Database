<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!---->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="css/swipebox.css">
<!---->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!---->
<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--startsmothscrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<!--script-->
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!-- swipe box js -->
		<script src="js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
				jQuery(function($) {
				$(".swipebox").swipebox();
				});
		</script>

	<!-- //swipe box js -->

</head>
<body>
	<!--header-->	
		<div class="banner">
			<div class="container">
				<div class="navigation wow fadeInLeft animated" data-wow-delay=".5s">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right link-effect">
									<li><a href="http://stuweb.uic.edu.hk/~m730026048/home.php" >HomePage </a></li>
									<li><a href="http://stuweb.uic.edu.hk/~m730026065/registration.php">Registration</a></li>
									<li><a href="http://stuweb.uic.edu.hk/~m730026065/query.php" >Query</a></li>
									<li><a href="http://stuweb.uic.edu.hk/~m730026065/manage.php" >Manage</a></li>
									<li><a href="http://stuweb.uic.edu.hk/~m730026065/recharge.php" >Recharge</a></li>
									
								</ul>
							</div><!-- /.navbar-collapse -->
					</nav>
				</div>
				<div class="banner-info">
					
						<h1 class="wow fadeInRight animated" data-wow-delay=".5s">Road Irregularities Record Query</h1>
						<p class="wow fadeInRight animated" data-wow-delay=".5s">Safty is the only way home</p>
				</div>
					
			</div>
		</div>
		<div class="content">
		<!--about-->
			<div class="about-w3" id="about">
				<div class="container">
					<h2 class="tittle"><span>[</span> The Traffic Safety <span>]</span></h2>
					<p class="about-text">Every minute in China, one person is injured or killed in a car accident, and every five minutes, one person dies. About 300 people die in traffic accidents every day, and about 100,000 people die in traffic accidents every year. The number of cars accounts for 1.9% of the world, and the number of traffic accidents accounts for 15% of the world, with an annual increase of 4.5%. Since the first recorded car crash in 1899, more than 30 million people have died in car crashes worldwide, more than the number during world war I.</p>
					<div class="about-grids">
						<div class="col-md-4 about-grid">
							<div class="about-top">
								<h4><i class="glyphicon glyphicon-heart-empty" aria-hidden="true"></i>Traffic Offence</h4>
								<span></span>
							</div>
							<p>Statistics from the ministry of public security show that motor vehicle drivers' illegal behaviors were the main cause of road traffic accidents in China in 2004. Among them, the deaths caused by overspeed driving, traffic jam driving, unlicensed driving, drunk driving and fatigue driving are more prominent.</p>
						</div>
						<div class="col-md-4 about-grid">
							<div class="about-top">
								<h4><i class="glyphicon glyphicon-globe" aria-hidden="true"></i>Extra Serious Accident </h4>
								<span></span>
							</div>
							<p>In 2005, there was a total of 47 major road traffic accidents that killed at least 10 people, resulting in 807 deaths and 705 injuries. The number of accidents fell by 14.5%, or eight, compared with 2004. The death toll fell by 45, or 5.3%; The number of injuries decreased by 172, or 19.6%.</p>
						</div>
						<div class="col-md-4 about-grid">
							<div class="about-top">
								<h4><i class="glyphicon glyphicon-flag" aria-hidden="true"></i>Safety education</h4>
								<span></span>
							</div>
							<p>Education can improve people's consciousness, consciousness can change people's behavior, behavior determines the consequences. Traffic safety education is the fundamental way to solve traffic accidents. Only has the very good traffic safety knowledge and the self-defense consciousness, can ensure the traffic safety.</p>
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--about-->
		<!--services-->
			<div class="services" id="services">
				<div class="container">
					<h3 class="tittle"><span>[</span> SOME DATA <span>]</span></h3>
						<p class="about-text1">The following data can be derived from our database.</p>
					<div class="service-grids">
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon glyphicon-globe" aria-hidden="true"></i>
							</div>
							<div class="ser-right">
								<h4>The average number of violations per vehicle:</h4>
								<?php

								$servername = "172.16.199.130";
								$username = "m730026048";
								$password = "m730026048";
								$dbname = "m730026048";

								$conn = new mysqli($servername, $username, $password, $dbname);
								if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
								} 
								//echo "You successfully regist and you can login now.";

								$sql = "SELECT AVG(number)\n"

										. "FROM (SELECT COUNT(recordID) AS number\n"

										. "FROM Crime\n"

										. "GROUP BY LicensePlateNumber) AS N";
										$result = $conn->query($sql);
								while($row = mysqli_fetch_array($result)){
									echo "<p>";
									echo "<font color='white' size='10em' color=C2DFDB>" . $row['AVG(number)'] . "</font>";
									echo "</p>";
								}

								$conn->close();

								?>
					
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon glyphicon-signal" aria-hidden="true"></i>
							</div>
							<div class="ser-right">
								<h4>The road that most likely to produce irregular driving behavior:</h4>
								<?php

								$servername = "172.16.199.130";
								$username = "m730026048";
								$password = "m730026048";
								$dbname = "m730026048";

								$conn = new mysqli($servername, $username, $password, $dbname);
								if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
								} 
								//echo "You successfully regist and you can login now.";

								$sql = "SELECT location\n"

										. "FROM Camera\n"

										. "WHERE Camera.CameraID IN(\n"

										. "    (SELECT CameraID\n"

										. "     FROM Shoot\n"

										. "     GROUP BY(CameraID)\n"

										. "     HAVING COUNT(recordID)=(\n"

										. "         SELECT MAX(number)\n"

										. "         FROM (\n"

										. "            SELECT CameraID,count(recordID) AS number\n"

										. "         	FROM Shoot\n"

										. "         	GROUP BY(CameraID))AS N1)))";

										$result = $conn->query($sql);
								while($row = mysqli_fetch_array($result)){
									echo "<p>";
									echo "<font color='white' size='5em' color=C2DFDB>" . $row['location'] . "</font>";
									echo "</p>";
								}

								$conn->close();

								?>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
							</div>
							<div class="ser-right">
								<h4>The maximum fine of irregular driving behavior:</h4>
								<?php

								$servername = "172.16.199.130";
								$username = "m730026048";
								$password = "m730026048";
								$dbname = "m730026048";

								$conn = new mysqli($servername, $username, $password, $dbname);
								if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
								} 
								//echo "You successfully regist and you can login now.";

								$sql = "SELECT MAX(fine)\n"

									. "FROM ROVD";
										$result = $conn->query($sql);
								while($row = mysqli_fetch_array($result)){
									echo "<p>";
									echo "<font color='white' size='10em' color=C2DFDB>" . $row['MAX(fine)'] . "</font>";
									echo "</p>";
								}

								$conn->close();

								?>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="service-grids">
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon glyphicon-heart" aria-hidden="true"></i>
							</div>
							<div class="ser-right">
								<h4>Average points:</h4>
								<?php

								$servername = "172.16.199.130";
								$username = "m730026048";
								$password = "m730026048";
								$dbname = "m730026048";

								$conn = new mysqli($servername, $username, $password, $dbname);
								if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
								} 
								//echo "You successfully regist and you can login now.";

								$sql = "SELECT AVG(points)\n"

										. "FROM Users";

										$result = $conn->query($sql);
								while($row = mysqli_fetch_array($result)){
									echo "<p>";
									echo "<font color='white' size='10em' color=C2DFDB>" . $row['AVG(points)'] . "</font>";
									echo "</p>";
								}

								$conn->close();

								?>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon glyphicon-cloud" aria-hidden="true"></i>
							</div>
							<div class="ser-right">
								<h4>The number of people with points greater than 8:</h4>
								<?php

								$servername = "172.16.199.130";
								$username = "m730026048";
								$password = "m730026048";
								$dbname = "m730026048";

								$conn = new mysqli($servername, $username, $password, $dbname);
								if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
								} 
								//echo "You successfully regist and you can login now.";

								$sql = "SELECT COUNT(userID)\n"

									. "FROM Users\n"

									. "WHERE points>8";

										$result = $conn->query($sql);
								while($row = mysqli_fetch_array($result)){
									echo "<p>";
									echo "<font color='white' size='10em' color=C2DFDB>" . $row['COUNT(userID)'] . "</font>";
									echo "</p>";
								}

								$conn->close();

								?>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon glyphicon-flag" aria-hidden="true"></i>
							</div>
							<div class="ser-right">
								<h4>The number of people with points lower than 4:</h4>
								<?php

								$servername = "172.16.199.130";
								$username = "m730026048";
								$password = "m730026048";
								$dbname = "m730026048";

								$conn = new mysqli($servername, $username, $password, $dbname);
								if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
								} 
								//echo "You successfully regist and you can login now.";

								$sql = "SELECT COUNT(userID)\n"

									. "FROM Users\n"

									. "WHERE points<4";
										$result = $conn->query($sql);
								while($row = mysqli_fetch_array($result)){
									echo "<p>";
									echo "<font color='white' size='10em' color=C2DFDB>" . $row['COUNT(userID)'] . "</font>";
									echo "</p>";
								}

								$conn->close();

								?>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--services-->
			<!-- gallery -->
				<div class="gallery" id="portfolio">
					<div class="container">
						<h2 class="tittle">PICTURES and FACTS</h2>
						<div class="gallery-grids">
							<div class="col-md-4 gal-left">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/1.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/1.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
								
										<div class="info-box">
											<div class="info-content">
												<h4>Age</h4>
												<span class="separator"></span>
												<p>Road traffic injuries are the leading cause of death for children and young adults aged 5-29 years.</p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/2.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/2.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
								
										<div class="info-box">
											<div class="info-content">
												<h4>Sex</h4>
												<span class="separator"></span>
												<p>From a young age, males are more likely to be involved in road traffic crashes than females.</p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/3.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/3.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Speeding</h4>
												<span class="separator"></span>
												<p>An increase in average speed is directly related both to the likelihood of a crash occurring and to the severity of the consequences of the crash.</p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left gal_mar">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/4.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/4.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Alcohol </h4>
												<span class="separator"></span>
												<p>Driving under the influence of alcohol and any psychoactive substance or drug increases the risk of a crash that results in death or serious injuries.</p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left gal_mar">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/5.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/5.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Nonuse of motorcycle helmets</h4>
												<span class="separator"></span>
												<p>Correct helmet use can lead to a 42% reduction in the risk of fatal injuries and a 69% reduction in the risk of head injuries.</p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left gal_mar">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/6.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/6.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Distracted driving</h4>
												<span class="separator"></span>
												<p>The distraction caused by mobile phones is a growing concern for road safety.</p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left gal_mar">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/7.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/7.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Unsafe road infrastructure</h4>
												<span class="separator"></span>
												<p>The design of roads can have a considerable impact on their safety.</p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left gal_mar">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/8.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/8.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Unsafe vehicles</h4>
												<span class="separator"></span>
												<p>Safe vehicles play a critical role in averting crashes and reducing the likelihood of serious injury.</p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left gal_mar">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/9.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/9.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Inadequate post-crash care</h4>
												<span class="separator"></span>
												<p>Delays in detecting and providing care for those involved in a road traffic crash increase the severity of injuries.</p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

		
			
			
		</div>
	
			<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'home', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="home" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

			

</body>
</html>