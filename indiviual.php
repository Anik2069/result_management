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
$vv = mysqli_query($connection, "select * from student where id = '$v'");
/*
while ($res = mysqli_fetch_assoc($vv)) {

}*/
$res = mysqli_fetch_assoc($vv);
/*echo $res['roll'];*/

echo $tom;
$vv2 = mysqli_query($connection, "select * from subject where department = '$v1'");
$t_s=mysqli_num_rows($vv2);
$vv3 = mysqli_query($connection, "select * from result where (department = '$v1' and session='$v2') and (year='$v3' and sid='$v') and exam='$v4'");
$t_s1=mysqli_num_rows($vv2);
/*if($t_s==$t_s1){
    header("Location:../index.php");
}*/
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
<!--<div class="loader"></div>-->
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
                    <div class="row" id="printableArea">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 style="text-align:center;">Kurerpar Adarsho University College</h2>
                                            <h5 style="text-align:center;"><?php echo $res["name"] ?> Academic
                                                Result</h5>
                                            <h6 style="text-align:center;"> <?php echo $v4 ?></h6>
                                            <h6 style="text-align:center;">Session: <?php echo $v2 ?></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>Student Details</h4>
                                            <p>Name:<?php echo $res["name"] ?> </p>
                                            <p>Roll: <?php echo $res["roll"] ?></p>
                                            <p>Session: <?php echo $v2 ?></p>
                                        </div>
                                    </div>
                                    <form class="" action="" method="POST">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                <tr>
                                                    <th>Count</th>
                                                    <th class="text-center">
                                                        Subject Name
                                                    </th>
                                                    <th class="text-center">MCQ Marks</th>
                                                    <th class="text-center">Theory Marks</th>
                                                    <th class="text-center">Pratical Marks</th>
                                                    <th class="text-center">Subjects Totals</th>
                                                    <th class="text-center">Totals</th>
                                                    <th class="text-center">Subject Grade</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                function myfunction($tt)
                                                {
                                                    if ($tt >= 160) {
                                                        return "A+";
                                                    } elseif ($tt >= 140) {
                                                        return "A";

                                                    } elseif ($tt >= 120) {
                                                        return "A-";

                                                    } elseif ($tt >= 100) {
                                                        return "B";

                                                    } elseif ($tt >= 80) {
                                                        return "C";

                                                    } elseif ($tt >= 66) {
                                                        return "D";

                                                    } else {
                                                        return "F";
                                                    }
                                                }
                                                function myfunction2($tt)
                                                {
                                                    if ($tt >= 80) {
                                                        return "A+";
                                                    } elseif ($tt >= 70) {
                                                        return "A";

                                                    } elseif ($tt >= 60) {
                                                        return "A-";

                                                    } elseif ($tt >= 50) {
                                                        return "B";

                                                    } elseif ($tt >= 40) {
                                                        return "C";

                                                    } elseif ($tt >= 33) {
                                                        return "D";

                                                    } else {
                                                        return "F";
                                                    }
                                                }
                                                function myfunction3($sub_g,$t_s){
                                                    $cal=0;

                                                    for($j=0;$j<count($sub_g);$j++){
                                                        if ($sub_g[$j] == "A+") {
                                                            $cal= $cal+5;
                                                        } elseif ($sub_g[$j] == "A") {
                                                            $cal= $cal+4;

                                                        } elseif ($sub_g[$j] == "A-") {
                                                            $cal= $cal+3.50;

                                                        } elseif ($sub_g[$j] == "B") {
                                                            $cal= $cal+3;

                                                        } elseif ($sub_g[$j] == "C") {
                                                            $cal= $cal+2;

                                                        } elseif ($sub_g[$j] == "D") {
                                                            $cal= $cal+1;

                                                        } else {
                                                            $cal= 0;
                                                            $j= count($sub_g)+1;
                                                        }
                                                    }
                                                    if($cal!=0){


                                                      /*  echo $cal;
                                                        $t_s=$t_s-1;*/


                                                        return  number_format($cal/count($sub_g),2);
                                                    }else{
                                                        return $cal;
                                                    }

                                                }

                                                ?>


                                                <?php
                                                $count = 1;
                                                $vv2 = mysqli_query($connection, "select * from subject where department = '$v1'");
                                                $t_s=mysqli_num_rows($vv2);
                                                $i = 0;
                                                $total = 0;
                                                $total1 = 0;
                                                $savegrade=0;
                                                while ($sub = mysqli_fetch_assoc($vv2)) {

                                                    $vv3 = mysqli_query($connection, "select * from result where (department = '$v1' and session='$v2') and (year='$v3' and sid='$v') and exam='$v4'");

                                                    while ($res1 = mysqli_fetch_assoc($vv3)) {
                                                        if ($sub["subject"] != "ICT") {
                                                            if ($res1["subject"] == $sub["subject"]) {
                                                                if ($count == 1) {
                                                                    //
                                                                    if ($res1["prac"] != null) {
                                                                        $total = (double)$res1["prac"] + (double)$res1["mcq"] + (double)$res1["theory"];

                                                                    } else {
                                                                        $total = (double)$res1["mcq"] + (double)$res1["theory"];


                                                                    }
                                                                    $total1 = $total1 + $total;
                                                                    //  echo $total1;
                                                                    $count = 2;
                                                                } else {
                                                                    if ($res1["prac"] != null) {
                                                                        $total = (double)$res1["prac"] + (double)$res1["mcq"] + (double)$res1["theory"];

                                                                    } else {
                                                                        $total = (double)$res1["mcq"] + (double)$res1["theory"];


                                                                    }
                                                                    $total1 = $total1 + $total;
                                                                    $sub_grade[$i] = $total1;
                                                                    $sub_g[$i] = myfunction($total1);
                                                                    if($res["fouth"]==$res1["subject"] ){
                                                                        $savegrade = myfunction($total1);
                                                                    }

                                                                    //  echo $total1;
                                                                    $total1 = 0;
                                                                    $i = $i + 1;
                                                                    $count = 1;

                                                                }
                                                            }
                                                        }else{
                                                            if ($res1["subject"] == $sub["subject"]) {
                                                                $total = (double)$res1["prac"] + (double)$res1["mcq"] + (double)$res1["theory"];
                                                                $sub_grade[$i] = $total;
                                                                $sub_g[$i] = myfunction2($total);
                                                                $total1 = 0;
                                                                $i = $i + 1;

                                                            }
                                                        }

                                                    }


                                                    //  $total1=0;

                                                }

                                                ?>


                                                <?php
                                                $count = 1;
                                                $total1 = 0;
                                                $total2 = 0;
                                                $i = 0;
                                                $vv2 = mysqli_query($connection, "select * from subject where department = '$v1'");

                                                while ($sub = mysqli_fetch_assoc($vv2)) {

                                                    $vv3 = mysqli_query($connection, "select * from result where (department = '$v1' and session='$v2') and (year='$v3' and sid='$v') and exam='$v4'");

                                                    while ($res1 = mysqli_fetch_assoc($vv3)) {

                                                        if ($sub["subject"] != "ICT") {
                                                            if ($res1["subject"] == $sub["subject"]) {
                                                                if ($count == 1) {
                                                                    echo "<tr>";
                                                                    echo '<td>' . $count . '</td>';
                                                                    echo '<td>' . $res1["subject"] . '</td>';
                                                                    echo '<td>' . $res1["mcq"] . '</td>';
                                                                    echo '<td>' . $res1["theory"] . '</td>';
                                                                    if ($res1["prac"] != null) {
                                                                        $total = (double)$res1["prac"] + (double)$res1["mcq"] + (double)$res1["theory"];
                                                                        echo '<td>' . $res1["prac"] . '</td>';
                                                                        echo '<td>' . $total . '</td>';
                                                                    } else {
                                                                        $total = (double)$res1["mcq"] + (double)$res1["theory"];
                                                                        echo '<td>0</td>';
                                                                        echo '<td>' . $total . '</td>';

                                                                    }
                                                                    $grade = $sub_grade[$i];

                                                                    echo '<td rowspan="2">' . $grade . '</td>';
                                                                    echo '<td rowspan="2">' . $sub_g[$i] . '</td>';

                                                                    $i = $i + 1;

                                                                    echo "</tr>";
                                                                    $total2 = $total2 + $total;

                                                                    $count = 2;
                                                                } else {
                                                                    echo "<tr>";
                                                                    echo '<td>' . $count . '</td>';
                                                                    echo '<td>' . $res1["subject"] . '</td>';
                                                                    echo '<td>' . $res1["mcq"] . '</td>';
                                                                    echo '<td>' . $res1["theory"] . '</td>';
                                                                    if ($res1["prac"] != null) {
                                                                        $total = (double)$res1["prac"] + (double)$res1["mcq"] + (double)$res1["theory"];
                                                                        echo '<td>' . $res1["prac"] . '</td>';
                                                                        echo '<td>' . $total . '</td>';
                                                                    } else {
                                                                        $total = (double)$res1["mcq"] + (double)$res1["theory"];
                                                                        echo '<td>0</td>';
                                                                        echo '<td>' . $total . '</td>';

                                                                    }
                                                                    $count = 1;
                                                                    echo "</tr>";
                                                                }

                                                            } else {

                                                            }


                                                        }
                                                        else{
                                                            if ($res1["subject"] == $sub["subject"]) {
                                                                echo "<tr>";
                                                                echo '<td>' . $count . '</td>';
                                                                echo '<td>' . $res1["subject"] . '</td>';
                                                                echo '<td>' . $res1["mcq"] . '</td>';
                                                                echo '<td>' . $res1["theory"] . '</td>';
                                                                if ($res1["prac"] != null) {
                                                                    $total = (double)$res1["prac"] + (double)$res1["mcq"] + (double)$res1["theory"];
                                                                    echo '<td>' . $res1["prac"] . '</td>';
                                                                    echo '<td>' . $total . '</td>';
                                                                } else {
                                                                    $total = (double)$res1["mcq"] + (double)$res1["theory"];
                                                                    echo '<td>0</td>';
                                                                    echo '<td>' . $total . '</td>';

                                                                }
                                                                $grade = $sub_grade[$i];

                                                                echo '<td>' . $grade . '</td>';
                                                                echo '<td >' . $sub_g[$i] . '</td>';

                                                                $i = $i + 1;

                                                                echo "</tr>";

                                                            }
                                                        }

                                                    }
                                                }
                                                /*while ($sub = mysqli_fetch_assoc($vv3)){
                                                    echo "<tr>";
                                                    echo '<td>'.$sub["subject"].'</td>';
                                                    echo "</tr>";

                                                }*/
                                                ?>


                                                </tbody>
                                            </table>
                                        </div>

                                    </form>
                                    <div>
                                        <?php $final_result= myfunction3($sub_g,$t_s);

                                      ////  echo $final_result;
                                        if($savegrade>2){
                                            $final_result=$final_result*$t_s;
                                            $final_result=$final_result-$savegrade;
                                            $savegrade=$savegrade-2;
                                            $final_result=$final_result+$savegrade;
                                            $final_result=$final_result/($t_s-1);

                                        }


                                        ?>
                                        <h4 style="text-align: center">Final Grade: <?php echo $final_result ?> </h4>
                                        <?php
                                        if( myfunction3($sub_g,$t_s)!=0){
                                            echo ' <h5 style="text-align: center"> Remarks:Pass  </h5>';
                                        }
                                        else{
                                            echo ' <h5 style="text-align: center"> Remarks:Fail  </h5>';
                                        }
                                        ?>


                                    </div>
                                    <button class="btn btn-primary" onclick="printDiv('printableArea')">Print</button>
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

<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
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
