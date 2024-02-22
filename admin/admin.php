<?php

require_once 'connection.php';

// Query to get the total number of products
$sqlProduct = "SELECT COUNT(*) FROM product";
$resultProduct = $conn->query($sqlProduct);

if ($resultProduct->num_rows >  0) {
    // Output data of each row
    while($row = $resultProduct->fetch_assoc()) {
        $product_total = $row["COUNT(*)"];
    }
} else {
    echo "0";
}

// Query to get the total number of users
$sqlUser = "SELECT COUNT(*) FROM details";
$resultUser = $conn->query($sqlUser);

if ($resultUser->num_rows >  0) {
    // Output data of each row
    while($row = $resultUser->fetch_assoc()) {
        $user_total = $row["COUNT(*)"];
    }
} else {
    echo "0";
}

// Query to get the total number of orders
$sqlOrder = "SELECT COUNT(*) FROM orders_list";
$resultOrder = $conn->query($sqlOrder);

if ($resultOrder->num_rows >   0) {
    while($row = $resultOrder->fetch_assoc()) {
        $order_total = $row["COUNT(*)"];
    }
} else {
    echo "0";
}

// Query to get the total number of Delivery boys
$sqlDeliveryBoy = "SELECT COUNT(*) FROM delivery_boy";
$resultDeliveryBoy = $conn->query($sqlDeliveryBoy);

if ($resultDeliveryBoy->num_rows >   0) {
    while($row = $resultDeliveryBoy->fetch_assoc()) {
        $delivery_boy_total = $row["COUNT(*)"];
    }
} else {
    echo "0";
}

// Query to get the total number of fruits and veggies
$sqlfruitveg = "SELECT COUNT(*) FROM product WHERE category = 'FruitVeg' ";
$resultfruitveg = $conn->query($sqlfruitveg);

if ($resultfruitveg->num_rows >   0) {
    while($row = $resultfruitveg->fetch_assoc()) {
        $fruitveg_total = $row["COUNT(*)"];
    }
} else {
    echo "0";
}

// Query to get the total number of Dairy
$sqldairyy = "SELECT COUNT(*) FROM product WHERE category = 'Dairy' ";
$resultdairyy = $conn->query($sqldairyy);

if ($resultdairyy->num_rows >   0) {
    while($row = $resultdairyy->fetch_assoc()) {
        $dairyy_total = $row["COUNT(*)"];
    }
} else {
    echo "0";
}

// Query to get the total number of meat
$sqlmeat = "SELECT COUNT(*) FROM product WHERE category = 'Meat' ";
$resultmeat = $conn->query($sqlmeat);

if ($resultmeat->num_rows >   0) {
    while($row = $resultmeat->fetch_assoc()) {
        $meat_total = $row["COUNT(*)"];
    }
} else {
    echo "0";
}

// Query to get the total number of Spices
$sqlspices = "SELECT COUNT(*) FROM product WHERE category = 'Spices' ";
$resultspices = $conn->query($sqlspices);

if ($resultspices->num_rows >   0) {
    while($row = $resultspices->fetch_assoc()) {
        $spices_total = $row["COUNT(*)"];
    }
} else {
    echo "0";
}

// Query to get the total number of seeds
$sqlseeds = "SELECT COUNT(*) FROM product WHERE category = 'Seeds' ";
$resultseeds = $conn->query($sqlseeds);

if ($resultseeds->num_rows >   0) {
    while($row = $resultseeds->fetch_assoc()) {
        $seeds_total = $row["COUNT(*)"];
    }
} else {
    echo "0";
}

// Query to get the total number of Fertilizers
$sqlfertilizers = "SELECT COUNT(*) FROM product WHERE category = 'Fertilizers' ";
$resultfertilizers = $conn->query($sqlfertilizers);

if ($resultfertilizers->num_rows >   0) {
    while($row = $resultfertilizers->fetch_assoc()) {
        $fertilizers_total = $row["COUNT(*)"];
    }
} else {
    echo "0";
}

// Query to get the total number of products
// $sqlFertilizers = "SELECT COUNT(*) FROM product WHERE category = 'Fertilizers' ";
// $resultFertilizers = $conn->query($sqlFertilizers);

