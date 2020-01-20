<?php
      
include("Connection.php");
$id=$_GET['id']; 

                                                             
$query= "select * from new_student where s_id='$id'";
$result=(mysqli_query($conn,$query));

while($a=mysqli_fetch_array($result)){
$sid=$a['s_id'];
$name=$a['s_name'];
$mobno=$a['s_mobno'];
$email=$a['s_email'];
$dob=$a['s_dob'];
$gender=$a['s_gender'];
$course=$a['s_course'];
$address=$a['s_address'];

}
?>

<?php
include("Connection.php");
include("header.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Form</title>
<meta lang='Eng'>
<meta utf-8>
<meta name="contain"  content="width=device-width , initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    
	<link href="style.css" rel="stylesheet" type="text/css">

<body style="background-image:url(img/bg9.jpeg);">

<div class="container">
<div class="row">
<div class="bg-light col-md-12 col-sm-2 col-xs-2"  style="height:890px;width:100%;margin-top:05px">
<form  method="GET" action="upstudent.php">
    
<input type="hidden" name="id"  class="form-control"value="<?php echo $id;?>"><br><br>
<label style="color:black">Enter Name:</label><br>
    
<input type="text" name="a1"  class="form-control" value="<?php echo $name;?>"> <br><br>
<label style="color:black">Enter Mobile No.</label>	<br>
    
<input type="text" name="a2"  class="form-control" value="<?php echo $mobno;?>"><br><br>
<label style="color:black">Enter Email-Id:</label><br>
    
<input type="text"name="a4" class="form-control" value="<?php echo $email;?>"><br><br>
<label style="color:black">Enter Date Of Birth:</label><br>
    
<input type="text"name="a5"   class="form-control" value="<?php echo $dob;?>"><br><br>
<label style="color:black">Gender:</label><br>
Male:
<input type="radio"name="a6" value="male">
Female:
    
<input type="radio"name="a6" value="female"><br><br>
<label style="color:black">Course:</label><br>
<select name="a7">
    
<option>Web Development</option>
			<option>Salesforce</option>
			<option>Web Designing</option>
			<option>Python</option>
			<option>Full Stack</option>
</select><br><br>

 <label style="color:black">Address:</label><br>
<textarea name="a8" ><?php echo $address;?></textarea><br><br>
    
<input type="checkbox"name="check"> Terms & Conditions<br><br>
    
<a href="showstudent.php" class="btn btn-primary">Back</a>
<input type="submit" name="update" value="Update" class="btn btn-success">
    
</form>
</div></div></div>
</body>

