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
  <link rel="stylesheet" href="../css/style-reg.css">
</head>
<body class="align">
    <div class="grid">
      <h1>Sign Up</h1>
      <form  method="POST" class="form login">
        <div class="form_field">
          <label><i class="fa fa-user" style="color: #606468;"></i></label>
          <input type="text" name="username" class="form_input" placeholder="Username" required>
        </div>
        <div class="form_field">
          <label><i class="fa-solid fa-phone" style="color: #606468;"></i></label>
          <input type="text" name="phone number" class="form_input" placeholder="Phone number" required>
        </div>
        <div class="form_field">
          <label><i class="fa-solid fa-envelope" style="color: #606468;"></i></label>
          <input type="email" name="email" class="form_input" placeholder="Email" required>
        </div>
        <div class="form_field">
          <label><i class="fa fa-lock" style="color: #606468;"></i></label>
          <input type="password" name="password" class="form_input" placeholder="Password" required>
        </div>
        <div class="form_field">
          <button class="submitButton" type="submit">Register</button>
        </div>
      </form>
      <p class="text--center">Sudah punya akun? <a href="login.php">Login</a></p>
    </div>
  </body>
</html>