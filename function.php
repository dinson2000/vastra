<?php
function pr($arr){
  echo '<pre>';
  print_r($arr);
}
function prx($arr){
  echo '<pre>';
  print_r($arr);
  die();
}
function get_product($conn,$limit='',$cat_id='',$product_id=''){
  $sql="SELECT * FROM product where status='1'";
  if($cat_id!=''){
    $sql.=" and categories_id=$cat_id";
  }
  if($product_id!=''){
    $sql.=" and id=$product_id";
  }
  $sql.=" order by id desc";
  if($limit!=""){
    $sql.=" limit $limit";
  }
  $result=mysqli_query($conn,$sql);
  $data=array();
  while($row=mysqli_fetch_assoc($result)){
    $data[]=$row;
  }
  return $data;
}

function get_post($connection,$value){
  if($value!=''){

    $value=trim($value);
    $a=mysqli_real_escape_string($connection,$value);
    return $a;
  }
}

function custom_echo($x, $length)
      {
        if(strlen($x)<=$length)
        {
          echo $x;
        }
        else
        {
          $y=substr($x,0,$length).'...';
          echo $y;
        }
      }
?>