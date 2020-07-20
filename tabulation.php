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




                                <?php
                                include("connection.php");
                                $d = $_SESSION["department"];
                                $s =$_SESSION["session_year"];
                                $y =$_SESSION["year"];
                                $e=$_SESSION["exam"];
                                //  echo $query1;

                                ?>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-1">
                                            <thead>
                                            <tr>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" height="52" align="center" valign="middle"><font face="SutonnyMJ" size="4" color="#000000">Roll</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="center" valign="middle"><font face="SutonnyMJ" size="4" color="#000000">Part</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="center" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Bangla</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="center" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">English</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="5" align="center" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">ICT</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="center" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Science</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="center" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Chemistry</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="center" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Biology</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="center" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Higher Math</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="center" valign="middle"><font face="SutonnyMJ" size="4" color="#000000">Grade</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="center" valign="middle"><font face="SutonnyMJ" size="4" color="#000000">GPA</font></td>
                                            </tr>
                                            <tr>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">MCQ</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Theory</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Total</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Grade</font></td>





                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">MCQ</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Theory</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Total</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Grade</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">MCQ</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Theory</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Total</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Grade</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">MCQ</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Theory</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Total</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Grade</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">MCQ</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Theory</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Total</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Grade</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">MCQ</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Theory</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Total</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="bottom"><font face="SutonnyMJ" size="4" color="#000000">Grade</font></td>
                                            </tr>

                                            </thead>
                                            <tbody>
                                            <?php
                                            $query2 = mysqli_query($connection,"select * from student where  (department='$d' and session='$s') and year='$y' ");


                                            $vv2= mysqli_query($connection,"select * from subject where department = '$d'");



                                            $query1= mysqli_query($connection, "select * from result where (department='$d' and session='$s') and (year='$y' and exam='$e')");



                                            ?>
                                            <tr>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" height="40" align="center" valign="middle" sdval="704" sdnum="1033;"><font face="SutonnyMJ" size="4">704</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="middle"><font face="SutonnyMJ" size="4">1st</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="10" sdnum="1033;"><font face="SutonnyMJ" size="4">10</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="24" sdnum="1033;"><font face="SutonnyMJ" size="4">24</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="34" sdnum="1033;"><font face="SutonnyMJ" size="4">34</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="center" valign="middle"><font face="Times New Roman" size="4">D</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="10" sdnum="1033;"><font face="SutonnyMJ" size="4">10</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="24" sdnum="1033;"><font face="SutonnyMJ" size="4">24</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="34" sdnum="1033;"><font face="SutonnyMJ" size="4">34</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="center" valign="middle"><font face="Times New Roman" size="4">D</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="14" sdnum="1033;"><font face="SutonnyMJ" size="4">14</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="22" sdnum="1033;"><font face="SutonnyMJ" size="4">22</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="17" sdnum="1033;"><font face="SutonnyMJ" size="4">17</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="53" sdnum="1033;"><font face="SutonnyMJ" size="4">53</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="center" valign="middle"><font face="Times New Roman" size="4">B</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="15" sdnum="1033;"><font face="SutonnyMJ" size="4">15</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="27" sdnum="1033;"><font face="SutonnyMJ" size="4">27</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="42" sdnum="1033;"><font face="SutonnyMJ" size="4">42</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="center" valign="middle"><font face="Times New Roman" size="4">C</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="20" sdnum="1033;"><font face="SutonnyMJ" size="4">20</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="26" sdnum="1033;"><font face="SutonnyMJ" size="4">26</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="46" sdnum="1033;"><font face="SutonnyMJ" size="4">46</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="center" valign="middle"><font face="Times New Roman" size="4">C</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="20" sdnum="1033;"><font face="SutonnyMJ" size="4">20</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="30" sdnum="1033;"><font face="SutonnyMJ" size="4">30</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="50" sdnum="1033;"><font face="SutonnyMJ" size="4">50</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="center" valign="middle"><font face="Times New Roman" size="4">C</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="17" sdnum="1033;"><font face="SutonnyMJ" size="4">17</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="23" sdnum="1033;"><font face="SutonnyMJ" size="4">23</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="40" sdnum="1033;"><font face="SutonnyMJ" size="4">40</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="center" valign="middle"><font face="Times New Roman" size="4">D</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="center" valign="middle"><font face="Times New Roman" size="4">D</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="center" valign="middle"><font face="SutonnyMJ" size="4">1.83</font></td>
                                            </tr>
                                            <tr>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="middle"><font face="SutonnyMJ" size="4">2nd</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="33" sdnum="1033;"><font face="SutonnyMJ" size="4">33</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="33" sdnum="1033;"><font face="SutonnyMJ" size="4">33</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="33" sdnum="1033;"><font face="SutonnyMJ" size="4">33</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="0" sdnum="1033;"><font face="SutonnyMJ" size="4">0</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="0" sdnum="1033;"><font face="SutonnyMJ" size="4">0</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="0" sdnum="1033;"><font face="SutonnyMJ" size="4">0</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="12" sdnum="1033;"><font face="SutonnyMJ" size="4">12</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="30" sdnum="1033;"><font face="SutonnyMJ" size="4">30</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="42" sdnum="1033;"><font face="SutonnyMJ" size="4">42</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="15" sdnum="1033;"><font face="SutonnyMJ" size="4">15</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="23" sdnum="1033;"><font face="SutonnyMJ" size="4">23</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="38" sdnum="1033;"><font face="SutonnyMJ" size="4">38</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="16" sdnum="1033;"><font face="SutonnyMJ" size="4">16</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="27" sdnum="1033;"><font face="SutonnyMJ" size="4">27</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="43" sdnum="1033;"><font face="SutonnyMJ" size="4">43</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="12" sdnum="1033;"><font face="SutonnyMJ" size="4">12</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="23" sdnum="1033;"><font face="SutonnyMJ" size="4">23</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="35" sdnum="1033;"><font face="SutonnyMJ" size="4">35</font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><font face="SutonnyMJ" size="4"><br></font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><font face="SutonnyMJ" size="4"><br></font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><font face="SutonnyMJ" size="4"><br></font></td>
                                                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><font face="SutonnyMJ" size="4"><br></font></td>
                                            </tr>








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
