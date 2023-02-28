<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/LoginRegsiter.css" />
    <link rel="shortcut icon" type="image/jpg" href="/img/home-bg.jpg" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LogIn & Register</title>
</head>



<body>

    <?php
          include '../PizzaProject-EM-BM/DB/DB-CON.php';
          $model = new Model();
        //   echo var_dump( $model->getConn());
          $insert = $model->insert();
        ?>
    <?php
    include 'loginFunct.php'
    ?>
    <h1>PizzaHome</h1>
    <div class="main">
        <!-- SignIn -->
        <form action="" method="post">
            <div class="login">



                <h1 style="color: black">LOGIN</h1>
                <h4>Email</h4>
                <input type="text" id="email" name="Email" class="input" placeholder="Email">
                <p id="emailM" style="display: none; color: red; font-size: 15px">
                    Email should be greater than 8
                </p>
                <h4>Password</h4>
                <input class="input" type="password" id="password" name="Password" placeholder="Password" />
                <p id="passwordM" style="display: none; color: red; font-size: 15px">
                    Password should be greater than 8
                </p>
                <button class="btnSI" name="login_button" id="signinL">Sign In</button>
                <h3 class="signup" style="cursor: pointer; text-decoration: underline; color: blue">
        </form>
        SignUp
        </h3>
    </div>

    <!-- Sign Up -->

    <form action="" method="post">
        <div class="register">
            <h1 style="color: black">REGISTER</h1>

            <input class="input" type="name" name="EmriMbiemri" id="name" placeholder="Name and Lastname" />

            <input class="input" type="email" name="Email" id="emailR" placeholder="Email" />

            <input type="text" name="Adresa" class="input" placeholder="Adress">

            <input type="number" name="NrTel" class="input" placeholder="Number">

            <input class="input" type="password" name="Password" id="passwordR" placeholder="Password" />
            <button class="btnSU" type="submit" name="submit" id="signupR">Sign Up</button>
            <h3 class="signin" style="cursor: pointer; text-decoration: underline; color: blue">
                SignIn
            </h3>
        </div>
    </form>
    <div class="overlay">
        <a href="index.php">
            <!-- <h1 class="guest">Stay as a guest</h1> -->
            <button class="guest">Guest?</button>
        </a>
        <!-- <img src="https://images.unsplash.com/photo-1595757816291-ab4c1cba0fc2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" -->
        <!-- alt="" height="100%" width="100%" style="border-radius: 20px" draggable="false" /> -->
    </div>
    </div>
</body>
<script src="js/loginregister.js"></script>

</html>