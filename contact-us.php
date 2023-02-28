<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/jpg" href="/img/home-bg.jpg" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/about-us.css" />
    <link rel="stylesheet" href="css/contact-us.css" />
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
    <a href="#main">
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
    <div class="headContent">
        <h1>Contact Us</h1>
        <a href="index.html">
            <h4>HOME</h4><span class="material-symbols-outlined"
                style="color: white; font-size: 15px; margin-left: 7px;line-height: 20px; ">
                arrow_forward_ios
            </span>
        </a><a href="contact-us.html">
            <h4> CONTACT US</h4>
        </a>
    </div>
    </div>

    <main>
        <div class="mainCU" id="main">
            <div class="left">

                <div class="containerQuery">

                    <h1>Have Any Query?</h1>
                    <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s
                    </div>
                </div>

                <div class="informationSection" style="margin-top: 50px">
                    <div class="infoDetail">
                        <span class="material-symbols-outlined" style="padding: 0">
                            location_on
                        </span>
                        <p class="textDetail">
                            090983 Greenville Avenue,
                            <br />
                            California, TX 70240
                            <br />
                            New York
                        </p>
                    </div>

                    <div class="infoDetail">
                        <span class="material-symbols-outlined" style="padding: 0">
                            mail
                        </span>
                        <p class="textDetail">
                            support@example.com
                            <br />
                            info@Corpr-R.com
                        </p>
                    </div>
                    <div class="infoDetail">
                        <span class="material-symbols-outlined" style="padding: 0">
                            phone_enabled
                        </span>
                        <p class="textDetail">
                            +123 456 7890
                            <br />
                            +123 456 7890
                        </p>
                    </div>
                </div>

            </div>

            <div class="messageForm">

                <div class="row">
                    <div class="title">
                        <h2>Drop Us A Line</h2>
                    </div>

                    <?php
            //   include './DB/DB-CON.php';
              $model = new Model();
              $insert = $model->insertComments();
          ?>
                    <form action="" method="post">
                        <div class="Components">
                            <input type="text" name="Emri" placeholder="First Name" />
                        </div>

                        <div class="Components">
                            <input type="text" name="Mbiemri" placeholder="Last Name" />
                        </div>

                        <div class="messageComponent">
                            <textarea name="Mesazhi" id="" cols="30" rows="10" placeholder="Your message..."></textarea>
                        </div>
                        <div class="butoni">
                            <!-- <input type="submit" name="submit" value="Send Message" class="butoniIStl" /> -->
                            <button type="submit" name="submit" class="butoniIStl">Send a Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

        <!-- ///////////////////////////////////////////////////////// -->

        <!-- ///////////////////////////////////////////////////////// -->
        <div class="content">
            <div class="topDiv">
                <div class="toAlingTop">

                    <div class="leftContent">

                        <img src="img/client.png" alt="" />
                    </div>
                    <div class="rightContent">

                        <div class="clientsMsgs">
                            <p>ITS BEST SIMPLE & USEFUL</p>
                            <h2>What Our Client Says</h2>
                        </div>

                        <div id="slideshow">
                            <div class="slide">
                                <p>
                                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    It has roots in a piece of classical Latin literature from 45 BC,
                                    making it over 2000 years old.
                                </p>
                                <div class="autori">
                                    <h3>Gonzalez</h3>
                                    <p>Founder</p>
                                </div>
                            </div>

                            <div class="slide">
                                <p>
                                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    It has roots in a piece of classical Latin literature from 45 BC,
                                    making it over 2000 years old.
                                </p>
                                <div class="autori">
                                    <h3>David</h3>
                                    <p>Founder</p>
                                </div>
                            </div>

                            <div class="slide">
                                <p>
                                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    It has roots in a piece of classical Latin literature from 45 BC,
                                    making it over 2000 years old.
                                </p>
                                <div class="autori">
                                    <h3>Pedro</h3>
                                    <p>Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="deliveryContent">

            <div class="fotoja">
                <img src="img/pizzaboy.png" alt="" class="pizzaboyIMG" />
            </div>

            <div class="textDelivery">
                <h1>Get Free Delivery!</h1>
                <p>
                    As well known and we are very busy all days beforeso we can
                    guarantee your seat.
                </p>
            </div>

            <button class="butoniCall">
                <span class="material-symbols-outlined" style="line-height: 25px;"> call </span>
                Call: <br />
                +123666604
            </button>

        </div>
        </div>
    </main>
    <?php
            include 'footer.php';
            ?>


</body>
<script>
"use strict";
var slideIndex = 0;
var slides = document.getElementsByClassName("slide");

// Function to show next slide
function showNextSlide() {
    // Hide current slide
    slides[slideIndex].style.left = "100%";

    // Increment slide index
    slideIndex++;

    // Reset slide index if at end of slides
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }

    // Show next slide
    slides[slideIndex].style.left = "0";
}

// Show next slide every 3 seconds
setInterval(showNextSlide, 3000);
</script>
<script src="js/script.js"></script>

</html>