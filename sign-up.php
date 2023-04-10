<?php
require_once("dashboard/_session.php");
if(isset($_SESSION['login_email'])){
 header('Location:dashboard/index.php');
}

if(!defined("EDRFRFERF")){define("EDRFRFERF",true);}
if(!defined("ASLON")){define("ASLAN",true);}

if(isset($_POST['submit']))		
	{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $password = md5("SALT".$pass.$email);
    require_once("_con.php");
   

            $Select = "SELECT email FROM credentials WHERE email = ? LIMIT 1";
            $Insert = "insert into credentials(name,email,password) values(?, ?, ?)";
            $stmt = $con->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $con->prepare($Insert);
                $stmt->bind_param("sss", $name, $email, $password);
                if ($stmt->execute()) {
                  $_SESSION['login_email'] = $email;
                  header("location: dashboard/index.php");
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo '<div class="alert alert-warning" role="alert">
                Email or Username already exists. 
              </div>';
            }
            $stmt->close();
            $con->close();
        }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Signup
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>

<body>
  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-1 mt-5">Welcome Petrolheads!</h1>
              <p class="text-lead text-white">Enter your details to sign up.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">

              <div class="card-body">
              <form action="#" method="post">
                  <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="email-addon" required>
                  </div>
                  <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" required>
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
                  </div>

                  <div class="text-center">
                    <button type="submit" name="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                  </div>
                  <p class="text-sm mt-2 mb-0 text-center">Already have an account? <a href="sign-in.php" class="text-dark font-weight-bolder">Sign in</a></p>
                </form>
              

              <p class="mb-2 text-sm mx-auto text-center">
                    or
                  </p>

              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class=" text-sm mx-auto">
                   Signup for Agency.
                    <a href="agency-signup.php" class="text-dark font-weight-bolder">Sign up</a>
                  </p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>