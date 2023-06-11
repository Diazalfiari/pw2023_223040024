<?php 

require 'functions.php';
session_start();

if (isset($_SESSION['login'])) {
  header('Location: index.php');
  exit;
}

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
  
    $result = mysqli_query($conn, "SELECT * FROM userdata WHERE username = '$username' ");
  
    // cek username
    if(mysqli_num_rows($result) === 1) {
  
      // cek password
      $row = mysqli_fetch_assoc($result);
      if( password_verify($password, $row["password"])) {
 
              // set session
      $_SESSION['login'] = true;

      $_SESSION['username'] = $row['username'];
      $_SESSION['status'] = $row['status'];

      if ($row['status'] == 'admin') {
        header("Location: admin-page.php");
      } elseif ($row['status'] == 'user') {
        header("Location: index.php");
        exit;
      }
    }
  }
  $error = true;
}
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

      <?php if( isset($error)) : ?>
        <p style="color: red;">username / password salah!</p>
      <?php endif; ?>

    <form action="" method="post" class="form login">
      <div class="form_field">
        <label for="username"><i class="fa fa-user" style="color: #606468"></i></label>
      <input type="text" name="username" id="username" class="form_input" placeholder="Username" required>
      </div>
      <div class="form_field">
        <label for="password"><i class="fa fa-lock" style="color: #606468"></i></label>
      <input type="password" name="password" id="password" class="form_input" placeholder="Password" required>
      </div>
      <div class="form_field">
        <button class="submitButton" type="submit" name="login">Submit</button>
      </div>
    </form>
    <p class="text--center">Tidak punya akun? <a href="registrasi.php">Daftar</a></p>
  </div>


<?php 

// if (isset($_POST['submit'])) {
//   $user = $_POST['uname'];
//   $pwd = $_POST['pwd'];

//   $query = "Select * From admin where uname = '$user'";
//   $run = mysqli_query($con, $query);
  
//   if (mysqli_num_rows($run) > 0) {
//     while ($row = mysqli_fetch_assoc($run)) {
//       if (password_verify($pwd, $row['pwd'])) {
//           $_SESSION['loginsuccesfull']=1;
//           echo "<script>alert('login sukses!'); window.location.href='index.php';</script>";
//       }

//     }
//   }
//   else{
//       echo "<script>alert('gagal, Username/password SALAH!');</script>";
//   }
// }
?>


</body>
</html>