<?php
class Elementor_Addon extends \Elementor\Widget_Base {

	public function get_name() {
		return 'elementor_addon';
	}

	public function get_title() {
		return esc_html__( 'Clickservice Addon', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-dashboard';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'aldi', 'clickservice' ];
	}



	protected function register_controls() {

		$this->start_controls_section(
			'foto_section',
			[
				'label' => esc_html__( 'Foto', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'image',
			[
				'label' => esc_html__( 'Zgjidh foton', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'selectors' => [
					'{{WRAPPER}} .foto',
				],
			]
		);

        $this->add_control(
			'titulli',
			[
				'label' => esc_html__( 'Zgjidh titullin', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'selectors' => [
					'{{WRAPPER}} .titulli',
				],
			]
		);

		$this->end_controls_section();



        $this->start_controls_section(
			'text_section',
			[
				'label' => esc_html__( 'Teksti', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'item_description',
			[
				'label' => esc_html__( 'Description', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Type something ...', 'elementor-addon' ),
				'placeholder' => esc_html__( 'Type something ...', 'elementor-addon' ),
				'selectors' => [
					'{{WRAPPER}} .teksti',
				],
			]

			
		);

		$this->end_controls_section();

        ///TABS STYLE

        $this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Stilet e fotos', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'style_tabs'
		);

        

        $this->add_control(
			'box_border_radius',
			[
				'label' => __('Border Radius', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors' => [
					'{{WRAPPER}} .foto' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Ngjyra e tekstit', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teksti' => 'color: {{VALUE}};',
				],
			]
		);

		

		$this->add_control(
			'text_bg',
			[
				'label' => esc_html__('Background Color Text', 'elementor-addon' ),
				'type'  => \Elementor\Controls_Manager::COLOR,
				'selectors'	=> [
					'{{WRAPPER}} .teksti ' => 'background: {{VALUE}};',
					
				],
			]
		);

		$this->add_control(
			'text_border_radius',
			[
				'label' => __('Text Border Radius', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors' => [
					'{{WRAPPER}} .teksti' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'padding_text',
			[
				'label'         => __('Padding Text Box', 'elementor-addon' ),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => ['px', 'em', '%'],
				'selectors'     => [
					'{{WRAPPER}} .teksti' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
				],
			]
		);

		$this->add_responsive_control(
			'xy',
			[
				'label'         => __('Translate x y', 'elementor-addon' ),
				'type'          => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units'    => ['%'],
				'selectors'     => [
					'{{WRAPPER}} .wrapper-sec:hover span' => 'transform: translate({{TOP}}{{UNIT}},{{RIGHT}}{{UNIT}})};'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'text_typography',
				'selector' => '{{WRAPPER}} .teksti',
			]
		);



		$this->add_control(
			'time',
			[
				'label' => esc_html__( 'Time duration of transition', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 0,
				'min' =>1,
				'max' => 5,
				'step' => 0.5,
				'dynamic' => [
					'active' => true,
				],
				'selectors' =>[
					 '{{WRAPPER}} .teksti' => 'transition : transform {{VALUE}}s;',
					]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__( 'Stilet e heading', 'elementor-addon' ),
				'name' => 'title-typography',
				'selector' => '{{WRAPPER}} .titull',
			]
		);

		$this->add_control(
			'text_color_heading',
			[
				'label' => esc_html__( 'Ngjyra e titullit te fotos', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .titull' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'align_title_h3',
			[
				'label' => esc_html__('Alignment', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label_block' => false,
				'options' => [
					'left' => [
						'title' => esc_html__('Left', 'elementor-addon'),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__('Center', 'elementor-addon'),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__('Right', 'elementor-addon'),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .titull' => 'text-align: {{VALUE}};',
				],
			]
		);



		$this->end_controls_tabs();

		$this->end_controls_section();

        

	}

    

	protected function render() {
		$settings = $this->get_settings_for_display();

        $this->add_inline_editing_attributes( 'image', 'basic' );

		// Get image HTML
		$this->add_render_attribute( 'image', 'src', $settings['image']['url'] );
		$this->add_render_attribute( 'image', 'alt', \Elementor\Control_Media::get_image_alt( $settings['image'] ) );
		$this->add_render_attribute( 'image', 'title', \Elementor\Control_Media::get_image_title( $settings['image'] ) );
		$this->add_render_attribute( 'image', 'class', 'foto' );
		$this->add_render_attribute( 'item_description', 'class', 'teksti' );
		$this->add_render_attribute( 'titulli', 'class', 'titull' );
		// $linku  = \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'image' );
        
        // echo '<div>'.$settings['item_description'].'</div>' ;
        
        ?>

		<div class="wrapper-sec">
			<div class="foto-container">
				<img <?php echo $this->get_render_attribute_string('image'); ?>/>
				<h3 <?php echo $this->get_render_attribute_string('titulli'); ?>><?php echo $settings['titulli']  ?> </h3>
			</div>
			<span <?php echo $this->get_render_attribute_string('item_description'); ?>><?php echo $settings['item_description']; ?> </span>
		</div>


    <?php
	}

	public function _content_template(){
		?>
				<# view.addInlineEditingAttributes( 'image', 'basic' ); #>
				<img {{{ view.getRenderAttributeString( 'image' ) }}}  />
			
		<?php
	}

	

}