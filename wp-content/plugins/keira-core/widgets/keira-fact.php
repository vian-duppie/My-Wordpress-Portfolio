<?php

class keira_fact_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-fact';
	}
	
	public function get_title() {
		return 'Keira Counter';
	}
	
	public function get_icon() {
		return 'fa fa-clock-o';
	}
	
	public function get_categories() {
		return [ 'keira-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'facts_section',
			[
				'label' => __( 'Counter Items', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'fact_number',
			[
				'label'   => __( 'Counter Value', 'keira' ),
				'type'    => \Elementor\Controls_Manager::NUMBER,
				'min'     => 1,
				'max'     => 100000000,
				'step'    => 1,
				'default' => 0,
			]
		);

		$repeater->add_control(
			'fact_title',
			[
				'label' => __( 'Counter Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$this->add_control(
			'facts_list',
			[
				'label'   => __( 'Counter List', 'keira' ),
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
			<div class="fullcounter" id="counter">
				<div class="row">
			        <?php foreach ( $settings['facts_list'] as $item ) : ?>
					<div class="col-md-12 col-lg-4 brd brdnone">
						<div class="itemcounter r-mb-30">
							<h3><span class="counter-value" data-count="<?php echo esc_attr( $item['fact_number'] ) ?>">0</span><sup>+</sup></h3>
							<h4 class="maintitle"><?php echo $item['fact_title'] ?></h4>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

		<script>
			(function($) {
				'use strict';

    // ========================================================================= //
    //      [ Counter ]
    // ========================================================================= //


    var a = 0;
    $(window).on('scroll', function() {

        var oTop = $('.counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-value').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },

                    {
                        duration: 7000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }

                    });
            });
            a = 1;
        }

    });


			})(jQuery);
		</script>

        <?php
	}
	
	
}