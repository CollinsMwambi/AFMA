<?php
session_start();
require_once('db-con.php');

    $id= $_POST['update_id'];


     $query= "SELECT * FROM users WHERE id='$id'";
     $query_run= mysqli_query($conn,$query);
     
     foreach($query_run as $row)

?>


<html>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body  style="background: rgba(203, 241, 241, 0.3) ;">

<div class="container d-flex justify-content-center align-items-center"


style= "min-height:100vh; ">

	
<form action="update.php" method="POST" class="border shadow p-3 rounded"


style="width:450px; ">
<h1 class="text-center p-3"
>Account Details</h1>

<form >

<div class="mb-3">
    <label for="userid" class="form-label"></label>
    <input type="hidden" class="form-control" value=" <?php echo $row['id'] ?>" name="id" >
    
  </div>
 
<div class="mb-3">
    <label for="Fname" class="form-label">First Name</label>
    <input type="text" class="form-control" value="<?php echo $row['FName'] ?>" name="FName"/>
    
  </div>

  <div class="mb-3">
    <label for="Lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" value=" <?php echo $row['LName'] ?>" name="LName" >
    
  </div>
  
  
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" value="<?php echo $row['Email'] ?>" name="Email" >
    
  </div>

  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control"  value="<?php echo $row['username'] ?> " name="username" >
    
  </div>


  <div class="mb-3">
    <label for="usertype" class="form-label">usertype</label>
    <input type="usertype" class="form-control" value=" <?php echo $row['usertype'] ?>" name="usertype" >
    
  </div>
  <?php
    
 
?>



  <button type="submit" class="btn btn-success " name="uptn" value="<?php echo $row['id'] ?>">Update</button>
  <a href="users.php" class="btn btn-danger ">Cancel</a>
</form>
    <body>
        </html>