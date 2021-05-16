<!--  -->
<?php 
require "connection.php";
require "function.php";
if(isset($_GET['type']) && $_GET['type']!=''){
  $type=get_post($conn,$_GET['type']);
  if($type=='status'){
  $operation=get_post($conn,$_GET['operation']);
  $id=get_post($conn,$_GET['id']);
  if($operation=='active'){
    $status="1";
  }else{
    $status="0";
  }
  $update_status_sql="UPDATE product set status='$status' where id='$id'";
  mysqli_query($conn,$update_status_sql);
  }

  if($type=='delete'){
  $id=get_post($conn,$_GET['id']);
  $delete_sql="DELETE from product where id='$id'";
  mysqli_query($conn,$delete_sql);
  }


}

$sql="SELECT product.*,categories.categories FROM product,categories where product.categories_id=categories.id order by product.id desc";
$result=mysqli_query($conn,$sql);


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
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SR NO.</th>
      <th scope="col">ID</th>
      <th scope="col">Categories</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Selling Price</th>
      <th scope="col">Real Price</th>
      <th scope="col">Qty</th>
      <th scope="col">Size</th>
      <th scope="col">Brand</th>
      <th scope="col">Select/Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
  while($row=mysqli_fetch_assoc($result)){ 
  ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['categories']; ?></td>
      <!-- PRODUCT_IMAGE_SITE_PATH -->
      <td><img style="height:40px;width:40px;" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image'];?>"></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['offeredprice']; ?></td>
      <td><?php echo $row['realprice']; ?></td>
      <td><?php echo $row['qty']; ?></td>
      <td><?php echo $row['size']; ?></td>
      <td><?php echo $row['brand']; ?></td>
      <td>
      <?php
        if($row['status']==1){
          echo "<span class='btn btn-sm btn-success'><a style='text-decoration:none;color:black;' href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>";
        }else{
          echo "<span class='btn btn-sm btn-warning'><a style='text-decoration:none;color:black;' href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>";
          
        }
        echo "&nbsp&nbsp<span class='btn btn-sm btn-primary'><a style='text-decoration:none;color:black;' href='addproduct.php?id=".$row['id']."'>Edit</a></span>";
        echo "&nbsp&nbsp<span class='btn btn-sm btn-danger'><a style='text-decoration:none;color:black;' href='?type=delete&id=".$row['id']."'>Delete</a></span>";
        // echo "&nbsp&nbsp<a style='text-decoration:none;' href='?type=edit&id=".$row['id']."'>Edit</a>";

      ?>
      </td>
    </tr>
    <?php $i++; } ?>
  </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>