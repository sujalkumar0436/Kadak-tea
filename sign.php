<?php

$success = 0;
$user = 0;

if($_SERVER['REQUEST_METHOD']== 'POST'){
    include './connect.php';
$username = $_POST['username'];
$password = $_POST['password'];


// $sql="insert into `registration`(username, password) values('$username', '$password')";

// $result = mysqli_query($c  on, $sql);

//       if($result){
//         echo "Data inserted successfully";
//     }

//     else{
//         die(mysqli_error($con));
//     }

$sql= "Select * from `kadakusers` where username='$username'";
$result = mysqli_query($con, $sql);

if($result){
    $num = mysqli_num_rows($result);
    if ($num>0) {
    //    echo "user already exist";
    $user = 1;
    }else{
        
 $sql="insert into `kadakusers`(username, password) values('$username', '$password')";

 $result = mysqli_query($con, $sql);

       if($result){
        // echo "Signup successfully";
        $success = 1;
    }

    else{
        die(mysqli_error($con));
    }
    }
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kadak Signup</title>

<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />


<style>
.center-image {
display: flex;
justify-content: center;
align-items: center;
}
</style>
</head>
<body>

  <?php
  if($user){
    echo '<div class="alert container mt-3 alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry!</strong> User already exist. Try to login
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }

  ?>


<?php
  if($success){
    echo '<div class="container mt-3 alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Your Account is Successfully Created. Now Just Login
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }

  ?>

<div class="container mt-3">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<div class="card-header">
Create Your Kadak Account Today
</div>
<div class="card-body">


<form action="./sign.php" method="POST">
<div class="form-group center-image">
<img src="./asset/img/green_tea.png" alt="Kadak Tea" class="img-fluid mb-2" />
</div>
<div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-control" name="username" placeholder="Enter username">
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" name="password" placeholder="Enter password">
</div>
<button type="submit" class="btn btn-primary mt-3">Signup</button>
</form>



<div class="mt-3">
<p>Already have an account? <a target="_blank" href="login.php">Login Now</a></p>
</div>
</div>
</div>
</div>
</div>
</div>

<script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
</body>
</html>