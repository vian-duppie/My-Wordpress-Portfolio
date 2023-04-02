<?php

class keira_contact_style2_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-contact-style2';
	}
	
	public function get_title() {
		return 'Keira Contact Style 2';
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

		$this->add_control(
			'text',
			[
				'label' => __( 'Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your text', 'keira' ),
			]
		);

		$this->end_controls_section();
		
	}
	
	protected function render() {

		$settings = $this->get_settings_for_display();
		?>

		<div class="contact-style-two text-center">
            <div class="container">
                <div class="dots">
                    <div class="the-dots"></div>
                </div>
                <div class="dots-reverse">
                    <div class="the-dots"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-12">
                        <h4 class="title_contact fw-800"> <?php echo $settings['title'] ?> </h4>
                        <h2 class="cnt-header cnt-contact fw-700 stroke">
						    <?php echo $settings['text'] ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <?php
	}
	
}