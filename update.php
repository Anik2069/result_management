<!DOCTYPE html>
<html lang="en">
<?php
$v = $_GET['xxx'];
include ("connection.php");
$query=mysqli_query($connection,"select * from student where id='$v'");
$getRowAssoc = mysqli_fetch_assoc($query);

?>

<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ostore - Atlas Software Park</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="../assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="../assets/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="../assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="../assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="../assets/css/app.min.css">
    <link rel="stylesheet" href="../assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="../assets/bundles/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico'/>
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
<form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Student Info</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Roll Number</label>
                                    <input type="text" class="form-control" name="roll" value="<?php echo $getRowAssoc['roll']?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputState">Select Year</label>
                                    <select id="inputState" class="form-control" name="year">

                                        <option value="1st_year">1st Year</option>
                                        <option value="2nd_year">2nd Year</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputEmail4">Full Name Of Student</label>
                                    <input type="name" class="form-control" id="inputNamel4"
                                        name="fullname" value="<?php echo $getRowAssoc['name']?>"   placeholder="Students Name....">
                                </div>
                                <div class="form-group">
                                    <label>Student Photo</label>
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Father Name</label>
                                    <input type="text" class="form-control" id="inputName" name="fname" value="<?php echo $getRowAssoc['fname']?>" placeholder="Father Name...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Mobile Number</label>
                                    <input type="text" class="form-control" id="inputNumber" name="fphone" value="<?php echo $getRowAssoc['fnumber']?>" placeholder="number...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" name="address" value="<?php echo $getRowAssoc['address']?>" placeholder="1234 Main St">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputState">Session Year</label>
                                    <select id="inputState" class="form-control" name="syear">
                                      <?php
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
                                    <select id="mySelect"  class="form-control"  name="department">
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
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>                        </div>
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


                    $query = "update student SET roll='" . $_POST['roll'] . "',name='" . $_POST['fullname'] . "',photo='" . $imagepath . "',fname='" . $_POST['fname'] . "',fnumber='" . $_POST['fphone'] . "',year='" . $_POST['year'] . "',department='" . $_POST['department'] . "',session='" . $_POST['syear'] . "',address='" . $_POST['address'] . "',fouth='" . $_POST['fouth_subject'] . "' where id='$v'";
                    //echo $query;
                    $res = mysqli_query($connection,$query);
                    echo "<script>
alert('Student Added');
window.location.href = '../student.php';
</script>";
                }
                ?>
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
<script src="../assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="../assets/bundles/apexcharts/apexcharts.min.js"></script>
<!-- Page Specific JS File -->
<script src="../assets/js/page/index.js"></script>
<!-- Template JS File -->
<script src="../assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="../assets/js/custom.js"></script>
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
</html>
