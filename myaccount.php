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
    <title>Kadak Account </title>
    <!-- Bootstrap CSS -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      /* Custom styles for the account section */
      /* You can add your own styles here */
      .account-section {
        padding: 50px;
        text-align: center;
      }
      .account-info {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
      }
      .account-details {
        margin-bottom: 20px;
      }
      .profile-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3 account-section">
          <div class="account-info">
            <img src="./asset/img/protection.png" alt="Profile Image" />
            <div class="account-details">

            <h4><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></h4>
      
            </div>

            <a href="./logout.php" class="btn btn-danger">Logout</a>
            <a href="./index.php" class="btn btn-danger">Shop Now</a>

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
