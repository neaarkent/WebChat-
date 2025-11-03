<?php 
/*
* Plugin Name: Facebook Messenger Customer Chat
* Plugin URI: https://github.com/yourusername/facebook-messenger-chat
* Description: Display Facebook Messenger chatbox on your website to help customers easily contact your business
* Version: 1.0.0
* Author: Your Name
* Author URI: https://yourwebsite.com
* License: GNU General Public License version 2 or later
* Text Domain: fb-messenger-chat
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if(!class_exists('FB_MESSENGER_CHAT_SETUP')):

class FB_MESSENGER_CHAT_SETUP
{
	function __construct()
	{		
		$this->define_constants();
		add_action('init',array(&$this,'check_plugin_defaults'));
		register_activation_hook(__FILE__, array($this, 'add_default_options'));
		
		$this->includes_files();
		if(!function_exists('is_plugin_active'))
			include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}
	
	public function define_constants(){
		if(!defined('FB_MESSENGER_CHAT')){
			define('FB_MESSENGER_CHAT', 'fb-messenger-chat');
		}
		if ( ! defined( 'FB_MESSENGER_CHAT_VERSION' ) ){
			define( 'FB_MESSENGER_CHAT_VERSION', '1.0.0' );
		}
		if ( ! defined( 'FB_MESSENGER_CHAT_FOLDER' ) ) {
			define( 'FB_MESSENGER_CHAT_FOLDER', plugin_basename( __FILE__ ) ); 
		}
		if ( ! defined( 'FB_MESSENGER_CHAT_DIR' ) ) {
			define( 'FB_MESSENGER_CHAT_DIR', plugin_dir_path( __FILE__ )  );
		}
		if ( ! defined( 'FB_MESSENGER_CHAT_FILE' ) ) {
			define( 'FB_MESSENGER_CHAT_FILE', __FILE__ );
		}
		if ( ! defined( 'FB_MESSENGER_CHAT_INC' ) ) {
			define( 'FB_MESSENGER_CHAT_INC', FB_MESSENGER_CHAT_DIR.'includes'.'/' );
		}
		if ( ! defined( 'FB_MESSENGER_CHAT_URL' ) ) {
			define( 'FB_MESSENGER_CHAT_URL', plugin_dir_url( __FILE__ ) ); 
		}
		// Load text domain for translations
		load_plugin_textdomain("fb-messenger-chat", "", FB_MESSENGER_CHAT_URL.'languages');
	}
	
	public function check_plugin_defaults(){
		// Hook for future use
	}

	public function add_default_options(){
		// Set default page ID (you should change this to your own)
		if(!get_option('fb_messenger_chat_page_id')){
			update_option('fb_messenger_chat_page_id', "");
		}

		// Enable by default
		if(!get_option('fb_messenger_chat_enable')){
			update_option('fb_messenger_chat_enable', "on");
		}

		// Set default language
		if(!get_option('fb_messenger_chat_language')){
			update_option('fb_messenger_chat_language', "en_US");
		}
	}
	
	public function includes_files(){
		// Include required files
		require FB_MESSENGER_CHAT_INC.'functions.php';
		require FB_MESSENGER_CHAT_INC.'settings.php';
		require FB_MESSENGER_CHAT_INC.'frontend.php';
	}
}

endif;

new FB_MESSENGER_CHAT_SETUP;
