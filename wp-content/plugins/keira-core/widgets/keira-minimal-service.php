<?php

class keira_minimal_service_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-minimal-service';
	}
	
	public function get_title() {
		return 'Keira Minimal Service';
	}
	
	public function get_icon() {
		return 'fa fa-tasks';
	}
	
	public function get_categories() {
		return [ 'keira-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Main Title', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'item1_section',
			[
				'label' => __( 'Item1', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'item1_image',
			[
				'label' => __( 'Choose Image', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'item1_link',
			[
				'label' => __( 'Item URL', 'keira' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'keira' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$this->add_control(
			'item1_main_title',
			[
				'label' => __( 'Main Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the main title', 'keira' ),
			]
		);

		$this->add_control(
			'item1_desc',
			[
				'label' => __( 'Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'item2_section',
			[
				'label' => __( 'Item2', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'item2_image',
			[
				'label' => __( 'Choose Image', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'item2_link',
			[
				'label' => __( 'Item URL', 'keira' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'keira' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$this->add_control(
			'item2_main_title',
			[
				'label' => __( 'Main Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the main title', 'keira' ),
			]
		);

		$this->add_control(
			'item2_desc',
			[
				'label' => __( 'Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'item3_section',
			[
				'label' => __( 'Item3', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'item3_image',
			[
				'label' => __( 'Choose Image', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'item3_link',
			[
				'label' => __( 'Item URL', 'keira' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'keira' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$this->add_control(
			'item3_main_title',
			[
				'label' => __( 'Main Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the main title', 'keira' ),
			]
		);

		$this->add_control(
			'item3_desc',
			[
				'label' => __( 'Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);

		$this->end_controls_section();

	}
	
	protected function render() {

		$settings = $this->get_settings_for_display();
		?>

		<div id="services" class="services-style-two pt-90 pb-90 text-center">
			<div class="container">
				<div class="cont-services text-left">
					<div class="row">
						<div class="col-lg-3 col-sm-12">
							<div class="title-header section-title">
								<h2 class="fw-800">
								    <?php echo $settings['title'] ?>
								</h2>
							</div>
						</div>
						<div class="col-lg-9 col-sm-12">
							<div class="row">
								<div class="col-md-6 col-lg-4 services-item " data-wow-delay=".4s">
									<div class="servfix r-mb-30">
										<div class="services-block draw">
											<figure class="image-box-img">
												<a href="<?php echo esc_url($settings['item1_link']['url']) ?>">
												    <?php echo '<img width="88" height="84" src="' . $settings['item1_image']['url'] . '" class="attachment-full size-full" alt="">'; ?>
												</a>
											</figure>
											<h4 class="maintitle"><?php echo $settings['item1_main_title'] ?></h4>
											<p class="separator"><?php echo $settings['item1_desc'] ?> </p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4 services-item" data-wow-delay=".4s">
									<div class="servfix r-mb-30">
										<div class="services-block draw">
											<figure class="image-box-img">
												<a href="<?php echo esc_url($settings['item2_link']['url']) ?>#">
												    <?php echo '<img width="88" height="84" src="' . $settings['item2_image']['url'] . '" class="attachment-full size-full" alt="">'; ?>
												</a>
											</figure>
											<h4 class="maintitle"><?php echo $settings['item2_main_title'] ?></h4>
											<p class="separator"><?php echo $settings['item2_desc'] ?> </p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4 services-item" data-wow-delay=".4s">
									<div class="servfix">
										<div class="services-block draw">
											<figure class="image-box-img">
												<a href="<?php echo esc_url($settings['item3_link']['url']) ?>">
												    <?php echo '<img width="88" height="84" src="' . $settings['item3_image']['url'] . '" class="attachment-full size-full" alt="">'; ?>
                                                </a>
											</figure>
											<h4 class="maintitle"><?php echo $settings['item3_main_title'] ?></h4>
											<p class="separator"><?php echo $settings['item3_desc'] ?> </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <?php
	}
	
	
}