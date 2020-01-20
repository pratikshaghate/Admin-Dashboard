<!DOCTYPE  html>
<head>
<title>DashBoard</title>
<meta lang='Eng'>
<meta utf-8>
<meta name="contain"  content="width=device-width , initial-scale=1">
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="style.css" rel="stylesheet" type="text/css">
    <style>
        .preview{
	
	height:40px;
	width:40px;
}
    
    </style>

</head>

<body>
<div class="container-fluid" >
<div class="row">

<div class="col-md-2 bg-secondary"  style="height:50px;float:right;color:white;font-size:30px;">
<img src="img/user9.png" style="height:45px;width:45px;margin-left:0px;margin-top:-5px">

</div>


<div class="col-md-10 bg-secondary"  style="height:50px;float:left">
  
   
<div class="dropdown">
    
	<button class="btn btn-light" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
	<div class="dropdown-menu" >        
	<a href="dash.php" class="dropdown-item"><i class="fa fa-home" aria-hidden="true" > Home</i></a>  
	<a href="profile.php" class="dropdown-item"><i class="fa fa-user" aria-hidden="true" > My Profile</i></a>       
	<a href="userpass.php" class="dropdown-item"><i class="fa fa-key" aria-hidden="true" >Change Password</i></a>
	<a href="Logout.php" class="dropdown-item"><i class="fa fa-sign-out" aria-hidden="true">Log Out</i></a>
	
	</div>
	</div>
    </div>
</div>
</div>