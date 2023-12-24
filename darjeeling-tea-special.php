<?php
session_start();
   if(!isset($_SESSION['username'])){
    header('location:login.php');
   }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <script
      src="https://kit.fontawesome.com/cfde7116d1.js"
      crossorigin="anonymous"
    ></script>

<!-- 
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    /> -->

    
    <!-- <link rel="stylesheet" href="asset/sproduct.css"> -->
    <link rel="stylesheet" href="asset/style.css" />
    <link rel="stylesheet" href="asset/sproduct.css" />
    <title>Kadak Teas</title>
  </head>
  <body>
    <section id="header">
      <a href="./index.php" class="new-kadak">
        <h3 class="logo-text">Kadak Tea</h3>
      </a>
      <nav id="nav">
        <ul id="navbar">
          <li><a href="index.php" id="home">Home</a></li>
          <li><a href="shop.php" id="shop" class="active">Shop</a></li>


          
          <?php 
    if (isset($_SESSION['username'])) : ?>
          <li>
            <a href="./myaccount.php" id="about"
              >Hi,
              <?php echo $_SESSION['username']; ?></a
            >
          </li>
          <li><a href="./logout.php" id="logout">Logout</a></li>
          <?php else : ?>
          <li><a href="./sign.php" id="about">Sign In</a></li>
          <?php 
    endif; 
   ?>



          <li><a href="contact.php" id="about">Contact</a></li>
          <li>
            <a href="cart.php" id="lg-bag"
              ><i class="fa-solid fa-cart-shopping"></i></a
            ><span id="cart-item">0</span>
          </li>
          <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
        </ul>
      </nav>
      <div id="mobile">
        <a href="cart.php" id="cart"
          ><i class="fa-solid fa-cart-shopping fa-xxl"></i
        ></a>
        <i id="bar" class="fas fa-outdent fa-xl"></i>
      </div>
    </section>

    <section id="product-details">
      <div class="single-pro-img">
        <img
          src="./asset/img/products/f1.jpg"
          width="90%"
          height="70%"
          id="MainImg"
          alt=""
        />
        <div class="small-img-group">
          <div class="small-img-col">
            <img
              src="./asset/img/products/f2.jpg"
              width="100%"
              class="small-img"
              height="75%"
              alt=""
              id="smImg-1"
            />
          </div>
          <div class="small-img-col">
            <img
              src="./asset/img/products/f3.jpg"
              width="100%"
              class="small-img"
              height="70%"
              alt=""
              id="smImg-2"
            />
          </div>
          <div class="small-img-col">
            <img
              src="./asset/img/products/f4.jpg"
              width="100%"
              class="small-img"
              height="70%"
              id="smImg-3"
              alt=""
            />
          </div>
          <div class="small-img-col">
            <img
              src="./asset/img/products/f5.jpg"
              width="100%"
              height="70%"
              class="small-img"
              id="smImg-4"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="single-pro-details">
        <h6><a href="index.php">Home</a>/<a href="shop.php">Tes</a></h6>
        <h4>Darjeeling Tea</h4>
        <h2>₹180</h2>
        <select name="" id="">
          <option value="" class="select">Weight</option>
          <option value="">100gm</option>
          <option value="">200gm</option>
          <option value="">250gm</option>
          <option value="">500gm</option>
        </select>
        <input type="number" value="1" />
        <button id="btn" class="btnShop">Add To Cart</button>
        <h4>Product Details</h4>
        <p>Price: 199</p>
        <br />
        <p>Origin: Darjeelings</p>
        <br />
        <p>Taste: Wow</p>

        <!-- <p>Pack Of: Pack of 1</p>
        <p>Occasion: Casual Wear</p>
        <p>Collar: Regular Collar</p> -->
      </div>
      <!-- banner -->
      <section id="sm-banner">
        <div class="banner-box box2">

          <h4>WATER</h4>
          <span>180 ml</span>

          <h4>TEMPERATURE</h4>
          <span>90°C-95°C</span>

          <h4>LEAVES</h4>
          <span>1 tsp / 2 g</span>

          <h4>TIME</h4>
          <span>5 Mins </span>

          <h4>CAFFEINE</h4>
          <span>High </span>

        </div>
        
      </section>
    </section>
    <!-- Feature Products -->
    <section id="product-1" class="section-p1">
      <h2>New Collection</h2>
      <h4>Summer Collection New Modern Shirt</h4>
      <div class="pro-container">
        <div class="pro">
          <img
            src="asset/img/products/n1.jpg"
            alt=""
            onclick="window.location.href='darjeeling-tea-gold.php';"
          />
          <div class="dis">
            <span>Kadak</span>
            <h5>India's Best Tea is here</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>18₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img
            src="asset/img/products/n2.jpg"
            alt=""
            onclick="window.location.href='darjeeling-tea-platinum.php';"
          />
          <div class="dis">
            <span>Kadak</span>
            <h5>India's Best Tea is here</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>120₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img
            src="asset/img/products/n3.jpg"
            alt=""
            onclick="window.location.href='sproduct3.php';"
          />
          <div class="dis">
            <span>Kadak</span>
            <h5>India's Best Tea is here</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>10₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img
            src="asset/img/products/n4.jpg"
            alt=""
            onclick="window.location.href='sproduct4.php';"
          />
          <div class="dis">
            <span>Kadak</span>
            <h5>India's Best Tea is here</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>80₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
    </section>
    <!-- news-Letter Section -->
    <section id="newsletter" class="">
      <div class="newsText">
        <h4>Signup For NewsLetter</h4>
        <h2>Get Email Updates about Our Latest Products</h2>
      </div>
      <div class="form">
        <input type="email" id="" placeholder="Enter Your Email Address" />
        <button class="normal">Signup</button>
      </div>
    </section>

    <!-- Footer Section -->
    <footer id="footer" class="section-p1">
      <div class="col">
        <a href="#main" class="new-kadak">
          <h3 class="logo-text">Kadak Tea</h3>
        </a>
        <h4>Contact</h4>
        <p><strong>Address: </strong>Moyna, West Bengal,India</p>
        <p><strong>Phone:</strong> 7550814404</p>
        <p><strong>Hours:</strong> 9:00-17:00, Mon-Fri</p>
        
    <!-- <h4>Follow Us</h4> -->
    <ul>
          <li>
            <a target="_blank" href="https://www.instagram.com/____sujal_/"
              ><i class="fa-brands fa-instagram"></i
            ></a>
          </li>
          <li>
            <a target="_blank" href="https://wa.me/917667176531"
              ><i class="fa-brands fa-whatsapp"></i
            ></a>
          </li>
          <li>
            <a target="_blank" href="https://www.facebook.com/BRAND0436"
              ><i class="fa-brands fa-facebook"></i
            ></a>
          </li>
          <li>
            <a target="_blank" href="https://twitter.com/kumarsujal0436"
              ><i class="fa-brands fa-square-x-twitter"></i
            ></a>
          </li>
        </ul>
     
      </div>
      <div class="col">
        <h4>About</h4>
        <p>About us</p>
        <p>Delivery Information</p>
        <p>Privacy Policy</p>
        <p>Contact Us</p>
      </div>
      <div class="col">
        <h4>My Account</h4>
        <p>
          <a href="sign.php" style="text-decoration: none">Sign In</a>
        </p>
        <p>View Cart</p>
        <p>Track My Order</p>
        <p>help</p>
      </div>
      <div class="col payment">
        <h4>Install App</h4>
        <p>from App Store or Google Play</p>
        <div class="box">
          <div class="box-1">
            <a
              href="https://www.apple.com/in/?afid=p238%7Cs6Ww8AeKv-dc_mtid_187079nc38483_pcrid_653909215862_pgrid_112258962227_pntwk_g_pchan__pexid__&cid=aos-IN-kwgo-brand--slid---product-"
              ><i class="fa-brands fa-apple"></i
            ></a>
            <h6>Download on the App Store</h6>
            <h3>App Store</h3>
          </div>
          <div class="box-2">
            <a
              href="https://play.google.com/store/games?utm_source=apac_med&utm_medium=hasem&utm_content=Jul0121&utm_campaign=Evergreen&pcampaignid=MKT-EDR-apac-in-1003227-med-hasem-py-Evergreen-Jul0121-Text_Search_BKWS-BKWS%7CONSEM_kwid_43700058906718334_creativeid_480977734745_device_c&gclid=Cj0KCQjwjryjBhD0ARIsAMLvnF9g6xaAqw-frJsUZy6kWpMX08frAULCc4_4uHyLXN0HtHZBHBXfqsQaAusKEALw_wcB&gclsrc=aw.ds"
              ><i class="fa-solid fa-mobile"></i
            ></a>
            <h6>Download on the App Store</h6>
            <h3>App Store</h3>
          </div>
        </div>
        <p>Secure Payment GateWay</p>
        <ul>
          <li>
            <a href=""><i class="fa-brands fa-cc-visa fa-xl"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-brands fa-cc-mastercard fa-xl"></i></a>
          </li>
        </ul>
      </div>
    </footer>
    <!-- Java Script -->
    <script>
      let mainImg = document.getElementById("MainImg");
      let smallImg1 = document.getElementById("smImg-1");
      let smallImg2 = document.getElementById("smImg-2");
      let smallImg3 = document.getElementById("smImg-3");
      let smallImg4 = document.getElementById("smImg-4");
      smallImg1.addEventListener("click", () => {
        mainImg.src = "https://i.ibb.co/S00HF3m/f1.jpg";
      });
      smallImg2.addEventListener("click", () => {
        mainImg.src = "https://i.ibb.co/S00HF3m/f1.jpg";
      });
      smallImg3.addEventListener("click", () => {
        mainImg.src = "https://i.ibb.co/mF1nrpg/f3.jpg";
      });
      smallImg4.addEventListener("click", () => {
        mainImg.src = "hhttps://i.ibb.co/mF1nrpg/f3.jpg";
      });
    </script>

    <script src="asset/script.js"></script>
  </body>
</html>
