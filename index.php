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
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-arrow-down"></i><sup>10</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price : 100/-</a>
        </li>
              </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
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
    <h3 class="text-center">Gouria Ledies Wear</h3>
    <p class="text-center">We know your choice</p>
</div>

    <!-- Fourth child -->
     <div class="row">
    <div class="col-md-10">
    <!-- Product -->
    <div class="row">
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src="./images/8.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sport Bra</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
    </div>
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src="./images/4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">feel loose</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
    </div>
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src="./images/5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Loose Tess</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
    </div>
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src="./images/6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Barmoda</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
    </div>
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src="./images/7.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jeans</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
    </div>
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src="./images/8.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lower</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
  
</div>

    </div>
    </div>
    </div>
    <div class="col-md-2">
    <!-- Side nav -->
    

     </div>
    </div>
    
        
    <!-- Last child
<div class="bg-info p-3 text-center">
    <p>All rights reserved @-Samdata infotech-2024</P>
</div>-->

    </div>
    <!-- bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>