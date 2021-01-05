<?php
include "connection.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inshirts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="Beforelogin/sidebar1.css">
  <link rel="stylesheet" href="Beforelogin/style.css">
  <style>
    .main {

      position: sticky;
      top: 150px;

    }

    .container1 {
      display: inline-block;
      position: relative;
      padding-left: 35px;
      padding: 30px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 22px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container1 input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 50px;
      width: 50px;
      background-color: white;
      border: 1px solid #FF9933;
      border-radius: 7px;
    }

    /* On mouse-over, add a grey background color */
    .container1:hover input~.checkmark {
      background-color: #FF9933;
      transition: .6s;
    }

    /* When the checkbox is checked, add a blue background */
    .container1 input:checked~.checkmark {
      background-color: #FF9933;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark1:after {
      content: "S";
      position: absolute;
      display: block;
      top: 8px;
      left: 18px;

    }

    .checkmark2:after {
      content: "M";
      position: absolute;
      display: block;
      top: 8px;
      left: 15px;

    }

    .checkmark3:after {
      content: "L";
      position: absolute;
      display: block;
      top: 8px;
      left: 18px;

    }

    .checkmark4:after {
      content: "XL";
      position: absolute;
      display: block;
      top: 8px;
      left: 12px;

    }

    .checkmark5:after {
      content: "XXL";
      position: absolute;
      display: block;
      top: 8px;
      left: 6px;

    }

    /* Show the checkmark when checked */
    .container1 input:checked~.checkmark:after {
      display: block;
    }
  </style>
</head>

<body>
  <?php include("Beforelogin/header.php") ?>
  <div class="container-fluid">
    <div class="row mx-0">
      <div class="col-md-4">
        <div class="main">
          <?php
          $id = $_GET['id'];
          $sql = "SELECT * FROM product WHERE id='$id'";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <img class="d-block mb-1" src="./Vendor/images/<?php echo $row['image'] ?>" style="height: 25rem; width: 100%;" alt="">
            <div class="pl-1">
              <input class="btn font-weight-bold mb-1" type="submit" style="background-color:#FF9933;width:99%;height:40px;" value="Buy Now">
              <input class="btn font-weight-bold" type="submit" style="background-color:#FF9933;width:49%;height: 40px;" value="Add to Cart">
              <input class="btn font-weight-bold" style="background-color:#FF9933;width:49%;height: 40px;" value="Go to Cart">
            </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="mt-5 p-2">
          <table>
            <tr>
              <h6 class="font-weight-bold" style="color:grey;"><?php echo $row['brand']; ?></h6>
            </tr>
            <tr>
              <h4><?php echo $row['name']; ?>, <?php echo $row['colour']; ?>, <?php echo $row['type']; ?>, (Pack of <?php echo $row['packof']; ?>)</h4>
            </tr>
            <tr>
              <h6 class="d-inline" style="font-size:26px;font-family:myFirstFont;"><i class="fas fa-rupee-sign"></i><?php echo $row['offeredprice'] ?>
              </h6>
              <h6 class="text-muted ml-1 d-inline" style="font-size:18px;font-family:myFirstFont;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i><?php echo $row['realprice'] ?></h6>
              <p class="d-inline ml-3 font-weight-bold" style="font-size: 15px;color:#f01000;"><?php $off = round(((($row['realprice'] - $row['offeredprice']) / $row['realprice']) * 100), 2);
                                                                                                echo $off; ?>% off</p>
            </tr>
            <tr>
              <p class="font-weight-bold mt-2" style="">Select Size:</p>
              <!-- <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
