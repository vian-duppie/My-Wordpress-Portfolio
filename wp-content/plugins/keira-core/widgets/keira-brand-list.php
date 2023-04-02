<?php

class keira_brand_list_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-brand-list';
	}
	
	public function get_title() {
		return 'Keira Brand List';
	}
	
	public function get_icon() {
		return 'fa fa-users';
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
		
		$this->end_controls_section();

		$this->start_controls_section(
			'item4_section',
			[
				'label' => __( 'Item4', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
		
		$this->end_controls_section();

		$this->start_controls_section(
			'item5_section',
			[
				'label' => __( 'Item5', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
		
		$this->end_controls_section();

		$this->start_controls_section(
			'item6_section',
			[
				'label' => __( 'Item6', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'item6_image',
			[
				'label' => __( 'Choose Image', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'item7_section',
			[
				'label' => __( 'Item7', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'item7_image',
			[
				'label' => __( 'Choose Image', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'item8_section',
			[
				'label' => __( 'Item8', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'item8_image',
			[
				'label' => __( 'Choose Image', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		
		$this->end_controls_section();

	}
	
	protected function render() {

		$settings = $this->get_settings_for_display();
		?>

        <div class="brand-logo-area">
            <div class="container">
                <ul class="brand-list client-border-none pt-90 pb-90">
                    <li class="wow fadeIn" data-wow-delay=".6s">
						<?php echo '<img src="' . $settings['item1_image']['url'] . '" alt="">'; ?>
					</li>
                    <li class="wow fadeIn" data-wow-delay=".6s">
						<?php echo '<img src="' . $settings['item2_image']['url'] . '" alt="">'; ?>
					</li>
                    <li class="wow fadeIn" data-wow-delay=".8s">
						<?php echo '<img src="' . $settings['item3_image']['url'] . '" alt="">'; ?>
					</li>
                    <li class="wow fadeIn" data-wow-delay=".3s">
					    <?php echo '<img src="' . $settings['item4_image']['url'] . '" alt="">'; ?>
					</li>
                    <li class="wow fadeIn" data-wow-delay=".4s">
					    <?php echo '<img src="' . $settings['item5_image']['url'] . '" alt="">'; ?>
					</li>
                    <li class="wow fadeIn" data-wow-delay=".7s">
					    <?php echo '<img src="' . $settings['item6_image']['url'] . '" alt="">'; ?>
					</li>
                    <li class="wow fadeIn" data-wow-delay=".5s">
					    <?php echo '<img src="' . $settings['item7_image']['url'] . '" alt="">'; ?>
					</li>
                    <li class="wow fadeIn" data-wow-delay=".6s">
					    <?php echo '<img src="' . $settings['item8_image']['url'] . '" alt="">'; ?>
					</li>
                </ul>
            </div>
        </div>

        <?php
	}
	
	
}