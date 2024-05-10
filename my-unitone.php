<?php
/**
 * Plugin name: My unitone
 * Description: Write your customization code for your unitone in this plugin.
 * Version: 0.1.0
 * Update URI: https://unitone.2inc.org
 *
 * @package my-unitone
 * @author inc2734
 * @license GPL-2.0+
 */

$theme = wp_get_theme( get_template() );
if ( 'unitone' !== $theme->template ) {
	return;
}

/**
 * Directory url of this plugin
 *
 * @var string
 */
define( 'MY_UNITONE_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

/**
 * Directory path of this plugin
 *
 * @var string
 */
define( 'MY_UNITONE_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

/**
 * Display message in console.log if this plugin is enabled.
 */
add_action(
	'wp_footer',
	function () {
		if ( is_user_logged_in() ) :
			?>
			<script>console.log( 'My unitone plugin is active' );</script>
			<?php
		endif;
	}
);
