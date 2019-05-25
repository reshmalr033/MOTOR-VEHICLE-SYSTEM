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
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <a href="home_user.php"><h1><span>RTO</span>OFFICE</h1></a>
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
                                                    <div class="icon-phone-1 phone-ico"><i class ="glyphicon glyphicon-user">
                                                        
                                                        </i></div><?php

session_start();
$a=$_SESSION['username'];
echo"<h3>$a</h3>";
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
                                            <?php
                    
                            $a=$_SESSION['username'];
                          
                            $vs="select account_no from staff_reg where username='$a'";
                            $vs1=mysql_query($vs);
                            if(mysql_affected_rows()>0)
                           { 
                            $vs2=mysql_result($vs1,0);
                            
                            
                                $qry="select amount from account_bank where account_no='$vs2'";
                                $qry1=mysql_query($qry);
                                $qry2=mysql_result($qry1,0);
 
                            
                            
                                
                                
                              
                                
                                if($qry2<2000)
                            { 
                                    echo '<font color="red"><b>Alert:Your Account balance is low</b></font>';
                            }
                            
 else {
     
 }
                           }
                                      
                            
                            
                                       

                          
                            
                               
                            
                    ?>
                                            <a href="logout.php" class="hvr-bounce-to-bottom m1">LOGOUT</a>
								</div>
					<span class="menu"></span>
				    <div class="top-menu">
								 
							<ul class="cl-effect-16">
                                                            <li><a  href="home_user.php" data-hover="HOME">Home</a></li> 
                                                            <li><a href="vehicle_regestration.php" data-hover="Vehicle Registration">Vehicle Registration</a></li>
                                                            <li><a href="s_map.php" data-hover="Search Tollboth">Search TollbOoth</a></li>
                                                            <li><a href="msg1.php" data-hover="Message">Message<sup> <span class="badge"style="color: black;background-color: lightcoral"><?php
                               $vlt="select vehicle_id from add_vehicle where driver_id='$a'";
                            $vlt1=mysql_query($vlt);
                            if(mysql_affected_rows()>0)
                           { 
                            $vlt2=mysql_result($vlt1,0);
                            
                                                            $or=mysql_query("select * from fine_vehicle where vehicle_id='$vlt2' and st='0'");
                                $ms= mysql_num_rows($or);
                                $ok=mysql_query("select * from add_toll where vehicle_id='$vlt2' and st='0'");
                                 $or=mysql_num_rows($ok);
                         $tot=$ms+$or;
                         echo $tot;
                           }
                           ?></span></sup></a></li>
                                                                
								
							</ul>
						</div>