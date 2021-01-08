<!--  -->
<?php 
require "connection.php";
require "function.php";
if(isset($_GET['type']) && $_GET['type']!=''){
  $type=get_post($conn,$_GET['type']);

if($type=='delete'){
    $id=get_post($conn,$_GET['id']);
    $delete_sql="DELETE from user where id='$id'";
    mysqli_query($conn,$delete_sql);
    }
  
}
  
$sql="SELECT * FROM user order by id desc";
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
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Email</th>
      <th scope="col">Registered on</th>
      <!-- <th scope="col">Handle</th> -->
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
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['added_on']; ?>
    <?php echo "&nbsp&nbsp<span class='btn btn-sm btn-danger'><a style='text-decoration:none;color:black;' href='?type=delete&id=".$row['id']."'>Delete</a></span>";?>
      </td>

    </tr>
    
    <?php $i++; } ?>
  </tbody>
</table>
</body>
</html>