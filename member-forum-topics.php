<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from themelooks.us/demo/socifly/html/member-forum-topics.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2017 13:48:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>SocialEngineering - Multipurpose Social Network HTML5 Template</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="ThemeLooks">
    <meta name="description" content="Multipurpose Social Network HTML5 Template">
    <meta name="keywords" content="social media, social network, forum, shop, bootstrap, html5, css3, template, responsive, retina ready">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700%7CRoboto:300,400,400i,500,700">

    <!-- ==== Plugins Bundle ==== -->
    <link rel="stylesheet" href="css/plugins.min.css">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="style.css">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="css/responsive-style.css">
    
    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="css/colors/color-1.css" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader--inner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
       <?php  include("header.php"); ?>
        <!-- Header Section End -->

        <!-- Cover Header Start -->
        <div class="cover--header pt--80 text-center" data-bg-img="img/cover-header-img/bg-01.jpg" data-overlay="0.6" data-overlay-color="white">
            <div class="container">
                <div class="cover--avatar online" data-overlay="0.3" data-overlay-color="primary">
                    <img src="img/cover-header-img/avatar-01.jpg" alt="">
                </div>

                <div class="cover--user-name">
                    <h2 class="h3 fw--600">Eileen K. Ruiz</h2>
                </div>

                <div class="cover--user-activity">
                    <p><i class="fa mr--8 fa-clock-o"></i>Active 1 year 9 monts ago</p>
                </div>

                <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
                    <p>Hello everyone ! There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
            </div>
        </div>
        <!-- Cover Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-12 pb--60" da
					ta-trigger="stickyScroll">
                        <div class="main--content-inner drop--shadow">
                            <!-- Content Nav Start -->
                            <div class="content--nav pb--30">
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                    <li><a href="activity1.php">Recent posts</a></li>
                                    <li><a href="member-groups.php">Groups</a></li>
                                    <li class="active"><a href="member-forum-topics.php">Forum</a></li>
                                    <li><a href="member-media-all.php">Media</a></li>
                                </ul>
                            </div>
                            <!-- Content Nav End -->

                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--50 clearfix">
                                <div class="filter--links float--left">
                                    <ul class="nav ff--primary">
                                        <li class="active"><a href="#">Questions</a></li>
                                        <li><a href="recentquestion.php">Recent Questions</a></li>
                                     
                                    </ul>
                                </div>
                            </div>
                            <!-- Filter Nav End -->

                            <!-- Forum Header Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem01" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>What is PHP?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem01" class="content collapse">
                                    <div class="content--inner">
                                        <p>PHP is an open source server side scripting language commonly used for web applications.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem02" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>What is Open Source Software?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem02" class="content collapse">
                                    <div class="content--inner">
                                        <p>Software in which the source codes are freely used, modify, and shared by anyone are called Open Source Software. These can also be distributed under licenses that adhere with the Open Source Definition.</p>
                                    </div>
                                </div>
                            </div>
							 <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem03" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>What is the difference between include(), include_once()  and require_once()?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem03" class="content collapse">
                                    <div class="content--inner">
                                        <p>The include() statement includes and evaluates a specified line i.e. it will include a file based in the given path. require() does the same thing expect upon failure it will generate a fatal error and halt the script whereas include() will just gives a warning and allow script to continue. require_once() will check if the file already has been included and if so it will not include the file again.</p>
                                    </div>
                                </div>
                            </div>
							
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem04" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>Differences between GET, POST and REQUEST methods ?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem04" class="content collapse">
                                    <div class="content--inner">
                                        <p>GET and POST are used to send information from client browser to web server. In case of GET the information is send via GET method in name/value pair and is URL encoded. The default GET has a limit of 512 characters. The POST method transfers the information via HTTP Headers. The POST method does not have any restriction in data size to be sent. POST is used for sending data securely and ASCII and binary type’s data. The $_REQUEST contains the content of both $_GET, $_POST and $_COOKIE.</p>
                                    </div>
                                </div>
                            </div>
							 <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem05" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>What is session and why do we use it?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem05" class="content collapse">
                                    <div class="content--inner">
                                        <p>Session is a super global variable that preserve data across subsequent pages. Session uniquely defines each user with a session ID, so it helps making customized web application where user tracking is needed.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem06" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>What is cookie and why do we use it?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem06" class="content collapse">
                                    <div class="content--inner">
                                        <p>Cookie is a small piece of information stored in client browser. It is a technique used to identify a user using the information stored in their browser (if already visited that website) . Using PHP we can both set and get COOKIE.</p>
                                    </div>
                                </div>
                            </div>
							 <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem07" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>What is the difference between unset() and unlink() function?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem07" class="content collapse">
                                    <div class="content--inner">
                                        <p>unset() is used to destroy a variable where as unlink() is used to destroy a file.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem08" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>What is PDO classes?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem08" class="content collapse">
                                    <div class="content--inner">
                                        <p>The PHP Data Objects (PDO) extension defines a lightweight, consistent interface for accessing databases in PHP. It is a data-access abstraction layer, so no matter what database we use the function to issue queries and fetch data will be same. Using PDO drivers we can connect to database like DB2, Oracle, PostgreSQL etc.</p>
                                    </div>
                                </div>
                            </div>
							 <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem09" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>What is CSS?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem09" class="content collapse">
                                    <div class="content--inner">
                                        <p>CSS or cascading Style Sheet is a way to style and present HTML.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem10" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>What is AJAX?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem10" class="content collapse">
                                    <div class="content--inner">
                                        <p>AJAX (Asynchronous JavaScript and XML) is a technique which allows updating parts of a web page, without reloading the whole page. Data is exchanged asynchronously in small amounts of data with the server.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Forum Header End -->

                            <!-- Topics List Start -->
                            
                            <!-- Topics List End -->
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </section>
        <!-- Page Wrapper End -->

        <!-- Footer Section Start -->
   <?php  include("footer.php"); ?>
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#" class="btn"><i class="fa fa-caret-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== Plugins Bundle ==== -->
    <script src="js/plugins.min.js"></script>

    <!-- ==== Color Switcher Plugin ==== -->
   

    <!-- ==== Main Script ==== -->
    <script src="js/main.js"></script>

</body>

<!-- Mirrored from themelooks.us/demo/socifly/html/member-forum-topics.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2017 13:48:48 GMT -->
</html>