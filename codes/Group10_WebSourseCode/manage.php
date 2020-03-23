<html>
<head>
<title>Manage</title>
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
				
					<h4>DELETE RECORDS</h4>
					
					<form method="post">
						
						
							<input type="text" style="width: 300px" name="Platenum"  value="License Plate Number" placeholder="License Plate Number" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'License Plate Number';}">	
							
							<input type="text" style="width: 300px" name="userID" value="ID" placeholder="ID" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'ID';}">				
							<font size="2" color="white">Your ID should contain 10 digits</font>
							<br/>
							<input type="submit" style="width: 100px" name="SUBMIT" value="confirm">
							<input type="submit" style="width: 100px" name="SUBMIT" value="delete">
					</form>
					
				
	
				</div>
				<div class="col-md-3 footer-left">
					<h4>function</h4>
						<address>
							You can delete your irregular behaviour record<br>
							AFTER<br>
							PAYING THE FINE<br>
							MINUSING POINTS<br>
							TAKING THE COURSES<br>
						</address>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer-top">
				<div class="col-md-3 footer-left">
				<h4>Your information</h4>
						
				<?php

					$servername = "172.16.199.130";
					$username = "m730026048";
					$password = "m730026048";
					$dbname = "m730026048";

					$conn = new mysqli($servername, $username, $password, $dbname);
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
					

					if ((isset($_POST["SUBMIT"]) && $_POST["SUBMIT"]=="confirm") || (isset($_POST["SUBMIT"]) && $_POST["SUBMIT"]=="delete")){//submission
						$Platenum = $_POST["Platenum"];
						$userID=$_POST["userID"];
						
						$sql3 = "SELECT userID, userName, amount, points FROM Users natural join Have natural join Account natural join Own
						where userID = '$userID' and LicensePlateNumber = '$Platenum' ";
						
						
						$result3 = $conn->query($sql3);
						
						$row_0 = mysqli_fetch_array($result3);
						echo "<font color='white' size='3'>Welcome user " .$row_0 ['userName']."</font><br>";
						echo "<font color='white' size='3'>Your points: " .$row_0 ['points']."</font><br>";
						echo "<font color='white' size='3'>Your amount: " .$row_0 ['amount']."</font><br>";
						
					}
					

					$conn->close();

					?>
					
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
					

					if (isset($_POST["SUBMIT"]) && $_POST["SUBMIT"]=="confirm"){//submission
						$Platenum = $_POST["Platenum"];
						$userID=$_POST["userID"];
						
						$sql1 = "SELECT courseURL, ROVD.fine, ROVD.penaltyPoint FROM Users natural join Own natural join Crime natural join Shoot natural join Camera  
						natural join Record NATURAL JOIN ROVD natural join Correspond natural join Course 
						where userID = '$userID' and LicensePlateNumber = '$Platenum' ";//对违规的行为的sql
						
						$sql2 = "SELECT courseURL, ROUB.fine FROM Users natural join Own natural join Crime natural join Shoot natural join Camera  
						natural join Record NATURAL JOIN ROUB  natural join Correspond natural join Course  
						where userID = '$userID' and LicensePlateNumber = '$Platenum' ";//对不文明行为的sql
						
						$result1 = $conn->query($sql1);
						$result2 = $conn->query($sql2);
						
						echo "<font color='white' size='3'>Record of Violation Data</font>";
						echo "<table border='1' align='center' height='100' width='610' bordercolor='white'>
						<tr>
						<th><font color='white'>You should learn this</font></th>
						<th><font color='white'>Fine</font></th>
						<th><font color='white'>Penalty Point</font></th>
						</tr>";

						while($row = mysqli_fetch_array($result1))
						{
						echo "<tr>";
						
						echo "<td><font color='white'>" . $row['courseURL'] . "</font></td>";
						echo "<td><font color='white'>" . $row['fine'] . "</font></td>";
						echo "<td><font color='white'>" . $row['penaltyPoint'] . "</font></td>";
						echo "</tr>";
						}
						echo "</table>";
						echo "<br>";
						echo "<font color='white' size='3'>Record of Uncivilized Behavior</font>";
						echo "<table border='1' align='center' height='100' width='610' bordercolor='white'>
						<tr>
						<th><font color='white'>You should learn this</font></th>
						<th><font color='white'>Fine</font></th>
						</tr>";
						
						while($row = mysqli_fetch_array($result2))
						{
						echo "<tr>";
						echo "<td><font color='white'>" . $row['courseURL'] . "</font></td>";
						echo "<td><font color='white'>" . $row['fine'] . "</font></td>";
						echo "</tr>";
						}
						echo "</table>";
					}
					if (isset($_POST["SUBMIT"]) && $_POST["SUBMIT"]=="delete"){//submission
						$Platenum = $_POST["Platenum"];
						$userID=$_POST["userID"];
						
						
						
						$sql4 = "SELECT sum(penaltyPoint) FROM Crime NATURAL JOIN Record NATURAL JOIN ROVD WHERE LicensePlateNumber = '$Platenum' ";
						$result4 = $conn->query($sql4);
						$row4 = mysqli_fetch_array($result4);
						$value4 = $row4['sum(penaltyPoint)'];
						
						$sql11 = "SELECT points FROM Users WHERE userID='$userID'";
						$result11 = $conn->query($sql11);
						$row11 = mysqli_fetch_array($result11);
						$value11 = $row11['points'];
						
						
						$sql6 = "SELECT sum(fine) FROM Crime NATURAL JOIN Record NATURAL JOIN ROVD WHERE LicensePlateNumber = '$Platenum' ";
						$result6 = $conn->query($sql6);
						$row6 = mysqli_fetch_array($result6);
						$value6 = $row6['sum(fine)'];
						
						$sql7 = "SELECT sum(fine) FROM Crime NATURAL JOIN Record NATURAL JOIN ROUB WHERE LicensePlateNumber = '$Platenum' ";
						$result7 = $conn->query($sql7);
						$row7 = mysqli_fetch_array($result7);
						$value7 = $row7['sum(fine)'];
						
						$fineTotal = $value6 + $value7;
						
						$sql8 = "SELECT amount FROM Have NATURAL JOIN Account WHERE userID='$userID' ";
						$result8 = $conn->query($sql8);
						$row8 = mysqli_fetch_array($result8);
						$value8 = $row8['amount'];
						
						if($value4 > $value11){
							echo "<font color=white size='3'>You must retake the driver's license first.</font><br>";
						}else{
							$sql5 = "UPDATE Users, Own SET Users.points = Users.points - '$value4' WHERE Users.userID=Own.userID AND Users.userID='$userID'";
							$result5 = $conn->query($sql5);
							if ($result5 == TRUE) {
								echo "<font color=white size='3'>You successfully minus your points.</font><br>";
							} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
							}
						}
						if($fineTotal > $value8){
							echo "<font color=white size='3'>You must recharge first.</font><br><br>";
						} else {
							$balance = $value8 - $fineTotal;
							$sql9 = "UPDATE Account, Have SET Account.amount='$balance' WHERE Account.accountID=Have.accountID AND userID='$userID'";
							$result9 = $conn->query($sql9);
							if ($result9 == TRUE) {
							echo "<font color=white size='3'>You successfully pay the fine.</font><br>";
							} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
							}
						}
						
						
						$sql = "SELECT courseURL, ROVD.fine, ROVD.penaltyPoint FROM Users natural join Own natural join Crime natural join Shoot natural join Camera  
						natural join Record NATURAL JOIN ROVD natural join Correspond natural join Course 
						where userID = '$userID' and LicensePlateNumber = '$Platenum' ";//对违规的行为的sql
						
						$sql2 = "SELECT courseURL, ROUB.fine FROM Users natural join Own natural join Crime natural join Shoot natural join Camera  
						natural join Record NATURAL JOIN ROUB  natural join Correspond natural join Course  
						where userID = '$userID' and LicensePlateNumber = '$Platenum' ";//对不文明行为的sql
						
						$result = $conn->query($sql);
						$result2 = $conn->query($sql2);
						
						echo "<font color='white' size='3'>Record of Violation Data</font>";
						echo "<table border='1' align='center' height='100' width='610' bordercolor='white'>
						<tr>
						<th><font color='white'>You should learn this</font></th>
						<th><font color='white'>Fine</font></th>
						<th><font color='white'>Penalty Point</font></th>
						</tr>";

						while($row = mysqli_fetch_array($result))
						{
						echo "<tr>";
						echo "<td><font color='white'>" . $row['courseURL'] . "</font></td>";
						echo "<td><font color='white'>" . $row['fine'] . "</font></td>";
						echo "<td><font color='white'>" . $row['penaltyPoint'] . "</font></td>";
						echo "</tr>";
						}
						echo "</table>";
						echo "<br>";
						echo "<font color='white' size='3'>Record of Uncivilized Behavior</font>";
						echo "<table border='1' align='center' height='100' width='610' bordercolor='white'>
						<tr>
						<th><font color='white'>You should learn this</font></th>
						<th><font color='white'>Fine</font></th>
						</tr>";
						
						while($row = mysqli_fetch_array($result2))
						{
						echo "<tr>";
						echo "<td><font color='white'>" . $row['courseURL'] . "</font></td>";
						echo "<td><font color='white'>" . $row['fine'] . "</font></td>";
						echo "</tr>";
						}
						echo "</table>";
						
						if($value4 <= $value11 && $fineTotal <= $value8){
							$sql3 = "DELETE FROM Crime where LicensePlateNumber = '$Platenum' ";
							$result3 = $conn->query($sql3);
							if ($result3 == TRUE) {
								echo "<font color=white size='3'>You successfully delete your records.</font><br>";
							} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
							}
						}
					}
						
					

					$conn->close();

					?>
					<br/>
				
					
				</div>
				<div class="col-md-3 footer-left">
					<h4>After deleting your records</h4>
				<?php

					$servername = "172.16.199.130";
					$username = "m730026048";
					$password = "m730026048";
					$dbname = "m730026048";

					$conn = new mysqli($servername, $username, $password, $dbname);
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
					

					if (isset($_POST["SUBMIT"]) && $_POST["SUBMIT"]=="delete"){//submission
						$Platenum = $_POST["Platenum"];
						$userID=$_POST["userID"];
						
						$sql_10 = "SELECT userID, userName, amount, points FROM Users natural join Have natural join Account natural join Own
						where userID = '$userID' and LicensePlateNumber = '$Platenum' ";
						
						
						$result_10 = $conn->query($sql_10);
						
						$row_10 = mysqli_fetch_array($result_10);
						echo "<font color='white' size='3'>Welcome user " .$row_10 ['userName']."</font><br>";
						echo "<font color='white' size='3'>Your points: " .$row_10 ['points']."</font><br>";
						echo "<font color='white' size='3'>Your amount: " .$row_10 ['amount']."</font><br>";
						
					}
					

					$conn->close();

					?>
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
