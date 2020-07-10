<!DOCTYPE html>
<html lang="en">
<?php 
session_start();


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

        include("nav.php")
        ?>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-12">
                                        <br>
                                        <h5 style="text-align:center;">Tabulation Sheet</h5>

                                        <h6 style="text-align:center;"><?php echo  $_SESSION["department"]; ?> Group || <?php echo $_SESSION["exam"]; ?></h6>
                                        <h6 style="text-align:center;"><?php echo " ".$_SESSION["session_year"]; ?></h6>
                                        <hr>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-1">
                                            <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Roll No.
                                                </th>
                                                <th>Std. Name</th>
                                                <th>Paper</th>
                                                <th colspan="4" >
                                                    Bangla
                                                </th>
                                                <th colspan="4" >English</th>
                                                <th colspan="4" >ICT</th>
                                                <th colspan="4" >Physics</th>
                                                <th colspan="4" >Chemistry</th>
                                                <th colspan="4" >Higher Math</th>
                                                <th colspan="4">Biology</th>
                                                <th>GPA</th>
                                                <th>Grad</th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Paper</th>
                                                <th>MCQ</th>
                                                <th>Theory</th>
                                                <th>Total</th>
                                                <th>Grat</th>


                                                <td>MCQ</td>
                                                <td>Theory</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>Theory</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>Theory</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>Theory</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>Theory</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>Theory</td>
                                                <td>Total</td>
                                                <td>Grat</td>

                                                <td rowspan="4">4.50</td>
                                                <td rowspan="4">A</td>
                                            </tr>
                                            </thead>




                                            <?php
                                            include("connection.php");
                                            $d = $_SESSION["department"];
                                            $s =$_SESSION["session_year"];
                                            $y =$_SESSION["year"];
                                            $e=$_SESSION["exam"];
                                            $query1= mysqli_query($connection, "select * from result where (department='$d' and session='$s') and (year='$y' and exam='$e')");
                                          //  echo $query1;

                                            ?>









                                            <tbody>
                                            <?php
                                            while ($res=mysqli_fetch_assoc($query1)) {




                                            ?>


                                            <tr>
                                                <td ><?php echo $res["roll"]?></td>
                                                <td><?php echo $res["name"]?></td>
                                                <td>1sr</td>
                                                <td>50</td>
                                                <td>20</td>
                                                <td>1000</td>
                                                <td>A</td>


                                                <td>MCQ</td>
                                                <td>Theory</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>Theory</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>Theory</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>Theory</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>Theory</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>Theory</td>
                                                <td>Total</td>
                                                <td>Grat</td>

                                                <td rowspan="4">4.50</td>
                                                <td rowspan="4">A</td>
                                            </tr>




                                            <?php
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
