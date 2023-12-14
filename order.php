<?php

$conn = mysqli_connect('localhost', 'root', '', 'dry12');
$msg = null;
if ($_POST)
{


$date= $_POST['date'];
$product_name = $_POST['product_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$quantity = $_POST['quantity'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];


$query = "INSERT INTO `order_12`( `date`, `product_name`, `address`, `phone_number`, `quantity`, `full_name`, `email`) VALUES ('$date','$product_name','$address','$phone_number','$quantity','$full_name','$email')";
$result = mysqli_query($conn, $query);
if(!$result)
{
    echo "somthing wrong";
}
else
{
   $msg = "order Successfull";
//    header("location:index.html");
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order  | Royal Dryfruits</title>

    <!-- external css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/reservation.css">

    <!-- favicon -->
    <!-- <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml"> -->

    <!-- Font Awesome link -->
    <!-- <script src="https://kit.fontawesome.com/5289663089.js" crossorigin="anonymous"></script> -->

    <!-- javascript code -->
    <!-- <script src="assets/js/script.js" defer></script>
    <script src="assets/js/reservation.js" defer></script>
</head> -->

<body>
    <!-- Header Section -->
    <section class="header-img">
        <header class="header-main">
            <nav class="nav-main">
                <h1 class="main-title"><a href="#">Royal Dryfruits</a></h1>
                <div class="openMenu"><i class="fa-solid fa-bars" style="color: #ff9d2e;"></i></div>
                <ul class="nav-ul">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html#menu">Menu</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="order.php">Order</a></li>
                    <div class="closeMenu"><i class="fa-solid fa-xmark"></i></div>
                </ul>
            </nav>
        </header>
    
        <div  class="container" >
            <h3 ><?php 

            if($msg != null)
            {
                echo $msg;
            }

            ?></h3> 
            
            </div>
            <div class="table-container">
                <form name="reservation-form" action="order.php" method="post">
                    <h2>Registration</h2>
                    <div class="content">
                    <div class="input-box">
                            <label for="name">Full Name</label>
                            <input type="text" placeholder="Enter full name" name="full_name" >
                        </div>
                        <div class="input-box">
                            <label for="email">Email</label>
                            <input type="text" placeholder="Enter your email" name="email" >
                        </div>
                        <div class="input-box">
                            <label for="phone">Phone_Number</label>
                            <input type="number" placeholder="Enter phone number" name="phone_number" >
                        </div>
                        <div class="input-box">
                            <label for="name">Quantity</label>
                            <input type="number" placeholder="Enter Quantity in Kg" name="quantity" >
                        </div>
                        <div class="input-box">
                            <label for="name">Product Name</label>
                            <input type="text" placeholder="Enter Order name" name="product name" >
                        </div>
                        <div class="input-box">
                            <label for="addres">Address</label>
                            <input type="text" placeholder="Enter your address" name="address" >
                        </div>
                        <div class="input-box">
                            <label for="date">Date</label>
                            <input type="date" placeholder="Enter Date" name="date" >
                        </div>
                  
                    <div class="button-container">
                        <button type="submit" value="Reserve Seats" name="Reserve Seats">Order Now</button>
                    </div>
                </form>
            </div>
    
    </section>
</body>
</html>
