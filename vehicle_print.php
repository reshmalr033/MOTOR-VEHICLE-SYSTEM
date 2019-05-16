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
<?php

include '../conection.php';
ob_start();
?>

    <?php

session_start();
$a=$_SESSION['username'];

?>

    <div class="">
	       
<div class="col-lg-7">
    
		 
		   
    <table  class="table  table-responsive  table-striped table-bordered "height="300"border="1" style="width: 440px;border-color: #000000">
         <?php
                           
                            $a=mysql_query("select * from add_vehicle where id=".$_GET['bid']);
                            
                            $i=0;
                            while($b=mysql_fetch_array($a))
                            {
                            
                            
                            ?>
        
        <tr>
            <td colspan="2"><span><img style="width: 440px;height: 60px" src="img1/dmv_v4_header_02.gif"></span></td>
        </tr>
        <tr>
            <td align="center"><a href="img_RTO//<?php echo $b['photo']?>"target="_blank"/><img src="img_RTO//<?php echo $b['photo']?>" style="width: 140px;height: 120px;" class="img img-responsive" /></a></td>
            <td colspan="2"><b>Vehicle Class:</b> <?php echo $b['vehicle_type']?><br/>
                <b>Vehicle Name:</b> <?php echo $b['vehicle_name']?><br/>
                <br/>
            <b>Vehicle color:</b> <?php echo $b['vehicle_color']?><br/>
            <b>Vehicle Id:</b> <?php echo $b['vehicle_id']?>
            </td>
            
        </tr>
       
         <tr >
             <td><b>Engine No:</b>
<br/> <?php echo $b['engine_no']?><br/>
             <b>Number Plate:</b><br/> <?php echo $b['number_plate']?>
             </td>
             
             <td align="center"><iframe src="amr\qrcode.php?id=<?php echo $b['vehicle_id']?>" style='border:none; width: 90px; height: 90px;'></iframe></td>
            
        </tr>
        <tr>
            
            
            
            
        </tr>
        </table> 
                 
        <?php
                            }
                            ?>
     
                 
	
		
			

	   </div>
	  </div>
    
    
    
    
    
    
        </form>
    </body>  
</html>
<script>
    window.print();
    </script>