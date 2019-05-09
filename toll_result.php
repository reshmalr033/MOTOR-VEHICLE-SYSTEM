<?php
include 'menu_admin.php';
include '../conection.php';
ob_start();
?>
<?php

$a=$_SESSION['username'];


if(isset($_SESSION['username']))
{
    
}
 else {
    header("location:index.php");    
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
               	  
<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h2 style="color: #00ACED;font: italic"> TOLLBOOTH ACTIVITY</h2>
    <br/>
	<table  class="table  table-responsive  table-striped table-bordered ">
                        
                       <tr>
        
        <th>TOLL NAME</th>
        <th>ADDRESS</th>
        <th>VEHICLE ID</th>
        <th>VEHICLE CLASS</th>
        <th>AMOUNT</th>
       
        <th>TIME</th>
        
        
        
    </tr>
     
                            
     <?php
                            
                            
                             $a=mysql_query("select * from add_toll where toll_id='$_SESSION[toll_id]' and date='$_SESSION[date]'");
                            
                            $i=0;
                            while($b=mysql_fetch_array($a))
                            {
                            
                            
                            ?>
   
    <tr>
       
        <td><?php echo $b['toll_name']?></td>
        <td><?php echo $b['toll_address']?></td>
        <td><?php echo $b['vehicle_id']?></td>
        <td><?php echo $b['vehicle_class']?></td>
        <td><?php echo $b['amount']?> Rs/-</td>
        <td><?php echo $b['time']?></td>
        
        
       <?php
    $i++;
    }
    ?>
    </tr>
      
</table>
                    
                   
                   
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