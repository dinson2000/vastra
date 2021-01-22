<!--  -->
<?php
require "connection.php";
require "function.php";


// $sql = "SELECT * FROM user order by id desc";
// $result = mysqli_query($conn, $sql);

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
      
      $result = mysqli_query($conn, "SELECT `order`.*,order_status.name as 
      order_status_str FROM `order`,order_status where
      order_status.id=`order`.order_status");
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <tr style="cursor: pointer;" onclick="window.location='myorder_master_details.php?id=<?php echo $row['id']; ?>'">
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
</body>

</html>