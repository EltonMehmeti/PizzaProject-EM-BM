<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/product.css">
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/jpg" href="/img/home-bg.jpg" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pizza</title>
</head>



<body>
    <a href="index.php">

        <button class="scrollUp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="fill: red; width: 20%">
                <path
                    d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z" />
            </svg>
        </button>
    </a>

    <?php
              include './DB/DB-CON.php';
include 'loginFunct.php';

$model = new Model();
$id = $_REQUEST['id'];

// echo $_SESSION['auth_user']['user_id'];
// echo $id;
              $row = $model->editPizza($id);
              $insert= $model->insertOrders($id);
          ?>
    <div class="pizzaContainer">
        <!-- <div class="pizzaCtitle">
            <h3 class="pizzaCfirst">Fresh From Panipe</h3>
            <h1 class="pizzaCsecond">We Offer People Best Way To Eat Best Food</h1>
        </div> -->
        <div class="pizza-main">


            <!--  -->
            <div class="pizzas">

                <div class="left">

                    <img class="pizzaImg" width="500px" src="./img/<?php echo $row['Img']; ?>" alt="" />
                </div>
                <div class="right">

                    <h3 id="titulli"><?php echo $row['Titulli']; ?></h3>

                    <div class="details">
                        <span class="circle">
                            <h5>22cm</h5>
                        </span>

                        <span class="circle">
                            <h5>29cm</h5>
                        </span><br>
                    </div>
                    <p class="pizza-desc">
                        <?php echo $row['Pershkrimi']; ?>
                    </p>
                    <form action="" method="post">
                        <input style="display:none;" type="number" name="Cmimi" value="<?php echo $row['Cmimi']; ?>"
                            id="" class="form-control">
                        <h3><?php echo $row['Cmimi']; ?> $</h3>
                        <label for="">Quantity:</label>
                        <input type="number" name="quantity" class="input" id=""><br><br>
                        <button type="submit" name="submit" class="OrderButton">Order Now</button>
                    </form>
                </div>
            </div>




</body>

</html>