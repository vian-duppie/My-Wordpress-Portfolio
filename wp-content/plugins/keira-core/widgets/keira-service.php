<?php

class keira_service_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-service';
	}
	
	public function get_title() {
		return 'Keira Service';
	}
	
	public function get_icon() {
		return 'fa fa-tasks';
	}
	
	public function get_categories() {
		return [ 'keira-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'service_section',
			[
				'label' => __( 'Services Items', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'image',
			[
				'label' => __( 'Choose Icon Image', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'description' => __('Recommended Size 49px*47px', 'keira'),
			]
		);

		$repeater->add_control(
			'link',
			[
				'label' => __( 'image URL', 'keira' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'keira' ),
				'default' => [
					'url' => '',
				]
			]
		);

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
			'desc',
			[
				'label' => __( 'Description', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the description', 'keira' ),
			]
		);
 
		$this->add_control(
			'services_list',
			[
				'label'   => __( 'Services List', 'keira' ),
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
		?>

		<div class="container">
			<div class="cont-services text-left">
				<div class="row">
				    <?php foreach ( $settings['services_list'] as $item ) : ?>
					<div class="col-md-12 col-lg-4 services-item">
						<div class="servfix r-mb-30">
							<div class="services-block draw">
								<figure class="image-box-img">
									<a href="<?php echo esc_url($item['link']['url']) ?>">
										<?php echo '<img src="' . $item['image']['url'] . '" class="attachment-full size-full" alt="">'; ?>
									</a>
								</figure>
								<h4 class="maintitle"><?php echo $item['title'] ?></h4>
								<p class="separator"><?php echo $item['desc'] ?></p>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

        <?php
	}
	
	
}