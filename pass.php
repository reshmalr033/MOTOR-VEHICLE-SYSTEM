<?php
include 'index_menu.php';
?>
<?php
if(isset($_POST['b1']))
{
    $em=$_POST['t1'];
    
$log=mysql_query("select * from staff_reg where email='$em'");
if(mysql_num_rows($log)>0)
{
    $r1=  mysql_fetch_row($log);
    $em1=$r1[12];
    $pas=$r1[13];
    
    
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
$mail->SetFrom('web@trinitytechnology.in', "RTO Office"); 
$mail->Subject    = "Password Recovery";
$mail->MsgHTML($body);
$address = "$em";
$mail->AddAddress($address, "RTO Office");

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

				<!-- start-search-->
			<div class="clearfix"> </div>
        </div>

		   <!--banner-->
			 	<div class="banner two">
                   <h2 class="second"></h2>
			   </div>
		</div>
		</div>
   <!--//banner-->
   <!--/typography-->
      <div class="typography">
	   <div class="container">
	 
   <div class="col-lg-3"></div>
<div class="col-lg-6">
    <h2 style="color: #eea236;font: italic">PASSWORD RECOVERY</h2>
                         
 <table  class="table  table-responsive  table-striped table-bordered ">
        
     
                            
        <tr>
            <td>EMAIL</td>
            <td><input type="text"name="t1"class="form-control"required=""></td>
        </tr>
        
        
        
        <tr>
            
            <td colspan="2" align="center"><input type="submit"value="SEND EMAIL"name="b1"class="btn btn-success"></td>
            
        </tr>
        
        
    </table>
    
 
     
				
		 </div>
    
</div>
  
         

	   </div>
	  </div>
	 <!--//typography-->

		<!--footer-->
			<div class="footer">
				<div class="container">
					 <div class="footer-inner">
					    <div class="col-md-3 footer-grid">
					       <h3 class="widget-title">Locate Us</h3>
						   <p> <i class="glyphicon glyphicon-map-marker"></i> PO Box Collins Street<br>
							Fort Cochin 683101<br>
							Ernakulam</span></p>
							<p class="phone"><i class="glyphicon glyphicon-earphone"></i> 0484 4869001</p>
							<p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:info@example.com"> mail1@mvd.com</a></p>
			              </div>
					   <div class="col-md-3 footer-grid second">
					      <h3 class="widget-title">Customer Services</h3>
						      <ul class="menu-customer-service">
						        <li><a href="#">Toll Free 1800-4000-3000 Delhi</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Policies</a></li>
								<li><a href="#">Online Returns</a></li>
								
							  </ul>
			           </div>
					    <div class="col-md-3 footer-grid">
					       <h3 class="widget-title">Customer Information</h3>
						      <ul class="menu-customer-service">
						        <li><a href="#">Toll Free 1800-4000-3000 Delhi</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Policies</a></li>
								<li><a href="#">Online Returns</a></li>
								
							  </ul>
			           </div>
					  <div class="col-md-3 footer-grid lost">
					       <h3 class="widget-title">Get in touch!</h3>
						        <p>PO Box Collins Street<i class="glyphicon glyphicon-map-marker"></i> <br>
								Fort Cochin 683101<br>
								Ernakulam</span></p>
								<p class="phone">0123-456-798 <i class="glyphicon glyphicon-earphone"></i></p>
								<p><a href="mailto:info@example.com">mail@mvd33.com</a> <i class="glyphicon glyphicon-envelope"></i></p>
			            </div>
					   <div class="clearfix"></div>
			         </div>
			    </div>
			</div>
			<div class="copy">
		              
		            </div>
			<!--start-smooth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

     </form>
</body>
</html>