<?php

class keira_cf7_shortcode_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-cf7-shortcode';
	}
	
	public function get_title() {
		return 'Keira CF7 Shortcode';
	}
	
	public function get_icon() {
		return 'fa fa-location-arrow';
	}
	
	public function get_categories() {
		return [ 'keira-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'contact_info_section',
			[
				'label' => __( 'Contact Info', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'title',
			[
				'label' => __( 'Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$repeater->add_control(
			'info1',
			[
				'label' => __( 'Info1', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);

		$repeater->add_control(
			'info2',
			[
				'label' => __( 'Info2', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);

		$this->add_control(
			'info_list',
			[
				'label'   => __( 'Contact Info List', 'keira' ),
				'type'    => \Elementor\Controls_Manager::REPEATER,
				'fields'  => $repeater->get_controls(),
				'default' => [
				],
			]
		);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'cf7_section',
			[
				'label' => __( 'Contact Form', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'shortcode',
			[
				'label' => __( 'Shortcode', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the shortcode', 'keira' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'social_media_section',
			[
				'label' => __( 'Social Media', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'social_icon',
			[
				'label' => __( 'Icon', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the icon font name (ex: fa-facebook)', 'keira' ),
			]
		);

		$repeater->add_control(
			'social_link',
			[
				'label'         => __( 'Link', 'keira' ),
				'type'          => \Elementor\Controls_Manager::URL,
				'placeholder'   => __( 'https://your-link.com', 'keira' ),
				'show_external' => true,
				'default'       => [
					'url'         => '',
					'is_external' => true,
					'nofollow'    => true,
				],
			]
		);

		$this->add_control(
			'social_list',
			[
				'label'   => __( 'Social Media List', 'keira' ),
				'type'    => \Elementor\Controls_Manager::REPEATER,
				'fields'  => $repeater->get_controls(),
				'default' => [
				],
			]
		);
		
		$this->end_controls_section();

	}
	
	protected function render() {

		$settings = $this->get_settings_for_display();
		$counter = 0;		
		?>

		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-4">
					<div class="infcontactfull">
					    <?php foreach ( $settings['info_list'] as $item ) : ?>
						    <?php 
								$counter = $counter + 1;
						    ?>
						<?php if(( $counter % 2 ) === 0): ?>
						<div class="contact-block text-center br-lr">
							<h4 class="maintitle"><?php echo $item['title']; ?></h4>
							<span><?php echo $item['info1']; ?></span>
							<span><?php echo $item['info2']; ?></span>
						</div>
						<?php endif; ?>
                        <?php if(( $counter % 2 ) !== 0): ?>
						<div class="contact-block text-center ">
						<h4 class="maintitle"><?php echo $item['title']; ?></h4>
							<span><?php echo $item['info1']; ?></span>
							<span><?php echo $item['info2']; ?></span>
						</div>
						<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="col-md-12 col-lg-8">
					<div class="contact-formone">
						<div id="registration" class="form-inline contact-form">
						    <?php echo do_shortcode($settings['shortcode']); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="socials-media text-center">
				<ul class="list-unstyled ">
				    <?php foreach ( $settings['social_list'] as $item ) : ?>
					<li><a href="<?php echo esc_url( $item['social_link']['url'] ); ?>"><i class="fa <?php echo $item['social_icon']; ?>"></i></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

        <?php
	}
	
	
}