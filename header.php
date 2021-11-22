<?php 
session_start();

if(isset($_SESSION['userId']))
{
    require_once("admin/production/functions/getThisUserData.php");
}
?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduwise - Education HTML5 Template</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Goole Font -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/font-awesome.min.css">    
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/flaticon.css">
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/magnific-popup.css">    
    <!-- owl carousel -->
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/owl.carousel.css">
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/owl.theme.css">     
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/animate.css"> 
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/slick.css">  
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/preloader.css"/>    

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/revolution/layers.css">
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/revolution/navigation.css">
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/revolution/settings.css">    
    <!-- Mean Menu-->
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/assets/meanmenu.css">
    <!-- main style-->
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/style.css">    
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/responsive.css">
    <link rel="stylesheet" href="/php_Book/Eduwise2/css/demo.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="header_four">
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>    
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="info_wrapper">
                        <div class="contact_info">                   
        					<ul class="list-unstyled">
                                <li><i class="flaticon-phone-receiver"></i>+000-2356-222</li>
        						<li><i class="flaticon-mail-black-envelope-symbol"></i>contact@yourdomain.com</li>
        					</ul>                    
                        </div>
                        <div class="login_info">
                             <ul class="d-flex">
                            
                                <?php  if(!isset($_SESSION['userId'])){ ?>
                                <li class="nav-item"><a href="#" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>Sign Up</a></li>
                                <li class="nav-item"><a href="#" class="nav-link join_now js-modal-show"><i class="flaticon-padlock"></i>Log In</a></li>
                            <?php } else {  ?>
                            <!-- //there's session with this name found -->
                                <li class="nav-item"><a href="#" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>Welcome <?php echo $thisUser['userName']?></a></li>
                                <li class="nav-item"><a href="logOut.php" class="nav-link join_now js-modal-show"><i class="flaticon-padlock"></i>Log out</a></li>

                             <?php   } ?>
                            </ul>
                            <a href="#" title="" class="apply_btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="logo"></a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="#" class="nav-link active">Home</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="index-2.html" class="nav-link">Home Version 01</a></li>
                                <li class="nav-item"><a href="index-3.html" class="nav-link">Home Version 02</a></li>
                                <li class="nav-item"><a href="index-4.html" class="nav-link">Home Version 03</a></li>
                                <li class="nav-item"><a href="index-5.html" class="nav-link">Home Version 04</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="book.php" class="nav-link">books</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="book.html" class="nav-link">books</a></li>
                                <li class="nav-item"><a href="book-details.html" class="nav-link">books Details</a></li>
                            </ul> 
                        </li>
                        <li class="nav-item"><a href="blog" class="nav-link">Blog</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="blog.html" class="nav-link">Blog List</a></li> 
                                <li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Grid One</a></li> 
                                <li class="nav-item"><a href="blog-3.html" class="nav-link">Blog Grid Two</a></li>
                                <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                            </ul> 
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Pages</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">books</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="book.html" class="nav-link">books</a></li>
                                        <li class="nav-item"><a href="book-details.html" class="nav-link">books Details</a></li>
                                    </ul>    
                                </li>                                 
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Events</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="event.html" class="nav-link">Event</a></li>
                                        <li class="nav-item"><a href="event-details.html" class="nav-link">Event Details</a></li>
                                    </ul>    
                                </li>                                
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Blog</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="blog.html" class="nav-link">Blog List</a></li> 
                                        <li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Grid One</a></li> 
                                        <li class="nav-item"><a href="blog-3.html" class="nav-link">Blog Grid Two</a></li>
                                        <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                                    </ul>    
                                </li> 
                                <li class="nav-item"><a href="become-a-teacher.html" class="nav-link">Become A Teacher</a></li>
                                <li class="nav-item"><a href="teacher-profile.html" class="nav-link">Teachers Profile</a></li>
                                <li class="nav-item"><a href="team.html" class="nav-link">Teachers Page</a></li>
                                <li class="nav-item"><a href="forgot-password.html" class="nav-link">Forgot Password</a></li>
                            </ul>                            
                        </li>     
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <div class="mr-auto search_area ">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><i class="search_btn flaticon-magnifier"></i>
                            <div id="search">
                                <button type="button" class="close">×</button>
                                 <form>
                                     <input type="search" value="" placeholder="Search here...."  required/>
                                 </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav><!-- END NAVBAR -->
        </div> 
    </div>
                        