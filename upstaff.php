<?php

include("Connection.php");

echo $sid=$_GET['id'];
echo $name=$_GET['name'];
echo $lang=$_GET['lang'];
echo $mob=$_GET['mob'];
echo $address=$_GET['address'];
echo $image=$_GET['photoimg'];


$query="update staff set st_name='$name', st_lang='$lang',st_mob='$mob', st_address='$address',st_image='$image' where st_id='$sid'";
				  
				  	if(mysqli_query($conn,$query)){ 
						                
				 echo "<script>
                 alert('Records updated successfully');
                 window.location.href=('showstaff.php');
                </script>";
						
					}                 
else{					
						echo"error";
						
					}
?>