<?php get_header('5');

         if (class_exists('Keira_Core')) { ?>
          <main class="position-relative">
            <!-- start section stripe -->
            <div class="stripe-line"></div>
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
            <main class="cd-content pt-90">
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