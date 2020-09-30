<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

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
    <div class="row mt-5">
      <div class="col-md-8 box">Items</div>
      <div class="col-md-4 p-4 box">
        <h4>Order Summary</h4>
        <hr style="border-radius:100px;width:94%;margin-left:0px;background-color:#FF9933;height:1.5px;">
        <div class="mt-4 p-4">
          <h5 class="mt-4 d-inline">Price(3 item):</h5>
          <p class="font-weight-bold mt-4 d-inline" style="font-size: 19px;"><i style="font-size:17px;" class="fas fa-rupee-sign"></i> 30,000 </p>
          <br>
          <h5 class="mt-4 d-inline">Delivery Charges:</h5>
          <p class="font-weight-bold d-inline" style="font-size: 19px;"> <i style="font-size:17px;" class="fas fa-rupee-sign"></i> 75 </p>

          <div class="input-group mt-4">
            <input type="text" class="form-control" placeholder="Have a coupon code.">
            <div class="input-group-append">
              <button style="background-color: #FF9933;" class="btn" type="button">Apply</button>
            </div>
          </div>
        </div>
        <hr style="border-radius:100px;width:94%;margin-left:0px;background-color:#FF9933;height:1.5px;">
        <h4 class="d-inline">Sub Total:</h4>
        <p class="font-weight-bold d-inline" style="font-size: 23px;"> <i style="font-size:19px;" class="fas fa-rupee-sign"></i> 75 </p>
        <div style="background-color: #ff9933;height:50px" class="mt-4 d-block btn"><span style="font-size: 21px;" class="font-weight-bold">Place Order</span></div>

        <div class="row mt-4 ml-1">
          <div class="column">
            <img src="images/ruppee.png" style="height: 43px;width:55px;" alt="">
          </div>
          <div class="ml-3 column">
            <h5 class="row mb-0">MONEY BACK GUARANTEE </h5>
            <h6 class="row">100% money back guarantee.</h6>
          </div>
        </div> 

        <div class="row mt-3 ml-1">
          <div class="column">
            <img src="images/lock.png" style="height: 43px;width:55px;" alt="">
          </div>
          <div class="ml-3 column">
            <h5 class="row mb-0">SECURE PAYMENTS </h5>
            <h6 class="row">Cards,Netbanking,Wallets,COD,UPI.</h6>
          </div>
        </div> 

      </div>
    </div>
  </div>
</body>

</html>