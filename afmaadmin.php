<?php
session_start();
require_once("db-con.php");
if(!isset($_SESSION["loggedin"]) ){
    header("location:login.php");
}   

?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title>AFMA users</title>
      
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand">AFMA admins</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
     
     
     
    </form>
  </div>
</nav>
<?php

$query="SELECT * FROM `users` WHERE usertype='admin'; ";
$mysqli_result= mysqli_query($conn, $query);

?>
<table class="table table-dark table-borderless">
  <thead>
    <tr>
      <th scope="col">Id</th>
 <th scope="col">Firstname</th>
  <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
   
   


    </tr>
  </thead>
  <tbody>
      <?php
      if(mysqli_num_rows($mysqli_result)>0)
      {
          while($row=mysqli_fetch_assoc($mysqli_result))
      {
        ?>
      

  <tr class="table-light">
      <th scope="row"><?php echo $row['id'] ?></th>
      
      <td><?php echo $row['FName'] ?></td>
      <td><?php echo $row['LName'] ?></td>
      <td><?php echo $row['Email'] ?></td>
      <td><?php echo $row['username'] ?></td>
   

    
      <td><button type="button" class="btn btn-info">Edit</button></td>
     <td><button type="button" class="btn btn-danger">Delete</button></td>

    </tr>
    <?php
}
        }
else{
    echo"No record found";
}
?>
    
  </tbody>


</table>
</body>
</html>