
<?php
// Initialize the session
session_start();

?>
<html>
<head>
  <title>Login</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="afma_authentication.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center"

style="min-height:100vh; "
>
  
<form class="border shadow p-3 rounded"
action="checklogin.php"
method="post" 


style="width:450px; ">
<h1 class="text-center p-3">Login</h1>

  
  <div class="mb-3">
    <label for="Username"
     class="form-label">Username</label>
    <input type="Username"
     class="form-control"
     name="username"
     >
    
  </div>
  <div class="mb-3">
    <label for="Password"
     class="form-label">Password</label>
    <input type="Password"
     class="form-control"
     name="user_pwd"
     >
    
  </div>

  
  
  <button type="submit" name="lsubmit" class="btn btn-primary">Login</button>
  <a href="Registration.php" style="text-decoration:none; ">  New here? Sign up</a>
</form>

</div>

</body>
</html>