
<?php
include 'menu_user.php';
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
                   <h2 class="second">Registration</h2>
			   </div>
		</div>
		</div>
   <!--//banner-->
   <!--/typography-->
      <div class="typography">
	   <div class="container">
	       
<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h2 style="color: #00ACED;font: italic">Register Here</h2>
    <br/>
		     
                    <table  class="table  table-responsive  table-striped table-bordered ">
                        <?php
                    
                            
                            if(isset($_POST['b1']))
                                
                            {
                                $foldr=$_GET['foldr'];
                                $type=$_GET['fld'];
                                
                                
                                
                                
                                
                                $b=mysql_query("select max(id) from add_vehicle");
$id=mysql_result($b,0);
$id++;
$p=$_FILES['p1']['name'];
$ext=strchr($p,'.');
$pname="$id$ext";
if(move_uploaded_file($_FILES['p1']['tmp_name'],getcwd()."\\$foldr\\$pname"))
{
 $up=mysql_query("update add_vehicle set $type='$pname' where id='".$_GET['bid']."'");
    if($up>0)
    {
        header("location:vehicle_detail.php?bid=".$_GET['bid']);
    }   
 else 
        
 {
  echo'error' ;  
 }
}
}
?>
                        <tr>
                            <td>Add File</td>
                            <td><input type="file"name="p1"class="form-control"required="required"></td>
                        </tr>
                        
                        
                         <tr>
                            
                             <td colspan="2"align="center"><input type="submit"value="Register"name="b1"class="btn btn-success"></td>
                        </tr>
                    </table>
                    
                   
                   
	      </div>
		 
		   
		  
	
		
			

	   </div>
	  </div>
	 <!--//typography-->

		<!--footer-->
			<?php
                        include 'footer.php';
                        ?>