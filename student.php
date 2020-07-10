<!DOCTYPE html>
<html lang="en">


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
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="inputState">Department</label>
                                            <select class="form-control">
                                                <option value="Choose...">Choose...</option>
                                                <option value="Science">Science</option>
                                                <option value="Business Studies">Business Studies</option>
                                                <option value="Humanities">Humanities</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="inputState">Session Year</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option value="2018-19">2018-19</option>
                                                <option value="2019-20">2019-20</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4><a href="blank.php">
                                            <b><i data-feather="user-plus"></i>&nbsp; Add New Student</b></a></h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-1">
                                            <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Roll No
                                                </th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Department</th>
                                                <th>Session</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            include "connection.php";
                                            $query = mysqli_query($connection, "Select * from student order by id desc");
                                            while ($res = mysqli_fetch_assoc($query)) {
                                            ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php echo $res["roll"]?>
                                                    </td>
                                                    <td>
                                                        <img alt="image" src="<?php echo $res["photo"]?>"
                                                             class="rounded-circle" width="35"
                                                             data-toggle="title" title="">
                                                        <span class="d-inline-block ml-1"><?php echo $res["name"]?></span>
                                                        <div class="table-links">
                                                            <a href="#">View</a>
                                                            <div class="bullet"></div>
                                                            <a href="update.php/?xxx=<?php echo $res["id"]?>">Edit</a>
                                                            <div class="bullet"></div>
                                                            <a href="#" class="text-danger">Trash</a>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $res["fnumber"]?></td>
                                                    <td><?php echo $res["department"]?></td>
                                                    <td><?php echo $res["session"]?></td>
                                                     <?php if($res["year"]=="1st_year"){ ?>
                                                    <td>
                                                        <div class="badge badge-primary"><?php echo $res["year"]?></div>
                                                    </td>
                                                    <?php }
                                                    elseif($res["year"]=="2nd_year"){ ?>
                                                         <td>
                                                             <div class="badge badge-default"><?php echo $res["year"]?></div>
                                                         </td>
                                                    <?php}
                                                    else{ ?>
                                                        <td>
                                                            <div class="badge badge-default"><?php echo $res["year"]?></div>
                                                        </td>   <?php
                                                    }
                                                    ?>
                                                </tr>
                                          <?php  }
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
