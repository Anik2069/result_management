<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
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
                    <div class="card">
                        <div class="card-header">
                            <h4>Add a New Student</h4>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Roll Number</label>
                                        <input type="text" class="form-control" name="roll">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Select Year</label>
                                        <select id="inputState" class="form-control" name="year">
                                            <option selected>Choose...</option>
                                            <option value="1st_year">1st Year</option>
                                            <option value="2nd_year">2nd Year</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Full Name Of Student</label>
                                        <input type="name" class="form-control" id="inputNamel4"
                                               name="fullname" placeholder="Students Name....">
                                    </div>
                                    <div class="form-group">
                                        <label>Student Photo</label>
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Father Name</label>
                                        <input type="text" name="fname" class="form-control" id="inputName"
                                               placeholder="Father Name...">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Mobile Number</label>
                                        <input type="text" name="fphone" class="form-control" id="inputNumber"
                                               placeholder="number...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" name="address" id="inputAddress"
                                           placeholder="1234 Main St">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Session Year</label>
                                        <select id="inputState" class="form-control" name="syear">
                                            <option selected>Choose...</option>
                                            <?php
                                            include "connection.php";
                                            $query = mysqli_query($connection, "Select * from session order by session_id desc");
                                            while ($res = mysqli_fetch_assoc($query)) {
                                                ?>
                                                <option value="<?php echo $res["session"]?>"><?php echo $res["session"]?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Department</label>
                                        <select id="mySelect" name="department"
                                                class="form-control">
                                            <option value="Choose...">Choose...</option>
                                            <option value="Science">Science</option>
                                            <option value="Business Studies">Business Studies</option>
                                            <option value="Humanities">Humanities</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Fouth Subject</label>
                                        <select id="mySelect" name="fouth_subject" class="form-control">
                                            <option value="Choose...">Choose...</option>
                                            <option value="Higher Math 1st
                                                    & 2nd">Higher Math 1st
                                                & 2nd
                                            </option>
                                            <option value="Biology 1st &
                                                    2nd">Biology 1st &
                                                2nd
                                            </option>
                                            <option value="Gahastha
                                                        science
                                                        1st & 2nd">Gahastha
                                                science
                                                1st & 2nd
                                            </option>

                                            <option value="Finances 1st
                                                        &
                                                        2nd">Finances 1st
                                                &
                                                2nd
                                            </option>
                                            <option value="Marketing
                                                        1st &
                                                        2nd">Marketing
                                                1st &
                                                2nd
                                            </option>

                                            <option value="Political science 1st & 2nd">Political science 1st & 2nd
                                            </option>


                                            <option value="Logic 1st & 2nd">Logic 1st & 2nd</option>


                                            <option value="Social Work 1st & 2nd">Social Work 1st & 2nd</option>


                                            <option value="Social Science 1st & 2nd">Social Science 1st & 2nd</option>

                                            <option value="Economy 1st & 2nd">Economy 1st & 2nd</option>
                                            <option value="History of Islam 1st & 2nd">History of Islam 1st & 2nd
                                            </option>
                                            <option value="Islam 1st & 2nd">Islam 1st & 2nd</option>

                                        </select>
                                    </div>

                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                    <?php
                    if (isset($_POST['submit'])) {
                        include "connection.php";
                        $image_name=$_FILES['file']['name'];
                        $temp = explode(".", $image_name);
                        $newfilename = round(microtime(true)) . '.' . end($temp);
                        $imagepath="pics/".$newfilename;
                        move_uploaded_file($_FILES["file"]["tmp_name"],$imagepath);


                        $query = "insert into student (roll,name,photo,fname,fnumber,year,department,session,address,fouth) 
                                values ('" . $_POST['roll'] . "','" . $_POST['fullname'] . "','" . $imagepath . "','" . $_POST['fname'] . "','" . $_POST['fphone'] . "','" . $_POST['year'] . "','" . $_POST['department'] . "','" . $_POST['syear'] . "','" . $_POST['address'] . "','" . $_POST['fouth_subject'] . "')";
                        //echo $query;
                        $res = mysqli_query($connection,$query);
                        echo "<script>
alert('Student Added');
</script>";
                    }
                    ?>
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
<script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/index.js"></script>
<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/js/custom.js"></script>
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
</html>
