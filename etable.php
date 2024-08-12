<?php
$conn = new mysqli("localhost", "root", " ", "cams");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>CAMS - MKCE</title>
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="https://www.mkce.ac.in">
                        <b class="logo-icon p-l-10" style="padding-left:0px; border-left:0px;">
                            <img src="assets/images/logo2.png" width="50px" alt="homepage" class="light-logo" />
                           
                        </b>
                        <span class="logo-text">
                             <img src="assets/images/logo.png" alt="homepage" class="light-logo" />
                            
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Notifications</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Report Error</h5> 
                                                        <span class="mail-desc">Contact Support</span> 
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="profile.html"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-account-key m-r-5 m-l-5"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Student Corner</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="widgets.html" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Courses Enrolled</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="charts.html" aria-expanded="false"><i class="mdi mdi-account-edit"></i><span class="hide-menu">Academic Details</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="etable.html" class="sidebar-link"><i class="mdi mdi-grid"></i><span class="hide-menu"> Exam Timetable </span></a></li>
                            <li class="sidebar-item"><a href="result.html" class="sidebar-link"><i class="mdi mdi-verified"></i><span class="hide-menu"> Result </span></a></li>
                            <li class="sidebar-item"><a href="odleave.html" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu"> Apply Leave/On-Duty </span></a></li>
                        </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="bus.html" aria-expanded="false"><i class="mdi mdi-tablet-ipad"></i><span class="hide-menu">Feedbacks Corner</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-check-all"></i><span class="hide-menu"> Non Academic Complaint</span></a></li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i class="mdi mdi-book-multiple"></i><span class="hide-menu"> Course Feedback </span></a></li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i class="mdi mdi-book-open"></i><span class="hide-menu"> CAMS Improvement </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://mic.mkce.ac.in/index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">MIC Portal</span></a>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://hostel.mkce.ac.in" aria-expanded="false"><i class="mdi mdi-home-outline"></i><span class="hide-menu">Smart Hostel</span></a>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="charts.html" aria-expanded="false"><i class="mdi mdi-bank"></i><span class="hide-menu">Payment</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="efees.html" class="sidebar-link"><i class="mdi mdi-cash-multiple"></i><span class="hide-menu"> Exam fees </span></a></li>
                                <li class="sidebar-item"><a href="https:https://easypay.axisbank.co.in/easyPay/makePayment?mid=NDg0NDY%3D" class="sidebar-link"><i class="mdi mdi-cash-multiple"></i><span class="hide-menu"> Academic Fees </span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="bus.html" aria-expanded="false"><i class="mdi mdi-bus"></i><span class="hide-menu">Bus Fees</span></a>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard (Welcome 9276XXXXXXXX)</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Exam Timetable</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="card col-12">
                        <div class="card-body">
                            <h5 class="card-title">Exam Timetable</h5><br>
                            <h5 class="float-left">Forenoon : 09.30 A.M - 12.30 P.M</h5>
                            <h5 class="float-right">Afternoon : 02.00 P.M - 05.00 P.M</h5>
                            <div class="table-responsive">
                                <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting text-center" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60.9875px;">S.No</th>
                                            <th class="sorting text-center" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60.9875px;">Date</th>
                                            <th class="sorting_asc text-center" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 176.725px;">Session</th>
                                            <th class="sorting text-center" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60.9875px;">Semester</th>
                                            <th class="sorting text-center" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 129.613px;">Course Code</th>
                                            <th class="sorting text-center" tabindex="0" aria-controls="zero_config" rowspan="1.5" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 282.575px;">Course Name</th>
                                            <th class="sorting text-center" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 129.613px;">Seating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr role="row" class="odd text-center">
                                            <td class="sorting_1">1</td>
                                            <td>09/10/2024</td>
                                            <td>Forenoon</td>
                                            <td>5</td>
                                            <td>18AMC301JT</td>
                                            <td>Fundamentals of Deep Learning</td>
                                            <td><button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#studentAcademic">
                                                Add details
                                                </button></td>
                                        </tr><tr role="row" class="even text-center">
                                            <td class="sorting_1">2</td>
                                            <td>11/12/2024</td>
                                            <td>Forenoon</td>
                                            <td>5</td>
                                            <td>18AMC302T</td>
                                            <td>Automata Theory & Compiler Design</td>
                                            <td><button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#studentAcademic">
                                                Add details
                                                </button></td>
                                        </tr><tr role="row" class="odd text-center">
                                            <td class="sorting_1">3</td>
                                            <td>13/12/2024</td>
                                            <td>Forenoon</td>
                                            <td>5</td>
                                            <td>18AIC303JT</td>
                                            <td>Computer Networks</td>
                                            <td><button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#studentAcademic">
                                                Add details
                                                </button></td>
                                        </tr><tr role="row" class="even text-center">
                                            <td class="sorting_1">4</td>
                                            <td>16/12/2024</td>
                                            <td>Forenoon</td>
                                            <td>5</td>
                                            <td>18AMC303T</td>
                                            <td>Image Processing Principle</td>
                                            <td><button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#studentAcademic">
                                                Add details
                                                </button></td>
                                        </tr><tr role="row" class="odd text-center">
                                            <td class="sorting_1">5</td>
                                            <td>18/12/2024</td>
                                            <td>Forenoon</td>
                                            <td>5</td>
                                            <td>18AME004T</td>
                                            <td>Internet of Things</td>
                                            <td><button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#studentAcademic">
                                                Add details
                                                </button></td>
                                        </tr><tr role="row" class="even text-center">
                                            <td class="sorting_1">6</td>
                                            <td>20/12/2024</td>
                                            <td>Forenoon</td>
                                            <td>5</td>
                                            <td>18AME024JT</td>
                                            <td>Node JS</td>
                                            <td><button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#studentAcademic">
                                                Add details
                                                </button></td>
                                            </tr>
                                        </tbody>
                                </table>
                                <h4>
                                    Note : Candidates can view seating arrangements a day(After 05.00 pm) before the date of examinations
                                </h4>
                            </div>
                        </div>
                        </div>
                            </div>

                        </div>
                    </div>
                </div>
                <br>
            </div>
            <footer class="footer text-center">
                <b>2024 &copy M.Kumarasamy College of Engineering All Rights Reserved.<br>
                Developed and Maintained by Technology Innovation Hub.</b>
            </footer>
        </div>
            
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/waves.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
</body>
</html>