<?php session_start();
if (!defined("EDRFRFERF")) {
    define("EDRFRFERF", true);
} ?>
<?php require_once("../_con.php"); ?>
<?php if (!defined("ASLON")) {
    define("ASLAN", true);
} ?>
<?php require_once("_head.php"); ?>
<?php require_once("_aside.php"); ?>

<?php
$login_email = $_SESSION['login_email'];
$is_member = $_SESSION['is_member'];

if (isset($_POST['submit2'])) {
    $_SESSION['car_id'] = $_POST['car_id'];
}
?>

<?php
if (isset($_POST['submit3'])) {
    $car_id= $_SESSION['car_id'];
    $days = $_POST['days'];
    $date = $_POST['date'];

    $sql = "UPDATE `cars` SET `is_booked`='1',`booking_date`='$date',`booking_total_days`='$days',`booking_by`='$login_email' WHERE `id`='$car_id'";

    if (mysqli_query($con, $sql)) {
        echo '<div class="alert alert-success" role="alert">
   Booked successfully.
  </div>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php require_once("_navbar.php"); ?>

    <div class="container-fluid card mt-4 py-4 col-md-6">
    <h5 class="font-weight-bolder mb-4 pt-2">Book a car</h5>
        <form action="#" method="post">

            <label for="days">For How many days*</label>
            <div class="dropdown">
                <select name="days" class="form-control">
                    <?php
                    for ($i = 1; $i <= 30; $i++) {
                        echo "<option value=\"$i\">$i</option>";
                    }
                    ?>
                </select>

            </div>

            <label for="Employment">Starting Date*</label>
            <div class="dropdown">
                <select name="date" id="date" class="form-control">
                    <?php
                    $today = strtotime('today');
                    for ($i = 0; $i <= 30; $i++) {
                        $date = strtotime("+$i day", $today);
                        $formatted_date = date('d-m-y', $date);
                        echo "<option value='$formatted_date'>$formatted_date</option>";
                    }
                    ?>
                </select>
            </div>
    
        <a href="available_cars.php" class="btn bg-gradient-secondary mt-3">Cancel</a>
        <button type="submit" name="submit3" class="btn bg-gradient-primary mt-3">Rent Car</button>

    
    </form>
    </div>
    <?php require_once("_foot.php"); ?>