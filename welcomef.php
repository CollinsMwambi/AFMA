<?php
    session_start();
    require_once('db-con.php');
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
          <a href="cart.php" class="nav-link active"> 
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


  <form action="reset-password.php"><button class="btn btn-warning" type="submit" name="reset-button" >Reset Password</button></form>


<div class="d-grid gap-2">
  <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Logout</button>
</div>

</nav>


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
        <form action="logout.php" method="post"><button type="submit" class="btn btn-outline-danger">Logout</button></form>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>

 

  <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="showpu.css">
</head>

<body>
    <div class="container mt-5">
        
      
        <div class="row">
            <div class="col-lg-8">
         </div>

         <div class="col-lg-4"> 
                <div class="row">
                    <div class="col-lg-8">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
        <?php
            $query = "SELECT * FROM products ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) 
                {

                    ?>

                   <div class="col-lg-4">

                  <div class="card">
                  <img src="imageuploads/<?=$row['filename']?>" width="350" height="250">
                    <div class="card-body">

                    <h5 class="card-title">
                    <?php echo $row['productname']; ?>
                        </h5>

                        <h6 class="card-subtitle mb-2 text-muted">Price(ksh)=
                            <?php echo
                            $row['price']; ?>
                            </h6>
                       
                        
                       

                                
                       
              
                                <h8>
                                <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">

                                <input type="text" name="quantity"  value="1"> 
                            
                               <input type="submit" name="addc" style="margin-top: 5px;" class="btn btn-success" onclick="return confirm('Are you sure?')"
                               value="Add to Cart">

                               <input type="hidden" name="hidden_name" value="<?php echo $row["productname"]; ?>">
                              <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                              
                                      
                                </form>
                               <h8>
                 </div>
                </div><br>
            </div>
                    <?php
                }
            }
        ?>
        </div>
          </div>
          </body>
          </html>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 

</body>


       
</html>