    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">


          <div class="dropdown ms-md-auto pe-md-3 d-flex align-items-center">
            <button class="btn bg-gradient-primary dropdown-toggle mt-3 btn-sm" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <?php
              if (isset($_SESSION['login_email'])) { ?>

                <li><a class="dropdown-item" href="../logout.php">Logout</a></li>

              <?php  } else { ?>
                <li><a class="dropdown-item" href="../sign-in.php">Signin</a></li>
                <li><a class="dropdown-item" href="../sign-up.php">Signup</a></li>
              <?php }
              ?>



            </ul>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>


          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->