<footer id="site-footer" class="site-footer background">
            <div class="footer">
                <div class="section-padding">
                    <div class="section-container">
                        <div class="block-widget-wrap footer">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="block block-menu m-b-20">
                                        <h2 class="block-title">Contact Us</h2>
                                        <div class="block-content">
                                            <ul>
                                            <?php echo get_theme_mod('footer_address');?>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block block-social">
                                        <ul class="social-link">
                                            
                                            <li>
                                                <a href="<?php echo get_theme_mod('facebook_link');?>" target="_blank"><i class="fa fa-facebook"></i></i></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod('instagram_link');?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod('twitter_link');?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod('linkedin_link');?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="block block-menu">
                                        <h2 class="block-title">Quick Links</h2>
                                        <div class="block-content">
                                            <ul>
                                            <?php   
                                                wp_nav_menu( array(
                                                    'menu'  => 'footer_menu', 
                                                    'items_wrap' => '%3$s',
                                                    'container' => false,
                                                ) );
                                                 ?> 
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="block block-menu">
                                        <h2 class="block-title">Policies</h2>
                                        <div class="block-content">
                                            <ul>
                                            <?php   
                                                wp_nav_menu( array(
                                                    'menu'  => 'footer_menu2', 
                                                    'items_wrap' => '%3$s',
                                                    'container' => false,
                                                ) );
                                                 ?> 
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="block block-menu">
                                        <h2 class="block-title">Feedback</h2>
                                        <div class="block-content">
                                            <div class="block-content">
                                                
                                                <?php echo do_shortcode('[contact-form-7 id="b495b40" title="feedback"]'); ?>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="section-padding">
                    <div class="section-container">
                        <div class="block-widget-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="footer-left">
                                        <p class="copyright"><?php echo get_theme_mod('copyright_title');?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-right">
                                        <div class="block block-image">
                                            <img width="309" height="32" src="<?php echo get_theme_mod('payment_image');?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back Top button -->
    <div class="back-top button-show">
        <i class="arrow_carrot-up"></i>
    </div>

    <!-- Dependency Scripts -->
    <script src="<?php echo get_template_directory_uri() ?>/libs/popper/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/libs/jquery/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/libs/slick/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/
libs/mmenu/js/jquery.mmenu.all.min.js"></script>

    <!-- Site Scripts -->
    <script src="<?php echo get_template_directory_uri() ?>/
assets/js/app.js"></script>
    <?php wp_footer(); ?>
</body>

</html>