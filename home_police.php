<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/

    <?php
include 'menu_police.php';
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
	<div class="col-lg-12">      
<div class="col-lg-3"></div>
<div class="col-lg-7">
    
    <h2 style="color: #00ACED;font: italic">CHECK VEHICLE DETAILS</h2>
                   <br>
                   <br>
		     <table  class="table  table-responsive  table-striped table-bordered ">
                         
                         
                         <?php


if(isset($_POST['b1']))
{
mysql_query("select * from add_vehicle where vehicle_id='$_POST[t1]'");
if(mysql_affected_rows()>0)
{
$_SESSION['vehicle_id']=$_POST['t1'];

            header("location:vehicle_result.php");
}
else
{
 echo'CHECK VEHICLE ID';
}
}
?>
        <tr>
            <td>VEHICLE ID</td>
            <td><input type="text"class="form-control"name="t1"required=""</td>
        </tr>
        <tr>
                           
                             <td colspan="2"align="center"><input type="submit"value="CHECK VEHICLE"name="b1"class="btn btn-success"></td>
                        </tr>
        
    </table>
               </div>

	   </div>
           
           </div>
	  </div>  
		  
	
		
			

	   
	 <!--//typography-->

		<!--footer-->
			<?php
                        include 'footer.php';
                        ?>