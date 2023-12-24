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


    <link rel="stylesheet" href="asset/style.css" />
    <title>Kadak Tea</title>
  </head>
  <body>
    <!-- header section -->
    <section id="header">
      <a href="./index.php" class="new-kadak">
        <h3 class="logo-text">Kadak Tea</h3>
      </a>
      <nav id="nav">
        <ul id="navbar">
          <li><a href="index.php" id="home">Home</a></li>
          <li><a href="shop.php" id="shop">Shop</a></li>

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


          <li><a href="contact.php" id="contact">Contact</a></li>
          <li>
            <a href="cart.php" class="active" id="lg-bag"
              ><i class="fa-solid fa-cart-shopping"></i
            ></a>
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
    <!-- page Header -->
    <section id="page-header" class="about-header-c">
      <!-- <h2>Let's See</h2> -->
    </section>
    <!-- cart Section -->
    <section id="cart" class="section-p1">
      <table width="100%">
        <thead>
          <tr>
            <td>Remove</td>
            <td>Image</td>
            <td>Product</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal</td>
          </tr>
        </thead>
        <tbody>
          <tr id="nth1">
            <td>
              <a style="cursor: pointer" onclick="nth1()" id="close-btn1"
                ><i class="far fa-times-circle"></i
              ></a>
            </td>
            <td><img src="asset/img/products/f1.jpg" alt="" /></td>
            <td>Darjeeling Gold</td>
            <td>180</td>
            <td><input type="number" value="1" id="productN1" /></td>
            <td id="update1">180</td>
          </tr>
          <tr id="nth2">
            <td>
              <a style="cursor: pointer" onclick="nth2()" id="close-btn2"
                ><i class="far fa-times-circle"></i
              ></a>
            </td>
            <td><img src="asset/img/products/f2.jpg" alt="" /></td>
            <td>Assam Special Tea</td>
            <td>190</td>
            <td><input type="number" value="1" id="productN2" /></td>
            <td id="update2">190</td>
          </tr>
          <tr id="nth3">
            <td>
              <a style="cursor: pointer" onclick="nth3()" id="close-btn3"
                ><i class="far fa-times-circle"></i
              ></a>
            </td>
            <td><img src="asset/img/products/f3.jpg" alt="" /></td>
            <td>Kadak Special</td>
            <td>70</td>
            <td><input type="number" value="1" id="productN3" /></td>
            <td id="update3">70</td>
          </tr>
        </tbody>
      </table>
    </section>
    <!-- pop up -->
    <div class="popupbanner" id="Contacttimeoutbanner">
      <a href="#" id="closeBtn"><i class="fa-solid fa-xmark"></i></a>
      <h4>Congratulations!</h4>
      <h2>You got 70% off</h2>
    </div>
    <!-- coupon and Total -->
    <section id="cart-add" class="section-p1">
      <div class="coupon">
        <h3>Apply Coupon</h3>
        <div>
          <input type="text" placeholder="#FEE" id="input" />
          <button id="normal">Apply</button>
        </div>
      </div>
      <!-- total -->
      <div class="total">
        <h3>Cart Total</h3>
        <table>
          <tr>
            <td>Cart Subtotal</td>
            <td id="final-value">440</td>
          </tr>
          <tr>
            <td>Shipping</td>
            <td>Free</td>
          </tr>
          <tr id="sp-coupon">
            <td>Offer from <span> KADAKNEW</span></td>
            <td>70% off</td>
          </tr>
          <tr>
            <td><strong>Total</strong></td>
            <td><strong id="offer">440</strong></td>
          </tr>
        </table>
        <a href="payment.php"><button>Proceed to checkout</button></a>
      </div>
    </section>
    <!-- Footer Section -->
    <footer id="footer" class="section-p1 section-m1">
      <div class="col">
        <a href="./index.php" class="new-kadak">
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
        <p>Sign In</p>
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
      document.getElementById("closeBtn").addEventListener("click", (e) => {
        document.getElementById("Contacttimeoutbanner").style.display = "none";
        e.preventDefault();
      });
    </script>
    <script src="asset/script.js"></script>
  </body>
</html>
