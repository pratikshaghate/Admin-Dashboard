<?php
include("Connection.php");

$name=$_POST['name'];
 $mob=$_POST['mob'];
 $email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['option'];
$course=$_POST['course'];
$address=$_POST['address'];
$username=$_POST['username'];
 $password=$_POST['password'];



$query="insert into student_details(s_name,s_mobno,s_email,s_dob,s_gender,s_course,s_address) values('$name','$mob','$email','$dob','$gender','$course','$address')";
      if(mysqli_query($conn,$query))
		         {
                   $fk=mysqli_insert_id($conn);
			       $path = "uploads/";
                   $valid_formats = array("jpg", "png", "gif", "bmp");
			 
	  if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		         {
			       $name = $_FILES['photoimg']['name'];
			       $size = $_FILES['photoimg']['size'];

	 if(strlen($name))
			     {
					list($txt, $ext) = explode(".", $name);
	 if(in_array($ext,$valid_formats))
			      {
	
	 if($size<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $ext), 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
							
								 $img=$actual_image_name;
                                 $fk=mysqli_insert_id($conn);              
			                      
								  
					$query2="insert into login(s_id,username,password,image)values('$fk','$username','$password','$img')";
								   if(mysqli_query($conn,$query2))
										{       echo"<script>
												alert('Records Inserted Successfully');
												window.location.href=('index.php');
                                                </script>";
										}
										
									else{
													echo "Error";
											}

									
			}
							else
								echo "Image Upload Failed";
						}
						
						    else
						        echo "Image file size should be max 1 MB";
						}
						    else
						        echo "Invalid file format..";
				}

			else
				echo "Please Select Image";

			exit;
		}
}
		   else{
			 echo "Error";
		 }

?>
			 
	