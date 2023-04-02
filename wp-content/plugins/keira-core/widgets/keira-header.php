<?php

class keira_header_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-header';
	}
	
	public function get_title() {
		return 'Keira Header';
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
			'firststring',
			[
				'label' => __( 'First String', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __( 'Enter First String', 'keira' ),
			]
        );
        
        $this->add_control(
			'secondstring',
			[
				'label' => __( 'Second String', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __( 'Enter Second String', 'keira' ),
			]
		);

		$this->add_control(
			'thirdstring',
			[
				'label' => __( 'Third String', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __( 'Enter Third String', 'keira' ),
			]
		);
		
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'country',
			[
				'label' => __( 'Country', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);

		$repeater->add_control(
			'city',
			[
				'label' => __( 'City', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);

		$this->add_control(
			'location_list',
			[
				'label'   => __( 'Location List', 'keira' ),
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
		$id       = $this->get_id();
		?>

		<div id="fullheader" class="fullheader" data-scroll-index="0">
            <div class="bgonetwo"></div>
            <div id="header">
                <div class="container">
                    <div class="head-info">
                        <div class="header-content">
                            <span class="subtitle"><?php echo $settings['title'] ?></span>
                            <span id="typed-slide-1" class="h1 textfull"></span>
                            <div class="location">
                                <ul class="listlocaion list-unstyled">
								    <?php foreach ( $settings['location_list'] as $item ) : ?>
                                    <li>
                                        <span class="paye"><?php echo $item['country']; ?></span>
                                        <span class="ville"><?php echo $item['city']; ?></span>
                                    </li>
									<?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-icon">
                <a href="#about" class="smoothscroll">
                    <div class="mouse"></div>
                </a>
                <div class="end-top"></div>
            </div>
        </div>

		<script>
    
			var typed = new Typed('#typed-slide-1', {
				strings: [<?php if($settings['firststring'] != "") { ?> '<?php  echo $settings['firststring'] ?>', <?php } ?> <?php if($settings['secondstring'] != "") { ?> '<?php  echo $settings['secondstring'] ?>', <?php } ?> <?php if($settings['thirdstring'] != "") { ?> '<?php  echo $settings['thirdstring'] ?>' <?php } ?>],
				typeSpeed: 60,
				backSpeed: 60,
				loop: true
			});

		</script>

        <?php
	}
	
}