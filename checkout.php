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

if (isset($_POST['submit'])) {

  $cartTotal = 0;
  $address = get_post($conn, $_POST['address']);
  $city = get_post($conn, $_POST['city']);
  $state = get_post($conn, $_POST['state']);
  $zip = get_post($conn, $_POST['zip']);
  $payment_type = get_post($conn, $_POST['payment']);
  foreach ($_SESSION['cart'] as $key => $val) {
    $productArr = get_product($conn, '', '', $key);

    $offeredprice = $productArr[0]['offeredprice'];

    $qty = $val['qty'];
    $size = $val['size'];
    $cartTotal = $cartTotal + ($offeredprice * $qty);
  }


  $total_price = $cartTotal;
  $payment_status = 'pending';
  if ($payment_type == 'cod') {
    $payment_status = 'success';
  }
  $order_status = '1';
  $added_on = date('Y-m-d h:i:s');

  $user_id = $_SESSION['USER_ID'];
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

  mysqli_query($conn, "INSERT INTO `order`(user_id,address,city,pincode,payment_type,total_price,size,payment_status,order_status,txnid,added_on)VALUES('$user_id','$address','$city','$zip','$payment_type','$total_price','$size','$payment_status','$order_status','$txnid','$added_on')");

  $order_id = mysqli_insert_id($conn);
  foreach ($_SESSION['cart'] as $key => $val) {
    $productArr = get_product($conn, '', '', $key);

    $offeredprice = $productArr[0]['offeredprice'];

    $qty = $val['qty'];
    $size = $val['size'];
    // $cartTotal = $cartTotal + ($offeredprice * $qty);

    mysqli_query($conn, "INSERT INTO `order_detail`(order_id,product_id,qty,size,price)VALUES('$order_id','$key','$qty','$size','$offeredprice')");
  }
  unset($_SESSION['cart']);
  if ($payment_type == 'payu') {
    $MERCHANT_KEY = "gtKFFx";
    $SALT = "eCwWELxi";
    $hash_string = '';
    //$PAYU_BASE_URL = "https://secure.payu.in";
    $PAYU_BASE_URL = "https://test.payu.in";
    $action = '';
    $posted = array();
    if (!empty($_POST)) {
      foreach ($_POST as $key => $value) {
        $posted[$key] = $value;
      }
    }
    $userArr = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user where id='$user_id'"));
    $formError = 0;
    $posted['txnid'] = $txnid;
    $posted['amount'] = $total_price;
    $posted['firstname'] = $userArr['name'];
    $posted['email'] = $userArr['email'];
    $posted['phone'] = $userArr['phone'];
    $posted['productinfo'] = "productinfo";
    $posted['key'] = $MERCHANT_KEY;
    $hash = '';
    $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
    if (empty($posted['hash']) && sizeof($posted) > 0) {
      if (
        empty($posted['key'])
        || empty($posted['txnid'])
        || empty($posted['amount'])
        || empty($posted['firstname'])
        || empty($posted['email'])
        || empty($posted['phone'])
        || empty($posted['productinfo'])

      ) {
        $formError = 1;
      } else {
        $hashVarsSeq = explode('|', $hashSequence);
        foreach ($hashVarsSeq as $hash_var) {
          $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
          $hash_string .= '|';
        }
        $hash_string .= $SALT;
        $hash = strtolower(hash('sha512', $hash_string));
        $action = $PAYU_BASE_URL . '/_payment';
      }
    } elseif (!empty($posted['hash'])) {
      $hash = $posted['hash'];
      $action = $PAYU_BASE_URL . '/_payment';
    }


    $formHtml = '<form method="post" name="payuForm" id="payuForm" action="' . $action . '"><input type="hidden" name="key" value="' . $MERCHANT_KEY . '" /><input type="hidden" name="hash" value="' . $hash . '"/><input type="hidden" name="txnid" value="' . $posted['txnid'] . '" /><input name="amount" type="hidden" value="' . $posted['amount'] . '" /><input type="hidden" name="firstname" id="firstname" value="' . $posted['firstname'] . '" /><input type="hidden" name="email" id="email" value="' . $posted['email'] . '" /><input type="hidden" name="phone" value="' . $posted['phone'] . '" /><textarea name="productinfo" style="display:none;">' . $posted['productinfo'] . '</textarea><input type="hidden" name="surl" value="http://localhost/myecom/payment_complete.php" /><input type="hidden" name="furl" value="http://localhost/myecom/payment_fail.php"/><input type="submit" style="display:none;"/></form>';
    echo $formHtml;
    echo '<script>document.getElementById("payuForm").submit();</script>';
  } else {
  ?>
    <script>
      window.location.href = "thank_you.php";
    </script>
<?php

  }
}
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
    <div class="row m-0">
      <!--  main row -->

      <div style="font-family:myFirstFont;" class="col-md-8 daba " id="bag">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button style="font-size: 21px;" class="btn btn-link text-dark font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  DETAILS
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <form action="" method="POST">
                  <div class="row mb-4">
                    <div class="col-12">
                      <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <input type="text" name="city" class="form-control" placeholder="City">
                    </div>
                    <div class="col">
                      <select name="state" class="form-control" required>
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
                    <div class="col">
                      <input type="text" name="zip" class="form-control" placeholder="Pincode">
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="form-check mx-5">
                      <input class="form-check-input" type="radio" name="payment" value="cod" checked>
                      <label class="form-check-label">
                        COD
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="payment" value="payu">
                      <label class="form-check-label">
                        PayU
                      </label>
                    </div>
                  </div>
                  <div class="text-center m-4">
                  
                  <input name="submit" class="btn font-weight-bold" value="Place Order" style="height:50px;width:50%;background-color:#FF9933;" type="submit">
                  </div>
                </form>
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
              <!-- PRODUCT_IMAGE_SITE_PATH -->
                <img style="height: 80px;width:90px;" src="<?php echo PRODUCT_IMAGE_SITE_PATH. $image; ?>" alt="" srcset="">
              </div>
              <div class="col-6">
                <div class="row">
                  <p class="font-weight-bold ml-2 mb-0" style="font-size: 16px;font-family:myFirstFont;"><?php echo $pname; ?> </p>

                </div>
                <div class="row">
                  <p class="font-weight-bold ml-2" style="font-size: 19px;font-family:myFirstFont;"><i style="font-size:17px;" class="fas fa-rupee-sign"></i> <?php echo $offeredprice * $qty; ?> </p>

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