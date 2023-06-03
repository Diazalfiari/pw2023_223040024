<?php 
session_start();
require 'db.php';
?>

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
  <link rel="stylesheet" href="css/style-log.css">
</head>
<body class="align">
  <div class="grid">
    <h1>Sign In</h1>
    <form action="login.php" method="post" class="form login">
      <div class="form_field">
        <label for=""><i class="fa fa-user" style="color: #606468"></i></label>
      <input type="text" name="uname" class="form_input" placeholder="Username" required>
      </div>
      <div class="form_field">
        <label for=""><i class="fa fa-lock" style="color: #606468"></i></label>
      <input type="password" name="pwd" class="form_input" placeholder="Password" required>
      </div>
      <div class="form_field">
        <button class="submitButton" type="submit" name="submit">Submit</button>
      </div>
    </form>
    <p class="text--center">Tidak punya akun? <a href="register.php">Daftar</a></p>
  </div>


<?php 

if (isset($_POST['submit'])) {
    $user = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $query = "Select * From admin where uname = '$user' and pwd = '$pwd' ";
    $run = mysqli_query($con, $query);
    $row = mysqli_num_rows($run);
    if ($row == 1) {
      $_SESSION['loginsuccesfull']=1;
        echo "<script>alert('login sukses!'); window.location.href='dashboard.php';</script>";
    }
    else{
        echo "<script>alert('gagal, Username/password SALAH!');</script>";
    }
}
?>


</body>
</html>