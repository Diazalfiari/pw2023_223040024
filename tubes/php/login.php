<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- icon -->
  <script src="https://kit.fontawesome.com/34326b4e37.js" crossorigin="anonymous"></script>
  <!-- css -->
  <link rel="stylesheet" href="../css/style-log.css">
</head>
<body class="align">
  <div class="grid">
    <h1>Sign In</h1>
    <form action="" method="post" class="form login">
      <div class="form_field">
        <label for=""><i class="fa fa-user" style="color: #606468"></i></label>
      <input type="text" name="username" class="form_input" placeholder="Username" required>
      </div>
      <div class="form_field">
        <label for=""><i class="fa fa-lock" style="color: #606468"></i></label>
      <input type="password" name="password" class="form_input" placeholder="Password" required>
      </div>
      <div class="form_field">
        <button class="submitButton" type="submit">Submit</button>
      </div>
    </form>
    <p class="text--center">Tidak punya akun? <a href="register.php">Daftar</a></p>
  </div>
</body>
</html>