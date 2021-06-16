<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">


    <link rel="stylesheet" href="assets/css/userstyle.css"> 
    <link rel="stylesheet" href="assets/css/mainIndex.css"> 

</head>
<body>
    <div class="container">
        <div class="header">
            <div class="hdtext">
                <a class="active" id="sound" href="#">Sound On</a></div>
            <h1>Listen to your favorite singers</h1>
            <a href="logout.php">Logout</a>
        </div>
        <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <div class="toggle"></div>
            <div class="toggle"></div>
            <div class="toggle"></div>
        </span>
        <a href="#" class="logo"></a>
        <ul class="main-nav" id="js-menu">
        <li>
                <a href="Userpage.php" class="nav-links">Home</a>
            </li>
            <li>
                <a href="Userpage.php" class="nav-links">Top Albums</a>
            </li>
                <a href="topsingers.php" class="nav-links">Top Singers</a>
            </li>
            <li>
                <a href="topsongs.php" class="nav-links">Top Songs</a>
            </li>
            <li>
                <a href="order.php" class="nav-links">Place Order</a>
            </li>
        </ul>
    </nav>
    <center>
        <?php
        session_start();
            if($_SESSION["uname"]) {
            ?>
           <h3 style="color:brown"> Welcome <?php echo $_SESSION["uname"]; ?>. </h3>
            <?php
            }
            ?>
    </center>

    <div class = "products">
        <div class = "containerM">
            <h1 class = "lg-title">Album List</h1>

            <div class = "product-items">
                <!-- single product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img style="height: 200px;" src = "assets/images/WDWG.png" alt="product image"><br>
                            <figcaption>Where Do we Go? | Billie Elish <br/> $30.00</figcaption><br/>
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> Add to cart
                            </button>
                            <button type = "button" class = "btn-buy"> Buy now
                            </button>
                        </div>
                    </div>

                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "assets/images/twowindows.jpg" alt="product image"><br>
                            <figcaption>Two Windows | Alec Benjamin <br/> $20.00</figcaption><br/>
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> Add to cart
                            </button>
                            <button type = "button" class = "btn-buy"> Buy now
                            </button>
                        </div>
                    </div>

                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "assets/images/myboy.png" alt="product image"><br>
                            <figcaption>My Boy | Billie Elish <br/> $30.00</figcaption><br/>
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> Add to cart
                            </button>
                            <button type = "button" class = "btn-buy"> Buy now
                            </button>
                        </div>
                    </div>

                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "assets/images/fearless.jpg" alt="product image"><br>
                            <figcaption>Fearless | Taylor Swift <br/> $30.00</figcaption><br/>
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> Add to cart
                            </button>
                            <button type = "button" class = "btn-buy"> Buy now
                            </button>
                        </div>
                    </div>

                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "assets/images/roses.jpg" alt="product image"><br>
                            <figcaption>Roses | Kina <br/> $30.00</figcaption><br/>
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> Add to cart
                            </button>
                            <button type = "button" class = "btn-buy"> Buy now
                            </button>
                        </div>
                    </div>

                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "assets/images/hals.jpg" alt="product image"><br>
                            <figcaption>Badlands | Halsey <br/> $30.00</figcaption><br/>
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> Add to cart
                            </button>
                            <button type = "button" class = "btn-buy"> Buy now
                            </button>
                        </div>
                    </div>

                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "assets/images/anti.jpeg" alt="product image"><br>
                            <figcaption>Anti | Rihanna<br/> $30.00</figcaption><br/>
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> Add to cart
                            </button>
                            <button type = "button" class = "btn-buy"> Buy now
                            </button>
                        </div>
                    </div>

                </div>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "assets/images/wonder.jpg" alt="product image"><br>
                            <figcaption>Wonder | Shawn Mendes <br/> $30.00</figcaption><br/>
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> Add to cart
                            </button>
                            <button type = "button" class = "btn-buy"> Buy now
                            </button>
                        </div>
                    </div>

                </div>
                <!-- end of single product -->
                <!-- single product -->
                <
                <!-- end of single product -->
            </div>
        </div>
    </div>
    
    </div>
    <div class="footer">
        <p>All Right Reversed &copy; 2021</p>
    </div>
   
   
    <script>
        let mainNav = document.getElementById('js-menu');
        let navBarToggle = document.getElementById('js-navbar-toggle');

        navBarToggle.addEventListener('click', function () {

            mainNav.classList.toggle('active');
});
    
    </script>
    </body>
</html>