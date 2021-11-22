<?php
require_once("includes/connect.php");
$blogId=$_GET['blogId'];
require_once("header.php");
require_once("admin/production/functions/getComment.php");
require_once("admin/production/functions/getThisBlog.php");

?>
    <div class="intro_wrapper">
        <div class="container">  
            <div class="row">        
                 <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="intro_text">
                        <h1>Blog Details Page</h1>
                        <div class="pages_links">
                            <a href="#" title="">Home</a>
                            <a href="#" title="">Blog</a>
                            <a href="#" title="" class="active">Blog Details</a>
                        </div>
                    </div>
                </div>              

            </div>
        </div> 
    </div> 
</header> <!-- End nav -->



<section class="login_signup_option">
    <div class="l-modal is-hidden--off-flow js-modal-shopify">
        <div class="l-modal__shadow js-modal-hide"></div>
        <div class="login_popup login_modal_body">
            <div class="Popup_title d-flex justify-content-between">
                <h2 class="hidden">&nbsp;</h2>
                <!-- Nav tabs -->
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Register</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Login-->
                            <div class="tab-pane fade in show active" id="login" role="tabpanel">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <a href="forgot-password.html" title="" class="forget_pass">Forget Password ?</a>
                                            <button type="submit" class="btn btn-default login_btn">Login</button>
                                        </div> 
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="social_login">
                                                <div class="social_items">
                                                    <button class="google_login google">Login Google</button>
                                                    <button class="google_login facebook">Login Facebook</button>
                                                    <button class="google_login twitter">Login Twitter</button>
                                                    <button class="google_login linkdin">Login Linkdin</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel2" role="tabpanel">
                                <form action="#" class="register">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <button type="submit" class="btn btn-default login_btn">Register</button>
                                        </div> 
                                    </div>
                                </form>
                            </div><!--/.Panel 2-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  <!-- End Login Signup Option -->




