<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
     <!-- bootstrap css link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Font Awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- css file link-->
<link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <h1 class="text-center">Insert Products</h1>
        <!-- Product Form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" 
                id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
            </div>
            <!-- Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="description" 
                id="description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
            </div>
              <!-- keywords -->
              <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="product_keywords" 
                id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">
            </div>
              <!-- categories -->
              <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_category" id="" class="form-select">
                <option value="">Select Category</option>
                <option value="">Cat2</option>
                <option value="">Cat3</option>
               </select>
            </div>
             <!-- Brands -->
             <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_brands" id="" class="form-select">
                <option value="">Select Brand</option>
                <option value="">Cat2</option>
                <option value="">Cat3</option>
               </select>
            </div>
            <!-- Image 1 -->
               <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image1</label>
                <input type="file" name="product_image1" 
                id="product_image1" class="form-control" required="required">
            </div>
             <!-- Image 2 -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image2</label>
                <input type="file" name="product_image2" 
                id="product_image2" class="form-control" required="required">
            </div>
             <!-- Image 3 -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image3</label>
                <input type="file" name="product_image3" 
                id="product_image3" class="form-control" required="required">
            </div>
             <!-- price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" 
                id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
            </div>
             <!-- price -->
             <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_product" class="btn btn-info">
            </div>
            
        </form>



    </div>
    
</body>
</html>