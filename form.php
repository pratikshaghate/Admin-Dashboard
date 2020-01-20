<!DOCTYPE HTML>
<html>
<head>
<title>Form</title>
<meta lang='Eng'>
<meta utf-8>
<meta name="contain"  content="width=device-width , initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    
	<link href="style.css" rel="stylesheet" type="text/css">
	
  <style>
  .photoimg
{
width:50px;
height:50px;
border:solid 1px #dedede;
padding:10px;
}

#photoimg
{
color:#fff;
font-size:12px
}
</style>
</head>


<body style="background-image:url(img/bg9.jpeg)">

<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12"></div>
 
      <!--FORM-->
	  
    <div class="bg-light col-md-12 col-sm-12 col-xs-12" id="FF" style="height:1050px;width:100%;opacity:11">
	
	<form action="insert.php" method="POST" enctype="multipart/form-data" id="ff">
	<h1>Enter Details</h1>
	
    <label style="color:black">Enter Name:</label><br>
	<input type="text" name="name" class="form-control" placeholder="Enter Name"><br>
	
	
	<label style="color:black">Enter Mobile No.</label>	<br>
    <input type="number" name="mob" class="form-control" placeholder="Enter Mobile No."><br>
	
    <label style="color:black">Enter Email-Id:</label><br>
    <input type="email" name="email" class="form-control" placeholder="Enter Email"><br>
   
    <label style="color:black">Enter Date Of Birth:</label><br>
    <input type="date" name="dob" class="form-control" placeholder=""><br>
	
	<label style="color:black">Gender:</label><br>
	<input type="radio" value="Male" name="option" checked> Male
    <input type="radio" value="Female" name="option" checked> Female
	<br><br>
		
    <label style="color:black">Course:</label><br>
    <select name="course">
			<option>Web Development</option>
			<option>Salesforce</option>
			<option>Web Designing</option>
			<option>Python</option>
			<option>Full Stack</option>
	 </select>
	 <br><br>
		
     <label style="color:black">Address:</label><br>
	 <textarea name="address"></textarea><br>
		
	 <label style="color:black">Enter Username:</label><br>
	 <input type="text" name="username" class="form-control" required><br>
		
	 <label style="color:black">Enter Password:</label><br>
	 <input type="password" name="password" class="form-control" required><br>
	  
	  <input type="file" name="photoimg" id="photoimg" multiple><br><br>
		 
	 <input type="checkbox" name="terms">   Terms & Conditions
	 <br><br>
     <a href=""></a>
	 <button class="btn btn-success">Register</button>
	

</form>
</div>		

<div class="col-md-12 col-sm-2 col-xs-2"></div>

</div>
</div>
</body>
</html>

