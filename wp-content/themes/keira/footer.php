                <div id="footer" class="text-center">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="copyright">
                                    <span><?php echo get_theme_mod( 'wp_footer_copyright', '© Copyrights inaikas 2021. All Rights Reserved.' ); ?></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 initialdisp">
                                <div id="news" class="news">
                                <?php
                                    if (is_active_sidebar('mailchimp-form')) {
                                        dynamic_sidebar('mailchimp-form');
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
            </main>
             <!-- start Back to top button -->
            <a class="top-link hide" href="" id="js-top">
                <i class="fa fa-angle-up"></i>
                <span class="screen-reader-text">Back to top</span>
            </a>
            <!-- End Back to top button -->

            <!-- start overlay nav -->
            <div class="cd-overlay-nav">
                <span></span>
            </div>
            <div class="cd-overlay-content">
                <span></span>
            </div>
            <!-- End overlay nav -->
        </section>
        <?php wp_footer(); ?>
    </body>
</html>