<?php get_header('3');

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