<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="journal-info snip1 r-mb-30">
		<figure>
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('', ['class' => 'img-fluid', 'alt' => 'post image']) ?></a>
		</figure>
		<div class="journal-txt">
			<a href="<?php the_permalink() ?>">
				<h4 class="maintitle"><?php the_title() ?></h4>
			</a>
			<div class="separator"><?php the_excerpt() ?>
		    </div>
		</div>
	</div>
</article>