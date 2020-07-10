<!DOCTYPE html>
<html lang="en">
<!-- index.html  21 Nov 2019 03:44:50 GMT -->
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
                <div class="row ">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15"> কুইক সেল</h5>
                                                <h2 class="mb-3 font-18">$ 1,287</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="assets/img/banner/2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">নগদ বিক্রি</h5>
                                                <h2 class="mb-3 font-18">$ 48,697</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="assets/img/banner/4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">বাকিতে বিক্রি</h5>
                                                <h2 class="mb-3 font-18">$ 258</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="assets/img/banner/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">কিস্তিতে বিক্রি</h5>
                                                <h2 class="mb-3 font-18">$ 128</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="assets/img/banner/3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4>সংক্ষিপ্ত রিপোর্ট</h4>
                                <div class="card-header-action">
                                    <a href="hisab.html" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div id="chart1"></div>
                                        <div class="row mb-0">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="list-inline text-center">
                                                    <div class="list-inline-item p-r-30"><i
                                                                data-feather="arrow-up-circle"
                                                                class="col-green"></i>
                                                        <h5 class="m-b-0">$675</h5>
                                                        <p class="text-muted font-14 m-b-0">সাপ্তাহিক বিক্রয়</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="list-inline text-center">
                                                    <div class="list-inline-item p-r-30"><i
                                                                data-feather="arrow-up-circle"
                                                                class="col-orange"></i>
                                                        <h5 class="m-b-0">$1,587</h5>
                                                        <p class="text-muted font-14 m-b-0">মাসিক বিক্রয়</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="list-inline text-center">
                                                    <div class="list-inline-item p-r-30"><i
                                                                data-feather="arrow-up-circle"
                                                                class="col-green"></i>
                                                        <h5 class="mb-0 m-b-0">$45,965</h5>
                                                        <p class="text-muted font-14 m-b-0">বাৎসরিক বিক্রয়</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row mt-5">
                                            <div class="col-7 col-xl-7 mb-3">সর্বমোট বিক্রয়</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">$ 8,257</span>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">গ্রহীত</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">$ 8,257</span>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">বকেয়া</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">$ 9,857</span>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">কুইক সেল</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">$ 10,857</span>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">অন্যান্য আয়</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">$ 6,746</span>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">ব্যয়</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">$ 6,287</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="settingSidebar">
                <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                </a>
                <div class="settingSidebar-body ps-container ps-theme-default">
                    <div class=" fade show active">
                        <div class="setting-panel-header">আজকের সংক্ষিপ্ত বিবরণী
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">কুইক সেল</h6>
                            <div class="selectgroup layout-color w-50">
                                <h6 class="font-medium m-b-10">$ 5500 টাকা</h6>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">নগদ বিক্রি</h6>
                            <div class="selectgroup selectgroup-pills sidebar-color">
                                <h6 class="font-medium m-b-10">$ 5500 টাকা</h6>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">বাকিতে বিক্রি</h6>
                            <div class="theme-setting-options">
                                <h6 class="font-medium m-b-10">$ 5500 টাকা</h6>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">কিস্তিতে বিক্রি</h6>
                            <div class="theme-setting-options">
                                <h6 class="font-medium m-b-10">$ 5500 টাকা</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
