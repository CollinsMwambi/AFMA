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
    <a class="navbar-brand">AFMA users</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php

$query="SELECT * FROM `users` WHERE usertype='user'";
$mysqli_result= mysqli_query($conn, $query);

?>

<table class="table table-dark table-borderless-responsive">
<button type="submit" class="btn btn-outline-success " name="Add user">ADD USER</button>
  <thead>
    <tr>
      <th scope="col">Id</th>
 <th scope="col">Firstname</th>
  <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Usertype</th>
     
     


    </tr>
  </thead>
  <tbody>
      <?php

      $sql="SELECT * FROM `users` WHERE usertype='user'";
      $mysqli_result=mysqli_query($conn,$sql);
      if($mysqli_result)
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
      <td><?php echo $row['usertype'] ?></td>

      

    
     <td>

    <form action="updaterecords.php" method="post">
     
    <input type="hidden" name='update_id' value="<?php echo $row['id']; ?>">
     <div class="d-grid gap-2"><button class="btn btn-warning" type="submit"  value="<?php echo $row['id']; ?>"name="update_button" >Update</button>
</div></form>

    </td>

     <input type="hidden" name='update_id' value="<?php echo $row['id']; ?>">
     <td><button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal3">Delete</button></td>
      </form>
    </tr>
    <?php
}
}
        
else{
    echo"No record found";
}
?>
    
  </tbody>
  <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p> Are you sure you want to delete?</p>
</div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-outline-danger" name="deleteuser">Delete</button></form>
      </div>
    </div>
  </div>
</div>
    </div>




  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  


</table>


</body>
</html>