<?php
// include "connection.php";
// include "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vastra</title>
  <link rel="icon" href="images/logo.png">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

  <link rel="stylesheet" type="text/css" href="./style.css">
  <link rel="stylesheet" type="text/css" href="./style3.css">

  <link rel="stylesheet" type="text/css" href="./sidebar1.css">

  <!-- <style>
        .cardcontainer {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .card1 {
            width:19vw;
            height: 10%;
        }
        .image1{
            height: 23.2vw;
        }
        @font-face {
      font-family: myFirstFont;
      src: url("Fonts/Montserrat-Regular.ttf");
    }
    </style> -->

</head>

<body>

  <?php include("./header.php"); ?>

  <!-- Carousel content  -->
  <div class="container-fluid">
    <?php include("carousel.php"); ?>
  </div>
  <!-- Carousel content end here  -->

  <div style="text-align:center;" class="mt-3">
    <h5 class="mb-0"><b>BROWSE</b></h5>
    <h1 style="border-bottom:3px solid #FF9933;display:inline">TRENDING</h1>
  </div>
  <!-- Images responsive having transition and transformation -->
  <div class="container-fluid mt-4">
    <div style="margin:0px;padding:0px;" class="row">
      <div class="col-md-6 trans mb-3"><a href="#"><img style="height:350px;width:100%;" src="images/1i.jpg"></a>
      </div>
      <div class="col-md-6 trans"><a href="#"><img style="height:350px;width:100%;" src="images/2i.jpg"></a>
      </div>
      <div>
      </div>
    </div>


    <!-- This is the end of images -->

    <div class="mt-3" style="text-align:center;">
      <h5 class="mb-0"><b>EXPLORE</b></h5>
      <h1 style="border-bottom:3px solid #FF9933;display:inline">DESIGNS</h1>
    </div>

    <!-- Creativity -->

    <div class="container-fluid con1 mt-4">
      <a href="Redirect links/tshirt.php">
        <div class="item"><img src="images/c1.jpg" class="mb-1" style="height:100%;width:100%;" alt="">
          <p class="font-weight-bold fa1" style="text-align:center;color:#292929;">Men's Suit</p>
        </div>
      </a>
      <div class="item"><img src="images/c2.jpg" class="mb-1" style="height:100%;width:100%;" alt="">
        <p class="font-weight-bold fa1" style="text-align:center;color:#292929;">Men's T-shirt</p>
      </div>
      <div class="item"><img src="images/c3.jpg" class="mb-1" style="height:100%;width:100%;" alt="">
        <p class="font-weight-bold fa1" style="text-align:center;color:#292929;">Men's Shirt</p>
      </div>
      <div class="item"><img src="images/c4.jpg" class="mb-1" style="height:100%;width:100%;" alt="">
        <p class="font-weight-bold fa1" style="text-align:center;color:#292929;">Jacket</p>
      </div>
      <div class="item"><img src="images/c5.jpg" class="mb-1" style="height:100%;width:100%;" alt="">
        <p class="font-weight-bold fa1" style="text-align:center;color:#292929;">Crop Top</p>
      </div>
      <div class="item"><img src="images/c6.jpg" class="mb-1" style="height:100%;width:100%;" alt="">
        <p class="font-weight-bold fa1" style="text-align:center;color:#292929;">Toppers</p>
      </div>
    </div>

    <!-- Creativity end here -->

    <div class="mt-3" style="text-align:center;">
      <h5 class="mb-0"><b>BROWSE</b></h5>
      <h1 style="border-bottom:3px solid #FF9933;display:inline">FEATURED</h1>
    </div>

    <!-- Main content start from here -->
    <div id="ci" class="container-fluid cardcontainer mt-4">

      <?php
        $get_product=get_product($conn,'');
      foreach($get_product as $list) {
      ?>
        <div class="card card1" style="margin-top:20px;">
          <a href="product.php?id=<?php echo $list['id'] ?>">
          <!-- PRODUCT_IMAGE_SITE_PATH -->
          
            <img class="card-img-top image1" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']; ?>" alt="">
          </a>
          <div class="card-body" style="margin:0px;">

            <h3 class="card-title font-weight-bold" style="margin-bottom:3px;font-size:14px;font-family:myFirstFont;"><?php custom_echo($list['name'], 30); ?></h3>
            <!-- <p class="card-text">
  This is the coder t-shirt good cotton,premium quality.
</p>  -->
            <h6 class="d-inline card-subtitle" style="font-size:18px;font-family:myFirstFont;"><i class="fas fa-rupee-sign"></i><?php echo $list['offeredprice']; ?>
            </h6>
            <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;font-family:myFirstFont;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i><?php echo $list['realprice']; ?></h6>
            <?php
            if ($list['category'] == "BEST") {
              echo '<p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#5294ff;border-radius:10px;width:80px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">BEST !!<span></p>';
            } else if ($list['category'] == "LIMITED") {
              echo '<p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#F71616B3;border-radius:10px;width:100px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">LIMITED !!<span></p>';
            } else if ($list['category'] == "NEW") {
              echo '<p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#64ed88;border-radius:10px;width:70px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">NEW !!<span></p>';
            } else if ($list['category'] == "FEW") {
              echo '<p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#ffa436;border-radius:10px;width:70px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">FEW !!<span></p>';
            }
            ?>
          </div>
        </div>
      <?php } ?>

    </div>

    <!-- New arrivals -->
    <div class="mt-3" style="text-align:center;">
      <h5 class="mb-0"><b>NEW</b></h5>
      <h1 style="border-bottom:3px solid #FF9933;display:inline">ARRIVALS</h1>
    </div>
    <div id="ci" class="container-fluid cardcontainer mt-4">

<?php
  $get_product=get_product($conn,'');
foreach($get_product as $list) {
?>
  <div class="card card1" style="margin-top:20px;">
    <a href="product.php?id=<?php echo $list['id'] ?>">
    <!-- PRODUCT_IMAGE_SITE_PATH -->
    
      <img class="card-img-top image1" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']; ?>" alt="">
    </a>
    <div class="card-body" style="margin:0px;">

      <h3 class="card-title font-weight-bold" style="margin-bottom:3px;font-size:14px;font-family:myFirstFont;"><?php custom_echo($list['name'], 30); ?></h3>
      <!-- <p class="card-text">
This is the coder t-shirt good cotton,premium quality.
</p>  -->
      <h6 class="d-inline card-subtitle" style="font-size:18px;font-family:myFirstFont;"><i class="fas fa-rupee-sign"></i><?php echo $list['offeredprice']; ?>
      </h6>
      <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;font-family:myFirstFont;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i><?php echo $list['realprice']; ?></h6>
      <?php
      if ($list['category'] == "BEST") {
        echo '<p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#5294ff;border-radius:10px;width:80px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">BEST !!<span></p>';
      } else if ($list['category'] == "LIMITED") {
        echo '<p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#F71616B3;border-radius:10px;width:100px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">LIMITED !!<span></p>';
      } else if ($list['category'] == "NEW") {
        echo '<p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#64ed88;border-radius:10px;width:70px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">NEW !!<span></p>';
      } else if ($list['category'] == "FEW") {
        echo '<p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#ffa436;border-radius:10px;width:70px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">FEW !!<span></p>';
      }
      ?>
    </div>
  </div>
<?php } ?>

</div>
   
    <!-- New Arrivals End -->

    <?php include('./footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
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