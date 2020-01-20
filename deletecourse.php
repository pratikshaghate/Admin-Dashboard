
<?php
include("Connection.php");
$id=$_GET['id']."<br>";
$query="delete from add_course where c_id='$id'";
if(mysqli_query($conn,$query)){
	                    		
  echo "<script>
                 alert('Records deleted successfully');          
                 window.location.href=('showcourse.php');
                </script>";  			

				}                                                                       
					else{
						echo"error";
						
					}
					
					
	



?>