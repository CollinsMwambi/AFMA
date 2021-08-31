<?php
require_once('db-con.php');
session_start();
 if(!isset($_SESSION["loggedin"]) ){
    header("location:login.php");
}
$id= $_GET['id'];
$sql = "SELECT FName, LName,Email,username FROM users where id='$id '";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
$conn->close();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>My Profile</title>
  </head>
  <body>
      
  <div class="container d-flex justify-content-center align-items-center"

style="min-height:100vh; "
>
  
<form class="border shadow p-3 rounded"
action="checklogin.php"
method="post" 


style="width:450px; ">
<h1 class="text-center p-3"> MY PROFILE</h1>
<?php
while($row = $result->fetch_assoc()) {
    
?>

<img src="" alt="" width="100" height="100">
  <div class="mb-3">
    <label for="First name"
     class="form-label">First Name</label>
    <input type="text"
     class="form-control"
    value="<?php echo$row["FName"]?>";
     
     >
     
  
  </div>
  <div class="mb-3">
    <label for="Last Name"
     class="form-label">Last Name</label>
    <input type="text"
     class="form-control"
  
     >
     
    
  </div>
  
 
  <div class="mb-3">
    <label for="email"
     class="form-label">Email</label>
    <input type="email"
     class="form-control"
     
     >
     
    

  </div>
  <div class="mb-3">
    <label for="username"
     class="form-label">username</label>
    <input type="text"
     class="form-control"
    
     >
     
    
  </div>
  <?php
} 
}else {
  echo "0 results";
}
  ?>
  
  <button type="submit" name="lsubmit" class="btn btn-primary">update profile</button>
  
<div>
  
 
</form>


</div>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>