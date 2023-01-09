<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Kereta Fatin</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
<?php
  include "connection.php";
  session_start();
  if (isset($_POST['submit'])){
  $username= $_POST['username'];
  $password= md5($_POST['password']);
    
    $query = "SELECT * FROM user WHERE username='{$username}'and password='{$password}'";
    $result=mysqli_query($conn, $query);
    //displaying proper message fot the user to see wheteher the query excuted perfectly or not
    $rows = mysqli_num_rows($result);
    if($rows==1){
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
            // Redirect user to index.php
      header("Location: senarai.php");
         }else{
  echo "<div class='form'><h3>username/password is incorrect.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
 }
 }else
 ?>

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/kereta.jpg"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Selamat Datang Ke Sistem Kereta Fatin</h4>
                </div>

                <form method="post" action="">
                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example11" class="form-control" name="username"
                      placeholder="Please enter your username" />
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" name="password"/>
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                  <input type="submit" class="btn btn-primary btn-lg" name='submit'
                style="padding-left: 2.5rem; padding-right: 2.5rem;">
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                   <a href="register.php"> <button type="button" class="btn btn-outline-danger">Create new</button></a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">WE ARE THE BEST SELLER!</h4>
                <p class="small mb-0">The modern automobile is a complex technical system employing subsystems with specific design functions.
                     Some of these consist ofthousands of component parts that have evolved from breakthroughs in existing technology or from
                      new technologies such as electronic computers,high-strength plastics, and new alloys of steel and nonferrous metals. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>

