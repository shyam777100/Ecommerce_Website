<?php
include('include/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerence Website using PHP and MySQL</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file-->
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <!-- navbar --> 

    <div class="container-fluid p-0">
            <!-- First child -->
            <nav class="navbar navbar-expand navbar-custom">
            <a class="navbar-brand" href="#"></a>
  <div class="container-fluid">
    <img src="./images/1144.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-arrow-down"></i><sup>0</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price : 100/-</a>
        </li>
              </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_date">
        <!--<button class="btn btn-outline-light" type="submit">Search</button>-->
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      
      </form>
    </div>
  </div>
</nav>

<!-- Second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
    <a class="nav-link" href="#">Welcome</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Login</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Contact</a>
    </li>
    </ul>
</nav>

<!-- Third child -->
<div class="bg-light">
    <h3 class="text-center">Gouria Ladies Wear</h3>
    <p class="text-center">We know your choice</p>
</div>

    <!-- Fourth child -->
     <div class="row">
    <div class="col-md-10">
    <!-- Product -->
    <div class="row">

    <!-- Fetching gproducts -->
    <?php
    // calling functions
  getproducts();
  get_unique_categories();
  get_unique_brands();
    ?>
    </div>
    </div>
    <!-- Side nav -->
    <div class="col-md-2 bg-secondary p-0">
      <!-- Brands to Displayed-->
    <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="" class="nav-link text-light"><h4>Delivery Brands</h4></a>
    </li>
    <?php
    getbrands();    
    ?>
        
    </ul>
        <!-- Categories to Displayed-->
    <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="" class="nav-link text-light"><h4>Categories</h4></a>
    </li>
    <?php
    getcategories();  
    ?>
    
    </ul>
     </div>
    </div>
    
        
    <!-- Last child -->
<div class="bg-info p-3 text-center">
    <p>All rights reserved @-Samdata infotech-2024</P>
</div>

    </div>
    <!-- bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>