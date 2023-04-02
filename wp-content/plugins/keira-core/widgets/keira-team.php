<?php

class keira_team_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-team';
	}
	
	public function get_title() {
		return 'Keira Team';
	}
	
	public function get_icon() {
		return 'fa fa-users';
	}
	
	public function get_categories() {
		return [ 'keira-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'team_section',
			[
				'label' => __( 'Team Content', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
			'icon1_name',
			[
				'label' => __( 'Icon1', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the icon font name (ex: fa-facebook)', 'keira' ),
			]
		);

		$repeater->add_control(
			'icon1_link',
			[
				'label' => __( 'Icon1 Link', 'keira' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'keira' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$repeater->add_control(
			'icon2_name',
			[
				'label' => __( 'Icon2', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the icon font name (ex: fa-facebook)', 'keira' ),
			]
		);

		$repeater->add_control(
			'icon2_link',
			[
				'label' => __( 'Icon2 Link', 'keira' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'keira' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$repeater->add_control(
			'icon3_name',
			[
				'label' => __( 'Icon3', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the icon font name (ex: fa-facebook)', 'keira' ),
			]
		);

		$repeater->add_control(
			'icon3_link',
			[
				'label' => __( 'Icon3 Link', 'keira' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'keira' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$repeater->add_control(
			'icon4_name',
			[
				'label' => __( 'Icon4', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the icon font name (ex: fa-facebook)', 'keira' ),
			]
		);

		$repeater->add_control(
			'icon4_link',
			[
				'label' => __( 'Icon4 Link', 'keira' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'keira' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$repeater->add_control(
			'icon5_name',
			[
				'label' => __( 'Icon5', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the icon font name (ex: fa-facebook)', 'keira' ),
			]
		);

		$repeater->add_control(
			'icon5_link',
			[
				'label' => __( 'Icon5 Link', 'keira' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'keira' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$repeater->add_control(
			'link',
			[
				'label' => __( 'Team Member URL', 'keira' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'keira' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$repeater->add_control(
			'team_title',
			[
				'label' => __( 'Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$repeater->add_control(
			'team_subtitle',
			[
				'label' => __( 'Subtitle', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the subtitle', 'keira' ),
			]
		);

		$this->add_control(
			'team_list',
			[
				'label'   => __( 'Team List', 'keira' ),
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
			<div class="row">
			    <?php foreach ( $settings['team_list'] as $item ) : ?>
				<div class="col-md-12 col-lg-4 teamiteam-iteam">
					<div class="teamiteam r-mb-30">
						<div class="imgteam">
						    <?php echo '<img src="' . $item['image']['url'] . '" alt="img">'; ?>
							<div class="socials-media text-center">
								<ul class="list-unstyled ">
									<?php if( $item['icon1_name'] != "" ) { ?>
                                        <li><a href="<?php echo esc_url( $item['icon1_link']['url'] ); ?>"><i class="fa <?php echo $item['icon1_name'] ?> "></i></a></li>
									<?php } ?>
									<?php if( $item['icon2_name'] != "" ) { ?>
									    <li><a href="<?php echo esc_url( $item['icon2_link']['url'] ); ?>"><i class="fa <?php echo $item['icon2_name'] ?> "></i></a></li>
									<?php } ?>
									<?php if( $item['icon3_name'] != "" ) { ?>
										<li><a href="<?php echo esc_url( $item['icon3_link']['url'] ); ?>"><i class="fa <?php echo $item['icon3_name'] ?> "></i></a></li>
									<?php } ?>
									<?php if( $item['icon4_name'] != "" ) { ?>
										<li><a href="<?php echo esc_url( $item['icon4_link']['url'] ); ?>"><i class="fa <?php echo $item['icon4_name'] ?> "></i></a></li>
									<?php } ?>
									<?php if( $item['icon5_name'] != "" ) { ?>
										<li><a href="<?php echo esc_url( $item['icon5_link']['url'] ); ?>"><i class="fa <?php echo $item['icon5_name'] ?> "></i></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="btmteam">
							<a href="<?php echo esc_url( $item['link']['url'] ); ?>">
								<h4 class="maintitle"><?php echo $item['team_title'] ?></h4>
							</a>
							<p class="separator"><?php echo $item['team_subtitle'] ?></p>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
        <?php
	}
	
	
}