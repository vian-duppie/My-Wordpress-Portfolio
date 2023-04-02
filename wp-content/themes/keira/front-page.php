<?php 
    if ( 'posts' == get_option( 'show_on_front' ) ) {
     get_header(); ?>

    <!-- start section content -->
    <main class="cd-content">
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

    <?php get_footer();
} else {

    if ( is_page("home2") ) {
        get_header('3');
    } else {
    get_header('2'); }

         if (class_exists('Keira_Core')) { ?>
            <!-- start section content -->
            <main class="cd-content content">
            <!-- start section stripe -->
            <div class="stripe">
                <div class="line-stripe-0"></div>
                <div class="line-stripe-1"></div>
                <div class="line-stripe-2"></div>
                <div class="line-stripe-3"></div>
                <div class="line-stripe-4"></div>
            </div>
            <!-- End section stripe -->
            <?php if (have_posts()) { // Check If There's Posts ?>
                <?php while(have_posts()) { // Loop Throught Posts
                the_post();
                the_content(); ?>
                <div class="single-navigation">
                    <?php wp_link_pages(array(
                        'link_before' => '<div class="link">',
                        'link_after' => '</div>',
                    )); ?>
                </div>
                <?php } // End While Loop
            }
        } else { ?>
            <!-- start section content -->
            <main class="cd-content content pt-90">
            <div class="container">
            <!-- End section stripe -->
            <?php if (have_posts()) { // Check If There's Posts ?>
                <?php while(have_posts()) { // Loop Throught Posts
                the_post();
                the_content(); ?>
                <div class="single-navigation">
                    <?php wp_link_pages(array(
                        'link_before' => '<div class="link">',
                        'link_after' => '</div>',
                    )); ?>
                </div>
                <?php } // End While Loop
            } ?>
            </div>
        <?php } ?>
        

    <?php get_footer();
} ?>