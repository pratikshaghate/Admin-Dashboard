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

<div class="col-md-10  bg-light"  style="height:500px;">

<a href="addstaff.php" class="btn btn-primary bt-lg" style="margin-left:50px;margin-top:30px">Add New</a>
<table style="text-align:center;margin-left:50px;width:80%;margin-top:70px" class="table table-bordered">
 <thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Name</th>
<th scope="col">Subject</th>
<th scope="col">Mobile</th>
<th scope="col">Address</th>
<th scope="col">Image</th>
<th scope="col">Update</th>
<th scope="col">Delete</th>
</tr>
</thead>

<?php

include("Connection.php");

		 $query="select * from staff";
  
  $result=mysqli_query($conn,$query);
  
  while($a=mysqli_fetch_array($result)){
	echo"<tbody>";
   echo"<tr>";
echo "<th scope='row'>".$a['st_id']."</th>";
echo "<td>".$a['st_name']."</td>";
echo "<td>".$a['st_lang']."</td>";
echo"<td>".$a['st_mob']."</td>";
echo "<td>".$a['st_address']."</td>";

echo"<td>". "<img src='uploads/".$a['st_image']." 'class='preview'>"."</td>";

echo'<td>'."<a href='updatestaff.php?id=$a[st_id]' class='btn btn-primary'>Update</a>".'</td>';     
echo'<td>'."<a href='deletestaff.php?id=$a[st_id]' class='btn btn-danger'>Delete</a>".'</td>';      
echo"</tr>";                                                                                                                                               
echo"</tbody>";

}

?>
</table>


</div>

</div>
</div>
