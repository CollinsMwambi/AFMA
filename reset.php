<?php
// Initialize the session
session_start();

?>
<html>
<head>
  <title>Login</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body style=background-color:rgb(101,116,140);>
<div class="container d-flex justify-content-center align-items-center"

style="min-height:100vh; "
>
  
<form class="border shadow p-3 rounded"
action="r.php"
method="post" 


style="width:450px; ">
<h1 class="text-center p-3">Reset password</h1>
<?php
$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullUrl,"Somethingwentwrong")==true){
echo"<p style=background-color:red;>Something went wrong<p>";

}

elseif(strpos($fullUrl,"Failedwhilesendingcode")==true){
  echo"<p style=background-color:red;>Failed while sending code!!<p>";

  }
  elseif(strpos($fullUrl,"Thisemailaddressdoesnotexist")==true){
    echo"<p style=background-color:red;>Email provided does not exist!!<p>";
 
    }

    
        
          ?>

  
  <div class="mb-3">
    <label for="Email"
     class="form-label">Email</label>
    <input type="email"
     class="form-control"
     name="Email" 
     required
     >
     
  

  
  
  <button type="submit" name="reset" class="btn btn-dark">Get reset code</button>
  
<div>
 
 
</form>


</div>

</body>
</html>