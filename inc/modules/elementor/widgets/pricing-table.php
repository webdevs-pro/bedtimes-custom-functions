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

	protected function register_controls() {
		$this->start_controls_section( 'section_plans', [
			'label' => 'Plans',
		] );

			$repeater = new \Elementor\Repeater();

			$repeater->add_control( 'enabled', [
				'label'        => 'Active',
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => 'Yes',
				'label_off'    => 'No',
				'return_value' => 'yes',
			] );

			$repeater->add_control( 'header_heading', [
				'label'     => '<br><br>Header section',
				'type'      => Controls_Manager::HEADING,
			] );

			$repeater->add_control( 'title', [
				'label'   => 'Title',
				'type'    => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => 'Plan title',
				'ai' => [
					'active' => false,
				],
			] );

			$repeater->add_control( 'badge', [
				'label'   => 'Badge',
				'type'    => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );


			$repeater->add_control( 'price_heading', [
				'label'     => '<br><br>Price section',
				'type'      => Controls_Manager::HEADING,
			] );


			$repeater->add_control( 'price', [
				'label'   => 'Price',
				'type'    => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );

			$repeater->add_control( 'period', [
				'label'   => 'Period',
				'type'    => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );

		
			$repeater->add_control( 'footer_heading', [
				'label'     => '<br><br>Footer section',
				'type'      => Controls_Manager::HEADING,
			] );


			$repeater->add_control( 'button_label', [
				'label'   => 'Button label',
				'type'    => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );

			$repeater->add_control( 'website_link', [
				'label' => 'Link',
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			] );

			$repeater->add_control( 'additional_info', [
				'label'   => 'Additional info',
				'type'    => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );

			$this->add_control( 'plans', [
				// 'label' => 'Fields',
				'type'         => \Elementor\Controls_Manager::REPEATER,
				'fields'       => $repeater->get_controls(),
				'item_actions' => [
					'add'       => false,
					'duplicate' => false,
					'remove'    => false,
					'sort'      => true,
				],
				'default'      => [
					[
						'enabled' => 'yes',
						'title'   => 'Plan 1',
						'price'   => '$10.00',
					],
					[
						'enabled' => 'yes',
						'title'   => 'Plan 2',
						'price'   => '$20.00',
					],
					[
						'enabled' => 'yes',
						'title'   => 'Plan 3',
						'price'   => '$30.00',
					],
					[
						'enabled' => 'no',
						'title'   => 'Plan 4',
						'price'   => '$100.00',
					]
				],
				'show_label'   => false
			] );

		$this->end_controls_section();


		$this->start_controls_section( 'section_features', [
			'label' => 'Features',
		] );

			$repeater = new \Elementor\Repeater();

			$repeater->add_control( 'heading', [
				'label'   => 'Heading',
				'type'    => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );


			$repeater->add_control( 'item_1_heading', [
				'label'     => '<br><br>Item 1',
				'type'      => Controls_Manager::HEADING,
			] );

			$repeater->add_control( 'item_1_icon', [
				'label'     => 'Icon',
				'type'      => Controls_Manager::ICONS,
				'skin' => 'inline',
			] );

			$repeater->add_control( 'item_1_text', [
				'label' => 'Text',
				'type'  => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );


			$repeater->add_control( 'item_2_heading', [
				'label'     => '<br><br>Item 2',
				'type'      => Controls_Manager::HEADING,
			] );

			$repeater->add_control( 'item_2_icon', [
				'label'     => 'Icon',
				'type'      => Controls_Manager::ICONS,
				'skin' => 'inline',
			] );

			$repeater->add_control( 'item_2_text', [
				'label' => 'Text',
				'type'  => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );


			$repeater->add_control( 'item_3_heading', [
				'label'     => '<br><br>Item 3',
				'type'      => Controls_Manager::HEADING,
			] );

			$repeater->add_control( 'item_3_icon', [
				'label'     => 'Icon',
				'type'      => Controls_Manager::ICONS,
				'skin' => 'inline',
			] );

			$repeater->add_control( 'item_3_text', [
				'label' => 'Text',
				'type'  => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );


			$repeater->add_control( 'item_4_heading', [
				'label'     => '<br><br>Item 4',
				'type'      => Controls_Manager::HEADING,
			] );

			$repeater->add_control( 'item_4_icon', [
				'label'     => 'Icon',
				'type'      => Controls_Manager::ICONS,
				'skin' => 'inline',
			] );

			$repeater->add_control( 'item_4_text', [
				'label' => 'Text',
				'type'  => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'ai' => [
					'active' => false,
				],
			] );


			$this->add_control( 'features', [
				// 'label' => 'Fields',
				'type'         => \Elementor\Controls_Manager::REPEATER,
				'fields'       => $repeater->get_controls(),
				'item_actions' => [
					'add'       => true,
					'duplicate' => true,
					'remove'    => true,
					'sort'      => true,
				],
				'title_field'  => '{{{heading}}}',
				'show_label'   => false
			] );

		$this->end_controls_section();


		$this->start_controls_section( 'section_style', [
			'label' => 'Style',
			'tab'   => Controls_Manager::TAB_STYLE,
		] );


		$this->end_controls_section();
	}

	protected function render() {

			echo 'Hello World!';

	}

}