<!DOCTYPE html>
<html lang="en">
<?php require_once "includes/header.php";?>
<?php require_once "includes/admin_measurement.php";?>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">

                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php require_once "includes/sidebar.php"; ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                            <div class="page-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Customer Measurement</h4>

                        <!-- Basic Form Inputs card start -->
                        <div class="card">
                            <div class="card-header">

                                <div class="card-header-right">
                                    <i class="icofont icofont-spinner-alt-5"></i>
                                </div>
                                 <!-- Page body start -->
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <div class="orders">

                                            </div>
                                            <form class="col-sm-12" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                                                                <div class="form-group row">                                                                    
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="fullname" class="form-control" placeholder="Customer Name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">                                                                    
                                                                    <div class="col-sm-10">
                                                                        <input type="tel" name="phone" class="form-control"
                                                                        placeholder="Phone Number" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                        <div class="col-sm-10">                                                                           
                                                                            <input type="email" name="email" class="form-control"
                                                                            placeholder="Email" >
                                                                        </div>
                                                                    </div>
                                                                <div class="form-group row">
                                                                                <div class="col-sm-10">
                                                                                    <textarea rows="5" name="address" cols="5" class="form-control"
                                                                                    placeholder="Address"></textarea>
                                                                                </div>
                                                                            </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-10">
                                                                            <select name="style" class="form-control" >
                                                                                <option value="opt1">Choose Style</option>
                                                                                <option value="opt2">Gown</option>
                                                                                <option value="opt3">Ankara</option>
                                                                                <option value="opt4">Skirt</option>
                                                                                <option value="opt5">Plain Gown</option>
                                                                                <option value="opt6">Top</option>
                                                                                <option value="opt7">Butterfly</option>
                                                                                <option value="opt8">Wedding Gown</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">                                                                        
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="burst"
                                                                            class="form-control"
                                                                            placeholder="Burst" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                    <div class="col-sm-10">                                                                        
                                                                        <input type="text" name="hip" class="form-control"
                                                                        placeholder="Hip" >
                                                                    </div>
                                                                </div>
                                                                  <div class="form-group row">
                                                                    <div class="col-sm-10">                                                                        
                                                                        <input type="text" name="skirt_length" class="form-control"
                                                                        placeholder="Skirt Length" >
                                                                    </div>
                                                                </div>

                                                                       <div class="form-group row">
                                                                    <div class="col-sm-10">                                                                        
                                                                        <input type="text" name="waist" class="form-control"
                                                                        placeholder="Waist" >
                                                                    </div>
                                                                </div>
                                                                    <div class="form-group row">                                                                            
                                                                        <div class="col-sm-10">
                                                                                <input type="text" name="hand_lenght" class="form-control"
                                                                                placeholder="Hand Lenght" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">                                                                                
                                                                            <div class="col-sm-10">
                                                                                    <input type="text" name="sholder" class="form-control"
                                                                                    placeholder="Sholder" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">                                                                                
                                                                            <div class="col-sm-10">
                                                                            <label for="">Recieve Date</label>
                                                                                    <input type="date" name="recieve_date" class="form-control"
                                                                                    placeholder="Date Recieve" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">                                                                                
                                                                            <div class="col-sm-10">
                                                                                <label for="">Collection Date</label>
                                                                                    <input type="date" name="collection_date" class="form-control"
                                                                                    placeholder="Collection Date" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">                                                                                
                                                                                <div class="col-sm-10">
                                                                                    <input type="file" name="file" class="form-control" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="row m-t-4">
                                                                            <div class="col-md-2">
                                                                            <button name="btn" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                              </form>
                                            <table class="table">
                                                <thead>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Phone number</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Date</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <!-- am chart -->
    <script src="assets/pages/widget/amchart/amcharts.min.js"></script>
    <script src="assets/pages/widget/amchart/serial.min.js"></script>
    <!-- Todo js -->
    <script type="text/javascript " src="assets/pages/todo/todo.js "></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function() {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });
    </script>
</body>

</html>