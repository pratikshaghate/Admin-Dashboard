<?php

include("Connection.php");

$id=$_GET['id'];
$name=$_GET['name'];
$duration=$_GET['duration'];
$batch=$_GET['batch'];
$fees=$_GET['fees'];
$date=$_GET['date'];



$query="update add_course set c_name='$name', c_duration='$duration',c_batch='$batch', c_date='$date',c_fees='$fees' where c_id='$id'";
				  
				  	if(mysqli_query($conn,$query)){ 
						                
				 echo "<script>
                 alert('Records updated successfully');
                 window.location.href=('showcourse.php');
                </script>";
						
					}                 
else{					
						echo"error";
						
					}
?>