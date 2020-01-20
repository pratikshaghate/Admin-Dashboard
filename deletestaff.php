<?php
include("Connection.php");
$id=$_GET['id']."<br>";
$query="delete from staff where st_id='$id'";
if(mysqli_query($conn,$query)){
	                    		
  echo "<script>
                 alert('Records deleted successfully');          
                 window.location.href=('showstaff.php');
                </script>";  		

				}                                                                       
					else{
						echo"error";
						
					}
					
?>