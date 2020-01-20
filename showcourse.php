
<?php
include("Connection.php");
include("header.php");
?>
	 
<div class="container-fluid">
<div  class="row">


<div class="col-md-12  col-sm-12 col-xs-12  bg-light"  style="height:500px;">
<a href="addcourse.php" class="btn btn-success" style="margin-left:50px;margin-top:30px">Back</a>
<a href="addcourse.php" class="btn btn-primary bt-lg" style="margin-left:40px;margin-top:30px">Add New Course</a>
<table style="text-align:center;margin-left:50px;width:80%;margin-top:70px" class="table table-bordered">
 <thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Name</th>
<th scope="col">Duration</th>
<th scope="col">Batch Time</th>
<th scope="col">Date</th>
<th scope="col">Fees</th>
<th scope="col">Update</th>
<th scope="col">Delete</th>
</tr>
</thead>

<?php

include("Connection.php");

		 $query="select * from add_course";
  
  $result=mysqli_query($conn,$query);
  
  while($a=mysqli_fetch_array($result)){
	echo"<tbody>";
   echo"<tr>";
echo "<th scope='row'>".$a['c_id']."</th>";
echo "<td>".$a['c_name']."</td>";
echo "<td>".$a['c_duration']."</td>";
echo"<td>".$a['c_batch']."</td>";
echo "<td>".$a['c_date']."</td>";
echo"<td>".$a['c_fees']."</td>";      
echo'<td>'."<a href='updatecourse.php?id=$a[c_id]' class='btn btn-primary'>Update</a>".'</td>';     
echo'<td>'."<a href='deletecourse.php?id=$a[c_id]' class='btn btn-danger'>Delete</a>".'</td>';      
echo"</tr>";                                                                                                                                               
echo"</tbody>";

}

?>
</table>


</div>

</div>
</div>






















































