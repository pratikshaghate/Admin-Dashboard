<?php
include("Connection.php");
include("header.php");
?>
<div class="container-fluid">
<div  class="row">

<!--<div class="col-md-3 col-sm-12 col-xs-12 bg-light"  style="height:500px;text-align:center">
<p><a href="addcourse.php" class="btn btn-dark btn-lg" style="height:50px;width:200px;margin-top:120px">Add course</a></p>
<p><a href="newstudent.php" class="btn btn-dark  btn-lg" style="height:50px;width:200px">New Student</a></p>
<p><a href="exist.php" class="btn btn-dark  btn-lg" style="height:50px;width:200px">Existing Student</a></p>
<p><a href="batch.php" class="btn btn-dark btn-lg" style="height:50px;width:200px">Batch Schedule</a></p>


</div>-->
<div class="col-md-12  col-sm-12 col-xs-12  bg-light"  style="height:500px;">
<a href="newstudent.php" class="btn btn-success" style="margin-left:10px;margin-top:30px">Back</a>
 <a href="newstudent.php" class="btn btn-primary bt-lg" style="margin-top:30px;margin-left:10px">Add New Student</a>   
<table style="text-align:center;width:100%;margin-top:30px" class="table table-bordered">
 <thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Name</th>
<th scope="col">Mobile No</th>
<th scope="col">Email-Id</th>
<th scope="col">DOB</th>
<th scope="col">Gender</th>
<th scope="col">Course</th>
<th scope="col">Address</th>

<th scope="col">Update</th>
<th scope="col">Delete</th>
</tr>
</thead>

<?php

include("Connection.php");
//session_start();
//echo $id=$_SESSION['s_id'];
		 $query="select * from new_student";
  
  $result=mysqli_query($conn,$query);
  
  while($a=mysqli_fetch_array($result)){
	echo"<tbody>";
   echo"<tr>";
echo "<th scope='row'>".$a['s_id']."</th>";
echo "<td>".$a['s_name']."</td>";
echo "<td>".$a['s_mobno']."</td>";
echo"<td>".$a['s_email']."</td>";
echo"<td>".$a['s_dob']."</td>";
echo"<td>".$a['s_gender']."</td>";
echo"<td>".$a['s_course']."</td>";
echo"<td>".$a['s_address']."</td>";

echo'<td>'."<a href='updatestudent.php?id=$a[s_id]' class='btn btn-primary'>Update</a>".'</td>';     
echo'<td>'."<a href='deletestudent.php?id=$a[s_id]' class='btn btn-danger'>Delete</a>".'</td>';      
echo"</tr>";                                                                                                                                               
echo"</tbody>";

}

?>
</table>

</div>

<!--<div class="col-md-12 bg-light" style="height:500px;float:left;">
<br><br>

</div>-->
</div>
</div>






















































