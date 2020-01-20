
<?php
include("Connection.php");
$id=$_GET['id']."<br>";
$query="delete from new_student where s_id='$id'";
if(mysqli_query($conn,$query)){
	                    		
  echo "<script>
                 alert('Records deleted successfully');          
                 window.location.href=('showstudent.php');
                </script>";  		

				}                                                                       
					else{
						echo"error";
						
					}
					
?>