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


<div class="col-md-10  col-sm-12 col-xs-12  bg-light"  style="height:500px;">
<form method="POST" action="showSstudent.php">
<div class="form-group" style="margin-top:100px">
    <div class="col-md-12">
    Search By Name or Id: 
    <input type="text" placeholder="" name="name" class="form-control form-control-line">
    </div>                                  
</div>
<input type="submit" value="Search" class="btn btn-success" style="width:100px;margin-top:px;margin-left:480px;">    
</form>



<div class="col-md-12 bg-light" style="height:500px;float:left;">
<br><br>
<table style="text-align:center;margin-left:100px;width:80%;" class="table table-bordered">
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

</tr>
</thead>

<?php
include("Connection.php");

$name=$_POST['name'];

$query="select * from new_student where s_name='$name' or s_id='$name' ";
  $result=(mysqli_query($conn,$query));
  if (mysqli_num_rows($result)>0)
{
	
	/*echo "<script>
                 alert('Student Found');
                </script>";  */

	
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
  
    echo"</tr>";                                                                                                                                               
    echo"</tbody>";
 
}

}

else{
	
echo "<script>
                 alert('Enter Valid Student Name');
           
                </script>";  
	
}

?>
</table>
</div>
</div>
</div>




