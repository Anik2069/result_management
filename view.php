<!DOCTYPE html>
<html lang="en">
<?php
$_SESSION["department"]="";
$_SESSION["session_year"]="";
$_SESSION["year"]="";
$_SESSION["exam"]="";

?>

<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ostore - Atlas Software Park</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico'/>
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar sticky">
            <div class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                    <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                            <i data-feather="maximize"></i>
                        </a></li>
                </ul>
            </div>
        </nav>
        <?php
        include "nav.php"
        ?>
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <form class="" action="#" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Department</label>
                                                <select class="form-control" name="department">
                                                    <option value="Choose...">Choose...</option>
                                                    <option value="Science">Science</option>
                                                    <option value="Business Studies">Business Studies</option>
                                                    <option value="Humanities">Humanities</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Session Year</label>
                                                <select id="inputState" class="form-control" name="session_year">
                                                    <option selected>Choose...</option>
                                                    <?php
                                                    include "connection.php";
                                                    $query= mysqli_query($connection,"select * from session order by session_id desc");
                                                    while($res = mysqli_fetch_assoc($query)){
                                                        ?>
                                                        <option value="<?php echo $res['session']?>"><?php echo $res['session']?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Select Year</label>
                                                <select id="inputState" class="form-control" name="year">
                                                    <option selected>Choose...</option>
                                                    <option value="1st_year">1st Year</option>
                                                    <option value="2nd_year">2nd Year</option>
                                                    <option value="Alumni">Alumni</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Exam</label>
                                                <select id="inputState" class="form-control" name="exam">
                                                    <option selected>Choose...</option>
                                                    <option value="1st_year_final">1st Year Final</option>
                                                    <option value="2nd_year_final">2nd Year Final</option>
                                                    <option value="Alumni">Test Exam</option>
                                                </select>
                                            </div>
                                            <div class="card-footer float-right">
                                                <button type="submit" name="submit" class="btn btn-primary">Go</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <?php
                    if(isset($_POST['submit'])){
                        //  session_start();
                        $_SESSION["department"]=$_POST["department"];
                        $_SESSION["session_year"]=$_POST["session_year"];
                        $_SESSION["year"]=$_POST["year"];
                        $_SESSION["exam"]=$_POST["exam"];
                    }
                    ?>



                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-1">
                                            <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Department</th>
                                                <th>Subject</th>
                                                <th>Subject Teacher</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                            include "connection.php";
                                            $query= mysqli_query($connection,"select * from subject");
                                            $c=0;
                                            while($res = mysqli_fetch_assoc($query)){
                                                ?>

                                                <tr>
                                                    <td>
                                                        <?php echo $c=$c+1?>
                                                    </td>
                                                    <td><?php echo $res["department"]?></td>
                                                    <td><?php echo $res["subject"]?></td>
                                                    <td>TBA</td>
                                                    <td>
                                                        <?php  echo "<a href='add1.php/?xxx=$res[id]&dept=$_SESSION[department]&session_year=$_SESSION[session_year]&year=$_SESSION[year]&exam=$_SESSION[exam]' class='btn btn-icon btn-success'><i
                                                                class='fas fa-check'
                                                                class='btn btn-icon btn-success''></i></a>"
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php }
                                            ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                <a href="https://www.atlassoftwarepark.com/" target="_blank">Atlas Software Park</a></a>
            </div>
            <div class="footer-right">
            </div>
        </footer>
    </div>
</div>
<!-- General JS Scripts -->
<script src="assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>
<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/js/custom.js"></script>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>
