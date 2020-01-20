<?php
include("Connection.php");
include("header.php");
?>
<body style="background-image:url(img/bg9.jpeg)">
<div class="container">
<div class="row">


<div class="bg-light col-md-12 col-sm-2 col-xs-2"  style="margin-top:200px;">
<form  method="POST" action="uppass.php" style="margin-top:20px">

<label style="color:black">Enter New Password:</label><br>
<input type="password" name="pass"  class="form-control"><br><br>
<label style="color:black">Re-Enter Password:</label><br>
<input type="password" name="pass1" class="form-control" > <br><br>

<input type="submit" name="update" value="Submit" class="btn btn-success" style="margin-left:470px;margin-top:-40px;width:150px">
</form>
</div></div></div>
</body>
