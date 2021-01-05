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
function get_post($connection,$value){
  if($value!=""){
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
          $y=substr($x,0,$length);
          echo $y;
        }
      }
?>