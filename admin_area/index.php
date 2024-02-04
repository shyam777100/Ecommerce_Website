<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css file link-->
    <link rel="stylesheet" href="../style.css">
    <style>
    .admin_image{
    width: 100px;
    height: 100px;
    object-fit: contain;
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
    <h3 class="text-center p-2">Manage Details</h3>
</div>

<!-- third Child -->
<div class="row">
    <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
        <div class="px-5">
            <a href="#"><img src="../images/floorpot.png" alt="" class="admin_image"></a>
            <p class="text-light text-center">Admin Name</p>
        </div>
        <!-- buttom*10>a.nav-link.text-light.bg-info.my-1-->
        <div class="button text-center">
        <button><a href="" class="nav-link text-light bg-info my-1">Insert Products</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
        </div>
    </div>
</div>
</div>

<!-- bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>