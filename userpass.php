<?php
include("Connection.php");
include("header.php");

?>

<body style="background-image:url(img/bg9.jpeg);">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-12 col-xs-12"></div>
<div class="col-md-4 col-sm-12 col-xs-12">
<form  action="LPpass.php" method="POST" id="FL" class="was-validated " style="margin-top:160px;background-color:#f7f2f7;opacity:11" >
<!--<h1 style="	color:darkslategrey;">Login</h1>
<img src="img/user6.png" id="uimg">-->
<div class="form-group">
<label style="color:black">Enter Username:</label>
<input type="text" name="username" placeholder="Username" class="form-control"  required>



<label style="color:black">Enter Password:</label>
<input type="password" name="password" placeholder="Password" class="form-control" required>
</div>


<input type="submit" value="Submit" class="btn btn-success" style="width:35%;height:45px;color:white;margin-left:90px">

</form>
</div>


<div class="col-md-4 col-sm-12 col-xs-12"></div>
</div>
 </div>
</body>


