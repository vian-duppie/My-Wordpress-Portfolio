<?php

class keira_minimal_header_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-minimal-header';
	}
	
	public function get_title() {
		return 'Keira Minimal Header';
	}
	
	public function get_icon() {
		return 'fa fa-home';
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
				'placeholder' => __( 'Enter your title', 'keira' ),
			]
		);

		$this->end_controls_section();
		
	}
	
	protected function render() {

		$settings = $this->get_settings_for_display();
		?>

        <div class="header-minimal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-11">
                        <div class="cnt-header">
                            <h1 class="fw-700"><?php echo $settings['title'] ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
	}
	
}