<?php

class keira_portfolio_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-portfolio';
	}
	
	public function get_title() {
		return 'Keira Portfolio';
	}
	
	public function get_icon() {
		return 'fa fa-briefcase';
	}
	
	public function get_categories() {
		return [ 'keira-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'item1_section',
			[
				'label' => __( 'Item1', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'item1_video',
			[
				'label' => __( 'Choose Video', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_type' => 'video',
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
			'item1_category',
			[
				'label' => __( 'Category', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the category', 'keira' ),
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
			'item2_video',
			[
				'label' => __( 'Choose Video', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_type' => 'video',
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
			'item2_category',
			[
				'label' => __( 'Category', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the category', 'keira' ),
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
			'item3_video',
			[
				'label' => __( 'Choose Video', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_type' => 'video',
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
			'item3_category',
			[
				'label' => __( 'Category', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the category', 'keira' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'item4_section',
			[
				'label' => __( 'Item4', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'item4_video',
			[
				'label' => __( 'Choose Video', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_type' => 'video',
			]
		);

		$this->add_control(
			'item4_image',
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
			'item4_link',
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
			'item4_main_title',
			[
				'label' => __( 'Main Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the main title', 'keira' ),
			]
		);

		$this->add_control(
			'item4_category',
			[
				'label' => __( 'Category', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the category', 'keira' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'item5_section',
			[
				'label' => __( 'Item5', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'item5_video',
			[
				'label' => __( 'Choose Video', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_type' => 'video',
			]
		);

		$this->add_control(
			'item5_image',
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
			'item5_link',
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
			'item5_main_title',
			[
				'label' => __( 'Main Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the main title', 'keira' ),
			]
		);

		$this->add_control(
			'item5_category',
			[
				'label' => __( 'Category', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the category', 'keira' ),
			]
		);

		$this->end_controls_section();

	}
	
	protected function render() {

		$settings = $this->get_settings_for_display();
		?>

		<div class="container">
			<div class="portfolio-item">
				<div class="row">
					<div class="col-md-12 col-lg-6">
						<div class="portfolio-thumbnail">
							<div class="top-thumbnail">
								<?php if($settings['item1_video']['url'] === '') { ?>
								<a href="<?php echo esc_url($settings['item1_link']['url']) ?>">
								     <?php echo '<img src="' . $settings['item1_image']['url'] . '" class="img-responsive" alt="portfolio">'; ?>
								</a>
								<div class="overlay">
									<div class="content-port">
										<a class="popup-img icons-fonts ti-zoom-in fa fa-eye" href="<?php echo $settings['item1_image']['url'] ?>">
											<?php echo '<img src="' . $settings['item1_image']['url'] . '" class="img-responsive" alt="portfolio">'; ?>
										</a>
									</div>
								</div>
								<?php } else {
									echo '<video id="video" class="my-video" controls="" poster>
                            <source src="' . $settings['item1_video']['url'] . '" type="video/mp4">
                        </video>';
									} ?>
							</div>
							<div class="botom-thumbnail">
								<h4 class="maintitle"><?php echo $settings['item1_main_title'] ?></h4>
								<p class="separator"><?php echo $settings['item1_category'] ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="portfolio-thumbnail">
							<div class="top-thumbnail">
								<?php if($settings['item2_video']['url'] === '') { ?>
								<a href="<?php echo esc_url($settings['item2_link']['url']) ?>">
								     <?php echo '<img src="' . $settings['item2_image']['url'] . '" class="img-responsive" alt="portfolio">'; ?>
								</a>
								<div class="overlay">
									<div class="content-port">
										<a class="popup-img icons-fonts ti-zoom-in fa fa-eye" href="<?php echo $settings['item2_image']['url'] ?>">
											<?php echo '<img src="' . $settings['item2_image']['url'] . '" class="img-responsive" alt="portfolio">'; ?>
										</a>
									</div>
								</div>
								<?php } else {
									echo '<video id="video" class="my-video" controls="" poster>
                            <source src="' . $settings['item2_video']['url'] . '" type="video/mp4">
                        </video>';
									} ?>
							</div>
							<div class="botom-thumbnail">
								<h4 class="maintitle"><?php echo $settings['item2_main_title'] ?></h4>
								<p class="separator"><?php echo $settings['item2_category'] ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="portfolio-thumbnail">
							<div class="top-thumbnail">
								<?php if($settings['item3_video']['url'] === '') { ?>
								<a href="<?php echo esc_url($settings['item3_link']['url']) ?>">
								    <?php echo '<img src="' . $settings['item3_image']['url'] . '" class="img-responsive" alt="portfolio">'; ?>
								</a>
								<div class="overlay">
									<div class="content-port">
										<a class="popup-img icons-fonts ti-zoom-in fa fa-eye" href="<?php echo $settings['item3_image']['url'] ?>">
											<?php echo '<img src="' . $settings['item3_image']['url'] . '" class="img-responsive" alt="portfolio">'; ?>
										</a>
									</div>
								</div>
								<?php } else {
									echo '<video id="video" class="my-video" controls="" poster>
                            <source src="' . $settings['item3_video']['url'] . '" type="video/mp4">
                        </video>';
									} ?>
							</div>
							<div class="botom-thumbnail">
								<h4 class="maintitle"><?php echo $settings['item3_main_title'] ?></h4>
								<p class="separator"><?php echo $settings['item3_category'] ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="portfolio-thumbnail">
							<div class="top-thumbnail">
								<?php if($settings['item4_video']['url'] === '') { ?>
								<a href="<?php echo esc_url($settings['item4_link']['url']) ?>">
								    <?php echo '<img src="' . $settings['item4_image']['url'] . '" class="img-responsive" alt="portfolio">'; ?>
								</a>
								<div class="overlay">
									<div class="content-port">
										<a class="popup-img icons-fonts ti-zoom-in fa fa-eye" href="<?php echo $settings['item4_image']['url'] ?>">
											<?php echo '<img src="' . $settings['item4_image']['url'] . '" class="img-responsive" alt="portfolio">'; ?>
										</a>
									</div>
								</div>
								<?php } else {
									echo '<video id="video" class="my-video" controls="" poster>
                            <source src="' . $settings['item4_video']['url'] . '" type="video/mp4">
                        </video>';
									} ?>
							</div>
							<div class="botom-thumbnail">
								<h4 class="maintitle"><?php echo $settings['item4_main_title'] ?></h4>
								<p class="separator"><?php echo $settings['item4_category'] ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="portfolio-thumbnail">
							<div class="top-thumbnail">
								<?php if($settings['item5_video']['url'] === '') { ?>
								<a href="<?php echo esc_url($settings['item5_link']['url']) ?>">
								     <?php echo '<img src="' . $settings['item5_image']['url'] . '" class="img-responsive" alt="portfolio">'; ?>
								</a>
								<div class="overlay">
									<div class="content-port">
										<a class="popup-img icons-fonts ti-zoom-in fa fa-eye" href="<?php echo $settings['item5_image']['url'] ?>">
											<?php echo '<img src="' . $settings['item5_image']['url'] . '" class="img-responsive" alt="portfolio">'; ?>
										</a>
									</div>
								</div>
								<?php } else {
									echo '<video id="video" class="my-video" controls="" poster>
                            <source src="' . $settings['item5_video']['url'] . '" type="video/mp4">
                        </video>';
									} ?>
							</div>
							<div class="botom-thumbnail">
								<h4 class="maintitle"><?php echo $settings['item5_main_title'] ?></h4>
								<p class="separator"><?php echo $settings['item5_category'] ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <?php
	}
	
	
}