// if ($resultFertilizers->num_rows >  0) {
//     // Output data of each row
//     while($row = $resultFertilizers->fetch_assoc()) {
//         $fertilizers = $row["COUNT(*)"];
//     }
// } else {
//     echo "0";
// }

// Close the connection
$conn->close();
?>

<span style="font-family: verdana, geneva, sans-serif;">
<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Admin</title>
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
            <h1>Dashboard</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          <div class="admin">
            <div class="card">
              <img src="img/products.jpg">
              <h4>PRODUCTS</h4>
              
              <div class="per">
                <table>
                  <tr>
                    <td><center><span><?php echo $product_total; ?></span></center></td>
                    
                  </tr>
                  <tr>
                    <td><center>Total</center></td>
                    
                  </tr>
                </table>
              </div>
              
            </div>
            <div class="card">
              <img src="img/users.jpg">
              <h4>USERS</h4>
              
              <div class="per">
                <table>
                  <tr>
                    <td><center><span><?php echo $user_total; ?></span></center></td>
                    
                  </tr>
                  <tr>
                    
                    <td><center>Total</center></td>
                  </tr>
                </table>
              </div>
              
            </div>
            <div class="card">
              <img src="img/orders.png">
              <h4>ORDERS</h4>
              
              <div class="per">
                <table>
                  <tr>
                    <td><center><span><?php echo $order_total; ?></span></center></td>
                    
                  </tr>
                  <tr>
                    
                    <td>Total</td>
                  </tr>
                </table>
              </div>
              
            </div>
            <div class="card">
              <img src="img/delivery.jpg">
              <h4>DELIVERY AGENTS</h4>
              
              <div class="per">
                <table>
                  <tr>
                    <td><center><span><?php echo $delivery_boy_total; ?></span></center></td>
                    
                  </tr>
                  <tr>
                    
                    <td>Total</td>
                  </tr>
                </table>
              </div>
             
            </div>
          </div>
    
          <section class="all">
            <div class="all-tables">
              <h1>Products List</h1>
              <table class="table">
                <thead>
                  <tr>
                    
                    <th>Category</th>
                    <th>Total Products</th>
                    <th>Avalible</th>
                    <th>Out of Stock</th>
                    <td>Details</td>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td>Fruit & veggies</td>
                    <td><?php echo $fruitveg_total; ?></td>
                    <td><?php echo $fruitveg_total; ?></td>
                    <td>0</td>
                    <td><button onclick="window.location.href='upload.php'">ADD</button></td>
                  </tr>
                  <tr class="active">
                    
                    <td>Dairy</td>
                    <td><?php echo $dairyy_total; ?></td>
                    <td><?php echo $dairyy_total; ?></td>
                    <td>0</td>
                    <td><button onclick="window.location.href='upload.php'">ADD</button></td>
                  </tr>
                  <tr>
                    
                    <td>Meat</td>
                    <td><?php echo $meat_total; ?></td>
                    <td><?php echo $meat_total; ?></td>
                    <td>0</td>
                    <td><button onclick="window.location.href='upload.php'">ADD</button></td>
                  </tr>
                  <tr>
                    
                    <td>Spices</td>
                    <td><?php echo $spices_total; ?></td>
                    <td><?php echo $spices_total; ?></td>
                    <td>0</td>
                    <td><button onclick="window.location.href='upload.php'">ADD</button></td>
                  </tr>
                  <tr >
                    
                    <td>Seeds</td>
                    <td><?php echo $seeds_total; ?></td>
                    <td><?php echo $seeds_total; ?></td>
                    <td>0</td>
                    <td><button onclick="window.location.href='upload.php'">ADD</button></td>
                  </tr>
                  <tr >
                    
                    <td>Fertilizers</td>
                    <td><?php echo $fertilizers_total; ?></td>
                    <td><?php echo $fertilizers_total; ?></td>
                    <td>0</td>
                    <td><button onclick="window.location.href='upload.php'">ADD</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </section>
      </div>
    
    </body>
    </html>
    </span>