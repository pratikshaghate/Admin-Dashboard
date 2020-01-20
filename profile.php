<?php
include("Connection.php");
include("header.php");
?>
	
<body style="background-image:url(img/bg9.jpeg);">

<div class="col-md-12" style="margin-top:250px;height:100px;float:left">
<form action="" method="POST">
<table style="text-align:center;margin-left:140px;width:80%;opacity:0.9" class="table table-bordered bg-light">
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

<th scope="col">Profile Image</th>
</tr>
</thead>

<?php
include("Connection.php");

session_start();

$id=$_SESSION['s_id'];
$img1=$_SESSION['image'];

    

$query="select student_details.s_id, s_name,s_mobno,s_email,s_dob,s_gender,s_course,s_address,image
  from student_details
  inner join login where  student_details.s_id = login.s_id and student_details.s_id='$id'" ;



$result=mysqli_query($conn,$query);


while($a=mysqli_fetch_array($result)){
	$img=$a['image'];

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

	echo "<td>"."<img src='uploads/".$img." 'class='preview'>"."</td>";
    echo"</tr>";                                                                                                                                               
    echo"</tbody>";
    echo"</table>";
}
?>









