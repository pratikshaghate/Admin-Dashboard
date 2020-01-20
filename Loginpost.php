<?php
include("Connection.php");
session_start();    
$user=$_POST['username'];
$pass=$_POST['password'];


$query = "select * from login where username='$user' and password='$pass' ";

$result=(mysqli_query($conn,$query));

if (mysqli_num_rows($result)>0)
{
	echo "<script>
	 alert ('Logged in successfully');
	 window.location.href=('dash.php');
	 </script>";
	 
$query1="select student_details.s_id,s_name,image from student_details inner join login  on student_details.s_id=login.s_id and username='$user' and password='$pass' ";


$result1=(mysqli_query($conn,$query1));
while($row=mysqli_fetch_array($result1))
{
        $id=$row['s_id'];                                              
        $name=$row['s_name'];
        $img=$row['image'];

                                                  
	  $_SESSION['s_id']=$id;
	  $_SESSION['s_name']=$name;
       $_SESSION['image']=$img;
	  $_SESSION['username']=$user;
	  $_SESSION['password']=$pass;


       }
	 
	 
}	

else{
	echo "<script>
	alert('Invalid username or password');
	window.location.href=('index.php');
	</script>";
}

?>