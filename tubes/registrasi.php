<?php 
require 'functions.php';
if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('User Baru Berhasil Ditambahkan');
          document.location.href = 'login.php';
          </script>         
          ";
  } else {
    echo mysqli_error($conn);
  }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <!-- icon -->
  <script src="https://kit.fontawesome.com/34326b4e37.js" crossorigin="anonymous"></script>
  <!-- css -->
  <link rel="stylesheet" href="css/style-reg.css">
</head>
<body class="align">
    <div class="grid">
      <h1>Sign Up</h1>
      <form  method="POST" class="form login">
        <div class="form_field">
          <label for="username"><i class="fa fa-user" style="color: #606468;"></i></label>
          <input type="text" name="username" id="username" class ="form_input" placeholder="Username" required>
        </div>
        <div class="form_field">
          <label for="password"><i class="fa-solid fa-envelope" style="color: #606468;"></i></label>
          <input type="email" name="email" id="email" class="form_input" placeholder="Email" required>
        </div>
        <div class="form_field">
          <label for="password"><i class="fa fa-lock" style="color: #606468;"></i></label>
          <input type="password" name="password" id="password" class="form_input" placeholder="Password" required>
        </div>
        <div class="form_field">
          <label for="password"><i class="fa fa-lock" style="color: #606468;"></i></label>
          <input type="password" name="password2" id="password2" class="form_input" placeholder="Password2" required>
        </div>
        <div class="form_field">
          <button class="submitButton" type="submit" name="register">Register</button>
        </div>
      </form>
      <p class="text--center">Sudah punya akun? <a href="login.php">Login</a></p>
    </div>
  </body>
</html>