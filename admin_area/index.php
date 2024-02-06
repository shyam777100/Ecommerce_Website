<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file link-->
    <link rel="stylesheet" href="../style.css">
    <style>
    .admin_image{
    width: 100px;
    height: 100px;
    object-fit: contain;
    }
    .footer{
    position: absolute;
    bottom: 0;
    }
    </style>
</head>
<body>
<!-- nav bar -->
<div class="container-fluid p-0">
    <!-- First Child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../images/1144.png" alt="" class="logo">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">WelCome Priyanka</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>

<!-- Second Child -->
<div class="bg-light">
    <h3 class="text-center p-1">Manage Products and Orders</h3>
</div>

<!-- third Child -->
<div class="row">
    <div class="col-md-12 bg-secondary p-3 d-flex align-items-center">
        <div class="px-5">
            <a href="#"><img src="../images/Gouria-shop (3).png" alt="" class="admin_image"></a>
            <p class="text-light text-center">Admin Name</p>
        </div>
        <!-- button*10>a.nav-link.text-light.bg-info.my-1-->
        <div class="button text-center">
        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Insert Products</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
        <button><a href="index.php?insert_categories" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
        <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
        </div>
    </div>
</div>
<!-- Forth Child-->
<div class="container my-5">
    <?php
    if(isset($_GET['insert_categories']))
        include('insert_categories.php');
        if(isset($_GET['insert_brands']))
        include('insert_brands.php');
    ?>

</div>

<!-- Last Child-->
<div class="bg-info p-3 text-center footer">
    <p>All rights reserved @-Samdata infotech-2024</P>
</div>
</div>

<!-- bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>