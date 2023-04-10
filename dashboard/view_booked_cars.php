<?php session_start();
if (!defined("EDRFRFERF")) {
  define("EDRFRFERF", true);
} ?>
<?php require_once("../_con.php"); ?>
<?php if (!defined("ASLON")) {
  define("ASLAN", true);
} ?>
<?php require_once("_head.php"); ?>
<?php require_once("_aside.php");

$login_email = $_SESSION['login_email'];
$is_member = $_SESSION['is_member'];
?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <?php require_once("_navbar.php");


  $query = "select * from cars where `is_booked`='1'";
  $query_run = mysqli_query($con, $query);
  ?>

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Booked Cars</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">Vehicle Model</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">Vehicle Number</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">Seating Capacity</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">Rent per day</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">Booked by</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">Booked for </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">Booking starts on</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                  ?>

                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm "><?php echo $row['id']; ?></h6>

                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <h6 class="mb-0 text-sm ml-5"><?php echo $row['vehicle_model']; ?></h6>
                      </td>
                      <td class="align-middle text-center">
                        <h6 class="mb-0 text-sm"><?php echo $row['vehicle_number']; ?></h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo $row['seating_capacity']; ?></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo $row['rent']; ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <h6 class="mb-0 text-sm"><?php echo $row['booking_by']; ?></h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo $row['booking_total_days']; ?> days</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo $row['booking_date']; ?></span>
                      </td>

                      </tr>
                  <?php
                    }
                  } else {
                    echo "No record found!";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php require_once("_foot.php"); ?>