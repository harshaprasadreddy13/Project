<!DOCTYPE html>
<html lang="en" html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
    <title>Items Page</title>
    <link rel="stylesheet" href="Item.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body style="background-color: black;">
    <?php
    session_start();
    $username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest';
    $error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
    unset($_SESSION['error']); ?>
        <div class="W">
                SNACK CITY
            <div class="navv">
                <h10 style="text-align:center;margin:auto;font-size: 40px;"><span>Hello, <?= htmlspecialchars($username) ?></span></h10>
                <a href="logout.php"  style="text-decoration:none;color:white;color:white;font-size:27px"><i class="fa-solid fa-user"></i> Log out</a>
            </div>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner" style="color: black;background-color: black;">
                    <div class="carousel-item active">
                        <center><img src="ham.jpg" class="d-block" alt="..." height="420px" width="600px"></center>
                    </div>
                    <div class="carousel-item">
                        <center><img src="mid.jpg" class="d-block" alt="..." height="420px" width="600px"></center>
                    </div>
                    <div class="carousel-item">
                        <center><img src="frnds.jpg" class="d-block" alt="..." height="420px" width="600px"></center>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="c">
    <div class="flex-container">
        <div class="Box1">
            <div class="Pizz">
                <img src="Pizza1.jpeg" alt="Pizza">
            </div>
            <h1>Pizza</h1>
                <p><b>Flavours:</b></p>
            <ul>
                <li>Chicken Pizaa</li>
                <li>Cheesy Vegetable Pizza</li>
            </ul>
            <div class="btns">
                <a href="Form.html" target="_blank" style="text-decoration: none ;color:white;color:white;text-align: center;">Order
            </a>
        </div>
        </div>
        <div class="Box2">
            <div class="Burger">
                <img src="Burger.jpeg" alt="Burger" height="148px" width="239px">
            </div>
            <h1>Burger</h1>
                <p><b>Flavours:</b></p>
            <ul>
                <li>Chicken Burger</li>
                <li>Cheesy Vegetable Burger</li>
            </ul>
            <div class="btns">
                <a href="Form1.html" target="_blank" style="text-decoration: none ;color:white;color:white">Order
                </a>
        </div>
        </div>
        <div class="Box3">
            <div class="Momo">
                <img src="Momo.jpeg" alt="Momo" height="148px" width="239px">
            </div>
            <h1>Momos</h1>
            <p><b>Flavours:</b></p>
            <ul>
                <li>Fried Momos</li>
                <li>Steamed Momos</li>
            </ul>
            <div class="btns">
                <a href="Form2.html" target="_blank" style="text-decoration: none ;color:white;color:white">
                    Order
                </a>
            </div>
        </div>
        <div class="Box4">
            <div class="Fries">
                <img src="Fries.jpeg" alt="Momo" height="148px" width="239px">
            </div>
            <h1>Fries</h1>
            <p><b>Flavours:</b></p>
            <ul>
                <li>Peri Peri</li>
                <li>French Fries</li>
            </ul>
            <div class="btns">
                <a href="Form3.html" target="_blank" style="text-decoration: none ;color:white;color:white">
                    Order
                </a>
            </div>
        </div>
        <div class="Box5">
            <div class="Rolls">
                <img src="Roll.jpeg" alt="Roll" height="148px" width="239px">
            </div>
            <h1>Rolls</h1>
            <p><b>Flavours:</b></p>
            <ul>
                <li>Egg Gobi</li>
                <li>Chicken</li>
            </ul>
            <div class="btns">
                <a href="Form4.html" target="_blank" style="text-decoration: none ;color:white;color:white">
                    Order
                </a>
            </div>
        </div>
        <div class="Box6">
            <div class="Gobi">
                <img src="Manchurian.jpeg" alt="Roll" height="148px" width="239px">
            </div>
            <h1>Gobi</h1>
            <p><b>Flavours:</b></p>
            <ul>
                <li>Chilli Gobi</li>
                <li>Gobi 65</li>
            </ul>
            <div class="btns">
                <a href="Form5.html" target="_blank" style="text-decoration: none ;color:white;color:white">
                    Order
                </a>
            </div>
        </div>
        <div class="Box7">
            <div class="Noodles">
                <img src="Noodles.jpeg" alt="Roll" height="148px" width="239px">
            </div>
            <h1>Noodles</h1>
            <p><b>Flavours:</b></p>
            <ul>
                <li>Chicken Noodles</li>
                <li>Vegetable Noodles</li>
            </ul>
            <div class="btns">
                <a href="Form6.html" target="_blank" style="text-decoration: none ;color:white;color:white">
                    Order
                </a>
            </div>
        </div>
        <div class="Box8">
            <div class="Sandwich">
                <img src="Sanwich.jpg" alt="Roll" height="148px" width="239px">
            </div>
            <h1>Sandwich</h1>
            <p><b>Flavours:</b></p>
            <ul>
                <li>Chicken Sandwich</li>
                <li>Mushroom Sandwich</li>
            </ul>
            <div class="btns">
                <a href="Form7.html" target="_blank" style="text-decoration: none ;color:white;color:white">
                   Order
                </a>
            </div>
        </div>
    </div>
    </body>
    </html>