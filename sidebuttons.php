<div class="col-md-2 bg-light"  style="height:575px;text-align:center">


 <?php
		include("Connection.php");
		session_start();    
		$img=$_SESSION['image'];
        echo "<a href='profile.php'><img src='uploads/".$img." 'class='preview' style='border-radius:20px;margin-top:20px;'></a>.<br><br>";
        echo " " .$_SESSION['s_name']."  ";
?>
    
<br>
<button class="btn btn-success btn-sm active" style="margin-left:-10px">Active</button>
<p><a href="addcourse.php" class="btn btn-dark btn-lg" style="width:100%;margin-top:50px;padding:10px 20px">Add course</a></p>
<p><a href="newstudent.php" class="btn btn-dark  btn-lg" style="width:100%;padding:10px 20px">New Student</a></p>
<p><a href="exist.php" class="btn btn-dark  btn-lg" style="width:100%;padding:10px 20px">Search Student</a></p>
<p><a href="showstaff.php" class="btn btn-dark  btn-lg" style="width:100%;padding:10px 20px">Staff Details</a></p>
<!--<p><a href="manage.php" class="btn btn-dark btn-lg" style="height:50px;width:200px">Management</a></p>
<p><a href="exp.php" class="btn btn-dark  btn-lg" style="height:50px;width:200px">Expenses</a></p>-->    
</div>