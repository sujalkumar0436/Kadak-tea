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
    <!-- header section -->
    <section id="header">
      <a href="./index.php" class="new-kadak">
        <h3 class="logo-text">Kadak Tea</h3>
      </a>
      <nav id="nav">
        <ul id="navbar">
          <li><a href="index.php" id="home" >Home</a></li>
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
          <li><a href="contact.php" id="contact" class="active">Contact</a></li>
          <li><a href="cart.php" id="lg-bag"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
    
    </section>
    <!-- contact details -->
    <section id="contact-details" class="section-p1">
      <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit One of Our Locations</h2>
        <h3>Main Office</h3>
        <div>
          <li>
            <i class="far fa-map"></i>
            <p>Gharuan, Punjab,India</p>
          </li>
          <li>
            <i class="far fa-envelope"></i>
            <p>kumarsujal@0436gmail.com</p>
          </li>
          <li>
            <i class="fas fa-phone-alt"></i>
            <p>7667176531</p>
          </li>
          <li>
            <i class="far fa-clock"></i>
            <p>24*7</p>
          </li>
        </div>
      </div>
       <!-- map -->
      <div class="map">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109740.86931135727!2d76.68112629894128!3d30.735202978757975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1692379769353!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
      </section>
    <!-- Form -->
    <section id="form-details">
      <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>Feel Free to Connect us</h2>
        <input type="text" placeholder="Your Name">
        <input type="text" placeholder="E-mail">
        <input type="text" placeholder="Subject">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button class="normal">Submit</button>
      </form>
      <!-- people -->
      <div class="people">

        <div>
          <img src="asset/img/people/3.jpg" alt="">
          <p><span>Sujal Kumar</span>Founder <br> Phone: +917667176531 <br>Email:kumarsujal0436@gmail.com</p>
        </div>

        <div>
          <img src="asset/img/people/1.jpg" alt="">
          <p><span>Manjot Singh</span> Co-Founder <br> Phone: 9876191387 <br>Email: Manjotsingh5002@gmail.com</p>
        </div>

        <div>
          <img src="asset/img/people/3.jpg" alt="">
          <p><span>Deepika</span>Founder <br> Phone: +917667176531 <br>Email:kumarsujal0436@gmail.com</p>
        </div>

        <div>
          <img src="asset/img/people/3.jpg" alt="">
          <p><span>shubhadip</span>Founder <br> Phone: +917667176531 <br>Email:kumarsujal0436@gmail.com</p>
        </div>



      </div>
    </section>
    <!-- Newsletter -->
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
    <footer id="footer" class="section-p1 section-m1">
      <div class="col">
        <a href="#main" class="new-kadak">
          <h3 class="logo-text">Kadak Tea</h3>
        </a>
        <h4>Contact</h4>
        <p><strong>Address: </strong>Moyna, West Bengal,India</p>
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
    <script src="asset/script.js"></script>
  </body>
</html>
