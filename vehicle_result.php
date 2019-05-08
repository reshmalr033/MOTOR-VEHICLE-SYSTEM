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
                   <h2 class="second">Please Obey Traffic Rules</h2>
			   </div>
		</div>
		</div>
   <!--//banner-->
   <!--/typography-->
      <div class="typography">
	   <div class="container">
	       

<div class="col-lg-7">
    

   
    
		 <h2 style="color: #00ACED;font: italic"> VEHICLE DETAILS</h2>
                 <br/>
		   
   <table  class="table  table-responsive  table-striped table-bordered ">
         <?php
                           
         
         
         
         
         
         
                            $a=mysql_query("select * from add_vehicle where vehicle_id='$_SESSION[vehicle_id]'");
                            
                            $i=0;
                            while($b=mysql_fetch_array($a))
                            {
                            
                            
                            ?>
        
        
        <tr>
            <td align="center" width="30%"><a href="img_RTO//<?php echo $b['photo']?>"target="_blank"/><img src="img_RTO//<?php echo $b['photo']?>" style="width: 250px; height:170px;"class="img img-responsive" /></a></td>
            <td colspan="2"><b>Vehicle Class:</b> <?php echo $b['vehicle_type']?><br/><br/>
                <b>Vehicle Name:</b> <?php echo $b['vehicle_name']?><br/><br/>
                
            <b>Vehicle color:</b> <?php echo $b['vehicle_color']?><br/><br/>
            <b>Vehicle Id:</b> <?php echo $b['vehicle_id']?>
            </td>
            
        </tr>
       
         <tr >
             <td><b>Engine No:</b> <?php echo strtoupper($b['engine_no'])?></td>
             <td colspan="2"><b>Number Plate:</b> <?php echo strtoupper($b['number_plate'])?></td>
         <tr>
             <td colspan="3"><b>RC Book:</b><br/> <img src="img_RTO5/<?php echo $b['rc_book']?>" width="600"height="400">  </td>
         </tr>
        </tr>
        <tr>
            <td colspan="3"><b>License:</b><br/>  <img src="img_RTO2/<?php echo $b['licence']?>"width="600"height="300" ></td>
            </tr>
            <tr>
                <td colspan="3"><center><a target="_blank" href="line_view.php?lid=<?php echo $b['id']?>"><b>Other Licence:</b> <span class="glyphicon glyphicon-picture"style="color: lightgreen"></span></a></center></td>
            </tr>
            <tr>
                <td colspan="3"><b>Pollution:</b> <br/>    <img src="img_RTO3/<?php echo $b['pollution']?>"width="600"height="500"></td>
            </tr>
            <tr>
                <td colspan="3"><b>Insurance:</b> <br/> <img src="img_RTO4/<?php echo $b['insurance']?>" width="600"height="900"></td>
            
        </tr>
        
        
        <?php
                            }
                            ?>
    </table>  
	
		
			

	   </div>
               <div class="col-lg-5">
                   <h2 style="color: #00ACED;font: italic"> VEHICLE FINE</h2>
                   <table class="table table-responsive"style="background: #E5E5E5">
        <?php
                        
                            if(isset($_POST['b1']))
                            {
                                $date=date('Y-m-d');
                                $a=mysql_query("select * from fine_vehicle where date='$date'and vehicle_id='$_SESSION[vehicle_id]' and rule='$_POST[t1]'");
	if(mysql_num_rows($a)>0)
	{
		echo"<font color='red'>Vehicle Already Paid Fine</font>";
	}
	else
	{
  
                                $vs="select amount from fine where rule='$_POST[t1]'";
                            $vs1=mysql_query($vs);
                            if(mysql_affected_rows()>0)
                           { 
                            $vs2=mysql_result($vs1,0);
                            
                           
                            
                            $vt="select driver_id from add_vehicle where vehicle_id='$_SESSION[vehicle_id]'";
                            $vt1=mysql_query($vt);
                            $vt2=mysql_result($vt1,0);
                            
                            $dd="select account_no from staff_reg where username='$vt2'";
                            $dd1=mysql_query($dd);
                            $dd2=mysql_result($dd1,0);
                            
                            
                            
                            
                                $qry="select amount from account_bank where account_no='$dd2'";
                                $qry1=mysql_query($qry);
                                $qry2=mysql_result($qry1,0);
                                
                                $tot=$qry2-$vs2;
                                if($vs2>$qry2)
                            { 
                                    echo 'Low Account Balance';
                            }
 else {
     
                                
                              $upd=mysql_query("update account_bank set amount= '$tot'where account_no='$dd2'");
                           if(mysql_affected_rows()>0)
                           { 
                                
                            
                                
                                 mysql_query("insert into fine_vehicle(vehicle_id,rule,amount,date,st)values('$_SESSION[vehicle_id]','$_POST[t1]','$vs2','$date','0')");
                                
                           
                                if(mysql_affected_rows()>0)
{
echo"Complete";
}         
}
else 
{
echo mysql_error();
}
}
                           }
                            }
                            }  

                            
    ?>

                   </table>
<h2 style="color: #00ACED;font: italic"> PREVIOUS FINE</h2>
<table class="table table-responsive"style="background: #E5E5E5">
        <tr>
            <td>Rule</td>
            <td>
                         <select name="t1"class="form-control">
                        <option value="-- Select State --">-- Select Category --</option>
                         <?php
                              
                         session_start();
                         $c=mysql_query("select * from fine");
                         while($d=mysql_fetch_array($c))
                         {
                         ?>
                         <option><?php echo $d['rule'];?></option>
                          <?php
                         }
                         ?>
                         </select>
                         </td>
        </tr>
       
        <tr>
            <td></td>
            <td><input type="submit"value="Add"name="b1"class="btn btn-success"></td>
        </tr>
        
        
    </table>
                   
                   
                   <table  class="table  table-responsive  table-striped table-bordered ">
                        
                       <tr>
        
        <th>Rule violated</th>
        <th>Fine Paid</th>
        <th>Date</th>
       
        
        
    </tr>
     
                            
     <?php
                            
                            $a=mysql_query("select * from fine_vehicle  where vehicle_id='$_SESSION[vehicle_id]' order by id desc");
                            
                            $i=0;
                            while($b=  mysql_fetch_row($a))
                            {
                            
                            
                            ?>
   
    <tr>
       
        <td><?php echo $b['2']?></td>
        <td><?php echo $b['3']?> Rs/-</td>
        <td><?php echo $b['4']?></td>
        
        
        
       <?php
    $i++;
    }
    ?>
    </tr>
      
</table>
                   <br/>
                   
    
               </div>
	  </div>
	 <!--//typography-->

		<!--footer-->
			<?php
                        include 'footer.php';
                        ?>