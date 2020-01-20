<?php
include("Connection.php");
include("header.php");
?>

<div class="container-fluid">
<div  class="row">


<?php

include("sidebuttons.php");
?>
    
<div class="col-md-10  col-sm-12 col-xs-12 bg-light "  style="height:575px;">
<form action="insertcourse.php" method="GET" >
              <div class="form-group" style="margin-top:50px">
               <div class="col-md-12">
                      Enter Course Name: <input type="text" placeholder=" PHP " name="name" class="form-control form-control-line">
               </div>                                  
 							 </div>
                                    
			     <div class="form-group">	
                <div class="col-md-12">
                       Enter Batch Timing :<input type="text" placeholder="1:00pm - 3:00pm" name="time" class="form-control form-control-line">
                </div>
				 </div>

                 <div class="form-group">
                <div class="col-md-12">
                      Enter Course Duration:<input type="text" placeholder="4 Months" name="duration" class="form-control form-control-line">
                 </div>
 </div>
		
		          <div class="form-group">
                 <div class="col-md-12">
                        Enter Batch Date: <input type="date"  name="date" class="form-control form-control-line">
                 </div>
     </div>
									
                  <div class="form-group">
                  <div class="col-md-12">
                          Enter Course Fees:<input type="text" name="fees" placeholder="15,000/-" class="form-control form-control-line">
                  </div>
        </div>
		
		<button class="btn btn-success" style="margin-left:20px">Submit</button>
		<a href="showcourse.php" class="btn btn-primary" style="margin-left:20px">Show Data</a>
        </form>

</div>


</div>
</div>



















