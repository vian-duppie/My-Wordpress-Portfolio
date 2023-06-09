<?php get_header(); ?>

        <!-- start section content -->
        <main class="cd-content">
            <section class="breadcrumb-header text-center">
                <div class="container">
                    <div class="title-header">
                        <h1><?php single_post_title(); ?></h1>
                    </div>
                    <ul class="list-unstyled">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo('name') ?></a></li>
						<li><?php single_post_title(); ?></li>
					</ul>
                </div>
            </section>
            <div class="container journal blog pt-90 pb-90">
			    <div class="row">
				    <div class="col-lg-8 col-sm-12">
                        <?php if (have_posts()) { ?>
                        <div class="row">
                            <?php while(have_posts()) {
                            the_post(); ?>
                            <div class="col-sm-12 journal-item">
                                <?php get_template_part('template-parts/content') ?>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <div class="clearfix"></div>
                        <div class="pagination-numbers">
                            <?php echo numbering_pagination(); ?>
                        </div>
				    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="sidebar">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
			    </div>
            </div>

<?php get_footer(); ?>