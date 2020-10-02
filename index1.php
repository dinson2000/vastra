<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
  <!-- <link rel="stylesheet" href="index1.css"> -->
  <style>
    .cardcontainer {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      /* justify-content: center; */
      justify-content: space-around;
      /* border: 2px solid blue; */

    }

    .container-fluid {
      padding-left: 100px;
      padding-right: 100px;

    }

    /* @media screen and(min-width: 1200px){ */
    .card1 {
      width: 19vw;
      height: 10%;
      /* border: 1px solid #929693; */
    }

    .image1 {
      height: 23.2vw;
    }


    /* }  */
    @font-face {
      font-family: myFirstFont;
      src: url("Fonts/Montserrat-Regular.ttf");
    }

    @media screen and (max-width: 768px) {
      .container-fluid {
        padding: 0 0 0 0px;
      }

      .cardcontainer {

        justify-content: center;
        /* justify-content: flex-start; */
        /* justify-content: space-between; */
        /* border: 2px solid blue; */

      }

      .card1 {
        width: 50%;
      }

      .image1 {
        height: 50vw;
      }
    }

    @media screen and (max-width:600px) {
      .image1 {
        height: 62vw;
      }
    }
  </style>
</head>

<body>

  <div class="container-fluid cardcontainer mt-4">
<h3>I watn to do cahnes</h3>
    <div class="card card1" style="margin-top:20px;">
      <img class="card-img-top image1" src="./images/images1.jpg" alt="">
      <div class="card-body" style="margin:0px;">

        <h3 class="card-title font-weight-bold ct" style="margin-bottom:3px;font-size:18px;font-family:myFirstFont;">T-shirt medium size</h3>
        <!-- <p class="card-text">
  This is the coder t-shirt good cotton,premium quality.
</p>  -->
        <h6 class="d-inline card-subtitle" style="font-size:18px;font-family:myFirstFont;"><i class="fas fa-rupee-sign"></i>799
        </h6>
        <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;font-family:myFirstFont;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i>1499</h6>
        <p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#F71616B3;border-radius:10px;width:100px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">LIMITED !!<span></p>
      </div>
    </div>
    <div class="card card1" style="margin-top:20px;">
      <img class="card-img-top image1" src="./images/images2.jpg" alt="">
      <div class="card-body" style="margin:0px;">

        <h3 class="card-title font-weight-bold" style="margin-bottom:3px;font-size:18px;font-family:myFirstFont;">T-shirt medium size</h3>
        <!-- <p class="card-text">
  This is the coder t-shirt good cotton,premium quality.
</p>  -->
        <h6 class="d-inline card-subtitle" style="font-size:18px;font-family:myFirstFont;"><i class="fas fa-rupee-sign"></i>799
        </h6>
        <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;font-family:myFirstFont;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i>1499</h6>
        <p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#64ed88;border-radius:10px;width:70px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">NEW !!<span></p>
      </div>
    </div>
    <div class="card card1" style="margin-top:20px;">
      <img class="card-img-top image1" src="./images/images3.jpg" alt="">
      <div class="card-body" style="margin:0px;">

        <h3 class="card-title font-weight-bold" style="margin-bottom:3px;font-size:18px;font-family:myFirstFont;">T-shirt medium size</h3>
        <!-- <p class="card-text">
  This is the coder t-shirt good cotton,premium quality.
</p>  -->
        <h6 class="d-inline card-subtitle" style="font-size:18px;font-family:myFirstFont;"><i class="fas fa-rupee-sign"></i>799
        </h6>
        <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;font-family:myFirstFont;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i>1499</h6>
        <p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#ffa436;border-radius:10px;width:70px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">FEW !!<span></p>
      </div>
    </div>
    <div class="card card1" style="margin-top:20px;">
      <img class="card-img-top image1" src="./images/images4.jpg" alt="">
      <div class="card-body" style="margin:0px;">

        <h3 class="card-title font-weight-bold" style="margin-bottom:3px;font-size:18px;font-family:myFirstFont;">T-shirt medium size</h3>
        <!-- <p class="card-text">
  This is the coder t-shirt good cotton,premium quality.
