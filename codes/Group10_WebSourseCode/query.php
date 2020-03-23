<html>
<head>
<title>Query</title>
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
				<div class="footer" id="contact">
		
			<div class="footer-top">
				<div class="col-md-3 footer-left">
					<h4>Notices</h4>
						<address>
							Please MAKE SURE THE INFORMATION<br>
							YOU INPUT IS CORRECT<br>
						</address>
				</div>
				<div class="col-md-6 footer-middle">
				
					<h4>Query</h4>
					
					<form method="post">
						
						
						<input type="text" style="width: 300px" name="nameValue"  value="Name" placeholder="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">	
						
						<input type="text" style="width: 300px" name="userID" value="ID" placeholder="ID" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'ID';}">				
						
						<br>
						<input type="submit" name="SUBMIT" value="confirm">
						
						
					
						
							
						
					</form>
					
				</div>
				<div class="col-md-3 footer-left">
					<h4>ATTENTION</h4>
							<address>
							<a href="http://stuweb.uic.edu.hk/~m730026048/co.html">click here</a> 	
								to find the irregular <br>
								behavior correspond to the Rcode.<br>
							</address>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer-top">
				<div class="col-md-3 footer-left">
					
				</div>
				<div class="col-md-6 footer-middle">
				
					<h4>YOUR RECORDS</h4>
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

					if (isset($_POST["SUBMIT"]) && $_POST["SUBMIT"]=="confirm"){//submission
						$nameValue = $_POST["nameValue"];
						$userID=$_POST["userID"];
						
						$sql = "SELECT userID, date, location, Record.Rcode, ROVD.fine, ROVD.penaltyPoint FROM Users natural join Own natural join Crime natural join Shoot natural join Camera  
						natural join Record NATURAL JOIN ROVD
						where userID = '$userID' and userName = '$nameValue' ";
						
						$sql2 = "SELECT userID, date, location, Record.Rcode, ROUB.fine FROM Users natural join Own natural join Crime natural join Shoot natural join Camera  
						natural join Record NATURAL JOIN ROUB
						where userID = '$userID' and userName = '$nameValue' ";
						
						$result = $conn->query($sql);
						
						$result2 = $conn->query($sql2);
						
						echo "<font color='white' size='4'>Record of Violation Data</font>";
						echo "<table border='1' align='center' height='100' width='610' bordercolor='white'>
						<tr>
						<th><font color='white' align='center'>userID</font></th>
						<th><font color='white'>Date</font></th>
						<th><font color='white'>Location</font></th>
						<th><font color='white'>Record code</font></th>
						<th><font color='white'>Fine</font></th>
						<th><font color='white'>Penalty Point</font></th>
						</tr>";

						while($row = mysqli_fetch_array($result))
						{
						echo "<tr>";
						echo "<td><font color='white'>" . $row['userID'] . "</font></td>";
						echo "<td><font color='white'>" . $row['date'] . "</font></td>";
						echo "<td><font color='white'>" . $row['location'] . "</font></td>";
						echo "<td><font color='white'>" . $row['Rcode'] . "</font></td>";
						echo "<td><font color='white'>" . $row['fine'] . "</font></td>";
						echo "<td><font color='white'>" . $row['penaltyPoint'] . "</font></td>";
						echo "</tr>";
						}
						echo "</table><br>";
						
					
					
					
						echo "<font color='white' size='4'>Record of Uncivilized Behavior</font>";
						echo "<table border='1' align='center' height='100' width='610' bordercolor='white'>
						<tr>
						<th><font color='white'>userID</font></th>
						<th><font color='white'>Date</font></th>
						<th><font color='white'>Location</font></th>
						<th><font color='white'>Record code</font></th>
						<th><font color='white'>Fine</font></th>
						</tr>";
						
						while($row = mysqli_fetch_array($result2))
						{
						echo "<tr>";
						echo "<td><font color='white'>" . $row['userID'] . "</font></td>";
						echo "<td><font color='white'>" . $row['date'] . "</font></td>";
						echo "<td><font color='white'>" . $row['location'] . "</font></td>";
						echo "<td><font color='white'>" . $row['Rcode'] . "</font></td>";
						echo "<td><font color='white'>" . $row['fine'] . "</font></td>";
						echo "</tr>";
						}
						echo "</table>";
					}
					

					$conn->close();

				?>
					
					
				</div>
				<div class="col-md-3 footer-left">
				
				</div>
				<div class="clearfix"></div>
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
