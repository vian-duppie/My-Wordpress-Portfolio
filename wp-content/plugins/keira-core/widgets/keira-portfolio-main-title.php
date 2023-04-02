<?php

class keira_portfolio_title_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-portfolio-main-title';
	}
	
	public function get_title() {
		return 'Keira Portfolio Title';
	}
	
	public function get_icon() {
		return 'fa fa-font';
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

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
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
			'button_link',
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

	}
	
	protected function render() {

		$settings = $this->get_settings_for_display();
		$buttonurl = $settings['button_link']['url'];	
		?>

		<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2><?php echo $settings['title'] ?></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="allprojecrt r-mb-30">
                        <a href="<?php echo esc_url($buttonurl) ?>" class="btn draw"><?php echo $settings['buttontext'] ?> <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <?php
	}
	
	
}