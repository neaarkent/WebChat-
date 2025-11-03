<?php
/**
 * Admin Settings Page
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if(!class_exists('FB_MESSENGER_CHAT_SETTINGS')){
	class FB_MESSENGER_CHAT_SETTINGS{
		
		public function __construct() {
			add_action('admin_menu', array($this, 'add_admin_menu'));
			add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_styles'));
			add_action('admin_init', array($this, 'register_settings'));
		} 
		
		/**
		 * Register plugin settings
		 */
		public function register_settings(){
			if (!session_id()) {
				session_start();
			}
			ob_start();
			
			register_setting('fb_messenger_chat', 'fb_messenger_chat_page_id');
			register_setting('fb_messenger_chat', 'fb_messenger_chat_enable');
			register_setting('fb_messenger_chat', 'fb_messenger_chat_language');
		}
		
		/**
		 * Add admin menu
		 */
		public function add_admin_menu() {
			add_menu_page(
				__('Messenger Chat', FB_MESSENGER_CHAT), 
				__('Messenger Chat', FB_MESSENGER_CHAT),
				'manage_options', 
				'fb-messenger-chat-settings', 
				array($this, 'render_settings_page'), 
				'dashicons-facebook',
				'56'
			);
			
			add_submenu_page(
				'fb-messenger-chat-settings', 
				'Settings', 
				'Settings', 
				'manage_options', 
				'fb-messenger-chat-settings', 
				array($this, 'render_settings_page')
			);
		}
		
		/**
		 * Enqueue admin styles
		 */
		public function enqueue_admin_styles(){
			?>
			<style type="text/css">
				.fb-messenger-switch {
					position: relative;
					display: inline-block;
					width: 60px;
					height: 34px;
				}
				.fb-messenger-switch input {
					opacity: 0;
					width: 0;
					height: 0;
				}
				.fb-messenger-slider {
					position: absolute;
					cursor: pointer;
					top: 0;
					left: 0;
					right: 0;
					bottom: 0;
					background-color: #ccc;
					transition: .4s;
					border-radius: 34px;
				}
				.fb-messenger-slider:before {
					position: absolute;
					content: "";
					height: 26px;
					width: 26px;
					left: 4px;
					bottom: 4px;
					background-color: white;
					transition: .4s;
					border-radius: 50%;
				}
				input:checked + .fb-messenger-slider {
					background-color: #2196F3;
				}
				input:checked + .fb-messenger-slider:before {
					transform: translateX(26px);
				}
			</style>
			<?php
		}
		
		/**
		 * Render settings page
		 */
		public function render_settings_page(){
			require_once(FB_MESSENGER_CHAT_INC.'settings-page.php');
		}
	}
}

new FB_MESSENGER_CHAT_SETTINGS();
