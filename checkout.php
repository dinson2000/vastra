<?php
include("./header.php");
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
?>
  <script>
    window.location.href = "index.php";
  </script>
<?php
}
if (!isset($_SESSION['USER_LOGIN'])) {
  echo "<script>alert('Login first');</script>";
?>
  <script>
    window.location.href = "login.php";
  </script>
<?php

}

// if(isset($_POST['submit1'])){
  // $user_id=$_SESSION['USER_LOGIN'];
  
  // $total_price=$cartTotal;
  

// }
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
  <!-- <style>
    @font-face {
      font-family: myFirstFont;
      src: url("Fonts/Montserrat-Regular.ttf");
    }
    </style> -->
</head>

<body>
  <div class="container-fluid">
    <div class="row ">
      <!--  main row -->
      <div class="col-md-8 daba " id="bag">
        <div id="accordion">

          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" style="font-family:myFirstFont;color:black;font-size:20px;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  ADDRESS DETAILS <i style="font-size:20px;" class="fas fa-caret-down"></i>
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="city" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">State</label>

                      <select name="state" id="state" class="form-control" required>
                        <option value="" selected>Choose...</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Zip</label>
                      <input type="text" class="form-control" id="zip" required>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingOnea">
              <h5 class="mb-0">
                <button class="btn btn-link" style="font-family:myFirstFont;color:black;font-size:20px;" data-toggle="collapse" data-target="#collapseOnea" aria-expanded="true" aria-controls="collapseOnea">
                  PAYMENTS METHOD <i style="font-size:20px;" class="fas fa-caret-down"></i>
                </button>
              </h5>
            </div>

            <div id="collapseOnea" class="collapse show" aria-labelledby="headingOnea" data-parent="#accordion">
              <div class="card-body">
                <div class="p-2">
                  PayU <input type="radio" class="mr-5 payment" name="payment_type" value="payu">
                  COD <input type="radio" name="payment_type" class="payment" value="cod">
                </div>
              </div>
            </div>

          </div>


        </div>

      </div>
      <div class="col-md-4 p-4 daba" style="border-left: 2px solid #ff9933;">
        <!--  Column 2 order summary-->
        <h4><i class="fas fa-shopping-cart"></i> Order Summary(<?php echo $totalProduct; ?> item)</h4>
        <hr style="border-radius:100px;width:94%;margin-left:0px;background-color:#FF9933;height:1.5px;">
        <div class="p-4">
          <?php 
          $cartTotal = 0;
          foreach ($_SESSION['cart'] as $key => $val) {
            $productArr = get_product($conn, '', '', $key);
            $pname = $productArr[0]['name'];
            $image = $productArr[0]['image'];
            $realprice = $productArr[0]['realprice'];
            $offeredprice = $productArr[0]['offeredprice'];

            $qty = $val['qty'];
            $cartTotal = $cartTotal + ($offeredprice * $qty);

          ?>
            <div class="row mb-3">
              <div class="col-4">
                <img style="height: 80px;width:90px;" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $image; ?>" alt="" srcset="">
              </div>
              <div class="col-6">
                <div class="row">
                  <p class="font-weight-bold mb-0" style="font-size: 19px;font-family:myFirstFont;"><?php echo $pname; ?> </p>

                </div>
                <div class="row">
                  <p class="font-weight-bold" style="font-size: 19px;font-family:myFirstFont;"><i style="font-size:17px;" class="fas fa-rupee-sign"></i> <?php echo $offeredprice * $qty; ?> </p>

                </div>
              </div>
              <div class="col-2">
                <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key; ?>','remove')"><button style="background-color:#FF9933;" class="btn"><i class="fas fa-trash"></i>

                  </button></a>
              </div>

            </div>
          <?php } ?>
          <div class="row">
            <div class="col-6">
              <h5 class="">Delivery Charges:</h5>
            </div>
            <div class="col-6">

              <p class="font-weight-bold" style="font-size: 19px;margin-left:30%;"><i style="font-size:17px;" class="fas fa-rupee-sign"></i> 79 </p>
            </div>

          </div>
          <br>
          <!-- <div class="mt-3">
            <h5 class="d-inline">Delivery Charges:</h5>
            <p class="font-weight-bold d-inline" style="font-size: 19px;"> <i style="font-size:17px;" class="fas fa-rupee-sign"></i> 75 </p>
          </div> -->
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Have a coupon code.">
            <!-- <div class="input-group-append"> -->
            <button style="background-color: #FF9933;" class="btn">Apply</button>
            <!-- </div> -->
          </div>
        </div>
        <hr style="border-radius:100px;width:94%;margin-left:0px;background-color:#FF9933;height:1.5px;">

        <div class="row">
          <div class="col-6">
            <h3 class="">Sub Total:</h3>
          </div>
          <div class="col-6">

            <p class="font-weight-bold" style="font-size: 22px;margin-left:30%;"><i style="font-size:18px;" class="fas fa-rupee-sign"></i><?php echo $cartTotal; ?></p>
          </div>

        </div>
        <form action="" method="post">

          <a href="checkout.php"><button id="submit" name="submit1" onclick="checkout_submit()" style="background-color: #ff9933;height:50px;width:100%;" class="mt-4 d-block btn"><span style="font-size: 21px;" class="font-weight-bold">Place Order</span></button></a>
        </form>
        <!-- order summary finish  -->
        <div class="row mt-5 " style="display:flex;flex-wrap:nowrap;justify-content:center;">
          <div class="column">
            <img src="images/ruppee.png" style="background:none;height: 40px;width:52px;" alt="">
          </div>
          <div class="ml-3 column">
            <h5 style="font-size: 18px;" class="row mb-0">MONEY BACK GUARANTEE </h5>
            <h6 class="row">100% money back guarantee.</h6>
          </div>
        </div>
        <div class="row mt-4 mr-4" style="display:flex;flex-wrap:nowrap;justify-content:center;">
          <div class="column">
            <img src="images/lock.png" style="background:none;height: 40px;width:52px;" alt="">
          </div>
          <div class="ml-3 column">
            <h5 style="font-size: 18px;" class="row mb-0">SECURE PAYMENTS</h5>
            <h6 class="row">Cards,Wallets,COD,UPI.</h6>
          </div>
        </div>

        <!-- <div class="row mt-3" style="display:flex;flex-wrap:nowrap;justify-content:center;">
          <div class="column">
            <img src="images/lock.png" style="background:none;height: 40px;width:52px;" alt="">
          </div>
          <div class="ml-3 column">
            <h5 style="font-size: 18px;" class="row mb-0"> </h5>
            <h6 class="row"></h6>
          </div>
        </div> -->

      </div>
    </div>
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