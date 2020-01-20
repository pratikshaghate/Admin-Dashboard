
<?php
//echo "welcome login_post";

include("Connection.php");
session_start();   
$id=$_SESSION['s_id']; 
$user=$_POST['username'];
$pass=$_POST['password'];
$user1=$_SESSION['username'];
$pass1=$_SESSION['password'];


	if ($user==$user1&&$pass==$pass1)
{
	echo "<script>
    alert ('Logged in successfully');
	window.location.href=('updatepass.php');
	 </script>";

       
	 
	 
}	
else{
	echo "<script>
	alert('Invalid username or password');
	window.location.href=('userpass.php');
	</script>";
}



 


?>