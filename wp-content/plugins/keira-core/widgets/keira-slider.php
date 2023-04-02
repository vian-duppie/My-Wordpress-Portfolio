<?php

class keira_slider_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-slider';
	}
	
	public function get_title() {
		return 'Keira Slider';
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
			'desc',
			[
				'label' => __( 'Description', 'keira' ),
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

		$repeater->add_control(
			'link_text',
			[
				'label' => __( 'Link Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
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

		$this->add_control(
			'prev_text',
			[
				'label' => __( 'Prev Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);

		$this->add_control(
			'next_text',
			[
				'label' => __( 'Next Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);


		$this->end_controls_section();
		
	}
	
	protected function render() {

		$settings = $this->get_settings_for_display();
		$counter = 0;
		$counter2 = 0;
		$counter3 = 0;
		?>

        <?php if ( $settings['slider_select'] === 'slider-type-1' ): ?>
		<div class="slider_keira">
			<div class="slideshow">
				<div class="slides slide_item">
				    <?php foreach ( $settings['slider_list'] as $item ) :
					    $counter = $counter + 1;
						if ($counter == 1) { ?>
							<div class="slide slide_item slide--current">
								<div class="slide__img" style="background-image: url('<?php echo $item['image']['url'] ?>');">
								</div>
								<h1 class="carousel-item__title"><?php echo $item['title']; ?></h1>
								<p class="carousel-item__desc separator"><?php echo $item['desc']; ?></p>
								<a class="carousel-item__link" href="<?php echo esc_url($item['link']['url']) ?>"><?php echo $item['link_text']; ?></a>
							</div>
						<?php } else { ?>
                            <div class="slide slide_item">
								<div class="slide__img" style="background-image: url('<?php echo $item['image']['url'] ?>');">
								</div>
								<h1 class="carousel-item__title h2"><?php echo $item['title']; ?></h1>
								<p class="carousel-item__desc separator"><?php echo $item['desc']; ?></p>
								<a class="carousel-item__link" href="<?php echo esc_url($item['link']['url']) ?>"><?php echo $item['link_text']; ?></a>
							</div>
						<?php } ?>
					<?php endforeach; ?>
				</div>
				<nav class="footer_navigation">
					<button class="slidenav__item slidenav__item--prev"><i class="fa fa-angle-left"></i>
						<?php echo $settings['prev_text'] ?></button>
					<button class="slidenav__item slidenav__item--next"><?php echo $settings['next_text'] ?> <i
							class="fa fa-angle-right"></i></button>
				</nav>
			</div>
		</div>
		<?php elseif ( $settings['slider_select'] === 'slider-type-2' ): ?>
			<!-- Start slideshow -->
			<div class="slideshow">
				<div class="slideshow-inner">
					<div class="slides">
					    <?php foreach ( $settings['slider_list'] as $item ) :
					        $counter2 = $counter2 + 1;
						    if ($counter2 == 1) { ?>
								<div class="slide slide_item slide-active">
									<div class="slide-content">
										<div class="slide_content">
											<h1 class="carousel-item__title"><?php echo $item['title']; ?></h1>
											<p class="separator"><?php echo $item['desc']; ?>
											</p>
											<a class="carousel-item__link" href="<?php echo esc_url($item['link']['url']) ?>"><?php echo $item['link_text']; ?></a>
										</div>
									</div>
									<div class="image-container">
										<?php echo '<img class="image" src="' . $item['image']['url'] . '" alt="">'; ?>
									</div>
								</div>
							<?php } else { ?>
								<div class="slide">
									<div class="slide-content">
										<div class="slide_content">
											<h1 class="carousel-item__title"><?php echo $item['title']; ?></h1>
											<p class="separator"><?php echo $item['desc']; ?>
											</p>
											<a class="carousel-item__link" href="<?php echo esc_url($item['link']['url']) ?>"><?php echo $item['link_text']; ?></a>
										</div>
									</div>
									<div class="image-container">
									    <?php echo '<img class="image" src="' . $item['image']['url'] . '" alt="">'; ?>
									</div>
								</div>
								<?php } ?>
							<?php endforeach; ?>
					    </div>
						<div class="pagination">
						    <?php foreach ( $settings['slider_list'] as $item ) :
							    $counter3 = $counter3 + 1;
						        if ($counter3 == 1) { ?>
                                    <div class="pagination-bullet slide-active">
                                        <span class="dots"></span>
                                        <span class="icon"><?php echo $counter3 ?></span>
                                    </div>
								<?php } else { ?>
                                    <div class="pagination-bullet">
                                        <span class="dots"></span>
                                        <span class="icon"><?php echo $counter3 ?></span>
                                    </div>
								<?php } ?>
							<?php endforeach; ?>
                        </div>
						<div class="arrows">
							<div class="arrow prev">
								<span>
									<i class="fa fa-angle-left"></i>
								</span>
							</div>
							<div class="arrow next">
								<span>
									<i class="fa fa-angle-right"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
				<!-- End slideshow -->
		    <?php endif; ?>

		<?php if ( $settings['slider_select'] === 'slider-type-1' ): ?>
		<script>
		
           {
            // From https://davidwalsh.name/javascript-debounce-function.
			function debounce(func, wait, immediate) {
				var timeout;
				return function() {
					var context = this, args = arguments;
					var later = function() {
						timeout = null;
						if (!immediate) func.apply(context, args);
					};
					var callNow = immediate && !timeout;
					clearTimeout(timeout);
					timeout = setTimeout(later, wait);
					if (callNow) func.apply(context, args);
				};
			};
			
			class Slideshow {
				constructor(el) {
					this.DOM = {};
					this.DOM.el = el;
					this.settings = {
						animation: {
							slides: {
								duration: 600,
								easing: 'easeOutQuint'
							},
							shape: {
								duration: 300,
								easing: {in: 'easeOutQuad', out: 'easeOutQuad'}
							}
						},
						frameFill: 'url(#gradient1)'
					}
					this.init();
				}
				init() {
					this.DOM.slides = Array.from(this.DOM.el.querySelectorAll('.slides > .slide_item'));
					this.slidesTotal = this.DOM.slides.length;
					this.DOM.nav = this.DOM.el.querySelector('.footer_navigation');
					this.DOM.nextCtrl = this.DOM.nav.querySelector('.slidenav__item--next');
					this.DOM.prevCtrl = this.DOM.nav.querySelector('.slidenav__item--prev');
					this.current = 0;
					this.createFrame(); 
					this.initEvents();
				}
				createFrame() {
					this.rect = this.DOM.el.getBoundingClientRect();
					this.frameSize = this.rect.width/12;
					this.paths = {
						initial: this.calculatePath('initial'),
						final: this.calculatePath('final')
					};
					this.DOM.svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
					this.DOM.svg.setAttribute('class', 'shape');
					this.DOM.svg.setAttribute('width','100%');
					this.DOM.svg.setAttribute('height','100%');
					this.DOM.svg.setAttribute('viewbox',`0 0 ${this.rect.width} ${this.rect.height}`);
					this.DOM.svg.innerHTML = `
						<defs>
						<linearGradient id="gradient1" x1="0%" y1="0%" x2="0%" y2="100%">
							<stop offset="0%" stop-color="#191a1c">
								<!--animate attributeName="stop-color" values="#ED4264; #FFEDBC; #ED4264" dur="3s" repeatCount="indefinite"></animate-->
							</stop>
							<stop offset="100%" stop-color="#191a1c">
								<!--animate attributeName="stop-color" values="#FFEDBC; #ED4264; #FFEDBC" dur="3s" repeatCount="indefinite"></animate-->
							</stop>
						</linearGradient>
						</defs>
						<path fill="${this.settings.frameFill}" d="${this.paths.initial}"/>
					`;
					this.DOM.el.insertBefore(this.DOM.svg, this.DOM.nav);
					this.DOM.shape = this.DOM.svg.querySelector('path');
				}
				updateFrame() {
					this.paths.initial = this.calculatePath('initial');
					this.paths.final = this.calculatePath('final');
					this.DOM.svg.setAttribute('viewbox',`0 0 ${this.rect.width} ${this.rect.height}`);
					this.DOM.shape.setAttribute('d', this.paths.initial);
				}
				calculatePath(path = 'initial') {
					if ( path === 'initial' ) {
						return `M 0,0 0,${this.rect.height} ${this.rect.width},${this.rect.height} ${this.rect.width},0 0,0 Z M 0,0 ${this.rect.width},0 ${this.rect.width},${this.rect.height} 0,${this.rect.height} Z`;
					}
					else {
						return {
							step1: `M 0,0 0,${this.rect.height} ${this.rect.width},${this.rect.height} ${this.rect.width},0 0,0 Z M ${this.frameSize},${this.frameSize} ${this.rect.width},0 ${this.rect.width},${this.rect.height} 0,${this.rect.height} Z`,
							step2: `M 0,0 0,${this.rect.height} ${this.rect.width},${this.rect.height} ${this.rect.width},0 0,0 Z M ${this.frameSize},${this.frameSize} ${this.rect.width-this.frameSize},${this.frameSize} ${this.rect.width},${this.rect.height} 0,${this.rect.height} Z`,
							step3: `M 0,0 0,${this.rect.height} ${this.rect.width},${this.rect.height} ${this.rect.width},0 0,0 Z M ${this.frameSize},${this.frameSize} ${this.rect.width-this.frameSize},${this.frameSize} ${this.rect.width-this.frameSize},${this.rect.height-this.frameSize} 0,${this.rect.height} Z`,
							step4: `M 0,0 0,${this.rect.height} ${this.rect.width},${this.rect.height} ${this.rect.width},0 0,0 Z M ${this.frameSize},${this.frameSize} ${this.rect.width-this.frameSize},${this.frameSize} ${this.rect.width-this.frameSize},${this.rect.height-this.frameSize} ${this.frameSize},${this.rect.height-this.frameSize} Z`
						}
					}
				}
				initEvents() {
					this.DOM.nextCtrl.addEventListener('click', () => this.navigate('next'));
					this.DOM.prevCtrl.addEventListener('click', () => this.navigate('prev'));
					
					window.addEventListener('resize', debounce(() => {
						this.rect = this.DOM.el.getBoundingClientRect();
						this.updateFrame();
					}, 20));
					
					document.addEventListener('keydown', (ev) => {
						const keyCode = ev.keyCode || ev.which;
						if ( keyCode === 37 ) {
							this.navigate('prev');
						}
						else if ( keyCode === 39 ) {
							this.navigate('next');
						}
					});
				}
				navigate(dir = 'next') {
					if ( this.isAnimating ) return false;
					this.isAnimating = true;

					const animateShapeInTimeline = anime.timeline({
						duration: this.settings.animation.shape.duration,
						easing: this.settings.animation.shape.easing.in
					});  
					animateShapeInTimeline
						.add({
							targets: this.DOM.shape,
							d: this.paths.final.step1
						})
						.add({
							targets: this.DOM.shape,
							d: this.paths.final.step2,
							offset: `-=${this.settings.animation.shape.duration*.5}`
						})
						.add({
							targets: this.DOM.shape,
							d: this.paths.final.step3,
							offset: `-=${this.settings.animation.shape.duration*.5}`
						})
						.add({
							targets: this.DOM.shape,
							d: this.paths.final.step4,
							offset: `-=${this.settings.animation.shape.duration*.5}`
						});

					const animateSlides = () => {
						return new Promise((resolve, reject) => {
							const currentSlide = this.DOM.slides[this.current];
							anime({
								targets: currentSlide,
								duration: this.settings.animation.slides.duration,
								easing: this.settings.animation.slides.easing,
								translateX: dir === 'next' ? -1*this.rect.width : this.rect.width,
								complete: () => {
									currentSlide.classList.remove('slide--current');
									resolve();
								}
							});
				
							this.current = dir === 'next' ? 
								this.current < this.slidesTotal-1 ? this.current + 1 : 0 :
								this.current > 0 ? this.current - 1 : this.slidesTotal-1; 
							
							const newSlide = this.DOM.slides[this.current];
							newSlide.classList.add('slide--current');
							anime({
								targets: newSlide,
								duration: this.settings.animation.slides.duration,
								easing: this.settings.animation.slides.easing,
								translateX: [dir === 'next' ? this.rect.width : -1*this.rect.width,0]
							});
				
							const newSlideImg = newSlide.querySelector('.slide__img');
							anime.remove(newSlideImg);
							anime({
								targets: newSlideImg,
								duration: this.settings.animation.slides.duration*4,
								easing: this.settings.animation.slides.easing,
								translateX: [dir === 'next' ? 200 : -200, 0]
							});
				
							anime({
								targets: [newSlide.querySelector('.carousel-item__title'), newSlide.querySelector('.carousel-item__desc'), newSlide.querySelector('.carousel-item__link')],
								duration: this.settings.animation.slides.duration*2,
								easing: this.settings.animation.slides.easing,
								delay: (t,i) => i*100+100,
								translateX: [dir === 'next' ? 300 : -300,0],
								opacity: [0,1]
							});
						});
					};

					const animateShapeOut = () => {  
						const animateShapeOutTimeline = anime.timeline({
							duration: this.settings.animation.shape.duration,
							easing: this.settings.animation.shape.easing.out
						});  
						animateShapeOutTimeline
							.add({
								targets: this.DOM.shape,
								d: this.paths.final.step3
							})
							.add({
								targets: this.DOM.shape,
								d: this.paths.final.step2,
								offset: `-=${this.settings.animation.shape.duration*.5}`
							})
							.add({
								targets: this.DOM.shape,
								d: this.paths.final.step1,
								offset: `-=${this.settings.animation.shape.duration*.5}`
							})
							.add({
								targets: this.DOM.shape,
								d: this.paths.initial,
								offset: `-=${this.settings.animation.shape.duration*.5}`,
								complete: () => this.isAnimating = false
							});
					}

					animateShapeInTimeline.finished.then(animateSlides).then(animateShapeOut);
				}
			};

			new Slideshow(document.querySelector('.slideshow'));
			imagesLoaded('.slide__img', { background: true }, () => document.body.classList.remove('loading'));
		};
		</script>

        <?php elseif ( $settings['slider_select'] === 'slider-type-2' ): ?>

		<script>

		(function($) {

			// var slideshowDuration = 4000;
			// var slideshow = $('.slideshow');

			function slideshowSwitch(slideshow, index, auto) {
				if (slideshow.data('wait')) return;

				var slides = slideshow.find('.slide');
				var pages = slideshow.find('.pagination');
				var activeSlide = slides.filter('.slide-active');
				var activeSlideImage = activeSlide.find('.image-container');
				var newSlide = slides.eq(index);
				var newSlideImage = newSlide.find('.image-container');
				var newSlideContent = newSlide.find('.slide-content');
				var newSlideElements = newSlide.find('.slide_content > *');
				if (newSlide.is(activeSlide)) return;

				newSlide.addClass('is-new');
				var timeout = slideshow.data('timeout');
				clearTimeout(timeout);
				slideshow.data('wait', true);
				var transition = slideshow.attr('data-transition');
				if (transition == 'fade') {
					newSlide.css({
						display: 'block',
						zIndex: 2
					});
					newSlideImage.css({
						opacity: 0
					});

					TweenMax.to(newSlideImage, 1, {
						alpha: 1,
						onComplete: function () {
							newSlide.addClass('slide-active').removeClass('is-new');
							activeSlide.removeClass('slide-active');
							newSlide.css({ display: '', zIndex: '' });
							newSlideImage.css({ opacity: '' });
							slideshow.find('.pagination').trigger('check');
							slideshow.data('wait', false);
							if (auto) {
								timeout = setTimeout(function () {
									slideshowNext(slideshow, false, true);
								}, slideshowDuration);
								slideshow.data('timeout', timeout);
							}
						}
					});
				} else {
					if (newSlide.index() > activeSlide.index()) {
						var newSlideRight = 0;
						var newSlideLeft = 'auto';
						var newSlideImageRight = -slideshow.width() / 8;
						var newSlideImageLeft = 'auto';
						var newSlideImageToRight = 0;
						var newSlideImageToLeft = 'auto';
						var newSlideContentLeft = 'auto';
						var newSlideContentRight = 0;
						var activeSlideImageLeft = -slideshow.width() / 4;
					} else {
						var newSlideRight = '';
						var newSlideLeft = 0;
						var newSlideImageRight = 'auto';
						var newSlideImageLeft = -slideshow.width() / 8;
						var newSlideImageToRight = '';
						var newSlideImageToLeft = 0;
						var newSlideContentLeft = 0;
						var newSlideContentRight = 'auto';
						var activeSlideImageLeft = slideshow.width() / 4;
					}

					newSlide.css({
						display: 'block',
						width: 0,
						right: newSlideRight,
						left: newSlideLeft
						, zIndex: 2
					});

					newSlideImage.css({
						width: slideshow.width(),
						right: newSlideImageRight,
						left: newSlideImageLeft
					});

					newSlideContent.css({
						width: slideshow.width(),
						left: newSlideContentLeft,
						right: newSlideContentRight
					});

					activeSlideImage.css({
						left: 0
					});

					TweenMax.set(newSlideElements, { y: 20, force3D: true });
					TweenMax.to(activeSlideImage, 1, {
						left: activeSlideImageLeft,
						ease: Power3.easeInOut
					});

					TweenMax.to(newSlide, 1, {
						width: slideshow.width(),
						ease: Power3.easeInOut
					});

					TweenMax.to(newSlideImage, 1, {
						right: newSlideImageToRight,
						left: newSlideImageToLeft,
						ease: Power3.easeInOut
					});

					TweenMax.staggerFromTo(newSlideElements, 0.8, { alpha: 0, y: 60 }, { alpha: 1, y: 0, ease: Power3.easeOut, force3D: true, delay: 0.6 }, 0.1, function () {
						newSlide.addClass('slide-active').removeClass('is-new');
						activeSlide.removeClass('slide-active');
						newSlide.css({
							display: '',
							width: '',
							left: '',
							zIndex: ''
						});

						newSlideImage.css({
							width: '',
							right: '',
							left: ''
						});

						newSlideContent.css({
							width: '',
							left: ''
						});

						newSlideElements.css({
							opacity: '',
							transform: ''
						});

						activeSlideImage.css({
							left: ''
						});

						slideshow.find('.pagination').trigger('check');
						slideshow.data('wait', false);
						if (auto) {
							timeout = setTimeout(function () {
								slideshowNext(slideshow, false, true);
							}, slideshowDuration);
							slideshow.data('timeout', timeout);
						}
					});
				}
			}

			function slideshowNext(slideshow, previous, auto) {
				var slides = slideshow.find('.slide');
				var activeSlide = slides.filter('.slide-active');
				var newSlide = null;
				if (previous) {
					newSlide = activeSlide.prev('.slide');
					if (newSlide.length === 0) {
						newSlide = slides.last();
					}
				} else {
					newSlide = activeSlide.next('.slide');
					if (newSlide.length == 0)
						newSlide = slides.filter('.slide').first();
				}

				slideshowSwitch(slideshow, newSlide.index(), auto);
			}

			function homeSlideshowParallax() {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > windowHeight) return;
				var inner = slideshow.find('.slideshow-inner');
				var newHeight = windowHeight - (scrollTop / 2);
				var newTop = scrollTop * 0.8;

				inner.css({
					transform: 'translateY(' + newTop + 'px)', height: newHeight
				});
			}

			$(document).ready(function () {
				$('.slide').addClass('is-loaded');

				$('.slideshow .arrows .arrow').on('click', function () {
					slideshowNext($(this).closest('.slideshow'), $(this).hasClass('prev'));
				});

				$('.slideshow .pagination .pagination-bullet').on('click', function () {
					slideshowSwitch($(this).closest('.slideshow'), $(this).index());
				});

				$('.slideshow .pagination').on('check', function () {
					var slideshow = $(this).closest('.slideshow');
					var pages = $(this).find('.pagination-bullet');
					var index = slideshow.find('.slides .slide-active').index();
					pages.removeClass('slide-active');
					pages.eq(index).addClass('slide-active');
				});

				/* Lazyloading
				$('.slideshow').each(function(){
				var slideshow=$(this);
				var images=slideshow.find('.image').not('.is-loaded');
				images.on('loaded',function(){
					var image=$(this);
					var slide=image.closest('.slide');
					slide.addClass('is-loaded');
				});
				*/

				var timeout = setTimeout(function () {
					slideshowNext(slideshow, false, true);
				}, slideshowDuration);

				slideshow.data('timeout', timeout);
			});

			if ($('.main-content .slideshow').length > 1) {
				$(window).on('scroll', homeSlideshowParallax);
			}

		})(jQuery);
	    </script>
	<?php endif; ?>

        <?php
	}
	
}