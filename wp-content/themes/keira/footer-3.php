            <!-- start overlay nav -->
            <div class="cd-overlay-nav">
                <span></span>
            </div>
            <div class="cd-overlay-content">
                <span></span>
            </div>
            <!-- End overlay nav -->

            <!-- ==================== start footer ==================== -->
            <div class="showcase-footer">
                <div class="container-xxl">
                    <div class="row">
                        <div class="footer-col col-sm-6 col-md-6 col-lg-6">
                            <?php if(get_theme_mod( 'wp_follow3_show_hide') === 'show' ) { ?>
                            <div class="footer-col-inner">
                                <div class="footer-social">
                                    <div class="footer-social-text"><span><?php echo get_theme_mod( 'wp_follow3_text' , 'Follow' ); ?></span><i class="fa fa-share-alt"></i></div>
                                    <div class="social-buttons">
                                        <ul>
                                        <?php if(get_theme_mod( 'wp_follow3_target') === 'blank' ) { ?>
                                            <li>
                                                <a href="<?php echo get_theme_mod( 'wp_follow3_icon1_link' , '#' ); ?>" target="_blank" class="hover-target">
                                                    <i class="fa <?php echo get_theme_mod( 'wp_follow3_icon1_text' , 'fa-facebook' ); ?>"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod( 'wp_follow3_icon2_link' , '#' ); ?>" target="_blank" class="hover-target">
                                                    <i class="fa <?php echo get_theme_mod( 'wp_follow3_icon2_text' , 'fa-linkedin' ); ?>"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod( 'wp_follow3_icon3_link' , '#' ); ?>" target="_blank" class="hover-target">
                                                    <i class="fa <?php echo get_theme_mod( 'wp_follow3_icon3_text' , 'fa-instagram' ); ?>"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod( 'wp_follow3_icon4_link' , '#' ); ?>" target="_blank" class="hover-target">
                                                    <i class="fa <?php echo get_theme_mod( 'wp_follow3_icon4_text' , 'fa-dribbble' ); ?>"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod( 'wp_follow3_icon5_link' , '#' ); ?>" target="_blank" class="hover-target">
                                                    <i class="fa <?php echo get_theme_mod( 'wp_follow3_icon5_text' , 'fa-youtube' ); ?>"></i>
                                                </a>
                                            </li>
                                            <?php } else { ?>
                                            <li>
                                                <a href="<?php echo get_theme_mod( 'wp_follow3_icon1_link' , '#' ); ?>" class="hover-target">
                                                    <i class="fa <?php echo get_theme_mod( 'wp_follow3_icon1_text' , 'fa-facebook' ); ?>"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod( 'wp_follow3_icon2_link' , '#' ); ?>" class="hover-target">
                                                    <i class="fa <?php echo get_theme_mod( 'wp_follow3_icon2_text' , 'fa-linkedin' ); ?>"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod( 'wp_follow3_icon3_link' , '#' ); ?>" class="hover-target">
                                                    <i class="fa <?php echo get_theme_mod( 'wp_follow3_icon3_text' , 'fa-instagram' ); ?>"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod( 'wp_follow3_icon4_link' , '#' ); ?>" class="hover-target">
                                                    <i class="fa <?php echo get_theme_mod( 'wp_follow3_icon4_text' , 'fa-dribbble' ); ?>"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod( 'wp_follow3_icon5_link' , '#' ); ?>" class="hover-target">
                                                    <i class="fa <?php echo get_theme_mod( 'wp_follow3_icon5_text' , 'fa-youtube' ); ?>"></i>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } else { ?>
                                
                            <?php } ?>
                        </div>
                        <div class="footer-col col-sm-6 col-md-6 col-lg-6">
                        <?php if(get_theme_mod( 'wp_footer_menu_show_hide') === 'show' ) { ?>
                            <div class="menu-footer">
                                <ul>
                                <?php if(get_theme_mod( 'wp_footer_menu_target') === 'blank' ) { ?>
                                    <li class="tt-btn-link"><a href="<?php echo get_theme_mod( 'wp_footer_menu_item1_link' , '#' ); ?>" target="_blank" class="hover-target" data-hover="<?php echo get_theme_mod( 'wp_footer_menu_item1_text' , 'About' ); ?>"><?php echo get_theme_mod( 'wp_footer_menu_item1_text' , 'About' ); ?></a></li>
                                    <li class="tt-btn-link"><a href="<?php echo get_theme_mod( 'wp_footer_menu_item2_link' , '#' ); ?>" target="_blank" class="hover-target" data-hover="<?php echo get_theme_mod( 'wp_footer_menu_item2_text' , 'Portfolio' ); ?>"><?php echo get_theme_mod( 'wp_footer_menu_item2_text' , 'Portfolio' ); ?></a></li>
                                    <li class="tt-btn-link"><a href="<?php echo get_theme_mod( 'wp_footer_menu_item3_link' , '#' ); ?>" target="_blank" class="hover-target" data-hover="<?php echo get_theme_mod( 'wp_footer_menu_item3_text' , 'Get in Touch' ); ?>"><?php echo get_theme_mod( 'wp_footer_menu_item3_text' , 'Get in Touch' ); ?></a></li>
                                <?php } else { ?>
                                    <li class="tt-btn-link"><a href="<?php echo get_theme_mod( 'wp_footer_menu_item1_link' , '#' ); ?>" class="hover-target" data-hover="<?php echo get_theme_mod( 'wp_footer_menu_item1_text' , 'About' ); ?>"><?php echo get_theme_mod( 'wp_footer_menu_item1_text' , 'About' ); ?></a></li>
                                    <li class="tt-btn-link"><a href="<?php echo get_theme_mod( 'wp_footer_menu_item2_link' , '#' ); ?>" class="hover-target" data-hover="<?php echo get_theme_mod( 'wp_footer_menu_item2_text' , 'Portfolio' ); ?>"><?php echo get_theme_mod( 'wp_footer_menu_item2_text' , 'Portfolio' ); ?></a></li>
                                    <li class="tt-btn-link"><a href="<?php echo get_theme_mod( 'wp_footer_menu_item3_link' , '#' ); ?>" class="hover-target" data-hover="<?php echo get_theme_mod( 'wp_footer_menu_item3_text' , 'Get in Touch' ); ?>"><?php echo get_theme_mod( 'wp_footer_menu_item3_text' , 'Get in Touch' ); ?></a></li>
                                <?php } ?>
                                </ul>
                            </div>
                            <?php } else { ?>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==================== End footer ==================== -->

        </section>
        <?php wp_footer(); ?>
    </body>
</html>