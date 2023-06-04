<?php 
session_start();

require 'ft.php';
require 'db.php';
?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<div class="container">
    <div class="head" style="text-align: center;">
        <h1>Login to movloperz</h1>
    </div>
    <form action="login.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php 

if (isset($_POST['submit'])) {
    $user = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $query = "Select * From admin where uname = '$user'";
    $run = mysqli_query($con, $query);
    
    if (mysqli_num_rows($run) > 0) {
      while ($row = mysqli_fetch_assoc($run)) {
        if (password_verify($pwd, $row['pwd'])) {
            $_SESSION['loginsuccesfull']=1;
            echo "<script>alert('login sukses!'); window.location.href='index.php';</script>";
        }

      }
    }
    else{
        echo "<script>alert('gagal, Username/password SALAH!');</script>";
    }
}
?>