<?php get_header(); ?>

    <!-- start section content -->
    <main class="cd-content">
        <section class="breadcrumb-header text-center">
            <div class="container">
                <div class="title-header">
                    <h1>Error Page</h1>
                </div>
                <ul class="list-unstyled">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo('name') ?></a></li>
                    <li><?php echo esc_html__('404', 'keira'); ?></li>
                </ul>
            </div>
        </section>
        <div class="wrapper blog pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
					    <main id="main" class="site-main" role="main">
			                <section class="error-404 not-found">
					            <h1><?php echo esc_html__('404! Not Found...', 'keira'); ?></h1>
				                <div class="page-content">
                                    <p><?php echo esc_html__('We are sorry. But the page you are looking for cannot be found.', 'keira'); ?></p>
                                    <span class="back"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__('Back To Home', 'keira'); ?></a></span>
				                </div>
			                </section>
                        </main>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="sidebar">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>