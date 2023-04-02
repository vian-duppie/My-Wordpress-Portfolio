<?php

class keira_slider2_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-slider2';
	}
	
	public function get_title() {
		return 'Keira Slider 2';
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
			'slider_select',
			[
				'label'   => __( 'Choose Slider Type', 'dolunay' ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'default' => 'slider-type-1',
				'options' => [
					'slider-type-1' => __( 'Slider Style1', 'keira' ),
					'slider-type-2' => __( 'Slider Style2', 'keira' ),
					'slider-type-3' => __( 'Slider Style3', 'keira' ),
				],
			]
		);
		
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
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

		$repeater->add_control(
			'title',
			[
				'label' => __( 'Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);

		$repeater->add_control(
			'cat',
			[
				'label' => __( 'Category', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);

		$repeater->add_control(
			'link',
			[
				'label' => __( 'URL', 'keira' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'keira' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$this->add_control(
			'slider_list',
			[
				'label'   => __( 'Slider List', 'keira' ),
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

    <?php if ( $settings['slider_select'] === 'slider-type-1' ): ?>

		<!-- ==================== start header ==================== -->
		<div class="inter-links-center inter-links-inline">
        <div class="links-inline-container">
            <div class="links-img">
			<?php foreach ( $settings['slider_list'] as $item ) : ?>

                <div class="hero-center-section">
                    <div class="left-text"><?php echo $item['cat']; ?></div>
                    <div class="img-wrap">
						<?php echo '<img src="' . $item['image']['url'] . '" alt="image">'; ?>
                    </div>
                </div>

			<?php endforeach; ?>
            </div>
            <div class="inter-links-inline-container hide-scrollbar">
                <div class="container-xxl">
                    <div class="links-text d-flex justify-content-center">
                        <ul class="slide-buttons">
						<?php foreach ( $settings['slider_list'] as $item ) : ?>
                            <li>
                                <h2>
                                    <span class="num"></span>
                                    <a href="<?php echo esc_url($item['link']['url']) ?>" class="hover-target">
                                        <span class="tag sub-title"><?php echo $item['cat']; ?></span>
                                        <span class="text"><?php echo $item['title']; ?></span>
                                    </a>
                                </h2>
                            </li>
						<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ==================== End header ==================== -->
		
	<?php elseif ( $settings['slider_select'] === 'slider-type-2' ): ?>

		<!-- ==================== Start  header ==================== -->
		<div class="inter-links-center inter-links-inline">
			<div class="links-inline-container">
				<div class="links-img">
					<?php foreach ( $settings['slider_list'] as $item ) : ?>
					<div class="hero-center-section">
						<div class="left-text"><?php echo $item['cat']; ?></div>
						<div class="img-wrap">
							<?php echo '<img src="' . $item['image']['url'] . '" alt="image">'; ?>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="inter-links-inline-container hide-scrollbar">
					<div class="container-xxl">
						<div class="links-text d-flex justify-content-center links-text-inline">
							<ul class="slide-buttons">
								<?php foreach ( $settings['slider_list'] as $item ) : ?>
								<li>
									<h2>
										<span class="num"></span>
										<a href="<?php echo esc_url($item['link']['url']) ?>" class="hover-target">
											<span class="tag sub-title"><?php echo $item['cat']; ?></span>
											<span class="text"><?php echo $item['title']; ?></span>
										</a>
									</h2>
								</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ==================== End header ==================== -->

	<?php elseif ( $settings['slider_select'] === 'slider-type-3' ): ?>

		<!-- ==================== Start  header ==================== -->

		<div class="inter-links-center inter-links-inline showcase-links-inline-v3">
			<div class="links-inline-container">
				<div class="inter-links-inline-container">
					<div class="container-xxl">
						<div class="links-text d-flex1 justify-content-center1 links-text-inline">
							<ul class="slide-buttons hide-scrollbar">
							<?php foreach ( $settings['slider_list'] as $item ) : ?>
								<li>
									<h2>
										<span class="num"></span>
										<a href="<?php echo esc_url($item['link']['url']) ?>" class="hover-target">
											<span class="tag sub-title"><?php echo $item['cat']; ?></span>
											<span class="text"><?php echo $item['title']; ?></span>
										</a>
									</h2>
								</li>
							<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="links-img">
				<?php foreach ( $settings['slider_list'] as $item ) : ?>
					<div class="hero-center-section">
						<div class="hero-number-back"></div>
						<div class="left-text">
							<div class="circle-bord">
								<span class="loader-circle"></span>
								<a href="<?php echo esc_url($item['link']['url']) ?>"><?php echo $item['cat']; ?></a>
								<span class="loader-circle"></span>
							</div>
						</div>

						<div class="img-wrap">
							<?php echo '<img src="' . $item['image']['url'] . '" alt="image">'; ?>
						</div>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>

		<!-- ==================== End header ==================== -->

	<?php endif; ?>

	<!-- Scripts -->

	<?php if ( $settings['slider_select'] === 'slider-type-1' ): ?>
		<script>

		    (function($) {

				 
                /* Sildes Numbers */

				var counter = 1;

				$(".links-text .slide-buttons li .num").each(function () {

					if (counter < 10) {
						$(this).html("0" + counter + ".");
					} else {
						$(this).html(counter + ".");
					}

					counter++;
				});
            
				
				/* Hero Case study images */			
				
				$('.slide-buttons li:nth-child(1)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(1)').addClass("show");
					$('.slide-buttons li:nth-child(1)').addClass('active');
				})
				$('.slide-buttons li:nth-child(2)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(2)').addClass("show");
					$('.slide-buttons li:nth-child(2)').addClass('active');
				})
				$('.slide-buttons li:nth-child(3)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(3)').addClass("show");
					$('.slide-buttons li:nth-child(3)').addClass('active');
				})
				$('.slide-buttons li:nth-child(4)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(4)').addClass("show");
					$('.slide-buttons li:nth-child(4)').addClass('active');
				})
				$('.slide-buttons li:nth-child(5)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(5)').addClass("show");
					$('.slide-buttons li:nth-child(5)').addClass('active');
				})
				$('.slide-buttons li:nth-child(6)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(6)').addClass("show");
					$('.slide-buttons li:nth-child(6)').addClass('active');
				})
				$('.slide-buttons li:nth-child(7)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(7)').addClass("show");
					$('.slide-buttons li:nth-child(7)').addClass('active');
				})
				$('.slide-buttons li:nth-child(1)').trigger('mouseenter')   

            })(jQuery);

		</script>

    <?php elseif ( $settings['slider_select'] === 'slider-type-2' ): ?>

		<script>

		    (function($) {

				 
                /* Sildes Numbers */

				var counter2 = 1;

				$(".links-text.links-text-inline .slide-buttons li .num").each(function () {

					if (counter2 < 10) {
						$(this).html("0" + counter2 + ".");
					} else {
						$(this).html(counter2 + ".");
					}

					counter2++;
				});

				/* Hero Case study images */			
				
				$('.slide-buttons li:nth-child(1)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(1)').addClass("show");
					$('.slide-buttons li:nth-child(1)').addClass('active');
				})
				$('.slide-buttons li:nth-child(2)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(2)').addClass("show");
					$('.slide-buttons li:nth-child(2)').addClass('active');
				})
				$('.slide-buttons li:nth-child(3)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(3)').addClass("show");
					$('.slide-buttons li:nth-child(3)').addClass('active');
				})
				$('.slide-buttons li:nth-child(4)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(4)').addClass("show");
					$('.slide-buttons li:nth-child(4)').addClass('active');
				})
				$('.slide-buttons li:nth-child(5)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(5)').addClass("show");
					$('.slide-buttons li:nth-child(5)').addClass('active');
				})
				$('.slide-buttons li:nth-child(6)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(6)').addClass("show");
					$('.slide-buttons li:nth-child(6)').addClass('active');
				})
				$('.slide-buttons li:nth-child(7)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(7)').addClass("show");
					$('.slide-buttons li:nth-child(7)').addClass('active');
				})
				$('.slide-buttons li:nth-child(1)').trigger('mouseenter') 
				
			})(jQuery);
	    </script>

    <?php elseif ( $settings['slider_select'] === 'slider-type-3' ): ?>

		<script>

			(function($) {

				
				/* Sildes Numbers */

				var counter3 = 1;

				$(".showcase-links-inline-v3 .links-inline-container .inter-links-inline-container .container-xxl .links-text .slide-buttons li .num").each(function () {

					if (counter3 < 10) {
						$(this).html("0" + counter3 + ".");
					} else {
						$(this).html(counter3 + ".");
					}

					counter3++;
				});

				var counter4 = 1;

				$(".showcase-links-inline-v3 .links-inline-container .links-img .hero-center-section .hero-number-back").each(function () {

					if (counter4 < 10) {
						$(this).html("0" + counter4);
					} else {
						$(this).html(counter4);
					}

					counter4++;
				});

				/* Hero Case study images */			
				
				$('.slide-buttons li:nth-child(1)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(1)').addClass("show");
					$('.slide-buttons li:nth-child(1)').addClass('active');
				})
				$('.slide-buttons li:nth-child(2)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(2)').addClass("show");
					$('.slide-buttons li:nth-child(2)').addClass('active');
				})
				$('.slide-buttons li:nth-child(3)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(3)').addClass("show");
					$('.slide-buttons li:nth-child(3)').addClass('active');
				})
				$('.slide-buttons li:nth-child(4)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(4)').addClass("show");
					$('.slide-buttons li:nth-child(4)').addClass('active');
				})
				$('.slide-buttons li:nth-child(5)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(5)').addClass("show");
					$('.slide-buttons li:nth-child(5)').addClass('active');
				})
				$('.slide-buttons li:nth-child(6)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(6)').addClass("show");
					$('.slide-buttons li:nth-child(6)').addClass('active');
				})
				$('.slide-buttons li:nth-child(7)').on('mouseenter', function() {
					$('.slide-buttons li.active').removeClass('active');
					$('.hero-center-section.show').removeClass("show");
					$('.hero-center-section:nth-child(7)').addClass("show");
					$('.slide-buttons li:nth-child(7)').addClass('active');
				})
				$('.slide-buttons li:nth-child(1)').trigger('mouseenter') 
				
			})(jQuery);
		</script>

	<?php endif; ?>

        <?php
	}
	
}