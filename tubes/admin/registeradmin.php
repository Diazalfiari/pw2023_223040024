<?php 

require 'header.php';
require 'ft.php';
require 'db.php';

?>
<!-- register form -->
<div class="container">
    <div class="head" style="text-align: center;">
        <h1>Register Admin for movloperz</h1>
    </div>
    <form action="registeradmin.php" method="post">
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
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $hash = password_hash("$pwd", PASSWORD_BCRYPT);

    $query = "INSERT INTO `admin`(`uname`, `pwd`) VALUES ('$uname','$hash')";
    $run = mysqli_query($con, $query);
}

?>