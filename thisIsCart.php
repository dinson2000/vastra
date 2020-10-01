<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
  <link rel="stylesheet" type="text/css" href="Beforelogin/sidebar1.css">
  <link rel="stylesheet" type="text/css" href="Beforelogin/style.css">

  <link rel="stylesheet" href="./cart.css">
  <!-- <style>
    @font-face {
      font-family: myFirstFont;
      src: url("Fonts/Montserrat-Regular.ttf");
    }
    </style> -->
</head>

<body>
  <?php include("Beforelogin/header.php"); ?>
  <div class="container-fluid">
    <div class="row mt-5"><!--  main row -->
      <div class="col-md-8 daba"  id="bag"> <!-- column 1 bag -->
        <h3 class="display-4 mb-4">
          <i class="fas fa-shopping-bag"></i> My Cart
          <hr style="border-radius:100px;width:100%;margin-left:0px;background-color:#FF9933;height:1.5px;">
        </h3>

      
      <!-- BAG CONTENT -->
        <div class="daba1 p-4">
          <img src="images/images5.jpg" style="width:150px;height:187px;" alt="">
          <div class="ml-3">
            <h4 style="font-family:myFirstFont;">T-shirt medium size</h4>
            <h6 class="d-inline card-subtitle" style="font-size:18px;"><i class="fas fa-rupee-sign"></i>799
            </h6>
            <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i>1499</h6>
            <br>
            <div class="dropdown mt-2 d-inline-block">
              <button class="btn btn-sm dropdown-toggle" style="background-color: white;" type="button"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Size:
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">S</a>
                <a class="dropdown-item" href="#">M</a>
                <a class="dropdown-item" href="#">L</a>
                <a class="dropdown-item" href="#">X</a>
                <a class="dropdown-item" href="#">2XL</a>
                <a class="dropdown-item" href="#">3XL</a>
                
              </div>
            </div>
            <div class="dropdown mt-2 d-inline-block">
              <button class="btn btn-sm dropdown-toggle" style="background-color: white;" type="button"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Quantity:
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a href="" class="dropdown-item">1</a>
                <a href="" class="dropdown-item">2</a>
                <a href="" class="dropdown-item">3</a>
                <a href="" class="dropdown-item">4</a>
                <a href="" class="dropdown-item">5</a>
                <a href="" class="dropdown-item">6</a>
                <a href="" class="dropdown-item">7</a>
                <a href="" class="dropdown-item">8</a>
                <a href="" class="dropdown-item">9</a>
                <a href="" class="dropdown-item">10</a>
              </div>
            </div>
            <div class="mt-4 btn3">
            <button style="background-color:#FF9933;" class="btn"><i class="trash fas fa-trash"></i><p id="btn1" style="font-family:myFirstFont;" class="btn1 m-0">REMOVE</p></button>
            <button style="background-color:#FF9933;" class="btn"><i class="trash fas fa-bookmark"></i><p id="btn1" style="font-family:myFirstFont;" class="btn1 m-0">SAVE FOR LATER</p></button>
            </div>
          </div>
        </div>
        <div class="daba1 p-4">
          <img src="images/images2.jpg" style="width:150px;height:187px;" alt="">
          <div class="ml-3">
            <h4 style="font-family:myFirstFont;">T-shirt medium size</h4>
            <h6 class="d-inline card-subtitle" style="font-size:18px;"><i class="fas fa-rupee-sign"></i>799
            </h6>
            <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i>1499</h6>
            <br>
            <div class="dropdown mt-2 d-inline-block">
              <button class="btn btn-sm dropdown-toggle" style="background-color: white;" type="button"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Size:
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">S</a>
                <a class="dropdown-item" href="#">M</a>
                <a class="dropdown-item" href="#">L</a>
                <a class="dropdown-item" href="#">X</a>
                <a class="dropdown-item" href="#">2XL</a>
                <a class="dropdown-item" href="#">3XL</a>
                
              </div>
            </div>
            <div class="dropdown mt-2 d-inline-block">
              <button class="btn btn-sm dropdown-toggle" style="background-color: white;" type="button"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Quantity:
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a href="" class="dropdown-item">1</a>
                <a href="" class="dropdown-item">2</a>
                <a href="" class="dropdown-item">3</a>
                <a href="" class="dropdown-item">4</a>
                <a href="" class="dropdown-item">5</a>
                <a href="" class="dropdown-item">6</a>
                <a href="" class="dropdown-item">7</a>
                <a href="" class="dropdown-item">8</a>
                <a href="" class="dropdown-item">9</a>
                <a href="" class="dropdown-item">10</a>
              </div>
            </div>
            <div class="mt-4 btn3">
            <button style="background-color:#FF9933;" class="btn"><i class="trash fas fa-trash"></i><p id="btn1" style="font-family:myFirstFont;" class="btn1 m-0">REMOVE</p></button>
            <button style="background-color:#FF9933;" class="btn"><i class="trash fas fa-bookmark"></i><p id="btn1" style="font-family:myFirstFont;" class="btn1 m-0">SAVE FOR LATER</p></button>
            </div>
          </div>
        </div>
      <!-- Bag content end here -->
      </div>
      <div class="col-md-4 p-4 daba" style="border-left: 2px solid #ff9933;"><!--  Column 2 order summary-->
        <h4><i class="fas fa-shopping-cart"></i> Order Summary</h4>
        <hr style="border-radius:100px;width:94%;margin-left:0px;background-color:#FF9933;height:1.5px;">
        <div class="mt-4 p-4">
          
          <div class="row">
            <div class="col-6">
              <h5 class="">Price(3 item):</h5>
            </div>
            <div class="col-6">

              <p class="font-weight-bold" style="font-size: 19px;margin-left:30%;"><i style="font-size:17px;" class="fas fa-rupee-sign"></i> 1599 </p>
            </div>
            
          </div>
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
          <div class="input-group mt-2">
            <input type="text" class="form-control" placeholder="Have a coupon code.">
            <div class="input-group-append">
              <button style="background-color: #FF9933;" class="btn" type="button">Apply</button>
            </div>
          </div>
        </div>
        <hr style="border-radius:100px;width:94%;margin-left:0px;background-color:#FF9933;height:1.5px;">
        
        <div class="row">
            <div class="col-6">
              <h3 class="">Sub Total:</h3>
            </div>
            <div class="col-6">

              <p class="font-weight-bold" style="font-size: 22px;margin-left:30%;"><i style="font-size:18px;" class="fas fa-rupee-sign"></i>1678</p>
            </div>
            
          </div> 
        <div style="background-color: #ff9933;height:50px" class="mt-4 d-block btn"><span style="font-size: 21px;" class="font-weight-bold">Place Order</span></div>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php include("footer.php"); ?>
</body>

</html>