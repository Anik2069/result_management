<!DOCTYPE html>
<html lang="en">

<?php
include "connection.php";
$v = $_GET['xxx'];
$v1 = $_GET['dept'];
$v2 = $_GET['session_year'];
$v3 = $_GET['year'];
$v4 = $_GET['exam'];
$tom = "";
$vv = mysqli_query($connection, "select * from subject where id = '$v'");
while ($res = mysqli_fetch_assoc($vv)) {
    $tom = $res['subject'];

}

$vv = mysqli_query($connection, "select * from result where department = '$v1' and session='$v2' and year='$v3'");


?>

<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->
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
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 style="text-align:center;">View Student Result</h5>
                                            <h6 style="text-align:center;"> <?php echo $tom ?> || <?php echo $v4 ?></h6>
                                            <h6 style="text-align:center;"><?php echo $v2 ?></h6>
                                        </div>
                                    </div>
                                    <form class="" action="" method="POST">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        Roll Number
                                                    </th>
                                                    <th class="text-center">Student Name</th>
                                                    <th class="text-center">Mark Input Field</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $c = 0;
                                                while ($res = mysqli_fetch_assoc($vv)){
                                                $c = $c + 1;
                                                ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php echo $res["roll"] ?>
                                                    </td>
                                                    <td class="text-center"> <?php echo $res["name"] ?></td>
                                                    <td class="text-center">
                                                        Theory:&nbsp;&nbsp;&nbsp;<input type="number" name="theory[]" value="<?php echo $res["theory"] ?>">
                                                        MCQ:&nbsp;&nbsp;&nbsp;<input type="number" name="mcq[]" value="<?php echo $res["mcq"] ?>">
                                                        Practical:&nbsp;&nbsp;&nbsp;<input type="number" name="prac[]" value="<?php echo $res["prac"] ?>">
                                                    </td>
                                                    <input type="hidden" name="name[]" value="<?php echo $res["name"] ?>">
                                                    <input type="hidden" name="roll[]" value="<?php echo $res["roll"] ?>">
                                                    <input type="hidden" name="id[]" value="<?php echo $res["id"] ?>">
                                                </tr>
                                             <?php   }

                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer float-right">
                                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <?php
                            if(isset($_POST["submit"])){
                                $name= $_POST["name"];
                                $roll= $_POST["roll"];
                                $theory=$_POST["theory"];
                                $mcq=$_POST["mcq"];
                                $prac=$_POST["prac"];
                                $id=$_POST["id"];
                                $c=count($name);
                                for($i=0;$i<$c;$i++){
                                    $n=$id[$i];
                                    $r=$roll[$i];
                                    $t=$theory[$i];
                                    $m=$mcq[$i];
                                    $p=$prac[$i];
                                    $wury=mysqli_query($connection,"update result SET `theory`='$t',`mcq`='$m',`prac`='$p' where id='$n'");

                                }
                                
                                
                                echo "<script>
alert('Opertation done');
window.location.href = '../view.php';
</script>";

                            }

                            ?>


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
<script src="../assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="../assets/bundles/datatables/datatables.min.js"></script>
<script src="../assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="../assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="../assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="../assets/js/page/datatables.js"></script>
<!-- Template JS File -->
<script src="../assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="../assets/js/custom.js"></script>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>
