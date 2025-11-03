# Facebook Messenger Customer Chat for WordPress

A simple WordPress plugin to display Facebook Messenger chat widget on your website, helping customers easily contact your business.

## Features

- Easy integration with Facebook Messenger
- Help customers contact your business instantly
- Get notifications immediately when customers message you
- Customizable language settings
- Simple on/off toggle
- Lightweight and fast
- No coding required

## Installation

### Manual Installation

1. Download the plugin files
2. Upload the `facebook-messenger-chat` folder to your `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Go to **Messenger Chat > Settings** in your WordPress admin menu
5. Configure your settings (see Configuration section below)

### Configuration

1. **Get your Facebook Page ID:**
   - Go to your Facebook Page
   - Click on **Settings** > **About**
   - Find your **Page ID** and copy it

2. **Add your domain to Facebook whitelist:**
   - Go to your Facebook Page
   - Click on **Settings** > **Messenger Platform**
   - Under **Whitelisted Domains**, add your website domain
   - Example: `https://yourwebsite.com`

3. **Configure the plugin:**
   - Go to **Messenger Chat > Settings** in WordPress
   - Enable the chat widget
   - Select your preferred language
   - Enter your Facebook Page ID
   - Click **Save Changes**

4. **Test it:**
   - Visit your website
   - You should see the Messenger chat widget in the bottom right corner

## Requirements

- WordPress 3.0 or higher
- A Facebook Page (not a personal profile)
- Your domain must be whitelisted in Facebook Page settings

## Frequently Asked Questions

### How do I get a Facebook Page ID?

Go to your Facebook Page > Settings > About > Page ID. Copy the numeric ID.

### The chat widget is not showing up. What should I do?

Make sure:
1. The plugin is activated
2. The chat widget is enabled in settings
3. You've entered a valid Facebook Page ID
4. Your domain is whitelisted in your Facebook Page settings
5. You're not using an ad blocker that might block Facebook scripts

### Can I customize the appearance of the chat widget?

The chat widget appearance is controlled by Facebook. You can only change the language through the plugin settings.

### Does this work with any WordPress theme?

Yes, this plugin works with any WordPress theme.

## Support

For issues, questions, or contributions, please visit the plugin repository or contact the developer.

## Changelog

### Version 1.0.0
- Initial release
- Basic Facebook Messenger chat integration
- Language selection
- Enable/disable toggle
- Admin settings page

## License

This plugin is licensed under the GNU General Public License v2 or later.

## Credits

Developed with ❤️ for the WordPress community.
