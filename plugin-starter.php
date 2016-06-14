<?php
/**
 * Plugin Name: Starter Plugin
 * Description: 
 * Plugin URI:	
 * Version:     1.0.0
 * Author:      plugin <info@premisewp.com>
 * Author URI:  http://premisewp.com
 * License:     GPL
 *
 * @package [level 1]\[level 2]\[etc.]
 */

// Block direct access to this file.
defined( 'ABSPATH' ) or die();




/**
 * Define plugin path
 */
define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );




/**
 * Define plugin url
 */
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );




// Instantiate our main class and setup plugin
// Must use 'plugins_loaded' hook.
add_action( 'plugins_loaded', array( PLUGIN_STARTER_CLASS::get_instance(), 'init' ) );

/**
 * Load Plugin!
 *
 * This is plugin main class.
 */
class PLUGIN_STARTER_CLASS {


	/**
	 * Plugin instance.
	 *
	 * @see get_instance()
	 *
	 * @var object
	 */
	protected static $instance = null;




	/**
	 * Plugin url
	 *
	 * @var string
	 */
	public $plugin_url = PLUGIN_URL;




	/**
	 * Plugin path
	 *
	 * @var strin
	 */
	public $plugin_path = PLUGIN_PATH;





	/**
	 * Constructor. Intentionally left empty and public.
	 *
	 * @see 	init()
	 * @since 	1.0
	 */
	public function __construct() {}





	/**
	 * Access this plugin’s working instance
	 *
	 * @since   1.0
	 * @return  object instance of this class
	 */
	public static function get_instance() {
		null === self::$instance and self::$instance = new self;

		return self::$instance;
	}





	/**
	 * Setup Premise
	 *
	 * Does includes and registers hooks.
	 *
	 * @since   1.0
	 */
	public function init() {
		$this->do_includes();
		$this->do_hooks();
	}






	/**
	 * Includes
	 *
	 * @since 1.0
	 */
	protected function do_includes() {
		require_once 'includes/includes.php';
	}





	/**
	 * Premise Hooks
	 *
	 * Registers and enqueues scripts, adds classes to the body of DOM
	 */
	public function do_hooks() {

		# add hooks here
	}
}