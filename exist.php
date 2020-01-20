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

<div class="col-md-10  col-sm-12 col-xs-12 bg-light"  style="height:575px;">
<form method="POST" action="showSstudent.php">
<div class="form-group" style="margin-top:100px">
    <div class="col-md-12">
    Search By Name or Id: 
    <input type="text" placeholder="" name="name" class="form-control form-control-line">
    </div>                                  
</div>
<input type="submit" value="Search" class="btn btn-success" style="width:100px;margin-top:px;margin-left:480px;">    
</form>

</div>


</div>
</div>




















