<?php
include("Connection.php");
$id=$_GET['id']; 


                                                             
$query= "select * from add_course where c_id='$id'";
$result=(mysqli_query($conn,$query));

while($a=mysqli_fetch_array($result)){
$sid=$a['c_id']."<br>";
$name=$a['c_name'];
$duration=$a['c_duration'];
$batch=$a['c_batch'];
$date=$a['c_date'];
$fees=$a['c_fees'];
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
	
	<body style="background-image:url(img/bg9.jpeg)">

<div class="container">
<div class="row">


<div class="bg-light col-md-12 col-sm-2 col-xs-2"  style="margin-top:30px;height:500px">
<form  method="GET" action="upcourse.php">
<input type="hidden" name="id"  class="form-control" value="<?php echo $sid;?>"><br><br>
    
   <div class="form-group">
               <div class="col-md-12">
                      Enter Course Name: <input type="text" value="<?php echo $name;?>" name="name" class="form-control form-control-line">
               </div>                                  
 							 </div>
                                    
			     <div class="form-group">	
                <div class="col-md-12">
                       Enter Batch Timing :<input type="text" value="<?php echo $batch;?>"  name="batch" class="form-control form-control-line">
                </div>
				 </div>

                 <div class="form-group">
                <div class="col-md-12">
                      Enter Course Duration:<input type="text" value="<?php echo $duration;?>" name="duration" class="form-control form-control-line">
                 </div>
 </div>
		
		          <div class="form-group">
                 <div class="col-md-12">
                        Enter Batch Date: <input type="date" value="<?php echo $date;?>" name="date" class="form-control form-control-line">
                 </div>
     </div>
									
                  <div class="form-group">
                  <div class="col-md-12">
                          Enter Course Fees:<input type="text" name="fees" value="<?php echo $fees;?>" class="form-control form-control-line">
                  </div>
        </div> 
    
 <a href="showcourse.php" class="btn btn-primary" style="margin-left:400px;width:100px">Back</a>   
<input type="submit" name="update" value="Update" class="btn btn-success" style="margin-left:0px;width:150px">
</form>
</div></div></div>
</body>

