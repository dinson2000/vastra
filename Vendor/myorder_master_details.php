<!--  -->
<?php
require "connection.php";
require "function.php";
$order_id = get_post($conn, $_GET['id']);
if(isset($_POST['update_order_status'])){
  $update_order_status=$_POST['update_order_status'];
  mysqli_query($conn,"UPDATE `order` set order_status='$update_order_status' where id='$order_id'");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
  <table class="table table-responsive-sm table-hover">
    <thead>
      <tr>
        <th scope="col">Product Image</th>
        <th scope="col">Product Name</th>
        <th scope="col">Size</th>
        <th scope="col">Qty</th>
        <th scope="col">Price</th>
        <th scope="col">Total Price</th>

      </tr>
    </thead>
    <tbody>
      <?php
      // echo "SELECT distinct(order_detail.id),order_detail.*,product.name,product.image, `order`.address,`order`.city,`order`.pincode from order_detail,product,`order`  where order_detail.order_id='$order_id' and order_detail.product_id=product.id";
      // $res = mysqli_query($conn, "SELECT distinct (order_detail.id)
      // ,order_detail.*,product.name,product.image,`order`.address,`order`.city,`order`
      // .pincode from order_detail,product,`order` where order_detail.order_id='
      // $order_id' and order_detail.product_id=product.id");
      $res=mysqli_query($conn,"select distinct(order_detail.id),order_detail.*,product.name,product.image,`order`.address,`order`.city,`order`.pincode from order_detail,product,`order` where order_detail.order_id='$order_id' and order_detail.product_id=product.id GROUP by order_detail.id");
      
      
      $total_price = 0;
      while ($row = mysqli_fetch_assoc($res) ) {
        $address = $row['address'];
        $city = $row['city'];
        $pincode = $row['pincode'];
        $total_price = $total_price + ($row['qty'] * $row['price']);
        
        
      ?>
        <tr>
          <td><img style="height: 100px;width:100px;" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image']; ?>"></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['size']; ?></td>
          <td><?php echo $row['qty']; ?></td>
          <td><?php echo $row['price']; ?></td>
          <td><?php echo $row['price'] * $row['qty']; ?></td>
        </tr>
      <?php } ?>
      <tr>
        <td colspan="3">
        </td>
        <td class="font-weight-bold">Sub Total :
        </td>
        <td><?php echo $total_price; ?>
        </td>
      </tr>

    </tbody>
  </table>
  <div id="address_details">
    <strong>Address</strong>
    <?php echo $address; ?>,<?php echo $city; ?>,<?php echo $pincode; ?><br>
    <strong>Order Status</strong>
    <?php
    $order_status_arr=mysqli_fetch_assoc(mysqli_query($conn,"SELECT order_status.name from order_status,`order` where `order`.id='$order_id' and `order`.order_status=order_status.id"));
        echo $order_status_arr['name'];
 ?>
 <div>
 <form action="" method="post">
 <select class="form-control mt-2" name="update_order_status">
 <option value="">Select Status</option>
          <?php
          $sql = "SELECT * from order_status";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            if ($row['id' == $categories_id]) {
              echo "<option selected value='.$row[id].'>" . $row['name'] . "</option>";
            } else {

              echo "<option value='.$row[id].'>" . $row['name'] . "</option>";
            }
          }
          ?>
        </select>
        <input type="submit" style="background-color: #3E64FF;" class="mt-4 text-white form-control btn">
 </form>
 </div>
  </div>
</body>

</html>