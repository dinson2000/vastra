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
     
       </style>
</head>

<body>
 <div class="container-fluid">
  <div class="row ">
   <!--  main row -->
   <div class="col-12 daba" id="bag">
    <!-- column 1 bag -->
    <h3 class="display-4 mb-4">
     <i class="fas fa-shopping-bag"></i> My Orders
     <hr style="border-radius:100px;width:100%;margin-left:0px;background-color:#FF9933;height:1.5px;">
    </h3>
    <table style="font-family: myFirstFont;" class="table table-responsive-sm table-hover">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Order Date</th>
      <th scope="col">Address</th>
      <th scope="col">Payment Type</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Order Status</th>
    </tr>
</thead>
<tbody>
    <?php 
      $uid=$_SESSION['USER_ID'];
      $result=mysqli_query($conn,"SELECT `order`.*,order_status.name as 
      order_status_str FROM `order`,order_status where
       `order`.user_id='$uid' and order_status.id=`order`.order_status");
      while($row=mysqli_fetch_assoc($result)){
          ?>
    <tr style="cursor: pointer;" onclick="window.location='myorder_details.php?id=<?php echo $row['id']; ?>'">
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['added_on']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['payment_type']; ?></td>
        <td><?php echo $row['payment_status']; ?></td>
        <td><?php echo $row['order_status_str']; ?></td>
         </tr>
    <?php } ?>
    
  </tbody>
</table>



   </div>
  </div>
    <!-- BAG CONTENT -->
    

     
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