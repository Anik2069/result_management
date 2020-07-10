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
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo"/> <span
                            class="logo-name">ওস্টোর</span>
                    </a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Main</li>
                    <li class="dropdown">
                        <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>ড্যাশবোর্ড</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="sell.html" class="nav-link"><i
                                data-feather="shopping-cart"></i><span>বেচা-বিক্রি</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="q_sell.html" class="nav-link"><i data-feather="pocket"></i><span>কুইক সেল</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="stock.html" class="nav-link"><i data-feather="briefcase"></i><span>স্টক</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="sellbook.html" class="nav-link"><i
                                data-feather="book-open"></i><span>বিক্রির খাতা</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="hisab.html" class="nav-link"><i data-feather="command"></i><span>হিসাব খাতা</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file-text"></i><span>রিপোর্ট</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="sell_report.html">বিক্রির রিপোর্ট</a></li>
                            <li><a class="nav-link" href="loss_profit.html">লাভ-ক্ষতির রিপোর্ট</a></li>
                            <li><a class="nav-link" href="buy_report.html">ক্রয় রিপোর্ট</a></li>
                        </ul>
                    </li>
                    <li class="menu-header">UI Elements</li>
                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                data-feather="shopping-bag"></i><span>পণ্য</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="category.html">পণ্যের ক্যাটাগরি</a></li>
                            <li><a class="nav-link" href="product.html">সকল পণ্য</a></li>
                            <li><a class="nav-link" href="buy.html">পণ্য ক্রয়</a></li>
                            <li><a class="nav-link" href="buy_ladger.html">ক্রয়কৃত লেজার দেখুন</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="customer.html" class="nav-link"><i data-feather="users"></i><span>গ্রাহক তালিকা</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="vendor.html" class="nav-link"><i
                                data-feather="user-check"></i><span>ভেন্ডরদের তালিক</span></a>
                    </li>
                    <li class="menu-header">Accounts</li>
                    <li class="dropdown">
                        <a href="in_ex.html" class="nav-link"><i
                                data-feather="dollar-sign"></i><span>বাড়তি আয়-ব্যয়</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="database"></i><span>ব্যাংক হিসাব</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="bank.html">ব্যাংক যোগ ও ব্যালেন্স দেখুন</a></li>
                            <li><a class="nav-link" href="trans.html">ট্রানসাকশান দেখুন</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="borrowing.html" class="nav-link"><i data-feather="repeat"></i><span>ধার-দেনা</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="blank.html" class="nav-link"><i
                                data-feather="alert-circle"></i><span>পরিচিতি</span></a>
                    </li>
                </ul>
            </aside>
        </div>
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
                                        <h6 style="text-align:center;">Science Group || 1st year Final</h6>
                                        <h6 style="text-align:center;">2020-21</h6>
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
                                                <th class="text-center">Std. Name</th>
                                                <th colspan="4" class="text-center">
                                                    Bangla
                                                </th>
                                                <th colspan="4" class="text-center">English</th>
                                                <th colspan="4" class="text-center">ICT</th>
                                                <th colspan="4" class="text-center">Physics</th>
                                                <th colspan="4" class="text-center">Chemistry</th>
                                                <th colspan="4"class="text-center">Higher Math</th>
                                                <th colspan="4"class="text-center">Biology</th>
                                                <th class="text-center">GPA</th>
                                                <th class="text-center">Grad</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td rowspan="4">01</td>
                                                <td rowspan="4">Amir Khan</td>
                                            </tr>
                                            <tr>
                                                <td>MCQ</td>
                                                <td>CQ</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>CQ</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>CQ</td>
                                                <td>Prat.</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>CQ</td>
                                                <td>Prat.</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>CQ</td>
                                                <td>Prat.</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>CQ</td>
                                                <td>Prat.</td>
                                                <td>Total</td>
                                                <td>Grat</td>


                                                <td>MCQ</td>
                                                <td>CQ</td>
                                                <td>Prat.</td>
                                                <td>Total</td>
                                                <td>Grat</td>

                                                <td rowspan="4">4.50</td>
                                                <td rowspan="4">A</td>
                                            </tr>
                                            <tr>
                                                <td>43</td>
                                                <td>53</td>
                                                <td>80</td>
                                                <td>5.0</td>

                                                <td>43</td>
                                                <td>43</td>
                                                <td>5.0</td>

                                                <td>12</td>
                                                <td>43</td>
                                                <td>53</td>
                                                <td>80</td>
                                                <td>5.0</td>

                                                <td>12</td>
                                                <td>43</td>
                                                <td>53</td>
                                                <td>80</td>
                                                <td>5.0</td>

                                                <td>12</td>
                                                <td>43</td>
                                                <td>53</td>
                                                <td>80</td>
                                                <td>5.0</td>

                                                <td>12</td>
                                                <td>43</td>
                                                <td>53</td>
                                                <td>80</td>
                                                <td>5.0</td>

                                                <td>12</td>
                                                <td>43</td>
                                                <td>53</td>
                                                <td>80</td>
                                                <td>5.0</td>
                                            </tr>
                                            <!-- <tr>
                                                <td>32</td>
                                                <td>43</td>
                                                <td>75</td>
                                                <td>A</td>

                                                <td>32</td>
                                                <td>43</td>
                                                <td>75</td>
                                                <td>A</td>

                                                <td>32</td>
                                                <td>43</td>
                                                <td>75</td>
                                                <td>A</td>

                                                <td>32</td>
                                                <td>43</td>
                                                <td>75</td>
                                                <td>A</td>

                                                <td>32</td>
                                                <td>43</td>
                                                <td>75</td>
                                                <td>A</td>

                                                <td>32</td>
                                                <td>43</td>
                                                <td>75</td>
                                                <td>A</td>

                                                <td>32</td>
                                                <td>43</td>
                                                <td>75</td>
                                                <td>A</td>

                                            </tr> -->
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
