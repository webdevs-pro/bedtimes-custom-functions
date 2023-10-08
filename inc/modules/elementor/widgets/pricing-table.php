<?php

use Elementor\Controls_Manager as Controls_Manager;
use Elementor\Group_Control_Typography as Group_Control_Typography;
use Elementor\Core\Kits\Documents\Tabs\Global_Colors as Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography as Global_Typography;
use Elementor\Group_Control_Border as Group_Control_Border;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


class TBT_Pricing_Table extends Elementor\Widget_Base {

	public function get_name() {
		return 'tbt-pricing-table';
	}

	public function get_title() {
		return 'Pracing Table';
	}

	public function get_icon() {
		return 'eicon-price-table';
	}

	public function get_categories() {
		return ['thebedtimes'];
	}

	public function get_keywords() {
		return ['price', 'table'];
	}

	public function get_style_depends() {
		return ['tbt-pricing-table'];
	}

	protected function register_controls() {
		$this->start_controls_section( 'section_plans', [
			'label' => 'Plans',
		] );

			$plans_repeater = new \Elementor\Repeater();

			$plans_repeater->add_control( 'header_heading', [
				'label' => '<br><br>Header section',
				'type'  => Controls_Manager::HEADING,
			] );

			$plans_repeater->add_control( 'featured', [
				'label'        => 'Featured',
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'label_on'     => 'Yes',
				'label_off'    => 'No',
				'return_value' => 'yes',
			] );

			$plans_repeater->add_control( 'title', [
				'label'       => 'Title',
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default'     => 'Plan title',
				'ai' => [
					'active' => false,
				],
			] );

			$plans_repeater->add_control( 'badge', [
				'label'       => 'Badge',
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );


			$plans_repeater->add_control( 'price_heading', [
				'label' => '<br><br>Price section',
				'type'  => Controls_Manager::HEADING,
			] );


			$plans_repeater->add_control( 'price', [
				'label'       => 'Price',
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );

			$plans_repeater->add_control( 'period', [
				'label'       => 'Period',
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );

		
			$plans_repeater->add_control( 'footer_heading', [
				'label' => '<br><br>Footer section',
				'type'  => Controls_Manager::HEADING,
			] );


			$plans_repeater->add_control( 'button_label', [
				'label'       => 'Button label',
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );

			$plans_repeater->add_control( 'button_link', [
				'label'       => 'Link',
				'type'        => \Elementor\Controls_Manager::URL,
				'options'     => [ 'url', 'is_external', 'nofollow' ],
				'default'     => [
					'url' => '',
					'is_external' => true,
					'nofollow'   => true,
				],
				'label_block' => true,
			] );

			$plans_repeater->add_control( 'additional_info', [
				'label'       => 'Additional info',
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );

			$this->add_control( 'plans', [
				// 'label' => 'Fields',
				'type'         => \Elementor\Controls_Manager::REPEATER,
				'fields'       => $plans_repeater->get_controls(),
				'item_actions' => [
					'add'       => false,
					'duplicate' => false,
					'remove'    => false,
					'sort'      => false,
				],
				'default'      => [
					[
						'title'        => 'Plan 1',
						'price'        => '$10.00',
						'button_label' => 'Buy Now',
					],
					[
						'title'        => 'Plan 2',
						'price'        => '$20.00',
						'button_label' => 'Buy Now',
					],
					[
						'title'        => 'Plan 3',
						'price'        => '$30.00',
						'button_label' => 'Buy Now',
					],
				],
				'show_label'   => true,
				'title_field'  => '{{{title}}}',
			] );


			$features_repeater = new \Elementor\Repeater();

			$features_repeater->add_control( 'heading', [
				'label'       => 'Heading',
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );


			$features_repeater->add_control( 'item_1_heading', [
				'label' => '<br><br>Plan 1',
				'type'  => Controls_Manager::HEADING,
			] );

			$features_repeater->add_control( 'item_1_icon', [
				'label' => 'Icon',
				'type'  => Controls_Manager::ICONS,
				'skin'  => 'inline',
			] );

			$features_repeater->add_control( 'item_1_text', [
				'label'       => 'Text',
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );


			$features_repeater->add_control( 'item_2_heading', [
				'label' => '<br><br>Plan 2',
				'type'  => Controls_Manager::HEADING,
			] );

			$features_repeater->add_control( 'item_2_icon', [
				'label' => 'Icon',
				'type'  => Controls_Manager::ICONS,
				'skin'  => 'inline',
			] );

			$features_repeater->add_control( 'item_2_text', [
				'label'       => 'Text',
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );


			$features_repeater->add_control( 'item_3_heading', [
				'label' => '<br><br>Plan 3',
				'type'  => Controls_Manager::HEADING,
			] );

			$features_repeater->add_control( 'item_3_icon', [
				'label'     => 'Icon',
				'type'      => Controls_Manager::ICONS,
				'skin'      => 'inline',
			] );

			$features_repeater->add_control( 'item_3_text', [
				'label'       => 'Text',
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );

			$this->add_control( 'features', [
				'label' => 'Features',
				'type'         => \Elementor\Controls_Manager::REPEATER,
				'fields'       => $features_repeater->get_controls(),
				'item_actions' => [
					'add'       => true,
					'duplicate' => true,
					'remove'    => true,
					'sort'      => true,
				],
				'title_field'  => '{{{heading}}}',
				'show_label'   => true,
			] );

		$this->end_controls_section();


		// General Style Section
		$this->start_controls_section( 'section_general_style', [
			'label' => 'General Style',
			'tab'   => Controls_Manager::TAB_STYLE,
		] );

		// Table heading
		$this->add_control( 'table_heading_styles_heading', [
			'label' => 'Table Heading',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_control( 'table_heading_color', [
			'label'     => 'Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-table-heading' => 'color: {{VALUE}};',
			],
		] );

		$this->add_group_control( Group_Control_Typography::get_type(), [
			'name'     => 'table_heading_typography',
			'label'    => 'Typography',
			'global'   => [
				'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
			],
			'selector' => '{{WRAPPER}} .tbt-table-heading',
		] );

		$this->add_control( 'table_heading_background_color', [
			'label'     => 'Background Color',
			'type'      => Controls_Manager::COLOR,
			'default'	=> '#F0EBE1',
			'selectors' => [
				'{{WRAPPER}} .tbt-table-heading' => 'background-color: {{VALUE}};',
			],
		] );

		$this->add_responsive_control( 'table_heading_padding', [
			'label'      => 'Padding',
			'type'       => Controls_Manager::DIMENSIONS,
			'size_units' => [ 'px', '%', 'em' ],
			'default'    => [
				'top'      => '10',
				'bottom'   => '10',
				'left'     => '10',
				'right'    => '10',
				'unit'     => 'px',
				'isLinked' => false,
			],
			'selectors'  => [
				'{{WRAPPER}} .tbt-table-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		] );

		// Plans
		$this->add_control( 'plans_style_heading', [
			'label' => '<br><br>Plans',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_control( 'plan_background_color', [
			'label'     => 'Background Color',
			'type'      => Controls_Manager::COLOR,
			'default'	=> '#f2e1cc',
			'selectors' => [
				'{{WRAPPER}} .normal-plan' => 'background-color: {{VALUE}};',
			],
		] );

		$this->add_control( 'featured_plan_background_color', [
			'label'     => 'Featured Background Color',
			'type'      => Controls_Manager::COLOR,
			'default'	=> '#FCBB76',
			'selectors' => [
				'{{WRAPPER}} .featured-plan' => 'background-color: {{VALUE}};',
				'{{WRAPPER}}' => '--featured-background-color: {{VALUE}};',
			],
		] );

		$this->add_responsive_control( 'plans_mobile_spacing', [
			'label'     => 'Mobile Spacing',
			'type'      => Controls_Manager::SLIDER,
			'range'     => [
				'px' => [
					'max' => 100,
				],
			],
			'default'   => [
				'unit' => 'px',
				'size' => '20',
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan' => 'margin-bottom: {{SIZE}}{{UNIT}};',
			],
		] );

		$this->end_controls_section();


		// Plan Header Style Section
		$this->start_controls_section( 'section_plan_header_style', [
			'label' => 'Plan Header',
			'tab'   => Controls_Manager::TAB_STYLE,
		] );

		$this->add_responsive_control( 'plan_header_padding', [
			'label'      => 'Header Padding',
			'type'       => Controls_Manager::DIMENSIONS,
			'size_units' => [ 'px', '%', 'em' ],
			'default'    => [
				'top'      => '10',
				'bottom'   => '10',
				'left'     => '10',
				'right'    => '10',
				'unit'     => 'px',
				'isLinked' => false,
			],
			'selectors'  => [
				'{{WRAPPER}} .tbt-plan-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		] );

		// Plan badge
		$this->add_control( 'plan_header_badge_styles_heading', [
			'label' => 'Badge',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_control( 'header_badge_color', [
			'label'     => 'Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-badge' => 'color: {{VALUE}};',
			],
		] );

		$this->add_group_control( Group_Control_Typography::get_type(), [
			'name'     => 'header_badge_typography',
			'label'    => 'Typography',
			'global'   => [
				'default' => Global_Typography::TYPOGRAPHY_TEXT,
			],
			'selector' => '{{WRAPPER}} .tbt-plan-badge',
		] );

		$this->add_responsive_control( 'badge_spacing', [
			'label'     => 'Spacing',
			'type'      => Controls_Manager::SLIDER,
			'range'     => [
				'px' => [
					'max' => 100,
				],
			],
			'default'   => [
				'unit' => 'px',
				'size' => '50',
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-badge' => 'margin-bottom: {{SIZE}}{{UNIT}};',
			],
		] );



		// Plan title
		$this->add_control( 'plan_header_title_styles_heading', [
			'label' => '<br><br>Title',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_control( 'plan_title_color', [
			'label'     => 'Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-title' => 'color: {{VALUE}};',
			],
		] );

		$this->add_group_control( Group_Control_Typography::get_type(), [
			'name'     => 'plan_title_typography',
			'label'    => 'Typography',
			'global'   => [
				'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
			],
			'selector' => '{{WRAPPER}} .tbt-plan-title',
		] );

		$this->end_controls_section();


		// Plan Price Style Section
		$this->start_controls_section( 'section_plan_price_style', [
			'label' => 'Plan Price',
			'tab'   => Controls_Manager::TAB_STYLE,
		] );

		$this->add_responsive_control( 'plan_price_padding', [
			'label'      => 'Price Padding',
			'type'       => Controls_Manager::DIMENSIONS,
			'size_units' => [ 'px', '%', 'em' ],
			'default'    => [
				'top'      => '10',
				'bottom'   => '10',
				'left'     => '10',
				'right'    => '10',
				'unit'     => 'px',
				'isLinked' => false,
			],
			'selectors'  => [
				'{{WRAPPER}} .tbt-plan-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		] );

		// Plan price
		$this->add_control( 'plan_price_styles_heading', [
			'label' => 'Price',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_control( 'price_color', [
			'label'     => 'Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-price-amount' => 'color: {{VALUE}};',
			],
		] );

		$this->add_group_control( Group_Control_Typography::get_type(), [
			'name'     => 'price_typography',
			'label'    => 'Typography',
			'global'   => [
				'default' => Global_Typography::TYPOGRAPHY_TEXT,
			],
			'selector' => '{{WRAPPER}} .tbt-plan-price-amount',
		] );



		// Plan period
		$this->add_control( 'plan_period_heading', [
			'label' => '<br><br>Period',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_responsive_control( 'period_spacing', [
			'label'     => 'Distance',
			'type'      => Controls_Manager::SLIDER,
			'range'     => [
				'px' => [
					'max' => 50,
				],
			],
			'default'   => [
				'unit' => 'px',
				'size' => '0',
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-price-period' => 'margin-top: {{SIZE}}{{UNIT}};',
			],
		] );

		$this->add_control( 'period_color', [
			'label'     => 'Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-price-period' => 'color: {{VALUE}};',
			],
		] );

		$this->add_group_control( Group_Control_Typography::get_type(), [
			'name'     => 'period_typography',
			'label'    => 'Typography',
			'global'   => [
				'default' => Global_Typography::TYPOGRAPHY_TEXT,
			],
			'selector' => '{{WRAPPER}} .tbt-plan-price-period',
		] );

		$this->end_controls_section();


		// Features Style Section
		$this->start_controls_section( 'section_features_style', [
			'label' => 'Features',
			'tab'   => Controls_Manager::TAB_STYLE,
		] );

		$this->add_responsive_control( 'plan_feature_padding', [
			'label'      => 'Feature Padding',
			'type'       => Controls_Manager::DIMENSIONS,
			'size_units' => [ 'px', '%', 'em' ],
			'default'    => [
				'top'      => '10',
				'bottom'   => '10',
				'left'     => '10',
				'right'    => '10',
				'unit'     => 'px',
				'isLinked' => false,
			],
			'selectors'  => [
				'{{WRAPPER}} .tbt-plan-feature' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		] );

		// Divider
		$this->add_control( 'features_divider_heading', [
			'label' => 'Divider',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_control( 'divider_color', [
			'label'     => 'Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-features-divider:after' => 'background-color: {{VALUE}};',
			],
		] );

		$this->add_responsive_control( 'divider_height', [
			'label'     => 'Height',
			'type'      => \Elementor\Controls_Manager::NUMBER,
			'min'       => 0,
			'max'       => 10,
			'step'      => 1,
			'default'   => 1,
			'selectors' => [
				'{{WRAPPER}} .tbt-features-divider:after' => 'height: {{SIZE}}px;',
			],
		] );

		$this->add_responsive_control( 'divider_horizontal_spacing', [
			'label'     => 'Spacing',
			'type'      => Controls_Manager::SLIDER,
			'range'     => [
				'px' => [
					'max' => 100,
				],
			],
			'default'   => [
				'unit' => 'px',
				'size' => '20',
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-features-divider:after' => 'left: {{SIZE}}{{UNIT}}; right: {{SIZE}}{{UNIT}};',
			],
		] );

		// Feature icon
		$this->add_control( 'feature_icon_heading', [
			'label' => '<br><br>Icon',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_responsive_control( 'icon_size', [
			'label'     => 'Icon Size',
			'type'      => Controls_Manager::SLIDER,
			'range'     => [
				'px' => [
					'max' => 50,
				],
			],
			'default'   => [
				'unit' => 'px',
				'size' => '24',
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-feature-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				'{{WRAPPER}} .tbt-plan-feature-icon svg' => 'height: {{SIZE}}{{UNIT}};',
			],
		] );

		$this->add_control( 'icon_color', [
			'label'     => 'Icon Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-feature-icon' => 'color: {{VALUE}};',
				'{{WRAPPER}} .tbt-plan-feature-icon svg' => 'fill: color: {{VALUE}}',
			],
		] );


		// Feature content
		$this->add_control( 'feature_text_heading', [
			'label' => '<br><br>Text',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_control( 'feature_text_color', [
			'label'     => 'Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-feature-text' => 'color: {{VALUE}};',
			],
		] );

		$this->add_group_control( Group_Control_Typography::get_type(), [
			'name'     => 'feature_typography',
			'label'    => 'Typography',
			'global'   => [
				'default' => Global_Typography::TYPOGRAPHY_TEXT,
			],
			'selector' => '{{WRAPPER}} .tbt-plan-feature-text',
		] );

		$this->end_controls_section();


		// Plan Footer Style Section
		$this->start_controls_section( 'section_footer_style', [
			'label' => 'Footer',
			'tab'   => Controls_Manager::TAB_STYLE,
		] );

		$this->add_responsive_control( 'plan_footer_padding', [
			'label'      => 'Footer Padding',
			'type'       => Controls_Manager::DIMENSIONS,
			'size_units' => [ 'px', '%', 'em' ],
			'default'    => [
				'top'      => '10',
				'bottom'   => '10',
				'left'     => '10',
				'right'    => '10',
				'unit'     => 'px',
				'isLinked' => false,
			],
			'selectors'  => [
				'{{WRAPPER}} .tbt-plan-footer' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		] );

		// Divider
		$this->add_control( 'features_divider_heading', [
			'label' => 'Divider',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_control( 'divider_color', [
			'label'     => 'Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-features-divider:after' => 'background-color: {{VALUE}};',
			],
		] );

		$this->add_responsive_control( 'divider_height', [
			'label'     => 'Height',
			'type'      => \Elementor\Controls_Manager::NUMBER,
			'min'       => 0,
			'max'       => 10,
			'step'      => 1,
			'default'   => 1,
			'selectors' => [
				'{{WRAPPER}} .tbt-features-divider:after' => 'height: {{SIZE}}px;',
			],
		] );

		$this->add_responsive_control( 'divider_horizontal_spacing', [
			'label'     => 'Spacing',
			'type'      => Controls_Manager::SLIDER,
			'range'     => [
				'px' => [
					'max' => 100,
				],
			],
			'default'   => [
				'unit' => 'px',
				'size' => '20',
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-features-divider:after' => 'left: {{SIZE}}{{UNIT}}; right: {{SIZE}}{{UNIT}};',
			],
		] );

		// Feature icon
		$this->add_control( 'feature_icon_heading', [
			'label' => '<br><br>Icon',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_responsive_control( 'icon_size', [
			'label'     => 'Icon Size',
			'type'      => Controls_Manager::SLIDER,
			'range'     => [
				'px' => [
					'max' => 50,
				],
			],
			'default'   => [
				'unit' => 'px',
				'size' => '24',
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-feature-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				'{{WRAPPER}} .tbt-plan-feature-icon svg' => 'height: {{SIZE}}{{UNIT}};',
			],
		] );

		$this->add_control( 'icon_color', [
			'label'     => 'Icon Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-feature-icon' => 'color: {{VALUE}};',
				'{{WRAPPER}} .tbt-plan-feature-icon svg' => 'fill: color: {{VALUE}}',
			],
		] );


		// Feature content
		$this->add_control( 'feature_text_heading', [
			'label' => '<br><br>Additional Info',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_responsive_control( 'additional_info_spacing', [
			'label'     => 'Spacing',
			'type'      => Controls_Manager::SLIDER,
			'range'     => [
				'px' => [
					'max' => 100,
				],
			],
			'default'   => [
				'unit' => 'px',
				'size' => '20',
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-additional-info' => 'margin-top: {{SIZE}}{{UNIT}};',
			],
		] );

		$this->add_control( 'additional_text_color', [
			'label'     => 'Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-plan-additional-info' => 'color: {{VALUE}};',
			],
		] );

		$this->add_group_control( Group_Control_Typography::get_type(), [
			'name'     => 'additional_text_typography',
			'label'    => 'Typography',
			'global'   => [
				'default' => Global_Typography::TYPOGRAPHY_TEXT,
			],
			'selector' => '{{WRAPPER}} .tbt-plan-additional-info',
		] );

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$features = $settings['features'];

		// Desktop
		echo '<div class="tbt-pricing-table-desktop">';

			// Plan header row
			echo '<div class="tbt-table-heading"></div>';
			for ( $i = 0; $i <= 2; $i++ ) {
				$active_class = $settings['plans'][ $i ]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan';
				$badge        = esc_html( $settings['plans'][ $i ]['badge'] ?? '' );
				$title        = esc_html( $settings['plans'][ $i ]['title'] ?? '' );
				printf(
					'<div class="tbt-plan-header tbt-plan-%1$d%2$s">',
					$i + 1,
					$active_class
				);
					echo '<div class="tbt-plan-badge">' . $badge . '</div>';
					echo '<div class="tbt-plan-title">' . $title . '</div>';
				echo '</div>';
			}
			?>

			<!-- Prices -->
			<div class="tbt-table-heading"></div>
			<div class="tbt-plan-price tbt-plan-1<?php echo $settings['plans'][0]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan'; ?>">
				<span class="tbt-plan-price-amount"><?php echo $settings['plans'][0]['price'] ?? ''; ?></span><br>
				<span class="tbt-plan-price-period"><?php echo $settings['plans'][0]['period'] ?? ''; ?></span>
			</div>
			<div class="tbt-plan-price tbt-plan-2<?php echo $settings['plans'][1]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan'; ?>">
				<span class="tbt-plan-price-amount"><?php echo $settings['plans'][1]['price'] ?? ''; ?></span><br>
				<span class="tbt-plan-price-period"><?php echo $settings['plans'][1]['period'] ?? ''; ?></span>
			</div>
			<div class="tbt-plan-price tbt-plan-3<?php echo $settings['plans'][2]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan'; ?>">
				<span class="tbt-plan-price-amount"><?php echo $settings['plans'][2]['price'] ?? ''; ?></span><br>
				<span class="tbt-plan-price-period"><?php echo $settings['plans'][2]['period'] ?? ''; ?></span>
			</div>

			<!-- Features -->
			<?php
			echo '<div class="tbt-features-divider"></div>';
			foreach ( $features as $feature ) {
				// Heading
				echo '<div class="tbt-table-heading tbt-plan-feature-heading">' . $feature['heading'] . '</div>';

				// Plan 1
				echo '<div class="tbt-plan-feature plan-1' . ( $settings['plans'][0]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan' ) . '">';
					echo '<div class="tbt-plan-feature-icon">';
						\Elementor\Icons_Manager::render_icon( $feature['item_1_icon'], [ 'aria-hidden' => 'true' ] );
					echo '</div>';
					echo '<div class="tbt-plan-feature-text">' . $feature['item_1_text'] . '</div>';
				echo '</div>';

				// Plan 2
				echo '<div class="tbt-plan-feature plan-2' . ( $settings['plans'][1]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan' ) . '">';
					echo '<div class="tbt-plan-feature-icon">';
						\Elementor\Icons_Manager::render_icon( $feature['item_2_icon'], [ 'aria-hidden' => 'true' ] );
					echo '</div>';
					echo '<div class="tbt-plan-feature-text">' . $feature['item_2_text'] . '</div>';
				echo '</div>';

				// Plan 3
				echo '<div class="tbt-plan-feature plan-3' . ( $settings['plans'][2]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan' ) . '">';
					echo '<div class="tbt-plan-feature-icon">';
						\Elementor\Icons_Manager::render_icon( $feature['item_3_icon'], [ 'aria-hidden' => 'true' ] );
					echo '</div>';
					echo '<div class="tbt-plan-feature-text">' . $feature['item_3_text'] . '</div>';
				echo '</div>';
				echo '<div class="tbt-features-divider"></div>';
			}
			?>

			<!-- Footer -->
			<div class="tbt-table-heading"></div>
			<div class="tbt-plan-footer tbt-plan-1<?php echo $settings['plans'][0]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan'; ?>">
				<a href="<?php echo $settings['plans'][0]['button_link']['url'] ?? ''; ?>" class="tbt-plan-button elementor-button"><?php echo $settings['plans'][0]['button_label'] ?? ''; ?></a>
				<div class="tbt-plan-additional-info"><?php echo $settings['plans'][0]['additional_info'] ?? ''; ?></div>
			</div>
			<div class="tbt-plan-footer tbt-plan-2<?php echo $settings['plans'][1]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan'; ?>">
				<a href="<?php echo $settings['plans'][1]['button_link']['url'] ?? ''; ?>" class="tbt-plan-button elementor-button"><?php echo $settings['plans'][1]['button_label'] ?? ''; ?></a>
				<div class="tbt-plan-additional-info"><?php echo $settings['plans'][1]['additional_info'] ?? ''; ?></div>
			</div>
			<div class="tbt-plan-footer tbt-plan-3<?php echo $settings['plans'][2]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan'; ?>">
				<a href="<?php echo $settings['plans'][2]['button_link']['url'] ?? ''; ?>" class="tbt-plan-button elementor-button"><?php echo $settings['plans'][2]['button_label'] ?? ''; ?></a>
				<div class="tbt-plan-additional-info"><?php echo $settings['plans'][2]['additional_info'] ?? ''; ?></div>
			</div>

		</div>
		<?php


		// Mobile
		echo '<div class="tbt-pricing-table-mobile">';

			// Plan 1
			echo '<div class="tbt-plan tbt-plan-1' . ( $settings['plans'][0]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan' ) . '">';
				echo '<div class="tbt-plan-header">';
					echo '<div class="tbt-plan-badge">' . $settings['plans'][0]['badge'] . '</div>';
					echo '<div class="tbt-plan-title">' . $settings['plans'][0]['title'] . '</div>';
				echo '</div>';
				echo '<div class="tbt-plan-price">';
					echo '<span class="tbt-plan-price-amount">' . $settings['plans'][0]['price'] . '</span><br>';
					echo '<span class="tbt-plan-price-period">' . $settings['plans'][0]['period'] . '</span>';
				echo '</div>';
				echo '<div class="tbt-features-divider"></div>';
				echo '<div class="tbt-plan-features">';
					foreach ( $features as $feature ) {
						echo '<div class="tbt-plan-feature">';
							echo '<div class="tbt-plan-feature-heading">' . $feature['heading'] . '</div>';
							echo '<div class="tbt-plan-feature-icon">';
								\Elementor\Icons_Manager::render_icon( $feature['item_1_icon'], [ 'aria-hidden' => 'true' ] );
							echo '</div>';
							echo '<div class="tbt-plan-feature-text">' . $feature['item_1_text'] . '</div>';
						echo '</div>';
						echo '<div class="tbt-features-divider"></div>';
					}
				echo '</div>';
				echo '<div class="tbt-plan-footer">';
					echo '<a href="' . $settings['plans'][0]['button_link']['url'] . '" class="tbt-plan-button elementor-button">' . $settings['plans'][0]['button_label'] . '</a>';
					echo '<div class="tbt-plan-additional-info">' . $settings['plans'][0]['additional_info'] . '</div>';
				echo '</div>';
			echo '</div>';

			// Plan 2
			echo '<div class="tbt-plan tbt-plan-2' . ( $settings['plans'][1]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan' ) . '">';
				echo '<div class="tbt-plan-header">';
					echo '<div class="tbt-plan-badge">' . $settings['plans'][1]['badge'] . '</div>';
					echo '<div class="tbt-plan-title">' . $settings['plans'][1]['title'] . '</div>';
				echo '</div>';
				echo '<div class="tbt-plan-price">';
					echo '<span class="tbt-plan-price-amount">' . $settings['plans'][1]['price'] . '</span><br>';
					echo '<span class="tbt-plan-price-period">' . $settings['plans'][1]['period'] . '</span>';
				echo '</div>';
				echo '<div class="tbt-features-divider"></div>';
				echo '<div class="tbt-plan-features">';
					foreach ( $features as $feature ) {
						echo '<div class="tbt-plan-feature">';
							echo '<div class="tbt-plan-feature-heading">' . $feature['heading'] . '</div>';
							echo '<div class="tbt-plan-feature-icon">';
								\Elementor\Icons_Manager::render_icon( $feature['item_2_icon'], [ 'aria-hidden' => 'true' ] );
							echo '</div>';
							echo '<div class="tbt-plan-feature-text">' . $feature['item_2_text'] . '</div>';
						echo '</div>';
						echo '<div class="tbt-features-divider"></div>';
					}
				echo '</div>';
				echo '<div class="tbt-plan-footer">';
					echo '<a href="' . $settings['plans'][1]['button_link']['url'] . '" class="tbt-plan-button elementor-button">' . $settings['plans'][1]['button_label'] . '</a>';
					echo '<div class="tbt-plan-additional-info">' . $settings['plans'][1]['additional_info'] . '</div>';
				echo '</div>';
			echo '</div>';

			// Plan 3
			echo '<div class="tbt-plan tbt-plan-2' . ( $settings['plans'][2]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan' ) . '">';
				echo '<div class="tbt-plan-header">';
					echo '<div class="tbt-plan-badge">' . $settings['plans'][2]['badge'] . '</div>';
					echo '<div class="tbt-plan-title">' . $settings['plans'][2]['title'] . '</div>';
				echo '</div>';
				echo '<div class="tbt-plan-price">';
					echo '<span class="tbt-plan-price-amount">' . $settings['plans'][2]['price'] . '</span><br>';
					echo '<span class="tbt-plan-price-period">' . $settings['plans'][2]['period'] . '</span>';
				echo '</div>';
				echo '<div class="tbt-plan-features">';
				echo '<div class="tbt-features-divider"></div>';
					foreach ( $features as $feature ) {
						echo '<div class="tbt-plan-feature">';
							echo '<div class="tbt-plan-feature-heading">' . $feature['heading'] . '</div>';
							echo '<div class="tbt-plan-feature-icon">';
								\Elementor\Icons_Manager::render_icon( $feature['item_2_icon'], [ 'aria-hidden' => 'true' ] );
							echo '</div>';
							echo '<div class="tbt-plan-feature-text">' . $feature['item_2_text'] . '</div>';
						echo '</div>';
						echo '<div class="tbt-features-divider"></div>';
					}
				echo '</div>';
				echo '<div class="tbt-plan-footer">';
					echo '<a href="' . $settings['plans'][1]['button_link']['url'] . '" class="tbt-plan-button elementor-button">' . $settings['plans'][1]['button_label'] . '</a>';
					echo '<div class="tbt-plan-additional-info">' . $settings['plans'][1]['additional_info'] . '</div>';
				echo '</div>';
			echo '</div>';			

		echo '</div>';
	}

}