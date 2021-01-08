<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="sidebar1.css">

</head>
<body>

<div id="mySidenav" style="margin-top:80px;" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><h4>Home</h4></a>
        <a href="#"><h4>Account</h4></a>
        <a href="#"><h4>Order</h4></a>
        <a href="#"><h4>Today's Deals</h4></a>
        <a href="#"><h4>Settings</h4></a>
        <a href="#"><h4>24*7 help</h4></a>
</div>

<!-- <h2>Animated Sidenav Example</h2>
<p>Click on the element below to open the side navigation menu.</p>
<span style="font-size:30px;cursor:pointer" class="button" onclick="openNav()">&#9776; open</span> -->

<script>
// function openNav() {
//   document.getElementById("mySidenav").style.display = "block";
// }

// function closeNav() {
//   document.getElementById("mySidenav").style.display = "none";
// }
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 
