<?php

class keira_blog_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-blog';
	}
	
	public function get_title() {
		return 'Keira Blog';
	}
	
	public function get_icon() {
		return 'fa fa-comments';
	}
	
	public function get_categories() {
		return [ 'keira-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->end_controls_section();

	}
	
	protected function render() {

		$settings = $this->get_settings_for_display();
		$the_query = new WP_Query( array(
			'posts_per_page'  => 3,
		) );
		?>

		<div class="container">
			<div class="row">
			    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-md-12 col-lg-4 journal-item">
					<div class="journal-info snip1 r-mb-30">
						<figure>
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('', ['class' => 'img-fluid']) ?></a>
						</figure>
						<div class="journal-txt">
							<a href="<?php the_permalink() ?>">
								<h4 class="maintitle"><?php the_title() ?></h4>
							</a>
							<div class="separator"><?php the_excerpt() ?>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>

        <?php
	}
	
	
}