<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ecommerce</title>
  <link rel="stylesheet" href="./assest/styles.css">
  <link rel="stylesheet" href="./assest/res.css">
  <link rel="stylesheet" href="./assest/font/fontawesome-free-6.5.1-web/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="wrapper">
    <!--Header old-->
    <?php include("Admin/config/config.php") ?>
    <?php session_start(); ?>
    <?php include("pages/header.php") ?>
    <!--Header new-->
    <div class="header-new">
      <div class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="d-flex justify-content-between align-items-center">
            <div class="order-1">
              <img src="https://websitedemos.net/electronic-store-04/wp-content/uploads/sites/1055/2022/03/electronic-store-logo.svg" alt="logo">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="order-3 header-new-icon-cart text-white">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>


          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="#" class="nav-link">All product</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Telephone</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Laptop</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">New arrivals</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Today's deal</a>
              </li>
            </ul>
          </div>
        </div>
      </div>    
    </div>
    
    

    <?php include("pages/body.php") ?>

    <?php include("pages/footer.php") ?>
  </body>
  
  </html>