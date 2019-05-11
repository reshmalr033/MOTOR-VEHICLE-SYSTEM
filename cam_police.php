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
                                                
<script type="text/javascript" src="llqrcode.js"></script>
<script type="text/javascript" src="js/plusone.js"></script>
<script type="text/javascript" src="webqr.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24451557-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<style type="text/css">
body{
    width:100%;
    text-align:center;
}
img{
    border:0;
}
#main{
    margin: 15px auto;
    background:white;
    overflow: auto;
	width: 100%;
}
#header{
    background:white;
    margin-bottom:15px;
}
#mainbody{
    background: white;
    width:100%;
	display:none;
}
#footer{
    background:white;
}
#v{
    width:320px;
    height:240px;
}
#qr-canvas{
    display:none;
}
#qrfile{
    width:320px;
    height:240px;
}
#mp1{
    text-align:center;
    font-size:35px;
}
#imghelp{
    position:relative;
    left:0px;
    top:-160px;
    z-index:100;
    font:18px arial,sans-serif;
    background:#f0f0f0;
	margin-left:35px;
	margin-right:35px;
	padding-top:10px;
	padding-bottom:10px;
	border-radius:20px;
}
.selector{
    margin:0;
    padding:0;
    cursor:pointer;
    margin-bottom:-5px;
}
#outdiv
{
    width:320px;
    height:240px;
	border: solid;
	border-width: 3px 3px 3px 3px;
}
#result{
    border: solid;
	border-width: 1px 1px 1px 1px;
	padding:20px;
	width:70%;
}


</style>
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
    
    <h2 style="color: #00ACED;font: italic">CHECK VEHICLES</h2>
                   <br>
                   <br>
		        
                         
                         <?php


if(isset($_GET['report']))
{
mysql_query("select * from add_vehicle where vehicle_id='$_GET[code]'");
if(mysql_affected_rows()>0)
{
$_SESSION['vehicle_id']=$_GET['code'];

            header("location:vehicle_result.php");
}
else
{
 echo'Chect Vehicle Id';
}
}
?>
        <form method="post">
                            <table class="table table-bordered table-striped table-hover table-responsive">
                            <tr>
                                
                                <td><center>
                                    <img class="selector" id="qrimg" src="cam.png" onclick="setimg()"/>
                                <div id="outdiv">
                                </div></center>
                            <input type="text" name="rslt" id="result" onfocus="loadchk1()" />
                            </td>
                            </tr>
                           
                            <tr style="display: none;">
                                <td colspan="2"><center><input type="submit" name="sub" value="Find My REPORT" class="btn btn-success" /></center></td>
                            </tr>
                            <canvas id="qr-canvas" width="800" height="600"></canvas>
<script type="text/javascript">load();</script>
                            <script>
                                function loadchk1()
                                {
                                    var code=document.getElementById("result").value;
                                    window.location.href = "cam_police.php?report=1&code=" +code ;
                                }
                                </script>
                            
                            </table>
                        </form>
               </div>

	   </div>
           
           </div>
	  </div>  
		  
	
		
			

	   
	 <!--//typography-->

		<!--footer-->
			<?php
                        include 'footer.php';
                        ?>