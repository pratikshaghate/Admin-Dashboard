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

<div class="col-md-10  col-sm-12 col-xs-12 bg-light "  style="height:575px;">
 
           
<form action="insertstaff.php" method="GET" >
              <div class="form-group" style="margin-top:50px">
               <div class="col-md-12">
                      Enter Name: <input type="text" placeholder=" Pratiksha Ghate " name="name" class="form-control form-control-line">
               </div>                                  
 							 </div>
                                    
			     <div class="form-group">	
                <div class="col-md-12">
                       Enter Subject :<input type="text" placeholder="PHP" name="lang" class="form-control form-control-line">
                </div>
				 </div>

                 <div class="form-group">
                <div class="col-md-12">
                      Enter Mobile:<input type="text" placeholder="8734231232" name="mob" class="form-control form-control-line">
                 </div>
 </div>
		
		          <div class="form-group">
                 <div class="col-md-12">
                        Enter Address: <input type="text" placeholder="Pune"  name="address" class="form-control form-control-line">
                 </div>
     </div>
									
                  <div class="form-group">
                  <div class="col-md-12">
                          Upload Image:<br>
                       <input type="file" name="photoimg" id="photoimg" multiple><br><br>
                      
                  </div>
        </div>
		<a href="showstaff.php" class="btn btn-primary" style="margin-top:0px;margin-left:20px">Back</a>
		<button class="btn btn-success" style="margin-left:20px">Submit</button>
        
      
		</form>

</div>


</div>
</div>

