<html>
<head>
<title>Registration</title>
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
							</div>
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
				
					<h4>Registration</h4>
					
					<form method="post">
							<input type="text" style="width: 300px" name="nameValue"  value="Name" placeholder="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">	
							
							<input type="text" style="width: 300px" name="userID" value="Identity number" placeholder="Identity number" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Identity number';}">				
							<font size="2" color="white">Your identity number should contain 10 digits</font>
							<input type="text" style="width: 300px" name="accountID" value="Account ID" placeholder="Account ID" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Account ID';}">				
							<font size="2" color="white">Your account ID should contain 6 digits</font>
							<input type="text" style="width: 300px" name="plateNum" value="Your license plate number" placeholder="Your license plate number" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Your license plate number';}">
							<select name="carType" style="width: 300px">
							<option value="carTypeDefault" style="background-color:#002E3F">---Select your car type---</option>
							<option value="saloon car" style="background-color:#002E3F">saloon car</option>
							<option value="coach" style="background-color:#002E3F">coach</option>
							<option value="off-road vehicle" style="background-color:#002E3F">off-road vehicle</option>
							<option value="semi-trailer" style="background-color:#002E3F">semi-trailer</option>
							<option value="autodumper" style="background-color:#002E3F">autodumper</option>
							<option value="truck" style="background-color:#002E3F">truck</option>
							<option value="motor tractor" style="background-color:#002E3F">motor tractor</option>
							</select>
							<br>
							<input type="submit" name="SUBMIT" value="SUBMIT">
					</form>
						<div class="ft-lt">
						</div>
					
						<div class="ft-rgt">
						</div>
					
					
				</div>
				<div class="col-md-3 footer-left">
					<h4>Functions</h4>
						<address>
							Please Enter<br>
							NAME,<br>
							IDENTITY NUMBER,<br>
							ACCOUNT ID,<br>
							LICENSE PALTE NUMBER,<br>
							CAR TYPE<br>
							To Create a New Account<br>
						</address>
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
<div class="adminout">
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

if (isset($_POST["SUBMIT"]) && $_POST["SUBMIT"]=="SUBMIT"){//提交
	$userID=$_POST["userID"];
	$nameValue=$_POST["nameValue"];
	$plateNum=$_POST["plateNum"];
	$carType=$_POST["carType"];
	$accountID=$_POST["accountID"];
	
	if(!preg_match("/^\d{10}$/",$userID)){
		echo "<font color=white>Identity number format error.<br></font>";
	}else if(!preg_match("/^\d{6}$/",$accountID)){
		echo "<font color=white>Account ID format error.<br></font>";
	}else{
		
	$sql_1 = "select * from Users where userID = '$userID' ";
	//to check the identity number if it is exist in the data base
	$result1 = $conn->query($sql_1);
	if ($result1 -> num_rows > 0){
	echo "<font color=white>The ID already exists. If you want to regist a new account, please check.<br></font>";
	}
	
	$sql_6 = "select * from Account where accountID = '$accountID' ";
	//to check the accountID if it is exist in the data base
	$result6 = $conn->query($sql_6);
	if ($result6 -> num_rows > 0){
	echo "<font color=white>The account ID already exists, please try another one.<br></font>";
	}
	
	$sql_2 = "select * from Car where LicensePlateNumber = '$plateNum' ";
	//to check the license plate number if it is exist in the data base
	$result2 = $conn->query($sql_2);
	if ($result2 -> num_rows > 0){
	echo "<font color=white>The license plate number already exists, please check.<br></font>";
	}
	
	$sql_3 = "INSERT INTO Users (userID,userName,points) VALUES ('$userID','$nameValue',12);";//默认分数为12分
	$result3 = $conn->query($sql_3);
	if ($result3 == TRUE) {
	echo "<font color=white>You successfully regist and you can login now.</font><br>";
	} 
	$sql_4 = "INSERT INTO Car (LicensePlateNumber,Type) VALUES ('$plateNum','$carType');";
	$result4 = $conn->query($sql_4);
	if ($result4 == TRUE) {
	echo "<font color=white>You successfully add your plate number in your ID account.</font><br>";
	} /*else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}*/
	$sql_5 = "INSERT INTO Own (LicensePlateNumber,type,userID) VALUES ('$plateNum','$carType','$userID');";
	$result5 = $conn->query($sql_5);
	
	
	$sql_7 = "INSERT INTO Account (accountID,amount) VALUES ('$accountID',0);";
	$result7 = $conn->query($sql_7);
	
	$sql_8 = "INSERT INTO Have (accountID,userID) VALUES ('$accountID','$userID');";
	$result8 = $conn->query($sql_8);
	}
	

	}
	
	
$conn->close();

?>

</div>
</html>
