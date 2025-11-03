<?php
/**
 * Settings Page Template
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Get current settings
$page_id = get_option('fb_messenger_chat_page_id');
$is_enabled = get_option('fb_messenger_chat_enable');
$language = get_option('fb_messenger_chat_language');
?>

<style type="text/css">
	.notice.notice-warning { display: none; }
</style>

<div class="wrap">
	<h1 class="wp-heading-inline">
		<?php _e("Facebook Messenger Chat Settings", FB_MESSENGER_CHAT); ?>
	</h1>
	
	<?php if(isset($_GET['settings-updated'])): ?>
		<div style="margin-left: 0px; margin-top: 15px;" class="notice notice-success is-dismissible">
			<p><?php _e('Settings saved successfully!', FB_MESSENGER_CHAT); ?></p>
		</div>
	<?php endif; ?>
	
	<form action="options.php" method="post">
		<?php settings_fields('fb_messenger_chat'); ?>
		
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<label for="fb_messenger_chat_enable">
							<?php _e('Enable Messenger Chat', FB_MESSENGER_CHAT); ?>
						</label>
					</th>
					<td>
						<label class="fb-messenger-switch">
							<input 
								type="checkbox" 
								name="fb_messenger_chat_enable" 
								id="fb_messenger_chat_enable"
								value="on"
								<?php checked($is_enabled, 'on'); ?>
							/>
							<span class="fb-messenger-slider"></span>
						</label>
						<p class="description">
							<?php _e('Enable to display Facebook Messenger chat widget on your website', FB_MESSENGER_CHAT); ?>
						</p>
					</td>
				</tr>

				<tr>
					<th scope="row">
						<label for="fb_messenger_chat_language">
							<?php _e('Language', FB_MESSENGER_CHAT); ?>
						</label>
					</th>
					<td>
						<?php $languages = fb_messenger_chat_get_languages(); ?>
						<select 
							name="fb_messenger_chat_language" 
							id="fb_messenger_chat_language" 
							class="regular-text"
						>
							<?php foreach ($languages as $code => $name): ?>
								<option 
									value="<?php echo esc_attr($code); ?>" 
									<?php selected($language, $code); ?>
								>
									<?php echo esc_html($name); ?>
								</option>
							<?php endforeach; ?>
						</select>
						<p class="description">
							<?php _e('Select the language for the Messenger chat widget', FB_MESSENGER_CHAT); ?>
						</p>
					</td>
				</tr>

				<tr>
					<th scope="row">
						<label for="fb_messenger_chat_page_id">
							<?php _e('Facebook Page ID', FB_MESSENGER_CHAT); ?>
						</label>
					</th>
					<td>
						<input 
							type="text" 
							class="regular-text" 
							id="fb_messenger_chat_page_id" 
							name="fb_messenger_chat_page_id" 
							value="<?php echo esc_attr($page_id); ?>" 
							placeholder="123456789012345"
							required
						/>
						<p class="description">
							<?php _e('Enter your Facebook Page ID. You can find it in your Page Settings > About section.', FB_MESSENGER_CHAT); ?>
							<br>
							<a href="https://www.facebook.com/help/1503421039731588" target="_blank">
								<?php _e('How to find your Page ID?', FB_MESSENGER_CHAT); ?>
							</a>
						</p>
					</td>
				</tr>

				<tr>
					<th scope="row">
						<label><?php _e('Setup Instructions', FB_MESSENGER_CHAT); ?></label>
					</th>
					<td>
						<ol>
							<li>
								<strong><?php _e('Get your Facebook Page ID:', FB_MESSENGER_CHAT); ?></strong>
								<br><?php _e('Go to your Facebook Page > Settings > About > Page ID', FB_MESSENGER_CHAT); ?>
							</li>
							<li>
								<strong><?php _e('Add your domain to whitelist:', FB_MESSENGER_CHAT); ?></strong>
								<br><?php _e('Go to your Facebook Page > Settings > Messenger Platform > Whitelisted Domains', FB_MESSENGER_CHAT); ?>
								<br><?php _e('Add your domain:', FB_MESSENGER_CHAT); ?> <code><?php echo esc_html(home_url()); ?></code>
							</li>
							<li>
								<strong><?php _e('Save settings and test:', FB_MESSENGER_CHAT); ?></strong>
								<br><?php _e('Visit your website to see the Messenger chat widget', FB_MESSENGER_CHAT); ?>
							</li>
						</ol>
						<p>
							<a href="https://developers.facebook.com/docs/messenger-platform/discovery/customer-chat-plugin" target="_blank">
								<?php _e('View official Facebook documentation', FB_MESSENGER_CHAT); ?>
							</a>
						</p>
					</td>
				</tr>
			</tbody>
		</table>
		
		<?php submit_button(); ?>
	</form>
</div>
