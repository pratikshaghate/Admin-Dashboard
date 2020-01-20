
<?php
include("Connection.php");
include("header.php");
?>
	 
<div class="container-fluid">
<div  class="row">

<?php
include("Connection.php");
include("sidebuttons.php");
?>
	
    
<div class="col-md-10  col-sm-12 col-xs-12  bg-light"  style="height:575px;">

<form action="insertstudent.php" method="POST"  class="form-group">
    <div class="form-group" style="margin-top:20px">
    <div class="col-md-12">
    Enter Name: 
    <input type="text" placeholder="Pratiskha Ghate " name="name" class="form-control form-control-line">
    </div>                                  
</div>
    
    <div class="form-group" style="margin-top:px">
    <div class="col-md-12">
    Enter Mobile No.: 
    <input type="text" placeholder="8877665565" name="mob" class="form-control form-control-line">
    </div>                                  
</div>
    <div class="form-group" style="margin-top:px">
    <div class="col-md-12">
    Enter Email-id: 
    <input type="text" placeholder="abc@gmail.com" name="email" class="form-control form-control-line">
    </div>                                  
</div>
    <div class="form-group" style="margin-top:0px">
    <div class="col-md-12">
    Enter Course Name:<br> 
    <select name="course">
			<option>Web Development</option>
			<option>Salesforce</option>
			<option>Web Designing</option>
			<option>Python</option>
			<option>Full Stack</option>
	 </select><br>
    </div>                                  
</div>
    
    <div class="form-group" style="margin-top:0px">
    <div class="col-md-12">
    Enter Date of Birth: 
    <input type="date" placeholder="" name="dob" class="form-control form-control-line">
    </div>                                  
</div>
    <div class="form-group" style="margin-top:0px">
    <div class="col-md-12">
    Enter Address: 
    <input type="textarea" placeholder=" Pune" name="address" class="form-control form-control-line">
    </div>                                  
</div>
    
<div class="form-group" style="margin-left:15px">
   
    Enter Gender: <br>
    Male <input type="radio" placeholder="" name="option" value="Male">
    Female <input type="radio" placeholder="" name="option" value="Female">
                                  
</div>
 <input type="submit" class="btn btn-success" style="width:100px;margin-top:10px;margin-left:10px;">
<a href="showstudent.php" class="btn btn-primary" style="margin-left:20px;margin-top:10px">Show Data</a>    
</form>
       
    




</div>


</div>
</div>



















