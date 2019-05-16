<?php
include './connection.php';


if(isset($_POST['b1']))
{
    $em=$_POST['t1'];
    
$log=mysqli_query($dbcon,"select * from login_tbl where login_email='$em'");
if(mysqli_num_rows($log)>0)
{
    $r1=  mysqli_fetch_row($log);
    $em1=$r1[1];
    $pas=$r1[2];
    
    
date_default_timezone_set('America/Toronto');
require_once('class.phpmailer.php');
$mail             = new PHPMailer();
$body             = "Your Username is <b>$em1</b> and Password is <b>$pas</b>";
$mail->IsSMTP(); 
$mail->SMTPDebug  =1;                    
$mail->SMTPAuth   = true;                 
$mail->CharSet="UTF-8";
//$mail->SMTPSecure = "tls";                 
$mail->Host       = "mail.trinitytechnology.in"; 
$mail->Port       = 25;
$mail->Username   = "web@trinitytechnology.in";  
$mail->Password   = "abc123!@#";          
$mail->SetFrom('web@trinitytechnology.in', "Disaster Managment"); 
$mail->Subject    = "Password Recovery";
$mail->MsgHTML($body);
$address = "$em";
$mail->AddAddress($address, "Disaster Managment");

if($mail->Send()) {
    echo"success";
}


}
else
{
    echo"invalid Email";
}
    

}
?>

<html lang="zxx">

<head>
    <title>Disaster Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Stock Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- //webfonts -->
    
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <!-- nav -->
            <nav class="navbar navbar-expand-lg navbar-light py-4">
                <!-- logo -->
                <h1>
                    <a class="navbar-brand" href="index.html">
                        Disaster Handling
                    </a>
                </h1>
                <!-- //logo -->
               
                <!-- main nav -->
                <?php
                                
                                
                                include 'menu.php';
                                ?>
                <!-- //main nav -->
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->
    <!-- inner banner -->
    <div class="inner_banner layer" id="home">
        <div class="container">
            <div class="agileinfo-inner">
                <h3 class="text-center text-white">
                    Disaster management
                </h3>
            </div>
        </div>
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Password Recovery</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- title description-->
    <div class="container py-sm-5 py-3">
        <div class="row ">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="modal-body">
					<form method="post">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Emailid</label>
                                                        <input type="email"  class="form-control border" placeholder="Enter your emailid" name="t1" id="recipient-name" required="">
						</div>
						
						<div class="right-w3l">
                                                    <input type="submit" class="form-control border text-white" value="Send Password" name="b1">
						</div>
						<div class="row sub-w3l my-3">
							<div class="col sub-agile">
								<input type="checkbox" id="brand1" value="">
								<label for="brand1" class="text-muted">
									<span></span>Remember me?</label>
							</div>
							<div class="col forgot-w3l text-right text-dark">
								<a href="#" class="text-white">Forgot Password?</a>
							</div>
						</div>
						<p class="text-center">Check Your Email?
                                                    <a target="_blank" href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"class="text-dark font-weight-bold">
								Click Here</a>
						</p>
					</form>
				</div>
                
            </div>
            
        </div>
    </div>
    <!-- //title description -->
    <!-- Services section -->
    
    <!-- /Services section -->
    <!-- footer top -->
    
    <!-- footer top -->
    <!-- footer -->
    <footer class="py-sm-5">
        <div class="container">
            <div class="row py-5">
                <!-- footer grid1 -->
               
                <!-- //footer grid1 -->
                <!-- footer grid2 -->
               
                <!-- //footer grid2 -->
                <!-- footer grid3 -->
                
                <!-- //footer grid3 -->
                <!-- footer grid4  -->
               
                <!-- //footer grid4 -->
            </div>
            <div class="cpy-right text-center  pt-5 pb-sm-0 pb-3">
                <p class="text-secondary">© 2018 Disaster. All rights reserved | Design by
                     Trinity Technologies
                </p>
            </div>
        </div>
        <!-- //footer container -->
    </footer>
    <!-- //footer -->
    <!-- Login modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Emailid</label>
                                                        <input type="email"  class="form-control border" placeholder="Enter your emailid" name="em" id="recipient-name" required="">
						</div>
						<div class="form-group">
							<label for="password" class="col-form-label">Password</label>
							<input type="password" class="form-control border" placeholder="Enter your password " name="ps" id="password" required="">
						</div>
						<div class="right-w3l">
                                                    <input type="submit" class="form-control border text-white" value="Login" name="sub">
						</div>
						<div class="row sub-w3l my-3">
							<div class="col sub-agile">
								<input type="checkbox" id="brand1" value="">
								<label for="brand1" class="text-muted">
									<span></span>Remember me?</label>
							</div>
							<div class="col forgot-w3l text-right text-dark">
								<a href="#" class="text-white">Forgot Password?</a>
							</div>
						</div>
						<p class="text-center">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark font-weight-bold">
								Register Now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
    <!-- //Login modal -->
    <!-- Register modal -->
    
    <!-- // Register modal -->
    <!-- subscribe form -->
    
    <!-- //subscribe form -->
    <!-- js-->
   
</body>

</html>