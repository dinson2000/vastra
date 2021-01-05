<?php
include "connection.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vastra</title>
  <link rel="icon" href="images/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

  <link rel="stylesheet" type="text/css" href="Beforelogin/style.css">

  <link rel="stylesheet" type="text/css" href="Beforelogin/sidebar1.css">
  
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
  <?php include("Beforelogin/header.php"); ?>

  <!-- Carousel content  -->
  <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" style="height:15rem;" src="images/1c.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="height:15rem;" src="images/2c.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="height:15rem;" src="images/3c.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="height:15rem;" src="images/4c.jpg" alt="Fourth slide">
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span id="ka1" class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span id="ka1" class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->
  <!-- Carousel content end here  -->
  <?php include("carousel.php"); ?>
  
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
        $sql="SELECT * FROM product";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
      ?>
      <div class="card card1" style="margin-top:20px;">
      <a href="inshirts.php?id=<?php echo $row['id'] ?>">
      <img class="card-img-top image1" src="Vendor/images/<?php echo $row['image']; ?>" alt="">
      </a><div class="card-body" style="margin:0px;">

          <h3 class="card-title font-weight-bold" style="margin-bottom:3px;font-size:18px;font-family:myFirstFont;"><?php custom_echo($row['name'],18); ?>...</h3>
          <!-- <p class="card-text">
  This is the coder t-shirt good cotton,premium quality.
</p>  -->
          <h6 class="d-inline card-subtitle" style="font-size:18px;font-family:myFirstFont;"><i class="fas fa-rupee-sign"></i><?php echo $row['offeredprice']; ?>
          </h6>
          <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;font-family:myFirstFont;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i><?php echo $row['realprice']; ?></h6>
          <?php
           if($row['category']=="BEST"){
            echo '<p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#5294ff;border-radius:10px;width:80px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">BEST !!<span></p>';
          }
          else if($row['category']=="LIMITED"){
            echo '<p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#F71616B3;border-radius:10px;width:100px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">LIMITED !!<span></p>';
          }
          else if($row['category']=="NEW"){
            echo '<p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#64ed88;border-radius:10px;width:70px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">NEW !!<span></p>';
          }
          else if($row['category']=="FEW"){
            echo '<p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#ffa436;border-radius:10px;width:70px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">FEW !!<span></p>';
          }
        ?>
        </div>
      </div>
          <?php } ?>
    


    </div>
  
    <?php include('./footer.php'); ?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</html>