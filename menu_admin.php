<?php

include '../conection.php';
ob_start();
?>
<html>
<head>
<title>Motor vehicle</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Roadster Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<!--webfonts-->
 <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Raleway:400,500' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>
     <form method="post" enctype="multipart/form-data">
          
	<!--start-home-->
<div id="home" class="header">
	 <div class="container">
	     <div class="header-top">
	        <div class="logo">
                    <a href="RTO_home.php"><h1><span>RTO</span>OFFICE</h1></a>
				</div>
					<div class="h-right">
					  <div class="working-hours">
							<div class="working-hours-label">
							WORKING HOURS </div>
							<div class="working-hours-time">
							<span>
							24 HOURS</span>
							</div>
							<div class="working-hours-date">
							SUN TO SAT </div>
					     </div>
						<div class="working-hours phone-number">
						<div class="icon-phone-1 phone-ico"><i class ="glyphicon glyphicon-earphone"></i></div>
							<div class="phone-text">
								<div class="phone-number-label">
								CALL US </div>
								<div class="phone-number-number">
								224 5577 800 </div>
							 </div>
                                        <?php

session_start();
$a=$_SESSION['username'];

?>
							 <div class="clearfix"> </div>
						 </div>
						 <div class="clearfix"> </div>
					</div>
				 <div class="clearfix"> </div>
							<div class="quate">
                                                            <a href="logout.php" class="hvr-bounce-to-bottom m1">LOGOUT</a>
								</div>
					<span class="menu"></span>
				    <div class="top-menu">
								 
							<ul class="cl-effect-16">
                                                            <li><a href="RTO_home.php" data-hover="HOME">Home</a></li> 
                                                                <li><a href="add_tollbooth.php" data-hover="Add TollBooth">Add TollBooth</a></li>
                                                                <li><a href="data.php" data-hover="Rule Survey">Rule Survey</a></li>
                                                                <li><a href="data1.php" data-hover="Toll Survey">Toll Survey</a></li>
                                                                <li><a href="toll_check.php" data-hover="TollBooth Activity">TollBooth Activity</a></li>
                                                                <li><a href="add_police.php" data-hover="Add Police Patrol">Add Police Patrol</a></li>
                                                                <li><a href="add_fine.php" data-hover="Add Fine">Add Fine</a></li>
								
							</ul>
						</div>
							<!--script-for-menu-->
							<script>
							$( "span.menu" ).click(function() {
							  $( ".top-menu" ).slideToggle( "slow", function() {
								// Animation complete.
							  });
							});
						</script>