</p>  -->
        <h6 class="d-inline card-subtitle" style="font-size:18px;font-family:myFirstFont;"><i class="fas fa-rupee-sign"></i>799
        </h6>
        <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;font-family:myFirstFont;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i>1499</h6>
        <p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#5294ff;border-radius:10px;width:80px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">BEST !!<span></p>
      </div>
    </div>
    <div class="card card1" style="margin-top:20px;">
      <img class="card-img-top image1" src="./images/images1.jpg" alt="">
      <div class="card-body" style="margin:0px;">

        <h3 class="card-title font-weight-bold" style="margin-bottom:3px;font-size:18px;font-family:myFirstFont;">T-shirt medium size</h3>
        <!-- <p class="card-text">
  This is the coder t-shirt good cotton,premium quality.
</p>  -->
        <h6 class="d-inline card-subtitle" style="font-size:18px;font-family:myFirstFont;"><i class="fas fa-rupee-sign"></i>799
        </h6>
        <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;font-family:myFirstFont;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i>1499</h6>
        <p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#F71616B3;border-radius:10px;width:100px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">LIMITED !!<span></p>
      </div>
    </div>
    <div class="card card1" style="margin-top:20px;">
      <img class="card-img-top image1" src="./images/images2.jpg" alt="">
      <div class="card-body" style="margin:0px;">

        <h3 class="card-title font-weight-bold" style="margin-bottom:3px;font-size:18px;font-family:myFirstFont;">T-shirt medium size</h3>
        <!-- <p class="card-text">
  This is the coder t-shirt good cotton,premium quality.
</p>  -->
        <h6 class="d-inline card-subtitle" style="font-size:18px;font-family:myFirstFont;"><i class="fas fa-rupee-sign"></i>799
        </h6>
        <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;font-family:myFirstFont;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i>1499</h6>
        <p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#64ed88;border-radius:10px;width:70px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">NEW !!<span></p>
      </div>
    </div>
    <div class="card card1" style="margin-top:20px;">
      <img class="card-img-top image1" src="./images/images3.jpg" alt="">
      <div class="card-body" style="margin:0px;">

        <h3 class="card-title font-weight-bold" style="margin-bottom:3px;font-size:18px;font-family:myFirstFont;">T-shirt medium size</h3>
        <!-- <p class="card-text">
  This is the coder t-shirt good cotton,premium quality.
</p>  -->
        <h6 class="d-inline card-subtitle" style="font-size:18px;font-family:myFirstFont;"><i class="fas fa-rupee-sign"></i>799
        </h6>
        <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;font-family:myFirstFont;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i>1499</h6>
        <p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#ffa436;border-radius:10px;width:70px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">FEW !!<span></p>
      </div>
    </div>
    <div class="card card1" style="margin-top:20px;">
      <img class="card-img-top image1" src="./images/images4.jpg" alt="">
      <div class="card-body" style="margin:0px;">

        <h3 class="card-title font-weight-bold" style="margin-bottom:3px;font-size:18px;font-family:myFirstFont;">T-shirt medium size</h3>
        <!-- <p class="card-text">
  This is the coder t-shirt good cotton,premium quality.
</p>  -->
        <h6 class="d-inline card-subtitle" style="font-size:18px;font-family:myFirstFont;"><i class="fas fa-rupee-sign"></i>799
        </h6>
        <h6 class="text-muted ml-1 d-inline card-subtitle" style="font-size:14px;font-family:myFirstFont;text-decoration: line-through;"><i class="fas fa-rupee-sign"></i>1499</h6>
        <p class="font-weight-bold text-center mt-3" style="margin-bottom:0px;background-color:#5294ff;border-radius:10px;width:80px;color:white;"><span style="font-family:myFirstFont;font-size:13px;">BEST !!<span></p>
      </div>
    </div>



  </div>
</body>

</html>