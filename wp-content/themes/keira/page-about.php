<?php get_header(); ?>

        <!-- start section content -->
        <main class="cd-content">
            <!-- start section stripe -->
            <div class="stripe">
                <div class="line-stripe-0"></div>
                <div class="line-stripe-1"></div>
                <div class="line-stripe-2"></div>
                <div class="line-stripe-3"></div>
                <div class="line-stripe-4"></div>
            </div>
            <!-- End section stripe -->
            <section class="breadcrumb-header text-center">
                <div class="container">
                    <div class="title-header">
                        <h1><?php the_title() ?></h1>
                    </div>
                    <ul class="list-unstyled">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo('name') ?></a></li>
						<li><?php the_title() ?></li>
					</ul>
                </div>
            </section>
            <?php if (have_posts()) {
                while(have_posts()) {
                    the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php the_content() ?>
                        </div>
                    </article>
                <?php }
            }?>

<?php get_footer(); ?>