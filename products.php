<?php
session_start();
	include("db-con.php");
    
    
		
		$q= "SELECT * FROM products";
		$query=mysqli_query($conn,$q);
	
?>

<html>

<head>
	
	<title>View List</title>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


	<link rel="stylesheet" href="showp.css">
</head>

<body>
	<div class="container mt-5">
		
		<!-- top -->
		<div class="row">
			<div class="col-lg-8">
				<h1>Products</h1>
				<a  href="addproducts.php" class="btn btn-outline-success">Add Products</a>
			</div>
            
			<div class="col-lg-4"> <a  href="adminpage.php" class= "btn btn-outline-dark">Go back</a>
				<div class="row">
					<div class="col-lg-8">
						
						<!-- Date Filtering-->
						<!-- <form method="post" action="">
							<input type="date"
								class="form-control"
								name="idate">
						
							<div class="col-lg-4"
								method="post">
								<input type="submit"
								class="btn btn-danger float-right"
								name="btn" value="filter">
							</div>
						</form> -->
					</div>
				</div>
			</div>
		</div>

		<!-- product Cards -->
		<div class="row mt-4">
			<?php
            $result = mysqli_query($conn, "SELECT * FROM products");
				while ($qq=$result->fetch_assoc())
				{
			?>

			<div class="col-lg-4">
				<div class="card">
                <img src="imageuploads/<?=$qq['filename']?>" width="350" height="250">
					<div class="card-body">
                   
						<h5 class="card-title">
						<?php echo $qq['productname']; ?>
						</h5>
						<h6 class="card-subtitle mb-2 text-muted">Price(ksh)=
							<?php echo
							$qq['price']; ?>
						</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Quantity  =
							<?php echo
							$qq['quantity']; ?>
						</h6>

					<h8>	
						<a class="btn btn-danger" href=
						"productdelete.php?id=<?php echo $qq['id']; ?>" onclick="return confirm('Are you sure?')"
							class="card-link">
							Delete
						</a>
						<a  class="btn btn-success" href=
						"productupdate.php?id=<?php echo $qq['id']; ?>" 
							class="card-link" >
							Update
						</a>
                </h8>
					</div>
				</div><br>
			</div>
			<?php
			}
			?>
		</div>
	</div>



</body>

</html> 
