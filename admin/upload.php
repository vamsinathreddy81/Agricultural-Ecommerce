<?php
require_once 'connection.php';


if(isset($_POST["submit"])){
  $productname = $_POST["productname"];
  $price = $_POST["price"];
  $quantity = $_POST["quantity"];
  $category = $_POST["category"];

  //For uploads photos
  $upload_dir = "uploads/"; //this is where the uploaded photo stored
  $product_image = $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_file = $upload_dir.basename($_FILES["imageUpload"]["name"]);
  $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)); //used to detected the image format
  $check = $_FILES["imageUpload"]["size"]; // to detect the size of the image
  $upload_ok = 0;

  if(file_exists($upload_file)){
      echo "<script>alert('The file already exist')</script>";
      $upload_ok = 0;
  }else{
      $upload_ok = 1;
      if($check !== false){
        $upload_ok = 1;
        if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif'){
            $upload_ok = 1;
        }else{
            echo '<script>alert("please change the image format")</script>';
        }
      }else{
          echo '<script>alert("The photo size is 0 please change the photo ")</script>';
          $upload_ok = 0;
      }
  }

  if($upload_ok == 0){
     echo '<script>alert("sorry your file is doesn\'t uploaded. Please try again")</script>';
  }else{
      if($productname != "" && $price !=""){
          move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);

          $sql = "INSERT INTO product(product_name,price,quantity,category,product_image)
          VALUES('$productname',$price,$quantity,'$category','$product_image')";

          if($conn->query($sql) === TRUE){
              echo "<script>alert('your product uploaded successfully')</script>";
          }
      }
  }


  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="upload.css">
    <title>Product Upload</title>
    <link rel="stylesheet" href="admin.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>

<div class="container">
        <nav>
        <ul>
            <li><a href="#" class="logo">
              <img src="https://i.imgur.com/oRhEAUj.jpg">
              <span class="nav-item">Admin</span>
            </a></li>
            <li><a href="admin.php">
              <i class="fas fa-database"></i>
              <span class="nav-item">Dashboard</span>
            </a></li>
            <li><a href="admin_products.php">
              <i class="fas fa-box-open"></i>
              <span class="nav-item">products</span>
            </a></li>
            <li><a href="orders_list.php">
              <i class="fas fa-list-alt"></i>
              <span class="nav-item">orders</span>
            </a></li>
            <li><a href="admin_users.php">
              <i class="fas fa-user-circle"></i>
              <span class="nav-item">Users</span>
            </a></li>
            <li><a href="upload.php">
              <i class="fas fa-cart-arrow-down"></i>
              <span class="nav-item">Add Products</span>
            </a></li>
          </ul>
        </nav>
    
    
        <section class="main">
          <div class="main-top">
            <h1>Add Products</h1>
            <i class="fas fa-user-cog"></i>
          </div>
    
    <section id="upload_container">
        <form action="upload.php" method="POST" enctype="multipart/form-data" >
            <input type="text" name="productname" id="productname" placeholder="Product Name" required>
            <input type="number" name="price" id="price" placeholder="Product Price" required>
            <input type="number" name="quantity" id="quantity" placeholder="Product quantity">
            <select name="category" id="category">
              <option value="FruitVeg">Fruits and Veggies</option>
              <option value="Dairy">Dairy</option>
              <option value="Meat">Meat</option>
              <option value="Spices">Spices</option>
              <option value="Seeds">Seeds</option>
              <option value="Fertilizers">Fertilizers</option>
            </select>
            <input type="file" name="imageUpload" id="imageUpload" required hidden>
            <button id="choose" onclick="upload();">Choose Image</button>
            <input type="submit" value="Upload" name="submit">
        </form>
    </section>
</div>

    <script>
        var productname = document.getElementById("productname");
        var price = document.getElementById("price");
        var quantity = document.getElementById("quantity");
        var category = document.getElementById("category");
        var choose = document.getElementById("choose");
        var uploadImage = document.getElementById("imageUpload");

        function upload(){
            uploadImage.click();
        }

        uploadImage.addEventListener("change",function(){
            var file = this.files[0];
            if(productname.value == ""){
                productname.value = file.name;
            }
            choose.innerHTML = "You can change("+file.name+") picture";
        })
    </script>
</body>
</html>