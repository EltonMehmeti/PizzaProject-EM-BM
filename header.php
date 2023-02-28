<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/jpg" href="img/home-bg.jpg" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="css/header.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300;400&display=swap" rel="stylesheet" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Pizza</title>
</head>



<body>
    <?php
include './DB/DB-CON.php';
include 'loginFunct.php';
$model = new Model();

?>

    <div class="header">
        <img class="logo" src="https://demo.themehurst.net/html/pizzaify/images/logo.png" alt="" />

        <div class="menulinksR">
            <a href="index.php" class="links">
                <h3>Home</h3>
            </a>


            <a href="#pizzaC" class="links" id="menu">
                <h3>Menu</h3>
            </a>

            <a href="contact-us.php" class="links">
                <h3>Contact Us</h3>
            </a>

            <a href="about-us.php" class="links">
                <h3>About Us</h3>
            </a>
        </div>
        <div class="dropdown">
            <button class="OrderButtonH">Welcome <?php 
        
        if($_SESSION['auth_user']['user_name']!=null){ 

            echo $_SESSION['auth_user']['user_name'];
        } else{
            echo 'HI!';
        }
        ?> </button>
            <div class="dropdown-content">
                <a href="logoutFunct.php">
                    <p>Log Out</p>
                </a>

            </div>
        </div>


        <!-- Cart button -->
        <svg class="shopping-cart" xmlns="http://www.w3.org/2000/svg" viewBox="0
            0 576 512">
            <path
                d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
        </svg>
        <span class="material-symbols-outlined HamMenu"> menu </span>
    </div>
    <div class="nav-none">
        <a href="index.php" class="links"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                style="width: 10%; fill: white">
                <path
                    d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
            </svg>
            <h3>Home</h3>
        </a>
        <a href="index.php" class="links"><svg style="width: 10%; fill: white" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512">
                <path
                    d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z" />
            </svg>
            <h3>Menu</h3>
        </a>

        <a href="about-us.php" class="links"><svg style="width: 10%; fill: white" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 576 512">
                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm96-96c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zm128-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
            </svg>
            <h3>About Us</h3>
        </a>
        <a href="contact-us.php" class="links"><svg style="width: 10%; fill: white" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
            </svg>
            <h3>Contact Us</h3>
        </a>
    </div>



    <!--  -->
    <div class="cart">
        <?php
    $model = new Model();

    $id = $_SESSION['auth_user']['user_id'];

    if ($id != null) {
    $orders = $model->showOrdersWithDetails($id);
    }
    foreach($orders as $order): ?>

        <div class="cartContainer">
            <div class="leftH">
                <a style="margin-right:90px;" href="deleteOrder.php?id=<?php echo $order['order_id']; ?>"
                    class="badge badge-danger">Delete

                </a>

                <img src="./img/<?php echo $order['Img']; ?>" class="pizzaImg" alt="">
            </div>
            <div class="rightH">

                <h5 id="title"> <?php echo $order['Titulli']; ?></h5><br>
                <p>Quantity: <?php echo $order['quantity']; ?></p>
                <p> <?php echo $order['total_price']; ?> $</p>
                <p style="font-size: x-small;"><?php echo $order['order_date']; ?></p>
            </div>

        </div>
        <?php endforeach; 
?>
        <button class="cartBtn">Orders on the way</button>
    </div>
    <!--  -->
    <script src="js/script.js"></script>
</body>

</html>