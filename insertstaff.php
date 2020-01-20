<?php
include("Connection.php");
$name=$_GET['name'];
$lang=$_GET['lang'];
$mob=$_GET['mob'];
$address=$_GET['address'];
$image=$_GET['photoimg'];


$query="insert into staff(st_name,st_lang,st_mob,st_address,st_image) values('$name','$lang','$mob','$address','$image')";
      if(mysqli_query($conn,$query))
		         
			      
                                             
			                      
				
										{
												echo"<script>
												alert('Records Inserted Successfully');
												window.location.href=('addstaff.php');
                                                </script>";
												
			
										}
							else{echo "Error";}			
									
			 
		 
	?>

			 
	