<label class="btn btn-outline-warning" style="color:#FF9933;" for="btn-check-outlined">S</label><br>
               -->
                <label class="container1">
                  <input type="checkbox" class="radio" value="S" name="size">
                  <span class="checkmark checkmark1"></span>
                </label>
                <label class="container1">
                  <input type="checkbox" class="radio" value="S" name="size">
                  <span class="checkmark checkmark2"></span>
                </label>
                <label class="container1">
                  <input type="checkbox" class="radio" value="S" name="size">
                  <span class="checkmark checkmark3"></span>
                </label>
                <label class="container1">
                  <input type="checkbox" class="radio" value="XL" name="size">
                  <span class="checkmark checkmark4"></span>
                </label>
                <label class="container1">
                  <input type="checkbox" class="radio" value="XXL" name="size">
                  <span class="checkmark checkmark5"></span>
                </label>
            </tr>
            <tr>
              <h3 class="">Available Offers</h3>
            </tr>
            <tr>
              <ul style="list-style-type: decimal;">
                <li>Special PriceGet extra 15.0% off (price inclusive of discount)T&C</li>
                <li>Partner OfferBuy select fashion worth ₹1000 & more, get upto Extra 150 off* during Big Billion Days Sale’2020</li>
                <li>Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit Card</li>
                <li>Bank Offer5% off* with Axis Bank Buzz Credit Card</li>
              </ul>
            </tr>

            <tr>
              <h3 class="mb-4">Product Details</h3>
            </tr>
            <tr>
              <td style="width:150px;">
                <p style="font-size:14px;color:grey;" class="font-weight-bold">Type</p>
              </td>
              <td>
                <p style="font-size:14px;"><?php echo $row['type'] ?></p>
              </td>
            </tr>
            <tr>
              <td style="width:150px;">
                <p style="font-size:14px;color:grey;" class="font-weight-bold">Sleeve</p>
              </td>
              <td>
                <p style="font-size:14px;"><?php echo $row['sleeve'] ?></p>
              </td>
            </tr>
            <tr>
              <td style="width:150px;">
                <p style="font-size:14px;color:grey;" class="font-weight-bold">Fit</p>
              </td>
              <td>
                <p style="font-size:14px;">Regular</p>
              </td>
            </tr>
            <tr>
              <td style="width:150px;">
                <p style="font-size:14px;color:grey;" class="font-weight-bold">Fabric</p>
              </td>
              <td>
                <p style="font-size:14px;"><?php echo $row['fabric'] ?></p>
              </td>
            </tr>
            <tr>
              <td style="width:150px;">
                <p style="font-size:14px;color:grey;" class="font-weight-bold">Pack Of</p>
              </td>
              <td>
                <p style="font-size:14px;"><?php echo $row['packof'] ?></p>
              </td>
            </tr>
            <tr>
              <td style="width:150px;">
                <p style="font-size:14px;color:grey;" class="font-weight-bold">Colour</p>
              </td>
              <td>
                <p style="font-size:14px;"><?php echo $row['colour'] ?></p>
              </td>
            </tr>
            <tr>
              <td style="width:150px;">
                <p style="font-size:14px;color:grey;" class="font-weight-bold">Neck Type</p>
              </td>
              <td>
                <p style="font-size:14px;"><?php echo $row['necktype'] ?></p>
              </td>
            </tr>
            <tr>
              <td style="width:150px;">
                <p style="font-size:14px;color:grey;" class="font-weight-bold">Ideal For</p>
              </td>
              <td>
                <p style="font-size:14px;"><?php echo $row['genderfor'] ?></p>
              </td>
            </tr>
          </table>
          <table>
            <tr>
              <td style="width:500px;">
                <p style="font-size:20px;color:black;" class="font-weight-bold m-0">Deliever To:</p><input type="text" class="p-1" style="border:1px solid grey;" value="19,Sitaram Bazar,Brahmpuri">
              </td>
              <td>
                <p style="font-size:20px;color:black;" class="font-weight-bold">Services:</p>
                <h6 class="font-weight-light">30 Days return policy.</h6>
                <h6 class="font-weight-light">Cash on Delivery.</h6>
              </td>
            </tr>
            <tr>
              <h3>Ratings</h3>
              <p class="font-weight-bold text-center mt-3 p-2" style="margin-bottom:0px;background-color:#08a300;border-radius:24px;width:60px;color:white;"><span style="font-family:myFirstFont;font-size:17px;"><?php echo $row['rating'] ?><i class="fas fa-star text-white"></i>

                  <span></p>

            </tr>
          <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>

  <?php include("footer.php") ?>
  <script>
    $("input:checkbox").on('click', function() {
      // in the handler, 'this' refers to the box clicked on
      var $box = $(this);
      if ($box.is(":checked")) {
        // the name of the box is retrieved using the .attr() method
        // as it is assumed and expected to be immutable
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        // the checked state of the group/box on the other hand will change
        // and the current value is retrieved using .prop() method
        $(group).prop("checked", false);
        $box.prop("checked", true);
      } else {
        $box.prop("checked", false);
      }
    });
  </script>
</body>

</html>