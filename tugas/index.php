<?php 
session_start();
if (isset($_SESSION["login"])){
  header ("Location: dashboard.php");
  exit;
}
require 'functions.php';

if ( isset($_POST["submit"])){
  $username = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users where username = '$username' OR email = '$username'");

  if (mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc ($result);
    if (password_verify ($password, $row ["sandi"])){
      $_SESSION["login"] = true;
      header("Location: dashboard.php");
      exit;
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Administrator Pendaftaran Murid</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #0B2Fa6">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="color: white; font-weight: 700">Administrator Pendaftaran Murid</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- Akhir NavBar -->

    <!-- Login -->
    <section id="Login">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col mt-5 pt-5 Proto">
            <h2 id="Login">LOGIN ADMINISTRATOR</h2>
          </div>
        </div>
        <?php if (isset($error)) : ?>
        <div class="row text-center mb-1">
          <div class="col pt-1">
            <p style = "color : red;">Username/Password salah!!</p>
          </div>
        </div>
        <?php endif ?>
        <form action="" method ="post">
          <div class="row justify-content-center fs-5">
            <div class="col-md-5">
              <div class="mb-3">
                <label for="email" class="form-label">Email/Username</label>
                <input type="text" class="form-control" name ="email" placeholder="name@domain.com/username" autocomplete ="off"/>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name ="password" placeholder="password" autocomplete ="off"/>
              </div>
              <div class="col-auto d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-box-arrow-in-right"></i> Login</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0B2Fa6"
          fill-opacity="1"
          d="M0,224L60,229.3C120,235,240,245,360,240C480,235,600,213,720,218.7C840,224,960,256,1080,261.3C1200,267,1320,245,1380,234.7L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Login -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>

  <!-- footer -->
  <footer class="fot fs-5 text-white text-center fw-bold pb-2" style="background-color: #0b2fa6">
    <p class="" style="color: white">Created by SYHA</p>
  </footer>
  <!-- Akhir footer -->
</html>
