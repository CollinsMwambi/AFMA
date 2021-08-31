<?php
session_start();

    require_once('db-con.php');
    if (isset($_POST["addc"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'id' => $_GET["id"],
                    'productname' => $_POST["hidden_name"],
                    'price' => $_POST["hidden_price"],
                    'quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="welcomef.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="welcomef.php"</script>';
            }
        }else{
            $item_array = array(
                'id' => $_GET["id"],
                'productname' => $_POST["hidden_name"],
                'price' => $_POST["hidden_price"],
                'quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="cart.php"</script>';
                }
            }
        }
    }


?>
 <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

       
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>

<div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["productname"]; ?></td>
                            <td><?php echo $value["quantity"]; ?></td>
                            <td>Ksh <?php echo $value["price"]; ?></td>
                            <td>
                            ksh <?php echo number_format($value["quantity"] * $value["price"], 2); ?></td>
                            <td><a href="cart.php?action=delete&id=<?php echo $value["id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["quantity"] * $value["price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">Ksh <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>

    </div>






<!-- <?php
session_start();
    require_once('db-con.php');
    if (isset($_POST['ssubmit'])) {
    }

        ?>
        <div style="clear: both"></div>
        <h3 class="title 2">Shopping Cart Details</h3>
        <div class="table table-bordered">


        <tr>
            <th width="30%">Product Name</th>
            <th width="10%">Quantity</th>
            <th width="13%">Price</th>
            <th width="10%">Total price</th>
            <th width="17%">Remove item</th>
        </tr>
        <?php
        if(!empty($_SESSION["cart"])){
$total=0;
foreach($_SESSION["cart"] as $key=> $value){
 ?>
<tr>
   <td><?php echo $value["productname"];?></td> 
   <td><?php echo $value["quantity"];?></td> 
   <td><?php echo $value["price"];?></td> 
   <td><?php echo number_format(number: $value["quantity"] * $value["price"],decimals:2)?></td> 
   <td><a href="cart.php?action=delete&id=<?php echo $value["id"]?>"><span class="text-danger">Remove Item</span></a></td>

  </tr>
  <?php
  $total=$total + ($value["quantity"] * $value["price"]);
}
  ?>
  <tr>
      <td colspan="3" align="right">Total</td>
      <th align="right">$ <?php echo number_format($total, decimals:2);?></th>
  <td></td>
    </tr>
    <?php
}
    
    
    
    ?>

</div>
</div> -->