<section class="blog_wrapper">
    <div class="container">  
        <div class="row">        
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="blog_post">
                    <h3><?php echo $thisBlog['blogTitle'] ?></h3>
                    <div class="post_by d-flex">
                        <span>By - <a href="#" title="" class="bloger_name">Cavien Piterson</a></span>
                        <span><?php echo $thisBlog['created_at']; ?> </span>                        
                        <span><a href="#" title="">Your Category Name</a></span>
                    </div>
                    <img src="admin/production/images/<?php echo $thisBlog['blogImage'] ?>" alt="" class="img-fluid">
                    <div class="postpage_content_wrapper">
                        <div class="social_wrapper">
                            <h4>Share</h4>
                            <ul class="social_items list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                            </ul>
                        </div>
                        <div class="blog_post_content">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
                            <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <p class="quite_speech"><i class="fa fa-quote-right"></i>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae id efficitur condimentum, dui nisl ullamcorper diam, at molestie nulla erat gna.</p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
                            <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <h3>An Additional Point</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
                            <div class="banner">
                                <img src="images/blog/details_2.png" alt="" class="img-fluid">
                                <p><span>Scource : </span>Unflash</p>
                            </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
                            <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <div class="post_response_count d-flex justify-content-between">
                                <ul class="d-flex tags">
                                    <li class="tag_headline">Tags : </li>
                                    <li><a href="#" title="">Piterson, </a></li>
                                    <li><a href="#" title="">Cavien, </a></li>
                                    <li><a href="#" title="">human, </a></li>                    
                                    <li><a href="#" title="">master, </a></li>
                                    <li><a href="#" title="">pleasure</a></li>
                                </ul>
                                <ul class="d-flex comnent_count">
                                    <li><i class="fas fa-thumbs-up"></i>3 Likes</li>
                                    <li><i class="fas fa-comment"></i>2 Comments</li>
                                </ul>  
                            </div>
                    
                            <!-- Blog Comment Wrappper-->
                            <div class="commnet-wrapper">
                                <div class="items_title">
                                    <h3 class="title">2 Commnets</h3>
                                </div>
                                 <div class="comment-list-items">
                                 <?php
                                      while($comment=mysqli_fetch_assoc($getCommentResult)) {
                                 ?>
                                    <div class="comment-list-wrapper">
                                        <div class="comment-list">
                                            <div class="commnet_img">
                                                <img src="admin/production/images/<?php echo $comment['userImage']?>" alt="member img" class="img-fluid">
                                            </div>
                                            
                                            <div class="comment-text">
                                                <div class="author_info"> 
                                                    <div class="author_name">
                                                        <a href="#" class=""><?php echo $comment['userName']  ?></a> 
                                                        <span><?php echo $comment['commentDate']; ?></span>
                                                     </div>
                                                     <div class="reply-comment">
                                                        <a href="#" title=""> <i class="flaticon-reply-arrow"></i> Reply</a>
                                                    </div> 
                                                </div>     
                                                <p><?php echo $comment['commentContent']; ?></p>
                                            </div>
                                        </div>  
                                         </div>
                                            </div>     
                                                <p>You need to be sure there isn't anything embarrassing hidden in the repeat predefined chunks as nessing hidden in the repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                            </div>                               
                                        </div>
                                    </div>
                              <?php  }   ?>
                                </div> 
                                <!--  Leave Commnent Wrapper -->
                                <div class="leave_comment_wrapper">
                                    <div class="items_title">
                                        <h3 class="title">Leave A Comment</h3>
                                        <p>You need to be sure there isn't anything embarrassing hidden in the repeat predefined</p>
                                    </div>
                                    <div class="leave_comment">
                                        <div class="contact_form">
                                            <form action="/admin/production/functions/addComment.php" method="post">
                                                <div class="row">
                                                 
                                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                                        <textarea class="form-control" name="commentContent" id="comment" placeholder="Your Comment Wite Here ..."></textarea>
                                                    </div>
                                                    <?php 
                                                    // echo $_SESSION['userId'];
                                                    // echo $blogId;
                                                    ?>
                                                   
                                                         <!-- <input  -->
                                                          <input type="hidden" name="blogId" id="" value=<?php echo $blogId?>> 
                                                     <div class="col-12 col-sm-12 col-md-12 submit-btn">
                                                        <button type="submit" class="text-center">Post Comment</button>
                                                    </div>
                                                </div>
                                            </form>   
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div> <!-- End Blog Left Side-->

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">

                    <div class="become_a_teacher widget_single">
                        <div class="form-full-box">
                            <div class="form_title">
                                <h2>Become A Membar</h2>
                                <p>Get Instant access to <span>5000+ </span>Video courses </p>
                            </div>
                            <form>
                                <div class="register-form">
                                    <div class="row">
                                        <div class="col-12 col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label><i class="fas fa-user"></i></label>
                                                <input class="form-control" name="name" placeholder="Write Your Name" required="" type="text">
                                            </div>
                                        </div>

                                        <div class="col-12 col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label><i class="flaticon-email"></i></label>
                                                <input class="form-control" name="email" placeholder="Write Your E-mail" required="" type="email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-xs-12 col-md-12">
                                            <div class="form-group massage_text">
                                                <label><i class="flaticon-copywriting"></i></label>
                                                <textarea class="form-control"  placeholder="Write Something Here" required="" ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xs-12 col-md-12 register-btn-box">
                                            <button class="register-btn" type="submit">Send Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="recent_post_wrapper widget_single">
                        <div class="items-title">
                            <h3 class="title">Recent Post</h3>
                        </div>
                        <div class="single-post">
                            <div class="recent_img">
                                 <a href="#" title=""><img src="images/blog/side_blog_1.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">How to Become Master In CSS within qa Week.</a>
                                <div class="post-date">
                                    <span>May 29, 2019</span>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="images/blog/side_blog_2.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Connecting volunteers & nonprofitsz worldwide.</a>
                                <div class="post-date">
                                    <span>25 August, 2019</span>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="images/blog/side_blog_3.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Research of Learn training process</a>
                                <div class="post-date">
                                    <span>25 August, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="archives widget_single">
                        <div class="items-title">
                            <h3 class="title">All Categories</h3>
                        </div>
                        <div class="archives-items">
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Art & Design </a></li>
                                <li><a href="#" title="">Busness</a></li>
                                <li><a href="#" title="">IT & Software</a></li>
                                <li><a href="#" title="">Languages</a></li>
                                <li><a href="#" title="">Programming</a></li>                                
                                <li><a href="#" title="">Technology</a></li>
                            </ul>
                        </div>
                    </div>  



                    <div class="popular_tags widget_single">
                        <div class="items-title">
                            <h3 class="title">Popular Tags</h3>
                        </div>
                        <div class="tags-items">
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Travel</a></li>
                                <li><a href="#" title="">Amazing</a></li>
                                <li><a href="#" title="">Clean</a></li>
                                <li><a href="#" title="">Responsive</a></li>
                                <li><a href="#" title="">Room</a></li>
                                <li><a href="#" title="">Travel Tips</a></li>
                                <li><a href="#" title="">Tour</a></li>
                                <li><a href="#" title="">Design</a></li>
                            </ul>
                        </div>
                    </div>  


                    <div class="twitter_post_wrapper widget_single">
                        <div class="items-title">
                            <h3 class="title">Twitter Feed</h3>
                        </div>
                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Jhothan Smith, </a> Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget.</p>
                                </div>
                            </div>
                        </div>

                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Willian Kane, </a>Lorem ipsum dolor simollirra. Pede phasellus eget.felis dapibus arcu donec viverra.</p>
                                </div>
                            </div>
                        </div>

                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Michael Smith, </a> Lorem ipsum dolor sit amet mollis felPede phasellus eget.felis dapibuiverra. </p>
                                </div>
                            </div>
                        </div>

                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Katie Hale, </a> Loreor sit apibus arcu donec viverra. Pede phasellus eget.felis dapibus arcu donec viverra. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ./ End  Blog Right Side-->
            
        </div>
    </div> 
