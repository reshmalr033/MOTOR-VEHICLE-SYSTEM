<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<?php

include '../conection.php';
ob_start();
?>

<html>
<head>
<title>RTO OFFICE</title>
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

</head>
<body>
    <form method="post" enctype="multipart/form-data">
         
	<!--start-home-->
<div id="home" class="header">
		<div class="container">
	     <div class="header-top">
	        <div class="logo">
                    <a href="home_staff.php"><h1><span>RTO</span>OFFICE</h1></a>
				</div>
					<div class="h-right">
					  <div class="working-hours">
							<div class="working-hours-label">
							WORKING HOURS </div>
							<div class="working-hours-time">
							<span>
							24 HOURS </span>
							</div>
							<div class="working-hours-date">
							SUN TO SAT </div>
					     </div>
						<div class="working-hours phone-number">
                                                    <div class="icon-phone-1 phone-ico"><i class ="glyphicon glyphicon-user">
                                                        
                                                        </i></div><?php

session_start();
$a=$_SESSION['username'];
echo"<h3>$a</h3>";
?>
                                                    <?php
                            
                            $a=mysql_query("select * from staff_reg where username='$_SESSION[username]'");
                            
                            $i=0;
                            while($b=mysql_fetch_array($a))
                            {
                            
                            
                            ?>
                                                    
                                                    
                                                    <?php
                                                    
                                                    
                            }
                            ?>
							<div class="phone-text">
								<div class="phone-number-label">
								 </div>
								<div class="phone-number-number">
								
</div>
							 </div>
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
                                                            <li><a  href="home_staff.php" data-hover="HOME">Home</a></li> 
                                                                <li><a href="Toll_regestration.php" data-hover="Toll">Toll</a></li>
                                                                
                                                                
								
							</ul>
						</div>