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
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
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
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="bell"></i>
              <span class="badge headerBadge1">
                6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Request for leave
                      application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                      Ryan</span> <span class="time messege-text">Your payment invoice is
                      generated.</span> <span class="time">12 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                      Smith</span> <span class="time messege-text">hii John, I have upload
                      doc
                      related to task.</span> <span class="time">30
                      Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                      Joshi</span> <span class="time messege-text">Please do as specify.
                      Let me
                      know if you have any query.</span> <span class="time">1
                      Days Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Client Requirements</span>
                    <span class="time">2 Days Ago</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">ওস্টোর</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>ড্যাশবোর্ড</span></a>
            </li>
            <li class="dropdown">
              <a href="sell.html" class="nav-link"><i data-feather="shopping-cart"></i><span>বেচা-বিক্রি</span></a>
            </li>
            <li class="dropdown">
              <a href="q_sell.html" class="nav-link"><i data-feather="pocket"></i><span>কুইক সেল</span></a>
            </li>
            <li class="dropdown">
              <a href="stock.html" class="nav-link"><i data-feather="briefcase"></i><span>স্টক</span></a>
            </li>
            <li class="dropdown">
              <a href="sellbook.html" class="nav-link"><i data-feather="book-open"></i><span>বিক্রির খাতা</span></a>
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
              <a href="vendor.html" class="nav-link"><i data-feather="user-check"></i><span>ভেন্ডরদের তালিক</span></a>
            </li>
            <li class="menu-header">Accounts</li>
            <li class="dropdown">
              <a href="in_ex.html" class="nav-link"><i data-feather="dollar-sign"></i><span>বাড়তি আয়-ব্যয়</span></a>
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
              <a href="blank.html" class="nav-link"><i data-feather="alert-circle"></i><span>পরিচিতি</span></a>
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
                  <div class="card-header">
                    <h4><a href="#" data-toggle="modal" data-target="#exampleModal" data-target="#exampleModal">
                      <b><i data-feather="user-plus"></i>&nbsp; নতুন কাস্টমার অ্যাড করুন</b></a></h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>কাস্টমার নাম</th>
                            <th>ফোন নাম্বার</th>
                            <th>ঠিকানা</th>
                            <th>অ্যাকশান</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>Anis Mia</td>
                            <td>0167653423</td>
                            <td>Dhaka, Mohammodpur</td>
                            <td><a href="#" class="btn btn-icon btn-danger"><i class="far fa-trash-alt"></i></a>
                              <a href="#" data-toggle="modal"
                                data-target=".bd-example-modal-lg" class="btn btn-icon btn-success"><i class="fas fa-check"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              2
                            </td>
                            <td>Jesan</td>
                            <td>01342546543</td>
                            <td>Kasba, Brammonbaria</td>
                            <td><a href="#" class="btn btn-icon btn-danger"><i class="far fa-trash-alt"></i></a>
                              <a href="#" data-toggle="modal"
                                data-target=".bd-example-modal-lg" class="btn btn-icon btn-success"><i class="fas fa-check"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>Zia</td>
                            <td>0198763545</td>
                            <td>Dhaka, Airport</td>
                            <td><a href="#" class="btn btn-icon btn-danger"><i class="far fa-trash-alt"></i></a>
                              <a href="#" data-toggle="modal"
                                data-target=".bd-example-modal-lg" class="btn btn-icon btn-success"><i class="fas fa-check"></i></a>
                            </td>
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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModal">নতুন কাস্টমার অ্যাড করুন</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="">
                  <div class="form-group">
                    <label>কাস্টমারের নাম লিখুন</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="নাম" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>ফোন নাম্বার লিখুন</label>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="ফোন নাম্বার" name="number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>ঠিকানা লিখুন</label>
                    <div class="input-group">
                      <textarea name="name" rows="2" cols="80"></textarea>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary m-t-15 waves-effect">লিপিবদ্ধ করুন</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Alamin Khan এর সকল ইনভয়েস</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>ইনভয়েস আইডি</th>
                            <th>তারিখ</th>
                            <th>অ্যাকশন</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td class="align-middle">
                              #inv12345
                            </td>
                            <td class="align-middle">
                              09-04-2020
                            </td>
                            <td>
                              <a href="invoice.html" class="btn btn-success">invoice</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              2
                            </td>
                            <td class="align-middle">
                              #inv12345
                            </td>
                            <td class="align-middle">
                              09-04-2020
                            </td>
                            <td>
                              <a href="invoice.html" class="btn btn-success">invoice</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td class="align-middle">
                              #inv12345
                            </td>
                            <td class="align-middle">
                              09-04-2020
                            </td>
                            <td>
                              <a href="invoice.html" class="btn btn-success">invoice</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              4
                            </td>
                            <td class="align-middle">
                              #inv12345
                            </td>
                            <td class="align-middle">
                              09-04-2020
                            </td>
                            <td>
                              <a href="invoice.html" class="btn btn-success">invoice</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
                  <h6 class="font-medium m-b-10" >$ 5500 টাকা</h6>
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
