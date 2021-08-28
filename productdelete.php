<?php
    include("db-con.php");
    $id = $_GET['id'];
    $q = "delete from products where id = $id ";
    mysqli_query($conn,$q);  
    header('location:products.php');  
?>