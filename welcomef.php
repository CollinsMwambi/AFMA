<?php

session_start();
 if(!isset($_SESSION["loggedin"]) ){
    header("location:login.php");
}
?>
 
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="wc.css">
    
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a 
              class="navbar-brand mb-0 h1"
            >Welcome To AFMA  <?php echo($_SESSION["username"]); ?></a>

            <form class="d-flex">
<input type="text" class="form-control me-2" Placeholder="Search Products">
<button type="submit" class="btn btn-secondary"   >Search</button>

 
</form>
     <button
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav"
class="navbar-toggler"
aria-controls="navbarNav"
aria-expanded="false"
aria-label="Toggle navigation"
>
    <span class="navbar-toggler-icon"></span>

    </button>
   <div
class="collapse navbar-collapse"
id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item active">
          <a href="#" class="nav-link active"> 
          <img src="cart.svg">                   
                Cart  
          </a> 

        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link active dropdown-toggle"
          id="navbarDropdown" role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
          >
          <img src="person.svg">
            Manage Account  
          </a> 
<ul class="dropdown-menu"
aria-labelledby="navbarDropdown">
   <li><a href="account_info.php" class="dropdown-item">Account information</a></li>
   <li><a href="#" class="dropdown-item">Your Orders</a></li> 
   <li><a href="#" class="dropdown-item">Help</a></li>
  

</ul>
        
</div>

</div>
 <a href="logout.php" class="btn btn-dark">Sign Out</a>
</nav>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:black;
  color: white;
  text-align: center;
}
</style>

<div class="footer">



  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left">
      
<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
  <h5 class="text-uppercase mb-4 font-weight-bold">AFMA</h5>
  <p>
    AFMA is an online drug store that enables consumers to purchase medicines.AFMA assures quality, convenience and privacy to the consumers.
  </p>


</div>
<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
  <h5 class="text-uppercase mb-4 font-weight-bold">About us</h5>
  <p>
    <a href="" class="text-white" style="text-decoration:none; ">Who we are</a>
  </p>

  <p>
    <a href="" class="text-white" style="text-decoration:none; ">Our quality statement</a>
  </p>

  
</div>
<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
  <h5 class="text-uppercase mb-4 font-weight-bold">Help Center</h5>
<p>
    <a href="" class="text-white" style="text-decoration:none; ">FAQs</a>
  </p>

  <p>
    <a href="" class="text-white" style="text-decoration:none; ">Terms and Conditions</a>
  </p>

  <p>
    <a href="" class="text-white" style="text-decoration:none; ">Shipping policy</a>
  </p>

  <p>
    <a href="" class="text-white" style="text-decoration:none; ">Return policy</a>
  </p>
  <p>
    <a href="" class="text-white" style="text-decoration:none; ">Privacy policy</a>
  </p>
</div>
<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
  <h5 class="text-uppercase mb-4 font-weight-bold">Contact</h5>
  <p>
    <i class="fas fa-envelope mr-3 "></i>   afma@gmail.com
  </p>
  <p>
    <i class="fas fa-phone mr-3 "></i>   0700000000
  </p>
  

</div>

    </div>
  </div>

</footer>

</html>