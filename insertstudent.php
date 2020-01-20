<?php
include("Connection.php");

$name=$_POST['name'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['option'];
$course=$_POST['course'];
$address=$_POST['address'];



$query="insert into new_student(s_name,s_mobno,s_email,s_dob,s_gender,s_course,s_address) values('$name','$mob','$email','$dob','$gender','$course','$address')";
      if(mysqli_query($conn,$query))
		         {
			      
												echo"<script>
												alert('Records Inserted Successfully');
												window.location.href=('newstudent.php');
                                                </script>";
												
												                    		
 			
										}

		   else{
			 echo "Error";
		 }
	?>

			 
	