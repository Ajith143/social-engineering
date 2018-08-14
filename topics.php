<?php  
require("config.php");
session_start();
$mail=$_SESSION['mail'];
?><!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from themelooks.us/demo/socifly/html/topics.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2017 13:48:41 GMT -->
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

        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">CSS (Cascading Style Sheets)</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.html" class="btn-link">Home</a></li>
                    <li><a href="forums.html" class="btn-link">Forum</a></li>
                    <li><a href="sub-forums.html" class="btn-link">Front-End Engineering</a></li>
                    <li class="active"><span class="text-primary">CSS</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner drop--shadow">
                            <!-- Topics List Start -->
                            <div class="topics--list">
                                <table class="table">
                                    <thead class="ff--primary fs--14 text-darkest">
                                        <tr>
                                            <th>Topics</th>
                                            <th>Voices</th>
                                            <th>Post</th>
                                            <th>Frieshness</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="pinned">
                                            <td>
                                                <h4 class="h6 fw--500 text-darkest"><a href="topic-replies.html" class="btn-link">Love Sports</a></h4>

                                                <p>Started by <a href="member-activity-personal.html">Alice A. Baker</a> in <a href="#">sports</a> forum</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">07</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">21</p>
                                            </td>
                                            <td>
                                                <i class="text-primary fa fa-paperclip"></i>

                                                <p>2 days, 5 hours ago</p>

                                                <a href="member-activity-personal.html" class="topic--author">
                                                    <span class="name">Alice A. Baker</span>
                                                    <span class="avatar"><img src="img/topics-img/avatar-01.jpg" alt=""></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h6 fw--500 text-darkest"><a href="topic-replies.html" class="btn-link">How can i create a Grid Page?</a></h4>

                                                <p>Started by <a href="member-activity-personal.html">Alan R. Parker</a></p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">07</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">21</p>
                                            </td>
                                            <td>
                                                <p>2 days, 5 hours ago</p>

                                                <a href="member-activity-personal.html" class="topic--author">
                                                    <span class="name">David J. Kleiner</span>
                                                    <span class="avatar"><img src="img/topics-img/avatar-02.jpg" alt=""></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h6 fw--500 text-darkest"><a href="topic-replies.html" class="btn-link">Removing Headers from Pages</a></h4>

                                                <p>Started by <a href="member-activity-personal.html">Clayton M. Sant</a></p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">07</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">21</p>
                                            </td>
                                            <td>
                                                <p>2 days, 5 hours ago</p>

                                                <a href="member-activity-personal.html" class="topic--author">
                                                    <span class="name">Barbara L. Posey</span>
                                                    <span class="avatar"><img src="img/topics-img/avatar-03.jpg" alt=""></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h6 fw--500 text-darkest"><a href="topic-replies.html" class="btn-link">Header Image Resizing For NATURAL Theme</a></h4>

                                                <p>Started by <a href="member-activity-personal.html">Elizabeth D. Hernandez</a></p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">07</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">21</p>
                                            </td>
                                            <td>
                                                <p>2 days, 5 hours ago</p>

                                                <a href="member-activity-personal.html" class="topic--author">
                                                    <span class="name">William C. Morgan</span>
                                                    <span class="avatar"><img src="img/topics-img/avatar-04.jpg" alt=""></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h6 fw--500 text-darkest"><a href="topic-replies.html" class="btn-link">Can't access the CSS Editor</a></h4>

                                                <p>Started by <a href="member-activity-personal.html">Ronald M. Horne</a></p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">07</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">21</p>
                                            </td>
                                            <td>
                                                <p>2 days, 5 hours ago</p>

                                                <a href="member-activity-personal.html" class="topic--author">
                                                    <span class="name">Diane H. Guzman</span>
                                                    <span class="avatar"><img src="img/topics-img/avatar-05.jpg" alt=""></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h6 fw--500 text-darkest"><a href="topic-replies.html" class="btn-link">Change default colours on main menu</a></h4>

                                                <p>Started by <a href="member-activity-personal.html">Amanda D. Shaw</a></p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">07</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">21</p>
                                            </td>
                                            <td>
                                                <p>2 days, 5 hours ago</p>

                                                <a href="member-activity-personal.html" class="topic--author">
                                                    <span class="name">Diane H. Guzman</span>
                                                    <span class="avatar"><img src="img/topics-img/avatar-06.jpg" alt=""></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h6 fw--500 text-darkest"><a href="topic-replies.html" class="btn-link">Customising Kelly Theme post page</a></h4>

                                                <p>Started by <a href="member-activity-personal.html">Amanda D. Shaw</a></p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">07</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">21</p>
                                            </td>
                                            <td>
                                                <p>2 days, 5 hours ago</p>

                                                <a href="member-activity-personal.html" class="topic--author">
                                                    <span class="name">Sara Mitchell</span>
                                                    <span class="avatar"><img src="img/topics-img/avatar-07.jpg" alt=""></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h6 fw--500 text-darkest"><a href="topic-replies.html" class="btn-link">Tagline Colour</a></h4>

                                                <p>Started by <a href="member-activity-personal.html">Lida A. Copeland</a></p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">07</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">21</p>
                                            </td>
                                            <td>
                                                <p>2 days, 5 hours ago</p>

                                                <a href="member-activity-personal.html" class="topic--author">
                                                    <span class="name">Zachary West</span>
                                                    <span class="avatar"><img src="img/topics-img/avatar-08.jpg" alt=""></span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Topics List End -->

                            <!-- Page Count Start -->
                            <div class="page--count pt--30">
                                <label class="ff--primary fs--14 fw--500 text-darker">
                                    <span>Viewing 8 topics - 1 through 8 (of 8 total)</span>

                                    <a href="#" class="btn-link"><i class="fa fa-caret-left"></i></a>
                                    <input type="number" name="page-count" value="01" class="form-control form-sm">
                                    <a href="#" class="btn-link"><i class="fa fa-caret-right"></i></a>

                                    <span>08</span>
                                </label>
                            </div>
                            <!-- Page Count End -->
                        </div>

                        <div class="alert mt--30">
                            <div class="alert--inner ff--primary text-white bg-primary">
                                <p>You must be logged in to create new topics.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 pb--60" data-trigger="stickyScroll">
                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Find A Buddy</h2>

                            <!-- Buddy Finder Widget Start -->
                            <div class="buddy-finder--widget">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">I Am</span>

                                                    <select name="gender" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">Looking For</span>

                                                    <select name="lookingfor" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="female">Female</option>
                                                        <option value="male">Male</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">Age</span>

                                                    <select name="age" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="18to25">18 to 25</option>
                                                        <option value="25to30">25 to 30</option>
                                                        <option value="30to35">30 to 35</option>
                                                        <option value="35to40">35 to 40</option>
                                                        <option value="40plus">40+</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">City</span>

                                                    <select name="city" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="newyork">New York</option>
                                                        <option value="California">California</option>
                                                        <option value="Atlanta">Atlanta</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">Filter Country</span>

                                                    <select name="city" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="unitedstates">United States</option>
                                                        <option value="australia">Australia</option>
                                                        <option value="turkey">Turkey</option>
                                                        <option value="vietnam">Vietnam</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Buddy Finder Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Notice</h2>

                            <!-- Text Widget Start -->
                            <div class="text--widget">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some  look even slightly believable.</p>
                            </div>
                            <!-- Text Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Forums</h2>

                            <!-- Links Widget Start -->
                            <div class="links--widget">
                                <ul class="nav">
                                    <li><a href="sub-forums.html">User Interface Design<span>(12)</span></a></li>
                                    <li><a href="sub-forums.html">Front-End Engineering<span>(07)</span></a></li>
                                    <li><a href="sub-forums.html">Web Development<span>(37)</span></a></li>
                                    <li><a href="sub-forums.html">Social Media Marketing<span>(13)</span></a></li>
                                    <li><a href="sub-forums.html">Content Marketing<span>(28)</span></a></li>
                                </ul>
                            </div>
                            <!-- Links Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Archives</h2>

                            <!-- Nav Widget Start -->
                            <div class="nav--widget">
                                <ul class="nav">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar-o"></i>
                                            <span class="text">Jan - July 2017</span>
                                            <span class="count">(86)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar-o"></i>
                                            <span class="text">Jan - Dce 2016</span>
                                            <span class="count">(328)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar-o"></i>
                                            <span class="text">Jan - Dec 2015</span>
                                            <span class="count">(427)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Advertisements</h2>

                            <!-- Ad Widget Start -->
                            <div class="ad--widget">
                                <a href="#">
                                    <img src="img/widgets-img/ad.jpg" alt="" class="center-block">
                                </a>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>
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
    <script src="js/color-switcher.min.js"></script>

    <!-- ==== Main Script ==== -->
    <script src="js/main.js"></script>

</body>

<!-- Mirrored from themelooks.us/demo/socifly/html/topics.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2017 13:48:41 GMT -->
</html>