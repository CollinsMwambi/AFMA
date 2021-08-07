<?php
session_start();
?>
<html>
<head>
	<title>Registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	

	<link rel="stylesheet" type="text/css" href="afma_authentication.css">
</head>
<body>
	

<div class="container d-flex justify-content-center align-items-center"


style= "min-height:100vh; ">

	
<form action="checkregistration.php" method="POST" class="border shadow p-3 rounded"


style="width:450px; ">
<h1 class="text-center p-3"
>Registration</h1>

  
  <div class="mb-3">
    <label for="FName"
     class="form-label">First Name</label>
    <input type="text"
     class="form-control"
     name="FName"
      id="FName">
    
  </div>
  <div class="mb-3">
    <label for="LName"
     class="form-label">Last Name</label>
    <input type="text"
     class="form-control"
     name="LName"
      id="LName">
    
  </div>

  <div class="mb-3">
    <label for="Email"
     class="form-label">Email</label>
    <input type="text"
    name="Email"
     class="form-control"
      id="Email">
    
  </div>

  <div class="mb-3">
    <label for="Username"
     class="form-label">Username</label>
    <input type="text"
    name="username"
     class="form-control"
      id="username">
    
  </div>

   <div class="mb-3">
    <label for="PPassword"
     class="form-label">Password</label>
    <input type="Password"
    name="user_pwd"
     class="form-control"
      id="user_pwd"
     >
    
  </div>
  <div class="mb-3">
    <label for="CPassword"
     class="form-label">Confirm Password</label>
    <input type="Password"
     class="form-control"
     name="CPassword"
      id="CPassword">
    
  </div>

  
  
  <button type="submit" name="ssubmit" class="btn btn-primary">Create account</button>
  <a href="login.php" style="text-decoration:none; ">  Already have an account? Sign in</a>
</form>


</div>



</body>

</html>