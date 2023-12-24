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

    
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    /> -->
    <link rel="stylesheet" href="asset/style.css" />
    <title>Kadak Tea</title>
  </head>
  <body>
    <section id="header">
      <a href="" class="new-kadak">
        <h3 class="logo-text">Kadak Tea</h3>
      </a>
      <nav id="nav">
        <ul id="navbar">
          <li><a href="#main" id="home" class="active">Home</a></li>
          <li><a href="shop.php" id="shop">Shop</a></li>

          <?php 
    if (isset($_SESSION['username'])) : ?>
          <li>
            <a href="./myaccount.php" id="about"
              >Welcome,
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

    <section id="main">
      <h4>Best Tea IN India</h4>
      <h2>Kadak Tea</h2>

      <h1>Start Your Day With Kadak</h1>
      <a href="shop.php" target="_blank"><button>Shop</button></a>
    </section>
    <!-- feature title -->
    <section id="title">
      <h3>Why Kadak Tea?</h3>
    </section>
    <section id="feature" class="section-p1">
      <div class="fe-box">
        <img src="asset/img/features/f1.png" alt="" />
        <h6>Free Shipping</h6>
      </div>
      <div class="fe-box">
        <img src="asset/img/features/f2.png" alt="" />
        <h6>Online Order</h6>
      </div>
      <div class="fe-box">
        <img src="asset/img/features/f3.png" alt="" />
        <h6>Save Money</h6>
      </div>
      <div class="fe-box">
        <img src="asset/img/features/f4.png" alt="" />
        <h6>Great Offers</h6>
      </div>
      <div class="fe-box">
        <img src="asset/img/features/f5.png" alt="" />
        <h6>Happy Sell</h6>
      </div>
      <div class="fe-box">
        <img src="asset/img/features/f6.png" alt="" />
        <h6>24/7 Support</h6>
      </div>
    </section>

    <!-- pop up -->
    <div class="popupbanner" id="timeoutbanner">
      <a href="#" id="closeBtn"><i class="fa-solid fa-xmark"></i></a>
      <h4>Special Offers</h4>
      <h2>Upto- <span>70% offer</span> All Tea</h2>
      <button>Shop Now</button>
    </div>

    <!-- Products -->
    <section id="product-1" class="section-p1">
      <h2>Darjeeling Tea</h2>
      <p>Taste The Darjeeling Tea</p>

      <div class="pro-container">
        <div class="pro">
          <img class="prodCategory1" src="asset/img/products/n1.jpg" alt="" />

          <div class="dis">
            <span>Darjeeling Tea</span>
            <h5>Darjeeling Tea Gold</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>₹180</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>

        <div class="pro">
          <img class="prodCategory2" src="asset/img/products/n2.jpg" alt="" />
          <div class="dis">
            <span>Darjeeling Tea</span>
            <h5>Darjeeling Tea Premium</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>180₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory3" src="asset/img/products/n3.jpg" alt="" />
          <div class="dis">
            <span>Darjeeling Tea</span>
            <h5>Darjeeling Tea Royale</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>199₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory4" src="asset/img/products/n4.jpg" alt="" />
          <div class="dis">
            <span>Darjeeling Tea</span>
            <h5>Darjeeling Tea Special</h5>
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

    <!-- assam tea  -->

    <section id="product-1" class="section-p1">
      <h2>Assams Tea</h2>
      <p>Taste The Assam Tea</p>
      <div class="pro-container">
        <div class="pro">
          <img class="prodCategory1" src="asset/img/products/n5.jpg" alt="" />
          <div class="dis">
            <span>Assam Tea</span>
            <h5>Assam Tea Gold</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>₹180</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory2" src="asset/img/products/n6.jpg" alt="" />
          <div class="dis">
            <span>Assam Tea</span>
            <h5>Assams Tea Premium</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>180₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory3" src="asset/img/products/n7.jpg" alt="" />
          <div class="dis">
            <span>Assam Tea</span>
            <h5>Assam Tea Royale</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>199₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory4" src="asset/img/products/n8.jpg" alt="" />
          <div class="dis">
            <span>Assam Tea</span>
            <h5>Assam Tea Special</h5>
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

    <!-- special tea  -->

    <section id="product-1" class="section-p1">
      <h2>Kadak Special Tea</h2>
      <p>Taste The Kadak Special Tea</p>
      <div class="pro-container">
        <div class="pro">
          <img class="prodCategory1" src="asset/img/products/f1.jpg" alt="" />
          <div class="dis">
            <span>Kadak Tea</span>
            <h5>Kadak Tea Gold</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>₹180</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory4" src="asset/img/products/f2.jpg" alt="" />
          <div class="dis">
            <span>Kadak Tea</span>
            <h5>Kadak Tea Premium</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>180₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory2" src="asset/img/products/f3.jpg" alt="" />
          <div class="dis">
            <span>Assam Tea</span>
            <h5>Kadak Tea Royale</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>199₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory3" src="asset/img/products/f4.jpg" alt="" />
          <div class="dis">
            <span>Kadak Tea</span>
            <h5>Kadak Tea Special</h5>
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

    <!-- all tea  -->

    <section id="product-1" class="section-p1">
      <h2>All Tea</h2>
      <p>Checkout Our All variety of Tea Collection</p>
      <div class="pro-container">
        <div class="pro">
          <img class="prodCategory1" src="asset/img/products/f5.png" alt="" />
          <div class="dis">
            <span>Kadak Tea</span>
            <h5>Kadak Tea Gold</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>₹180</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory2" src="asset/img/products/f6.png" alt="" />
          <div class="dis">
            <span>Kadak Tea</span>
            <h5>Kadak Tea Premium</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>180₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory3" src="asset/img/products/f7.png" alt="" />
          <div class="dis">
            <span>Assam Tea</span>
            <h5>Kadak Tea Royale</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>199₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory4" src="asset/img/products/f8.png" alt="" />
          <div class="dis">
            <span>Kadak Tea</span>
            <h5>Kadak Tea Special</h5>
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

        <div class="pro">
          <img class="prodCategory1" src="asset/img/products/n1.jpg" alt="" />
          <div class="dis">
            <span>Darjeeling Tea</span>
            <h5>Darjeeling Tea Gold</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>₹180</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory2" src="asset/img/products/n2.jpg" alt="" />
          <div class="dis">
            <span>Darjeeling Tea</span>
            <h5>Darjeeling Tea Premium</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>180₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory3" src="asset/img/products/n3.jpg" alt="" />
          <div class="dis">
            <span>Darjeeling Tea</span>
            <h5>Darjeeling Tea Royale</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>199₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory4" src="asset/img/products/n4.jpg" alt="" />
          <div class="dis">
            <span>Darjeeling Tea</span>
            <h5>Darjeeling Tea Special</h5>
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
        <div class="pro">
          <img class="prodCategory1" src="asset/img/products/n5.jpg" alt="" />
          <div class="dis">
            <span>Assam Tea</span>
            <h5>Assam Tea Gold</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>₹180</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory2" src="asset/img/products/n6.jpg" alt="" />
          <div class="dis">
            <span>Assam Tea</span>
            <h5>Assam Tea Premium</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>180₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory3" src="asset/img/products/n7.jpg" alt="" />
          <div class="dis">
            <span>Assam Tea</span>
            <h5>Assam Tea Royale</h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>199₹</h4>
          </div>
          <a class="btnShop"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
          <img class="prodCategory4" src="asset/img/products/n8.jpg" alt="" />
          <div class="dis">
            <span>Assam Tea</span>
            <h5>Assam Tea Special</h5>
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
        <p><strong>Address: </strong>Gharuan, Punjab,India</p>
        <p><strong>Phone:</strong> 7667176531</p>
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
          <a href="./login.php" style="text-decoration: none">Sign In</a>
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
    <script>
      // pop up menu
      setTimeout(myGreeting, 3000);
      function myGreeting() {
        document.getElementById("timeoutbanner").style.display = "flex";
        document.getElementById("main").style.filter = "blur(6px)";
      }
      document.getElementById("closeBtn").addEventListener("click", () => {
        document.getElementById("timeoutbanner").style.display = "none";
        document.getElementById("main").style.filter = "none";
      });
    </script>

    <script>
      // JavaScript
      const prodCategory1Elements = document.querySelectorAll(".prodCategory1");

      prodCategory1Elements.forEach(function (element) {
        element.addEventListener("click", function () {
          window.location.href = "./darjeeling-tea-gold.php";
        });
      });
    </script>

    <script>
      // JavaScript
      const prodCategory2Elements = document.querySelectorAll(".prodCategory2");

      prodCategory2Elements.forEach(function (element) {
        element.addEventListener("click", function () {
          window.location.href = "./darjeeling-tea-platinum.php";
        });
      });
    </script>

    <script>
      // JavaScript
      const prodCategory3Elements = document.querySelectorAll(".prodCategory3");

      prodCategory3Elements.forEach(function (element) {
        element.addEventListener("click", function () {
          window.location.href = "./darjeeling-tea-royale.php";
        });
      });
    </script>

    <script>
      // JavaScript
      const prodCategory4Elements = document.querySelectorAll(".prodCategory4");

      prodCategory4Elements.forEach(function (element) {
        element.addEventListener("click", function () {
          window.location.href = "./darjeeling-tea-special.php";
        });
      });
    </script>

    <script src="asset/script.js"></script>
  </body>
</html>
