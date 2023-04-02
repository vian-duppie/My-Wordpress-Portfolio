<?php

class keira_about_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-about';
	}
	
	public function get_title() {
		return 'Keira About';
	}
	
	public function get_icon() {
		return 'fa fa-vcard';
	}
	
	public function get_categories() {
		return [ 'keira-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'About', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'image',
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
			'intro',
			[
				'label' => __( 'Intro', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __( 'Enter about intro', 'keira' ),
			]
        );
        
        $this->add_control(
			'text',
			[
				'label' => __( 'Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __( 'Enter text', 'keira' ),
			]
        );
        
        $this->add_control(
			'buttontext',
			[
				'label' => __( 'Button Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __( 'Enter Button Text', 'keira' ),
			]
		);

		$this->add_control(
			'link',
			[
				'label' => __( 'Button URL', 'keira' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'keira' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'skills_section',
			[
				'label' => __( 'Skills', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
			'progress_title',
			[
				'label' => __( 'Progress Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$repeater->add_control(
			'progress_percent',
			[
				'label'   => __( 'Progress Percent', 'keira' ),
				'type'    => \Elementor\Controls_Manager::NUMBER,
				'min'     => 1,
				'max'     => 10000,
				'step'    => 1,
				'default' => 100,
			]
		);

		$this->add_control(
			'skills_list',
			[
				'label'   => __( 'Skills List', 'keira' ),
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
		$url = $settings['link']['url'];
		
		?>

		<div class="container">
			<div class="about-blok">
				<div class="row">
					<div class="aboutinfo">
						<div class="col-md-12 col-lg-6">
							<div class="about-img">
								<?php echo '<img src="' . $settings['image']['url'] . '" alt="img">'; ?>
							</div>
						</div>
						<div class="col-md-12 col-lg-6">
							<div class="about-descr text-left">
								<h3 class="title"><?php echo $settings['intro'] ?></h3>
								<p class="separator"><?php echo $settings['text'] ?></p>
								<ul class="skills-bar-container list-unstyled">
								    <?php foreach ( $settings['skills_list'] as $item ) : ?>
									<li>
										<div class="progressbar-title">
											<h3><?php echo $item['progress_title'] ?></h3>
											<span class="percent"><?php echo $item['progress_percent'] . "%" ?></span>
										</div>
										<div class="bar-container">
											<span class="progressbar progressred" data-value="<?php echo $item['progress_percent'] ?>"></span>
										</div>
									</li>
									<?php endforeach; ?>
								</ul>
								<a href="<?php echo esc_url($url) ?>" class="btn draw"><?php echo $settings['buttontext'] ?> <i class="fa fa-angle-right"></i> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			(function($) {
				var multiply = 2;
				function skillsProgress() {
					$(".bar-container").each(function () {
						var delay = 600,
						progressBar = $(this).find(".progressbar");
						setTimeout(function() {
							progressBar.animate({
								'width': progressBar.attr("data-value") + "%"
							}, 600);
						}, delay * multiply);

						multiply++;
					});
				}

				skillsProgress();

			})(jQuery);
		</script>

        <?php
	}
	
	
}