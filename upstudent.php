<?php

include("Connection.php");
//echo "record update";
echo$id=$_GET['id'];
echo$name=$_GET['a1'];
echo$mobno=$_GET['a2'];
echo$email=$_GET['a4'];
echo$dob=$_GET['a5'];
echo$gender=$_GET['a6'];
echo$course=$_GET['a7'];
echo$address=$_GET['a8'];
echo$rollno=$_GET['a3'];

$query="update new_student set s_name='$name',s_mobno='$mobno',s_email='$email',s_dob='$dob',s_gender='$gender',s_course='$course',s_address='$address'
                  where s_id='$id'";
				  
				  	if(mysqli_query($conn,$query)){ 
						                
						 echo "<script>
                 alert('Records updated successfully');
                 window.location.href=('showstudent.php');
                </script>";  
						
					}                 
else{					
						echo"error";
						
					}











?>