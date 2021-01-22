<?php
include("./header.php");


// prx($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Shopping Cart</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
 <link rel="stylesheet" type="text/css" href="./sidebar1.css">
 <link rel="stylesheet" type="text/css" href="./style.css">
 <link rel="stylesheet" type="text/css" href="./style3.css">

 <link rel="stylesheet" href="./cart.css">
 <style>
   .pc-view{
     display: block;
   }
   .mobile-view{
     display: none;
   }
    @media screen and (max-width:768px){
      .pc-view{
        display: none;
      }
      .mobile-view{
     display: block;
   }
    }
    </style>
</head>

<body>
 <div class="container-fluid">
  <div class="row ">
   <!--  main row -->
   <div class="col-12 daba" id="bag">
    <!-- column 1 bag -->
    <h3 class="display-4 mb-4">
     <i class="fas fa-shopping-bag"></i> My Cart
     <hr style="border-radius:100px;width:100%;margin-left:0px;background-color:#FF9933;height:1.5px;">
    </h3>


    <!-- BAG CONTENT -->
    

<div class="pc-view">
    <table style="font-family: myFirstFont;" class="table table-bordered table-responsive-sm table-striped">
     <thead>
      <tr>
       <th scope="col" style="width: 20%;"></th>
       <th scope="col">Name</th>
       <th scope="col">Price</th>
       <th scope="col" style="width: 180px;">Quantity</th>
       <th scope="col">Total</th>
       <th scope="col" style="width: 130px;"></th>
      </tr>
     </thead>
      <?php foreach ($_SESSION['cart'] as $key => $val) {
        $productArr = get_product($conn, '', '', $key);
        $pname = $productArr[0]['name'];
        $image = $productArr[0]['image'];
        $realprice = $productArr[0]['realprice'];
        $offeredprice = $productArr[0]['offeredprice'];
        $qty = $val['qty'];
        ?>

        <tbody>
       <tr>
        <td style="width: 100px;"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $image; ?>" style="width:100px;height:100px;" alt="">
        </td>
        <td><?php echo $pname; ?></td>
        <td><i class="fas fa-rupee-sign"></i><?php echo ($offeredprice); ?></td>
        <td>
         <input type="number" class="text-center" id="<?php echo $key; ?>qty" style="width:41px;border:1px solid #ff9933;border-radius:4px;" value="<?php echo $qty; ?>">
         <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key; ?>','update')"><button style="background-color:#FF9933;" class="btn"><i class="trash fas fa-cart-plus"></i>
           <p id="btn1" style="font-family:myFirstFont;" class="btn1 m-0">UPDATE</p>
          </button></a>
        </td>
        <td><i class="fas fa-rupee-sign"></i><?php echo ($offeredprice * $qty); ?></td>
          <td><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key; ?>','remove')"><button style="background-color:#FF9933;" class="btn"><i class="trash fas fa-trash"></i>
           <p id="btn1" style="font-family:myFirstFont;" class="btn1 m-0">REMOVE</p>
          </button></a></td>
       </tr>



      <?php } ?>

     </tbody>
    </table>
</div>
<div class="mobile-view">

      <?php foreach ($_SESSION['cart'] as $key => $val) {
        $productArr = get_product($conn, '', '', $key);
        $pname = $productArr[0]['name'];
        $image = $productArr[0]['image'];
        $realprice = $productArr[0]['realprice'];
        $offeredprice = $productArr[0]['offeredprice'];
        $qty = $val['qty'];
        ?>
        <div style="font-family: myFirstFont;" class="row mb-4">
        <div class="col-4" style="width: 200px;">
        <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $image; ?>" style="width:100%;height:150px;" alt="">
        </div>
        <div class="text-left col-8">
        <div class="row mb-1">
        <div class="col-12">
        <?php echo $pname; 
        ?>
        </div>
        </div><div class="row" style="font-size:20px;">
        <div class="col-12 mb-1">
        <i class="fas fa-rupee-sign" ></i><?php echo ($offeredprice * $qty); ?>
        <p class="text-muted d-inline" style="text-decoration: line-through;"><i class="fas fa-rupee-sign"></i><?php echo ($realprice * $qty); ?>
        </p>
        </div>
        </div>
        <div class="row">
        <div class="col-12 mb-2">
        <input type="number" class="text-center" id="<?php echo $key; ?>qty" style="width:41px;border:1px solid #ff9933;border-radius:4px;" value="<?php echo $qty; ?>">
         <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key; ?>','update')"><button style="background-color:#FF9933;" class="btn"><i class=" fas fa-cart-plus"></i>
           <!-- <p id="btn1" style="font-family:myFirstFont;" class="btn1 m-0">UPDATE</p> -->
          </button></a>
        </div>
        </div><div class="row">
        <div class="col-12">
        <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key; ?>','remove')"><button style="background-color:#FF9933;width:90px;" class="btn"><i class=" fas fa-trash"></i>
           <!-- <p id="btn1" style="font-family:myFirstFont;" class="btn1 m-0">REMOVE</p> -->
          </button></a>
        </div>
        </div>

        </div>

        </div>
        

      <?php } ?>
        </div>

     
    <!-- Bag content end here -->
   </div>
   <!-- <div class="col-md-4 p-4 daba" style="border-left: 2px solid #ff9933;">
    asd
   </div> -->
  </div>
 </div>
 <div class="text-center mt-3">
<a href="checkout.php"><button style="background-color: #FF9933;width:50%;"  class="btn">Checkout</button></a>
 </div>
 <?php include("footer.php"); ?>
 <script src="js/jquery-3.5.1.js"></script>
 <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

 <script type="text/javascript">
  $(document).ready(function() {
   $("#sidebar").mCustomScrollbar({
    theme: "minimal"
   });

   $('#dismiss, .overlay').on('click', function() {
    $('#sidebar').removeClass('active');
    $('.overlay').removeClass('active');
   });

   $('#sidebarCollapse').on('click', function() {
    $('#sidebar').addClass('active');
    $('.overlay').addClass('active');
    $('.collapse.in').toggleClass('in');
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
   });
  });
 </script>
</body>

</html>