<?php

use Elementor\Controls_Manager as Controls_Manager;
use Elementor\Group_Control_Typography as Group_Control_Typography;
use Elementor\Core\Kits\Documents\Tabs\Global_Colors as Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography as Global_Typography;
use Elementor\Group_Control_Border as Group_Control_Border;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


class TBT_Comparison_Table extends Elementor\Widget_Base {

	public function get_name() {
		return 'tbt-comparison-table';
	}

	public function get_title() {
		return 'Comparison Table';
	}

	public function get_icon() {
		return 'eicon-price-table';
	}

	public function get_categories() {
		return ['thebedtimes'];
	}

	public function get_keywords() {
		return ['comparison', 'table'];
	}

	public function get_style_depends() {
		return ['tbt-comparison-table'];
	}

	protected function register_controls() {
		$this->start_controls_section( 'section_items', [
			'label' => 'Items',
		] );

			$items_repeater = new \Elementor\Repeater();

			$items_repeater->add_control( 'header_heading', [
				'label' => '<br><br>Header section',
				'type'  => Controls_Manager::HEADING,
			] );

			$items_repeater->add_control( 'featured', [
				'label'        => 'Featured',
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'label_on'     => 'Yes',
				'label_off'    => 'No',
				'return_value' => 'yes',
			] );

			$items_repeater->add_control( 'title', [
				'label'       => 'Title',
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default'     => 'Item title',
				'ai' => [
					'active' => false,
				],
			] );


			$this->add_control( 'items', [
				// 'label' => 'Fields',
				'type'         => \Elementor\Controls_Manager::REPEATER,
				'fields'       => $items_repeater->get_controls(),
				'item_actions' => [
					'add'       => False,
					'duplicate' => false,
					'remove'    => false,
					'sort'      => false,
				],
				'default'      => [
					[
						'title' => 'Item 1',
					],
					[
						'title' => 'Item 2',
					],
					[
						'title' => 'Item 3',
					],
				],
				'show_label'   => true,
				'title_field'  => '{{{ title }}}',
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

		$this->add_control( 'table_heading_text_align', [
			'label' => 'Alignment',
			'type' => \Elementor\Controls_Manager::CHOOSE,
			'options' => [
				'left' => [
					'title' => 'Left',
					'icon' => 'eicon-text-align-left',
				],
				'center' => [
					'title' => 'Center',
					'icon' => 'eicon-text-align-center',
				],
				'right' => [
					'title' => 'Right',
					'icon' => 'eicon-text-align-right',
				],
			],
			'default' => 'left',
			'toggle' => true,
			'selectors' => [
				'{{WRAPPER}} .tbt-comp-item-feature-heading' => 'text-align: {{VALUE}};',
			],
		] );

		$this->add_responsive_control( 'table_heading_width', [
			'label'     => 'Width',
			'type'      => Controls_Manager::SLIDER,
			'range'     => [
				'%' => [
					'max' => 50,
				],
				'px' => [
					'max' => 500,
				],
			],
			'size_units' => [ 'px', '%', 'custom' ],
			'default'   => [
				'unit' => '%',
				'size' => '34',
			],
			'selectors' => [
				'{{WRAPPER}}' => '--table-heading-width: {{SIZE}}{{UNIT}};',
			],
		] );

		$this->add_control( 'table_heading_color', [
			'label'     => 'Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-comp-item-feature-heading' => 'color: {{VALUE}};',
			],
		] );

		$this->add_group_control( Group_Control_Typography::get_type(), [
			'name'     => 'table_heading_typography',
			'label'    => 'Typography',
			'global'   => [
				'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
			],
			'selector' => '{{WRAPPER}} .tbt-comp-item-feature-heading',
		] );

		$this->add_control( 'table_heading_background_color', [
			'label'     => 'Background Color',
			'type'      => Controls_Manager::COLOR,
			'default'	=> 'transparent',
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

		// items
		$this->add_control( 'items_style_heading', [
			'label' => '<br><br>Items',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_control( 'item_background_color', [
			'label'     => 'Background Color',
			'type'      => Controls_Manager::COLOR,
			'default'	=> 'transparent',
			'selectors' => [
				'{{WRAPPER}} .normal-plan' => 'background-color: {{VALUE}};',
			],
		] );


		$this->add_control( 'featured_item_style_heading', [
			'label' => '<br><br>Featured item',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_control( 'featured_item_background_color', [
			'label'     => 'Featured Background Color',
			'type'      => Controls_Manager::COLOR,
			'default'	=> '#FCBB76',
			'selectors' => [
				'{{WRAPPER}} .featured-plan' => 'background-color: {{VALUE}};',
			],
		] );

		$this->add_responsive_control( 'featured_item_border_width', [
			'label'     => 'Border Width',
			'type'      => Controls_Manager::SLIDER,
			'range'     => [
				'px' => [
					'max' => 10,
				],
			],
			'default'   => [
				'unit' => 'px',
				'size' => '0',
			],
			'selectors' => [
				'{{WRAPPER}}' => '--featured-item-border-width: {{SIZE}}{{UNIT}};',
			],
		] );

		$this->add_responsive_control( 'featured_item_border_radius', [
			'label'     => 'Border Radius',
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
				'{{WRAPPER}}' => '--featured-item-border-radius: {{SIZE}}{{UNIT}};',
			],
		] );

		$this->add_control( 'featured_item_border_color', [
			'label'     => 'Border Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .featured-plan' => 'border-color: {{VALUE}};',
			],
		] );

		$this->end_controls_section();


		// Plan Header Style Section
		$this->start_controls_section( 'section_item_header_style', [
			'label' => 'Plan Header',
			'tab'   => Controls_Manager::TAB_STYLE,
		] );

		$this->add_responsive_control( 'item_header_padding', [
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
				'{{WRAPPER}} .tbt-comp-item-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				'{{WRAPPER}} .tbt-comp-item-footer' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

			],
		] );


		// Plan title
		$this->add_control( 'item_header_title_styles_heading', [
			'label' => '<br><br>Title',
			'type'  => Controls_Manager::HEADING,
		] );

		$this->add_control( 'item_header_title_text_align', [
			'label' => 'Alignment',
			'type' => \Elementor\Controls_Manager::CHOOSE,
			'options' => [
				'left' => [
					'title' => 'Left',
					'icon' => 'eicon-text-align-left',
				],
				'center' => [
					'title' => 'Center',
					'icon' => 'eicon-text-align-center',
				],
				'right' => [
					'title' => 'Right',
					'icon' => 'eicon-text-align-right',
				],
			],
			'default' => 'left',
			'toggle' => true,
			'selectors' => [
				'{{WRAPPER}} .tbt-comp-item-title' => 'text-align: {{VALUE}};',
			],
		] );

		$this->add_control( 'item_title_color', [
			'label'     => 'Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-comp-item-title' => 'color: {{VALUE}};',
			],
		] );

		$this->add_group_control( Group_Control_Typography::get_type(), [
			'name'     => 'item_title_typography',
			'label'    => 'Typography',
			'global'   => [
				'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
			],
			'selector' => '{{WRAPPER}} .tbt-comp-item-title',
		] );

		$this->end_controls_section();


		// Features Style Section
		$this->start_controls_section( 'section_features_style', [
			'label' => 'Plan Features',
			'tab'   => Controls_Manager::TAB_STYLE,
		] );

		$this->add_responsive_control( 'item_feature_padding', [
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
				'{{WRAPPER}} .tbt-comp-item-feature' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

		$this->add_control( 'item_feature_text_align', [
			'label' => 'Alignment',
			'type' => \Elementor\Controls_Manager::CHOOSE,
			'options' => [
				'left' => [
					'title' => 'Left',
					'icon' => 'eicon-text-align-left',
				],
				'center' => [
					'title' => 'Center',
					'icon' => 'eicon-text-align-center',
				],
				'right' => [
					'title' => 'Right',
					'icon' => 'eicon-text-align-right',
				],
			],
			'default' => 'left',
			'toggle' => true,
			'selectors' => [
				'{{WRAPPER}} .tbt-comp-item-feature' => 'text-align: {{VALUE}};',
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
				'{{WRAPPER}} .tbt-comp-item-feature-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				'{{WRAPPER}} .tbt-comp-item-feature-icon svg' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}',
			],
		] );

		$this->add_control( 'icon_color', [
			'label'     => 'Icon Color',
			'type'      => Controls_Manager::COLOR,
			'global'    => [
				'default' => Global_Colors::COLOR_PRIMARY,
			],
			'selectors' => [
				'{{WRAPPER}} .tbt-comp-item-feature-icon' => 'color: {{VALUE}};',
				// '{{WRAPPER}} .tbt-comp-item-feature-icon svg' => 'fill: {{VALUE}}',
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
				'{{WRAPPER}} .tbt-comp-item-feature-text' => 'color: {{VALUE}};',
			],
		] );

		$this->add_group_control( Group_Control_Typography::get_type(), [
			'name'     => 'feature_typography',
			'label'    => 'Typography',
			'global'   => [
				'default' => Global_Typography::TYPOGRAPHY_TEXT,
			],
			'selector' => '{{WRAPPER}} .tbt-comp-item-feature-text',
		] );

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$features = $settings['features'];

		// Desktop
		echo '<div class="tbt-comparison-table-desktop">';

			// Plan header row
			echo '<div class="tbt-table-heading"></div>';
			for ( $i = 0; $i <= 2; $i++ ) {
				$active_class = $settings['items'][ $i ]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan';
				$title        = esc_html( $settings['items'][ $i ]['title'] ?? '' );
				printf(
					'<div class="tbt-comp-item-header tbt-comp-item-%1$d%2$s">',
					$i + 1,
					$active_class
				);
					echo '<div class="tbt-comp-item-title">' . $title . '</div>';
				echo '</div>';
			}
			?>

			<!-- Features -->
			<?php
			// echo '<div class="tbt-features-divider"></div>';
			foreach ( $features as $feature ) {
				// Heading
				echo '<div class="tbt-table-heading tbt-comp-item-feature-heading">' . $feature['heading'] . '</div>';

				// Plan 1
				echo '<div class="tbt-comp-item-feature plan-1' . ( $settings['items'][0]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan' ) . '">';
					echo '<div class="tbt-comp-item-feature-icon">';
						\Elementor\Icons_Manager::render_icon( $feature['item_1_icon'], [ 'aria-hidden' => 'true' ] );
					echo '</div>';
					echo '<div class="tbt-comp-item-feature-text">' . $feature['item_1_text'] . '</div>';
				echo '</div>';

				// Plan 2
				echo '<div class="tbt-comp-item-feature plan-2' . ( $settings['items'][1]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan' ) . '">';
					echo '<div class="tbt-comp-item-feature-icon">';
						\Elementor\Icons_Manager::render_icon( $feature['item_2_icon'], [ 'aria-hidden' => 'true' ] );
					echo '</div>';
					echo '<div class="tbt-comp-item-feature-text">' . $feature['item_2_text'] . '</div>';
				echo '</div>';

				// Plan 3
				echo '<div class="tbt-comp-item-feature plan-3' . ( $settings['items'][2]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan' ) . '">';
					echo '<div class="tbt-comp-item-feature-icon">';
						\Elementor\Icons_Manager::render_icon( $feature['item_3_icon'], [ 'aria-hidden' => 'true' ] );
					echo '</div>';
					echo '<div class="tbt-comp-item-feature-text">' . $feature['item_3_text'] . '</div>';
				echo '</div>';
				echo '<div class="tbt-features-divider"></div>';
			}
			?>

			<div class="tbt-table-heading"></div>
			<div class="tbt-comp-item-footer tbt-item-1<?php echo $settings['items'][0]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan'; ?>">
			</div>
			<div class="tbt-comp-item-footer tbt-item-2<?php echo $settings['items'][1]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan'; ?>">
			</div>
			<div class="tbt-comp-item-footer tbt-item-3<?php echo $settings['items'][2]['featured'] === 'yes' ? ' featured-plan' : ' normal-plan'; ?>">
			</div>

		</div>
		<?php
	}

}