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

    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300;400&display=swap" rel="stylesheet" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Pizza</title>
</head>

<body>
    <a href="#firstSection">
        <button class="scrollUp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="fill: red; width: 20%">
                <path
                    d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z" />
            </svg>
        </button>
    </a>
    <?php
    include 'header.php';
   
    ?>

    <div id="firstSection">
        <div class="leftitem">
            <p class="sP1">Eat Sleep and</p>
            <h1 class="sH1">
                Super delicious <br />
                Burger in town!
            </h1>
            <p class="sP2">
                Food is any substance consumed to provide nutritional support for an
                organism
            </p>
            <button id="sButton">Book A Table</button>
        </div>
        <img src="https://ostermalmspizzeria.se/wp-content/uploads/2022/03/img_1.png" alt="" class="firstsectionImg" />
    </div>
    <div class="MenuList">
        <div class="overlay">
            <div class="item">
                <img src="https://demo.themehurst.net/html/pizzaify/images/services/barger.png" alt="" />
            </div>
            <h2 style="text-align: center; padding: 5px">Mexican Pizza</h2>
            <button class="seeMenu">See Menu</button>
        </div>
        <div class="overlay">
            <div class="item">
                <img src="https://demo.themehurst.net/html/pizzaify/images/services/ice.png" alt="" />
            </div>
            <h2 style="text-align: center; padding: 5px">Mexican Pizza</h2>
            <button class="seeMenu">See Menu</button>
        </div>
        <div class="overlay">
            <div class="item">
                <img src="https://demo.themehurst.net/html/pizzaify/images/services/french.png" alt="" />
            </div>
            <h2 style="text-align: center; padding: 5px">Mexican Pizza</h2>
            <button class="seeMenu">See Menu</button>
        </div>
    </div>

    <div class="midContent">
        <div class="leftD">
            <div class="titulli">
                <p id="mcP1">WE PUT 100% OF LOVE AND DEDICATION</p>
                <h1 id="mcH1">Panpie, Burgers, And Best Pizzas in Town</h1>
            </div>
            <div class="mcText">
                <p>
                    Lorem Ipsum has been the industry's standard dummy text ever since
                    the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book.
                </p>
                <ul class="mcList">
                    <li>
                        <span class="material-symbols-outlined color"> check_circle </span>Additional charge for premium
                        toppings
                    </li>
                    <li>
                        <span class="material-symbols-outlined color"> check_circle </span>Minimum of 2 required.
                    </li>
                    <li>
                        <span class="material-symbols-outlined color"> check_circle </span>Premium toppings are fixed
                    </li>
                </ul>
            </div>
            <a href="#" id="mcButton">Who We Are ?</a>
        </div>
        <div class="rightD">
            <img src="img/pizzaMC.png" alt="" style="height: auto; max-width: 100%" />
        </div>
    </div>

    <div class="pizzaContainer" id="pizzaC">
        <div class="pizzaCtitle">
            <h3 class="pizzaCfirst">Fresh From Panipe</h3>
            <h1 class="pizzaCsecond">We Offer People Best Way To Eat Best Food</h1>
        </div>
        <div class="pizza-main">
            <?php
 
//  include './DB/DB-CON.php'; 
 $modelPizza = new Model();


 $rowsPizza = $modelPizza->fetchPizza();
 $j = 1;
 if(!empty($rowsPizza)){
   foreach($rowsPizza as $row){ 
     ?>
            <a style="text-decoration: none; color:black" href="Product.php?id=<?php echo $row['Id']; ?>">
                <div class="pizzas">
                    <h3><?php echo $row['Titulli']; ?></h3>
                    <img width="200px" src="./img/<?php echo $row['Img']; ?>" alt="" />
                    <div class="details">
                        <span class="circle">
                            <h5>22cm</h5>
                        </span>

                        <span class="circle">
                            <h5>29cm</h5>
                        </span><br><br>
                        <h3><?php echo $row['Cmimi']; ?> $</h3>
                    </div>
                    <p class="pizza-desc">
                        <?php echo $row['Pershkrimi']; ?>
                    </p>
                </div>
            </a>


            <?php
                   }
                }else{
                    echo "no data";
                }
                ?>
        </div>
    </div>
    <div class="discount">
        <div class="discount-cards big">
            <img class="dis-img bigImg" src="img/discount.jpg" alt="" />
            <h1 class="dis-title bigT">
                Discount<br />
                For Delicious<br />
                Tasty Burgers!
            </h1>
            <p style="margin-top: 30px; font-size: 30px" class="dis-details">
                Sale off 50% only this week
            </p>
        </div>
        <div class="small">
            <div class="discount-cards">
                <img class="dis-img" src="img/discount2.jpg" alt="" />
                <h1 class="dis-title">Delicious Pizza</h1>
                <p class="dis-details">50% off now</p>
            </div>
            <div class="discount-cards">
                <img class="dis-img" src="img/discount3.jpg" height="100%" alt="" />
                <h1 class="dis-title">American Burgers</h1>
                <p class="dis-details">S50% off now</p>
            </div>
        </div>
    </div>
    </div>



    <!-- Footer  -->
    <?php
            include 'footer.php';
            ?>

</body>
<script src="js/script.js"></script>

</html>