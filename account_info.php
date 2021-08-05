<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) ){
    header("location: login.php");
    exit;
}
?>
 
<html>
<head>
  <title>Account info</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="ac.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center"

style="min-height:100vh; "
>
  
<form class="border shadow p-3 rounded"
action=""
method="post"



style="width:1050px;">
<h1 class="text-center p-3">Account information</h1>

  <input type="file" name="file">
  <button type="psubmit" name="psubmit">upload photo</button>

  
  
  
</form>

</div>

</body>
</html>