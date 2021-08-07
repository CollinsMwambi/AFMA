<?php

session_start();
if(!isset($_SESSION["loggedin"]) ){
  header("location:login.php");
}
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="ac.css">
<title>Admin</title>
</head>
<body>

<div class="container-fluid">
    <div class="row min-vh-100 flex-column flex-md-row">
      <aside class="col-12 col-md-3 col-xl-2 p-0 bg-dark flex-shrink">
        <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top " id="sidebar">
          <div class="text-center p-3">
            
           <a class="navbar-brand mx-0 font-weight-bold  text-nowrap"> <i class="fas fa-user-shield"></i> <?php echo($_SESSION["username"]); ?></a>
          </div>
              <button type="button" class="navbar-toggler border-0 order-1" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse order-last" id="nav">
            <ul class="navbar-nav flex-column w-100 justify-content-center">

            <li class="nav-item">
              <a  class="nav-link active">Welcome <?php echo($_SESSION["username"]); ?> you're Logged in as Admin </a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link "><i class="far fa-address-card"></i> My profile</a>
            </li>
            
            <li class="nav-item">
              <a href="users.php" class="nav-link "><i class="far fa-user"></i> Users</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fas fa-prescription-bottle"></i> Products</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fas fa-shopping-basket"></i></i> Orders </a>
            </li>
            <li class="nav-item">
              <a href="afmaadmin.php" class="nav-link"><i class="fas fa-user-cog"></i> Admins </a>
              

              <div class="d-grid gap-2">
  <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Logout</button>
</div>
            
          </ul>
          </div>      
        </nav>   
      </aside>
      <main class="col px-0 flex-grow-1">
        <div class= "container py-3">

</div>
</main>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to logout??</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <form action="adminlogout.php" method="post"><button type="submit" class="btn btn-outline-danger">Logout</button></form>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>
