<?php

session_start();
    require_once('db-con.php');
    if (isset($_POST['addbutton'])) {
        



$productname =  $_POST['productname'];
$description =  $_POST['description'];
$price =  $_POST['price'];
 $quantity = $_POST['quantity'];
 $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "imageuploads/".$filename;
 
 

 
          
           
             $sql = "INSERT INTO products(productname,description,price,quantity,filename) VALUES('$productname','$description','$price','$quantity','$filename')";
             if ($conn->query($sql) === TRUE) {
                header("Location: products.php?New_record_created_successfully");

                           
                                 $_SESSION['pname'] = $qq['productname'];
                                
               
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
              
              $conn->close();
            }
            if (move_uploaded_file($tempname, $folder))  {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
          }
      
      $result = mysqli_query($conn, "SELECT * FROM products");
    
             ?>