</section> <!-- ./ End Blog Area Wrapper-->


<!-- Footer -->  
<footer class="footer_2">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col footer_intro">
                        <img src="images/logo2.png" alt="" class="f_logo">
                        <p>Ante amet vitae vulputate odio nulla vel pretium pulvinar aenean. Rhoncus eget adipiscing etiam arcu. Ultricies justo ipsum nec amet.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col">
                        <h3>Useful Links</h3>
                        <ul class="location_info quick_inf0">
                            <li><a href="#">Leadereship</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Diversity</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Press</a></li>
                        </ul>                         
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col information">
                        <h3>information</h3>
                        <ul class="quick_inf0">
                            <li><a href="#">Leadereship</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Diversity</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Press</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col contact">
                        <h3>Contact Us</h3>
                        <p>Ante amet vitae vulputate odio nulla vel pretium aenean.</p>
                        <div class="contact_info">
                            <span>+000 124 325</span> 
                            <span class="email">info@yourdomain.com</span>
                        </div>
                        <ul class="social_items d-flex list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                        </ul>
                    </div>
                </div>
                 <div class="col-12 col-md-12 col-lg-12">
                    <div class="copyright">
                        <a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <div class="shapes_bg">
        <img src="images/shapes/testimonial_2_shpe_1.png" alt="" class="shape_3">        
        <img src="images/shapes/footer_2.png" alt="" class="shape_1">
    </div>    
</footer><!-- End Footer -->

<section id="scroll-top" class="scroll-top">
    <h2 class="disabled">Scroll to top</h2>
    <div class="to-top pos-rtive">
        <a href="#"><i class = "flaticon-right-arrow"></i></a>
    </div>
</section>


    <!-- JavaScript -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>     
    <script src="js/owl.carousel.min.js"></script>   
    <script src="js/slick.min.js"></script>   
    <script src="js/jquery.meanmenu.min.js"></script>    
    <script src="js/wow.min.js"></script> 
    <!-- Counter Script -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/custom.js"></script>  
    
    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="js/demo.js"></script>
    <div class="demo-style-switch" id="switch-style">
        <a id="toggle-switcher" class="switch-button" title="Change Styles"><span class="fa fa-cog fa-spin"></span></a>
        <div class="switched-options">
            <div class="config-title">
                <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="logo"></a>
                <p>Education Template</p>
                
            </div>
            <div class="demos">
                <div><a href="index-2.html" data-toggle="tooltip" data-placement="top" title="Home Style One"><img class="main-image img-fluid" src="demo/index_1.png" alt=""/></a></div>
                <div><a href="index-3.html" data-toggle="tooltip" data-placement="top" title="Home Style Two"><img class="main-image img-fluid" src="demo/index_2.png" alt=""/></a></div>
                <div><a href="index-4.html" data-toggle="tooltip" data-placement="top" title="Home Style Three"><img class="main-image img-fluid" src="demo/index_3.png" alt=""/></a></div>
                <ul class="list-unstyled clearfix">
                    <li><a href="about.html" data-toggle="tooltip" data-placement="top" title="About Page"><img src="demo/about.png" alt="" class="img-fluid"></a></li>
                    <li><a href="blog.html" data-toggle="tooltip" data-placement="top" title="Blog Page"><img src="demo/blog.png" alt="" class="img-fluid"></a></li>
                    <li><a href="blog-details.html" data-toggle="tooltip" data-placement="top" title="Blog Details Page"><img src="demo/blog_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="event.html" data-toggle="tooltip" data-placement="top" title="Event Page"><img src="demo/event.png" alt="" class="img-fluid"></a></li>
                    <li><a href="event-details.html" data-toggle="tooltip" data-placement="top" title="Event Deiails"><img src="demo/event_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="teacher-profile.html" data-toggle="tooltip" data-placement="top" title="Teacher Profile"><img src="demo/teacher_pro.png" alt="" class="img-fluid"></a></li>
                    <li><a href="course.html" data-toggle="tooltip" data-placement="top" title="Courses Page"><img src="demo/course.png" alt="" class="img-fluid"></a></li>
                    <li><a href="course-details.html" data-toggle="tooltip" data-placement="top" title="Courses Details"><img src="demo/course_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="team.html" data-toggle="tooltip" data-placement="top" title="Team Page"><img src="demo/team.png" alt="" class="img-fluid"></a></li>
                    <li><a href="contact.html" data-toggle="tooltip" data-placement="top" title="Contact Page"><img src="demo/contact.png" alt="" class="img-fluid"></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>


</html>
