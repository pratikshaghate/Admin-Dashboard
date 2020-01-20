<?php
include("Connection.php");
$name=$_GET['name'];
$duration=$_GET['duration'];
$batch=$_GET['time'];
$date=$_GET['date'];
$fees=$_GET['fees'];


$query="insert into add_course(c_name,c_duration,c_batch,c_date,c_fees) values('$name','$duration','$batch','$date','$fees')";
      if(mysqli_query($conn,$query))
		         
			      
                                             
			                      
				
										{
												echo"<script>
												alert('Records Inserted Successfully');
												window.location.href=('addcourse.php');
                                                </script>";
												
			
										}
							else{echo "Error";}			
									
			 
		 
	?>

			 
	