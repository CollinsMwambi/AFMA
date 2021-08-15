<?php

        session_start();
        if(!isset($_SESSION["loggedin"]) ){
            header("location:login.php");
        }
        ?>

<html>
<head>
  <title>Password Reset</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 
</head>
<body style=" background-color: #a3c5e6;">
<div class="container d-flex justify-content-center align-items-center"

style="min-height:100vh; "
>
  
<form class="border shadow p-3 rounded"
action="resetprocess.php"
method="post" 


style="width:450px; ">
<h1 class="text-center p-3">Password Reset</h1>
<?php
$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullUrl,"fill_in_all_fields")==true){
echo"<p style=background-color:red;>fill in all fields<p>";

}

elseif(strpos($fullUrl,"passwords_dont_match")==true){
  echo"<p style=background-color:red;>Passwords don't match!!<p>";

  }
  
?>
       



  <div class="mb-3">
    <label for="Password"
     class="form-label">New Password</label>
    <input type="password"
     class="form-control"
     name="newpassword" 
     
     >
     
  
  </div>
  <div class="mb-3">
    <label for="Password"
     class="form-label">Confirm Password</label>
    <input type="Password"
     class="form-control"
     name="confirmpasswordu" 
     >
     
    
  </div>

  
  
  <button type="submit" name="changepasswordu" class="btn btn-primary">Change password</button>
  
  <a href="welcomef.php" style="text-decoration:none;"> Go Back</a>
 
 
</form>


</div>

</body>
</html>