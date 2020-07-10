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
          <div class="section-body card">
            <form class="" action="#" method="post">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="inputState">Present Department</label>
                          <select class="form-control">
                            <option value="Choose...">Choose...</option>
                            <option value="Science">Science</option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Humanities">Humanities</option>
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputState">Present Session Year</label>
                          <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option value="2018-19">2018-19</option>
                            <option value="2019-20">2019-20</option>
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputState">Present Select Year</label>
                          <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option value="1st_year">1st Year</option>
                            <option value="2nd_year">2nd Year</option>
                            <option value="Alumni">Alumni</option>
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputState">Promoted Year</label>
                          <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option value="1st_year">1st Year</option>
                            <option value="2nd_year">2nd Year</option>
                            <option value="Alumni">Alumni</option>
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
                      <h4>Students For Promote</h4>
                    </div>
                    <div class="card-body">
                      <div class="clearfix mb-3"></div>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <tr>
                            <th class="pt-2">
                              <div class="custom-checkbox custom-checkbox-table custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                  class="custom-control-input" id="checkbox-all">
                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                              </div>
                            </th>
                            <th>Roll No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Department</th>
                            <th>Session</th>
                            <th>Status</th>
                          </tr>
                          <tr>
                            <td>
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                  id="checkbox-2">
                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td>
                              1
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle" width="35"
                                data-toggle="title" title="">
                              <span class="d-inline-block ml-1">Sarah Smith</span>
                              <div class="table-links">
                                <a href="#">View</a>
                                <div class="bullet"></div>
                                <a href="update.html">Edit</a>
                                <div class="bullet"></div>
                                <a href="#" class="text-danger">Trash</a>
                              </div>
                            </td>
                            <td>01387656743</td>
                            <td>Science</td>
                            <td>2019-20</td>
                            <td><div class="badge badge-primary">1st Year</div></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                  id="checkbox-3">
                                <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td>
                              2
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle" width="35"
                                data-toggle="title" title="">
                              <span class="d-inline-block ml-1">Sarah Smith</span>
                              <div class="table-links">
                                <a href="#">View</a>
                                <div class="bullet"></div>
                                <a href="update.html">Edit</a>
                                <div class="bullet"></div>
                                <a href="#" class="text-danger">Trash</a>
                              </div>
                            </td>
                            <td>01387656743</td>
                            <td>Science</td>
                            <td>2019-20</td>
                            <td><div class="badge badge-warning">2nd Year</div></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                  id="checkbox-4">
                                <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td>
                              3
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle" width="35"
                                data-toggle="title" title="">
                              <span class="d-inline-block ml-1">Sarah Smith</span>
                              <div class="table-links">
                                <a href="#">View</a>
                                <div class="bullet"></div>
                                <a href="update.html">Edit</a>
                                <div class="bullet"></div>
                                <a href="#" class="text-danger">Trash</a>
                              </div>
                            </td>
                            <td>01387656744</td>
                            <td>Science</td>
                            <td>2019-20</td>
                            <td><div class="badge badge-success">Alumni</div></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer float-right">
                <button class="btn btn-primary">Promoted</button>
              </div>
            </form>
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
