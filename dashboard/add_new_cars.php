<?php if (!defined("EDRFRFERF")) {
    define("EDRFRFERF", true);
} ?>
<?php require_once("../_con.php"); ?>
<?php if (!defined("ASLON")) {
    define("ASLAN", true);
} ?>
<?php require_once("_head.php"); ?>
<?php require_once("_aside.php");

if (isset($_POST['submit'])) {
    $model = $_POST['model'];
    $number = $_POST['number'];
    $capacity = $_POST['capacity'];
    $rent = $_POST['rent'];

    $sql = "INSERT INTO `cars`(`vehicle_model`, `vehicle_number`, `seating_capacity`, `rent`) VALUES ('$model','$number','$capacity','$rent')";

    if (mysqli_query($con, $sql)) {
        echo '<div class="alert alert-success" role="alert">
   New data added successfully.
  </div>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php require_once("_navbar.php"); ?>
    <div class="container-fluid py-4">
        <div class="row">

            <?php
            if ($is_member == 1) {
            ?>
                <div class="col-md-6 mb-2">
                    <div class="card bg-cover text-center" style="background-image: url('https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/curved-images/curved1.jpg')">
                        <div class="card-body z-index-2 py-9">
                            <h2 class="text-white">Add new car</h2>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-white gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Add Car
                            </button>
                        </div>
                        <div class="mask bg-gradient-primary border-radius-lg"></div>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="col-md-6">
                <a href="available_cars.php">
                    <div class="card card-background move-on-hover">
                        <div class="full-background" style="background-image: url('../assets/img/4.jpg')"></div>
                        <div class="card-body pt-12">
                            <h4 class="text-white">Available Cars</h4>
                            <p>Find the cars available and book yours now!</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Car</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <label for="Vehicle Model">Vehicle Model*</label>
                        <input type="text" class="form-control" name="model" placeholder="ex: 4S3 BMHB 8B6 266050" required>

                        <label for="Vehicle Number">Vehicle Number*</label>
                        <input type="text" class="form-control" name="number" placeholder="UK17 H 6785" required>

                        <label for="Employment">Seating Capacity*</label>
                        <div class="dropdown">
                            <select class="form-control" name="capacity" id="choices-button" placeholder="Departure">
                                <option name="select" value="">Please Select</option>
                                <option name="2" value="2">2</option>
                                <option name="3" value="3">3</option>
                                <option name="4" value="4">4</option>
                                <option name="5" value="5">5</option>
                                <option name="6" value="6">6</option>
                                <option name="7" value="7">7</option>
                                <option name="8" value="8">8</option>
                                <option name="more than 8" value="more than 8">more than 8</option>
                            </select>
                        </div>

                        <label for="Rent per day">Rent per day*</label>
                        <input type="number" class="form-control" name="rent" placeholder="In Rupees" required>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn bg-gradient-primary">Save changes</button>

                </div>
                </form>
            </div>
        </div>
    </div>
    <?php require_once("_foot.php"); ?>