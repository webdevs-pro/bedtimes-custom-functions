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
						'title' => 'Plan 1',
						'price' => '$10.00',
					],
					[
						'title' => 'Plan 2',
						'price' => '$20.00',
					],
					[
						'title' => 'Plan 3',
						'price' => '$30.00',
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


		$this->start_controls_section( 'section_style', [
			'label' => 'Style',
			'tab'   => Controls_Manager::TAB_STYLE,
		] );


		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$features = $settings['features'];

		// Desktop
		echo '<div class="tbt-pricing-table-desktop">';

			// Plan badgess row
			echo '<div></div>';
			for ( $i = 0; $i <= 2; $i++ ) {
				$active_class = $settings['plans'][ $i ]['featured'] === 'yes' ? ' featured-plan' : '';
				$badge        = esc_html( $settings['plans'][ $i ]['badge'] ?? '' );

				printf(
					'<div class="tbt-plan-badge tbt-plan-%1$d%2$s">%3$s</div>',
					$i + 1,
					$active_class,
					$badge
				);
			}


			// Plan titles row
			echo '<div></div>';
			for ( $i = 0; $i <= 2; $i++ ) {
				$active_class = $settings['plans'][ $i ]['featured'] === 'yes' ? ' featured-plan' : '';
				$title        = esc_html( $settings['plans'][ $i ]['title'] ?? '' );

				printf(
					'<div class="tbt-plan-title tbt-plan-%1$d%2$s">%3$s</div>',
					$i + 1,
					$active_class,
					$title
				);
			}


			?>

			<!-- Prices -->
			<div></div>
			<div class="tbt-plan-price tbt-plan-1<?php $settings['plans'][0]['featured'] === 'yes' ? ' featured-plan' : ''; ?>">
				<span class="tbt-plan-price-amount"><?php echo $settings['plans'][0]['price'] ?? ''; ?></span><br>
				<span class="tbt-plan-price-period"><?php echo $settings['plans'][0]['period'] ?? ''; ?></span>
			</div>
			<div class="tbt-plan-price tbt-plan-2<?php $settings['plans'][1]['featured'] === 'yes' ? ' featured-plan' : ''; ?>">
				<span class="tbt-plan-price-amount"><?php echo $settings['plans'][1]['price'] ?? ''; ?></span><br>
				<span class="tbt-plan-price-period"><?php echo $settings['plans'][1]['period'] ?? ''; ?></span>
			</div>
			<div class="tbt-plan-price tbt-plan-3<?php $settings['plans'][2]['featured'] === 'yes' ? ' featured-plan' : ''; ?>">
				<span class="tbt-plan-price-amount"><?php echo $settings['plans'][2]['price'] ?? ''; ?></span><br>
				<span class="tbt-plan-price-period"><?php echo $settings['plans'][2]['period'] ?? ''; ?></span>
			</div>

			<!-- Features -->
			<?php
			foreach ( $features as $feature ) {
				// Heading
				echo '<div class="tbt-plan-feature-heading">' . $feature['heading'] . '</div>';

				// Plan 1
				echo '<div class="tbt-plan-feature">';
					echo '<div class="tbt-plan-feature-icon">';
						\Elementor\Icons_Manager::render_icon( $feature['item_1_icon'], [ 'aria-hidden' => 'true' ] );
					echo '</div>';
					echo '<div class="tbt-plan-feature-text">' . $feature['item_1_text'] . '</div>';
				echo '</div>';

				// Plan 2
				echo '<div class="tbt-plan-feature">';
					echo '<div class="tbt-plan-feature-icon">';
						\Elementor\Icons_Manager::render_icon( $feature['item_2_icon'], [ 'aria-hidden' => 'true' ] );
					echo '</div>';
					echo '<div class="tbt-plan-feature-text">' . $feature['item_2_text'] . '</div>';
				echo '</div>';

				// Plan 3
				echo '<div class="tbt-plan-feature">';
					echo '<div class="tbt-plan-feature-icon">';
						\Elementor\Icons_Manager::render_icon( $feature['item_3_icon'], [ 'aria-hidden' => 'true' ] );
					echo '</div>';
					echo '<div class="tbt-plan-feature-text">' . $feature['item_3_text'] . '</div>';
				echo '</div>';
			}
			?>

			<!-- Footer -->
			<div></div>
			<div class="tbt-plan-footer tbt-plan-1<?php $settings['plans'][0]['featured'] === 'yes' ? ' featured-plan' : ''; ?>">
				<a href="<?php echo $settings['plans'][0]['button_link']['url'] ?? ''; ?>" class="tbt-plan-button elementor-button"><?php echo $settings['plans'][0]['button_label'] ?? ''; ?></a>
				<div class="tbt-plan-additional-info"><?php echo $settings['plans'][0]['additional_info'] ?? ''; ?></div>
			</div>
			<div class="tbt-plan-footer tbt-plan-2<?php $settings['plans'][1]['featured'] === 'yes' ? ' featured-plan' : ''; ?>">
				<a href="<?php echo $settings['plans'][1]['button_link']['url'] ?? ''; ?>" class="tbt-plan-button elementor-button"><?php echo $settings['plans'][1]['button_label'] ?? ''; ?></a>
				<div class="tbt-plan-additional-info"><?php echo $settings['plans'][1]['additional_info'] ?? ''; ?></div>
			</div>
			<div class="tbt-plan-footer tbt-plan-3<?php $settings['plans'][2]['featured'] === 'yes' ? ' featured-plan' : ''; ?>">
				<a href="<?php echo $settings['plans'][2]['button_link']['url'] ?? ''; ?>" class="tbt-plan-button elementor-button"><?php echo $settings['plans'][2]['button_label'] ?? ''; ?></a>
				<div class="tbt-plan-additional-info"><?php echo $settings['plans'][2]['additional_info'] ?? ''; ?></div>
			</div>

		</div>
		<?php


		// Mobile
		echo '<div class="tbt-pricing-table-mobile">';

			// Plan 1
			echo '<div class="tbt-plan tbt-plan-1' . ( $settings['plans'][0]['featured'] === 'yes' ? ' featured-plan' : '' ) . '">';
				echo '<div class="tbt-plan-header">';
					echo '<div class="tbt-plan-badge">' . $settings['plans'][0]['badge'] . '</div>';
					echo '<div class="tbt-plan-title">' . $settings['plans'][0]['title'] . '</div>';
				echo '</div>';
				echo '<div class="tbt-plan-price">';
					echo '<span class="tbt-plan-price-amount">' . $settings['plans'][0]['price'] . '</span><br>';
					echo '<span class="tbt-plan-price-period">' . $settings['plans'][0]['period'] . '</span>';
				echo '</div>';
				echo '<div class="tbt-plan-features">';
					foreach ( $features as $feature ) {
						echo '<div class="tbt-plan-feature-heading">' . $feature['heading'] . '</div>';
						echo '<div class="tbt-plan-feature-icon">';
							\Elementor\Icons_Manager::render_icon( $feature['item_1_icon'], [ 'aria-hidden' => 'true' ] );
						echo '</div>';
						echo '<div class="tbt-plan-feature-text">' . $feature['item_1_text'] . '</div>';
					}
				echo '</div>';
				echo '<div class="tbt-plan-footer">';
					echo '<a href="' . $settings['plans'][0]['button_link']['url'] . '" class="tbt-plan-button elementor-button">' . $settings['plans'][0]['button_label'] . '</a>';
					echo '<div class="tbt-plan-additional-info">' . $settings['plans'][0]['additional_info'] . '</div>';
				echo '</div>';
			echo '</div>';

			// Plan 2
			echo '<div class="tbt-plan tbt-plan-2' . ( $settings['plans'][1]['featured'] === 'yes' ? ' featured-plan' : '' ) . '">';
				echo '<div class="tbt-plan-header">';
					echo '<div class="tbt-plan-badge">' . $settings['plans'][1]['badge'] . '</div>';
					echo '<div class="tbt-plan-title">' . $settings['plans'][1]['title'] . '</div>';
				echo '</div>';
				echo '<div class="tbt-plan-price">';
					echo '<span class="tbt-plan-price-amount">' . $settings['plans'][1]['price'] . '</span><br>';
					echo '<span class="tbt-plan-price-period">' . $settings['plans'][1]['period'] . '</span>';
				echo '</div>';
				echo '<div class="tbt-plan-features">';
					foreach ( $features as $feature ) {
						echo '<div class="tbt-plan-feature-heading">' . $feature['heading'] . '</div>';
						echo '<div class="tbt-plan-feature-icon">';
							\Elementor\Icons_Manager::render_icon( $feature['item_2_icon'], [ 'aria-hidden' => 'true' ] );
						echo '</div>';
						echo '<div class="tbt-plan-feature-text">' . $feature['item_2_text'] . '</div>';
					}
				echo '</div>';
				echo '<div class="tbt-plan-footer">';
					echo '<a href="' . $settings['plans'][1]['button_link']['url'] . '" class="tbt-plan-button elementor-button">' . $settings['plans'][1]['button_label'] . '</a>';
					echo '<div class="tbt-plan-additional-info">' . $settings['plans'][1]['additional_info'] . '</div>';
				echo '</div>';
			echo '</div>';

			// Plan 3
			echo '<div class="tbt-plan tbt-plan-2' . ( $settings['plans'][2]['featured'] === 'yes' ? ' featured-plan' : '' ) . '">';
				echo '<div class="tbt-plan-header">';
					echo '<div class="tbt-plan-badge">' . $settings['plans'][2]['badge'] . '</div>';
					echo '<div class="tbt-plan-title">' . $settings['plans'][2]['title'] . '</div>';
				echo '</div>';
				echo '<div class="tbt-plan-price">';
					echo '<span class="tbt-plan-price-amount">' . $settings['plans'][2]['price'] . '</span><br>';
					echo '<span class="tbt-plan-price-period">' . $settings['plans'][2]['period'] . '</span>';
				echo '</div>';
				echo '<div class="tbt-plan-features">';
					foreach ( $features as $feature ) {
						echo '<div class="tbt-plan-feature-heading">' . $feature['heading'] . '</div>';
						echo '<div class="tbt-plan-feature-icon">';
							\Elementor\Icons_Manager::render_icon( $feature['item_2_icon'], [ 'aria-hidden' => 'true' ] );
						echo '</div>';
						echo '<div class="tbt-plan-feature-text">' . $feature['item_2_text'] . '</div>';
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