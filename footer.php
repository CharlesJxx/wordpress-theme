<!-- footer start -->
<footer class="main-footer overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-about-col col-default">
                        <div class="footer-logo">
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo-2.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt soluta beatae ipsa.</p>
                        <ul class="about-info">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> <p>No.668 Xinzhuan Road,Shanghai,China</p></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> <p>(+86) 021 31751393</p></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> <p>sales@crushermill.org</p></li>
                        </ul>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="col-default footer-post-col clearfix">
                        <h4>Recent Post</h4>
                        <div class="heading-under-line"></div>
                        <ul>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/images/blog/post-1.jpg" alt="">
                                <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                <p><a class="time" href="#">5 Hours ago</a></p>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/images/blog/post-2.jpg" alt="">
                                <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                <p><a class="time" href="#">5 Hours ago</a></p>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/images/blog/post-3.jpg" alt="">
                                <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                <p><a class="time" href="#">5 Hours ago</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="quick-contact col-default">
                        <h4>Quick contact</h4>
                        <div class="heading-under-line"></div>
                        <div id="form-messages"></div>
                        <form id="ajax-contact" method="post" action="php/contact.php">
                            <div class="row">
                                <div class="col-sm-6">
                                   <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required> 
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="form-control textarea-hight-full" id="message" name="message" rows="3" placeholder="Message" required></textarea>
                                    <button class="btn btn-default simple-btn" type="submit">Sent Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Copyright start from here -->
    <div class="copyright">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright-col text-center">
                    <p>Copyright ©2018 <a href="<?php echo get_option('home'); ?>" target="_blank"><?php bloginfo('name'); ?></a> All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

    <!-- All Included JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-dropdownhover.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-scrolltofixed-min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jarallax.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.countup.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.filterizr.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/lightbox.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/dyscrollup.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/VideoPlayerPopUp.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/animated-text.js"></script>

    <!-- Custom Js -->
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

</body>

</html>