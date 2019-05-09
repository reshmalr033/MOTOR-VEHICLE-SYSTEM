<?php
include 'menu_admin.php';
include '../conection.php';
ob_start();
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
    <h2 style="color: #00ACED;font: italic">ADD POLICE HERE</h2>
    <br/>
		     <?php
                    
                            
                            if(isset($_POST['b1']))
                                {
                                $a=mysql_query("select * from staff_reg where username='$_POST[t4]'");
	if(mysql_num_rows($a)>0)
	{
		echo"username already excits";
	}
	else
	{
                                
                            {
                                $b=mysql_query("select max(id) from add_vehicle");
$id=mysql_result($b,0);
$id++;
$p=$_FILES['p1']['name'];
$ext=strchr($p,'.');
$pname="$id$ext";
if(move_uploaded_file($_FILES['p1']['tmp_name'],getcwd()."\\img_RTO8\\$pname"))
{
                          
     mysql_query("insert into staff_reg(name,designation,contact,username,password,email,photo,type,status)values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$pname','police','1')");
    
    if(mysql_affected_rows()>0)
{
echo"Complete";
}
else 
{
echo mysql_error();
}
}
  if(isset($_GET['del']))
{
    $del=mysql_query("delete from staff_reg where id='".$_GET['del']."'");
    //echo mysql_error();
    if($del>0)
    {
       header("location:add_tollbooth.php");
}
}
                            

                            } 
        }
                                }
    ?>                                  

                          
<script type="text/javascript">
    
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
}
}
  
 function chkd(d2)
{
var t5=d2.length;
var ch2=/([0-9])$/;
if(ch2.test(d2)==false)
{
document.getElementById("p3").innerHTML="<font color='red'>*Only Numbers*</font>";
return false;
}
else if(t5!=12)
{
document.getElementById("p3").innerHTML="<font color='red'>*Please Check Your Aadhar Number*</font>";
return false;
}
else
{
  document.getElementById("p3").innerHTML="";  
}
}
  
    </script>
                            
                    
                   <table  class="table  table-responsive  table-striped table-bordered ">
                        <tr>
                            <td>NAME</td>
                            <td><input type="text"name="t1"class="form-control"required="required"></td>
                        </tr>
                        <tr>
                            <td>DESIGNATION</td>
                            <td><input type="text"name="t2"class="form-control"required="required"></td>
                        </tr>
                        
                        
                        <tr>
                            <td>CONTACT</td>
                            <td><input type="text"name="t3"class="form-control"required="required"onblur="chkc(this.value)" /><span id="o3"></span></td>
                        </tr>
                         <tr>
                            <td>PHOTO</td>
                            <td><input type="file"name="p1"class="form-control"required="required"></td>
                        </tr>
                        
                        
                        <tr>
                            <td>USERNAME</td>
                            <td><input type="text"name="t4"class="form-control"required="required"></td>
                        </tr>
                        <tr>
                            <td>PASSWORD</td>
                            <td><input type="password"name="t5"class="form-control"required="required"></td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td><input type="email"name="t6"class="form-control"required="required"></td>
                        </tr>
                        
                         <tr>
                            
                             <td colspan="2"align="center"><input type="submit"value="CREATE"name="b1"class="btn btn-success"></td>
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