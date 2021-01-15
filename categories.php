<?php require "./header.php";
$cat_id=mysqli_real_escape_string($conn,$_GET['id']);
if($cat_id>0){
  $get_product=get_product($conn,'',$cat_id);
}else{
  ?>
<script>
  window.location.href='index.php';
</script>
  <?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>T-shirt's</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
  <link rel="stylesheet" href="tshirt.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style3.css">
  <link rel="stylesheet" href="sidebar.css">
</head>

<body>
  <div class="container-fluid cardcontainer">

    <?php
    if(count($get_product)>0){
      foreach($get_product as $list) {
      ?>
        <div class="card card1" style="margin-top:20px;">
          <a href="product.php?id=<?php echo $list['id'] ?>">
            <img class="card-img-top image1" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']; ?>" alt="">
          </a>
          <div class="card-body" style="margin:0px;">

            <h3 class="card-title font-weight-bold" style="margin-bottom:3px;font-size:18px;font-family:myFirstFont;"><?php custom_echo($list['name'], 18); ?>...</h3>
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
      <?php } 
    }
    else{
      echo "<h1 style='font-family:myFirstFont;'>Data not found</h1>";
    }
      ?>


  </div>
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