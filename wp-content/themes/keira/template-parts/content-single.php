

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="journal-info snip1 r-mb-30">
		<figure>
			<?php the_post_thumbnail('', ['class' => 'img-fluid', 'alt' => 'post image']) ?>
		</figure>
		<div class="journal-txt">
            <?php 
                $archive_year  = get_the_time('Y'); 
                $archive_month = get_the_time('m'); 
                $archive_day   = get_the_time('d'); 
            ?>
            <a class="post-date" href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"><?php the_time('F j, Y'); ?></a>
			<a href="<?php the_permalink() ?>">
				<h4 class="maintitle"><?php the_title() ?></h4>
			</a>
			<div class="separator"><?php the_content() ?>
		    </div>
            <div class="post-footer">
                <div class="post-tags">
                    <?php 
                    if(has_tag()) {
                        the_tags('<span class="title">Tags: </span>', ' ');
                    } else {
                        echo 'Tags: There\'s No Tags';
                    }
                    ?>
                </div>
            </div>
		</div>
	</div>
</article>