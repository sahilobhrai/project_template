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

?>

<?php
if (isset($_POST['submit3'])) {
    $_SESSION['car_id1'] = $_POST['car_id1'];
    echo $_SESSION['car_id1'] ;
}
?>

<?php
if (isset($_POST['submit4'])) {
    $car_id1 = $_SESSION['car_id1'];
    $model = $_POST['model'];
    $number = $_POST['number'];
    $capacity = $_POST['capacity'];
    $rent = $_POST['rent'];

    $sql = "UPDATE `cars` SET `vehicle_model`='$model',`vehicle_number`='$number',`seating_capacity`='$capacity',`rent`='$rent' WHERE `id`='$car_id1'";

    if (mysqli_query($con, $sql)) {
        echo '<div class="alert alert-success" role="alert">
   Updated Successfully
  </div>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

    $id = $_SESSION['car_id1'];
    $query1 = "select * from cars where id='$id'";
    $query_run = mysqli_query($con, $query1);

    foreach ($query_run as $row) {
?>

        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <?php require_once("_navbar.php"); ?>

            <div class="container-fluid card mt-4 py-4 col-md-6">
                <h5 class="font-weight-bolder mb-4 pt-2">Edit details</h5>
                <form action="#" method="post">

                    <label for="Vehicle Model">Vehicle Model*</label>
                    <input type="text" class="form-control" name="model" value="<?php echo $row['vehicle_model']; ?>" required>

                    <label for="Vehicle Number">Vehicle Number*</label>
                    <input type="text" class="form-control" name="number" value="<?php echo $row['vehicle_number']; ?>" required>

                    <label for="Vehicle Number">Seating Capacity*</label>
                    <input type="text" class="form-control" name="capacity" value="<?php echo $row['seating_capacity']; ?>" required>

                    <label for="Rent per day">Rent per day*</label>
                    <input type="number" class="form-control" name="rent" value="<?php echo $row['rent']; ?>" required>

                    <a href="available_cars.php" class="btn bg-gradient-secondary mt-3">Cancel</a>
                    <button type="submit" name="submit4" class="btn bg-gradient-primary mt-3">Update</button>


                </form>
        <?php
    }

        ?>
            </div>
            <?php require_once("_foot.php"); ?>