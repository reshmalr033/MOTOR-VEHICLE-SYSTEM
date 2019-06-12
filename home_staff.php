<?php
include 'menu_staff.php';
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
							<!--script-for-menu-->
							<script>
							$( "span.menu" ).click(function() {
							  $( ".top-menu" ).slideToggle( "slow", function() {
								// Animation complete.
							  });
							});
						</script>
				<!-- start-search-->
			<div class="clearfix"> </div>
        </div>
			 	<div class="banner">
						<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								   
								</div>
							</li>
							<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								  
								  
								</div>	
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								   
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								  
								</div>	
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								  
								</div>	
							</li>
						</ul>
						</div>
						<!--banner-Slider-->
						<script src="js/responsiveslides.min.js"></script>
						 

			</div>
		</div>
	</div>
	<!--start-banner-bottom-->
	<!-- welcome-bottom -->
	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				<h3 class="tittle">Special Services</h3>
				<div class="welcome-bottom-grids">
					<div class="welcome-bottom-grid-left">
						<div class="welcome-bottom-grid-left-g">
							<img src="images/7.jpg" alt=" " class="img-responsive" />
							<div class="welcome-bottom-grid-left-gpos">
								<h4>Pellentesque mollis</h4>
								<p>Nulla et finibus libero. Suspendisse vitae ex facilisis, ultricies est sed, porta ante. Vivamus tristique luctus lorem, eget dignissim lacus sodales tristique.</p>
								<div class="more">
									<a href="#" class="hvr-bounce-to-bottom m1">More Info...</a>
								</div>
							</div>
						</div>
						<div class="welcome-bottom-grid-left-g">
							<img src="images/8.jpg" alt=" " class="img-responsive" />
							<div class="welcome-bottom-grid-left-gpos1">
								<h4>Pellentesque mollis</h4>
								<p>Nulla et finibus libero. Suspendisse vitae ex facilisis, ultricies est sed, porta ante. Vivamus tristique luctus lorem, eget dignissim lacus sodales tristique.</p>
								<div class="more">
									<a href="#" class="hvr-bounce-to-bottom m1">More Info...</a>
								</div>
							</div>
						</div>
						<div class="car-text">
							<h5>Importance of traffic signs in daily life</h5>
							<p>The importance of traffic signs and road rules cannot be ignored in one’s life and it should be given paramount importance. Any driver who is driving a vehicle on the road should be aware of all the traffic signs and rules. The government has already made it mandatory for any person who wishes to obtain a driving license in India for the different traffic signs and rules. </p>
						
						</div>
					</div>
					<div class="welcome-bottom-grid-right">
						<div class="car-text">
						<h5>Toll booth</h5>
							<p>A toll road, also known as a turnpike or tollway, is a public or private road (almost always a controlled-access highway in the present day) for which a fee (or toll) is assessed for passage. It is a form of road pricing typically implemented to help recoup the cost of road construction and maintenance. </p>
							
						</div>
						<div class="welcome-bottom-grid-left-g">
							<img src="images/9.jpg" alt=" " class="img-responsive" />
							<div class="welcome-bottom-grid-left-gpos">
								<h4>Pellentesque mollis</h4>
								<p>Nulla et finibus libero. Suspendisse vitae ex facilisis, ultricies est sed, porta ante. Vivamus tristique luctus lorem, eget dignissim lacus sodales tristique.</p>
								<div class="more">
									<a href="#" class="hvr-bounce-to-bottom m1">More Info...</a>
								</div>
							</div>
						</div>
						<div class="welcome-bottom-grid-left-g">
							<img src="images/10.jpg" alt=" " class="img-responsive" />
							<div class="welcome-bottom-grid-left-gpos1">
								<h4>Pellentesque mollis</h4>
								<p>Nulla et finibus libero. Suspendisse vitae ex facilisis, ultricies est sed, porta ante. Vivamus tristique luctus lorem, eget dignissim lacus sodales tristique.</p>
								<div class="more">
									<a href="#" class="hvr-bounce-to-bottom m1">More Info...</a>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //welcome-bottom -->

<!--start-video-->
    
		<!--//news-->
	<div class="car-bottom">
		  <div class="container">
			  
				</div>
					<div class="clearfix"></div>
		  </div>
		</div>

		<!--footer-->
			<?php
                        include 'footer.php';
                        ?>