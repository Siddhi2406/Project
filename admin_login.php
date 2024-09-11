<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->


  <style>
    body {
      background-image: url(images/bg1.jpg);
      background-size: cover;
      backdrop-filter: blur(5px); /* Apply blur effect to the background */
      margin: 0; /* Remove default margin */
      height: 100vh; /* Set body height to 100% of viewport height */
    }
    .login-container {
      margin-top: 100px;
      background-color: rgba(255, 255, 255, 0.5); /* Transparent white background */
      padding: 20px;
      border-radius: 10px;
    }
    .login-form {
      opacity: 0.8; /* Adjust the opacity of the form */
    }
    .container {
      max-width: 600px; /* Set maximum width for the container */
    }
  </style>
  
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <?php include 'header.php'; ?>

</head>
<body>
   

<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-10"> <!-- Adjust the column width -->
    <div class="login-container">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">Admin Login</h3>
        </div>
        <div class="card-body login-form"> <!-- Added class to apply opacity to the form -->
          <form id="loginForm">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Custom JavaScript -->
<script>
  // JavaScript for handling form submission
  document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get input values
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Simple validation
    if (username.trim() === '' || password.trim() === '') {
      alert('Please enter both username and password.');
      return;
    }

    // Check if username and password match admin credentials
    if (username === 'siddhi' && password === 'siddhi123') {

      alert('Login successful!');
      window.location.replace("admin_page.php");
    
    } else {
      alert('Invalid username or password. Please try again.');
    }
  });
</script>








<script src="js/script.js"></script>

</body>


</html>
