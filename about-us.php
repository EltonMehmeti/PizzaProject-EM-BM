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
    <link rel="stylesheet" href="css/about-us.css" />
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
    <a href="#head">
        <button class="scrollUp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="fill: red; width: 20%">
                <path
                    d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z" />
            </svg>
        </button>
    </a>

    <?php
include 'header.php' 
?>

    <div class="headContent" id="head">
        <h1>About Us</h1>
        <a href="index.php">
            <h4>HOME</h4><span class="material-symbols-outlined"
                style="color: white; font-size: 15px; margin-left: 7px;line-height: 20px;">
                arrow_forward_ios
            </span>
        </a><a href="about-us.php">
            <h4>ABOUT US</h4>
        </a>
    </div>


    <div class="mainSection">
        <div class="titulli">
            <h3 style="line-height: 20px;">WHY PEOPLE CHOOSE US</h3>
            <h1>Our Team</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>

        <div class="ourTeam">
            <div class="card">
                <img class="otCard" src="img/puntori1.png" alt="">
                <div class="otContainer">
                    <h1 class="otName">Jeffery Newman</h1>
                    <p class="otDetails">Taste Bud</p>
                </div>
            </div>

            <div class="card">
                <img class="otCard" src="img/puntori2.png" alt="">
                <div class="otContainer">
                    <h1 class="otName">Christopher Mayo</h1>
                    <p class="otDetails">Meals Specialistd</p>
                </div>
            </div>


            <div class="card">
                <img class="otCard" src="img/puntori3.png" alt="">
                <div class="otContainer">
                    <h1 class="otName">Douglass Foster</h1>
                    <p class="otDetails">Meals Specialistd</p>
                </div>
            </div>

            <div class="card">
                <img class="otCard" src="img/puntori4.png" alt="">
                <div class="otContainer">
                    <h1 class="otName">Ismael Oliver</h1>
                    <p class="otDetails">Buffet Manager</p>
                </div>
            </div>

            <div class="card">
                <img class="otCard" src="img/puntori5.png" alt="">
                <div class="otContainer">
                    <h1 class="otName">Ismael Oliver</h1>
                    <p class="otDetails">Chief Cook</p>
                </div>
            </div>

            <div class="card">
                <img class="otCard" src="img/puntori6.png" alt="">
                <div class="otContainer">
                    <h1 class="otName">Ismael Oliver</h1>
                    <p class="otDetails">Head Chef</p>
                </div>
            </div>

            <div class="card">
                <img class="otCard" src="img/puntori7.png" alt="">
                <div class="otContainer">
                    <h1 class="otName">Ismael Oliver</h1>
                    <p class="otDetails">Head Chef</p>
                </div>
            </div>

            <div class="card">
                <img class="otCard" src="img/puntori8.png" alt="">
                <div class="otContainer">
                    <h1 class="otName">Ismael Oliver</h1>
                    <p class="otDetails">Head Chef</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php
            include 'footer.php';
            ?>


</body>
<script src="js/script.js"></script>

</html>