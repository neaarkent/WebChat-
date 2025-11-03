<?php
/**
 * Frontend Display
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if(!class_exists('FB_MESSENGER_CHAT_FRONTEND')){
	class FB_MESSENGER_CHAT_FRONTEND{
		
		public function __construct() {
			add_action('init', array($this,'init_output_buffer'));
			add_action('wp_head', array($this,'render_chat_script'));
			add_action('wp_enqueue_scripts', array($this, 'enqueue_frontend_styles'));
		}
		
		/**
		 * Initialize output buffer to avoid header warnings
		 */
		public function init_output_buffer(){
			ob_start();
		}
		
		/**
		 * Render Facebook Messenger chat script in header
		 */
		public function render_chat_script(){
			?>	
			<script type="text/javascript">
				var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";	
			</script>
			<?php 
			
			$is_enabled = get_option('fb_messenger_chat_enable');
			$page_id = get_option('fb_messenger_chat_page_id');
			$language = get_option('fb_messenger_chat_language');
			
			// Only display if enabled and page ID is set
			if($is_enabled && !empty($page_id)){
			?>
				<script>
					window.fbMessengerPlugins = window.fbMessengerPlugins || { 
						init: function () { 
							FB.init({ 
								appId: '1:your_app_id_here', // Replace with your Facebook App ID
								autoLogAppEvents: true,
								xfbml: true,
								version: 'v12.0'
							});
						}, 
						callable: []      
					};

					window.fbAsyncInit = window.fbAsyncInit || function () { 
						window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
						window.fbMessengerPlugins.init(); 
					};

					setTimeout(function () {  
						(function (d, s, id) {  
							var js, fjs = d.getElementsByTagName(s)[0]; 
							if (d.getElementById(id)) { return; } 
							js = d.createElement(s);
							js.id = id;
							js.src = "//connect.facebook.net/<?php echo esc_attr($language); ?>/sdk/xfbml.customerchat.js"; 
							fjs.parentNode.insertBefore(js, fjs);        
						}(document, 'script', 'facebook-jssdk')); 
					}, 0);      
				</script> 
				
				<div class="fb-customerchat" 
					 page_id="<?php echo esc_attr($page_id); ?>" 
					 ref="">
				</div>
			<?php 
			} 
		} 
		
		/**
		 * Enqueue frontend styles
		 */
		public function enqueue_frontend_styles(){
			// Add custom CSS if needed
		}
	}
}

new FB_MESSENGER_CHAT_FRONTEND();
