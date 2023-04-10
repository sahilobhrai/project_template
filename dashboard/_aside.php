<?php
if (session_status() == PHP_SESSION_NONE) {
  // If not started, start session
  session_start();
} ?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="./">
      <span class="ms-1 font-weight-bold">
        <h5>Car Rentals</h5>
      </span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link  active" href="../dashboard/">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center fa fa-dashboard text-white">

          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../dashboard/add_new_cars.php">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center fa fa-plus">

          </div>
          <span class="nav-link-text ms-1">Add New Cars</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="../dashboard/available_cars.php">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center fa fa-clipboard">

          </div>
          <span class="nav-link-text ms-1">Available Cars</span>
        </a>
      </li>

      <?php

      $is_member = '';

      if (isset($_SESSION['is_member'])) { // check if the user is logged in
        $is_member = $_SESSION['is_member'];
        if (($is_member == 1)) {


          $is_member = $_SESSION['is_member'];
          if (($is_member == 1)) {
      ?>
            <li class="nav-item">
              <a class="nav-link " href="../dashboard/view_booked_cars.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center fa fa-file ">

                </div>
                <span class="nav-link-text ms-1">View Booked Cars</span>
              </a>
            </li>
      <?php
          }
        }
      }
      ?>


    </ul>
  </div>

</aside>