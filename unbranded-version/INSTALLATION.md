# Installation Guide

## Quick Start

Follow these steps to get Facebook Messenger Chat working on your WordPress site.

## Step 1: Install the Plugin

### Option A: Manual Installation
1. Download the plugin files
2. Upload the entire `facebook-messenger-chat` folder to `/wp-content/plugins/`
3. Activate the plugin through the 'Plugins' menu in WordPress

### Option B: WordPress Admin
1. Go to Plugins > Add New
2. Upload the plugin zip file
3. Click "Install Now" then "Activate"

## Step 2: Get Your Facebook Page ID

1. Go to your Facebook Page
2. Click on **Settings** (you must be a page admin)
3. Click on **About** in the left sidebar
4. Scroll down to find **Page ID**
5. Copy the numeric ID (e.g., 123456789012345)

**Don't have a Facebook Page?** [Create one here](https://www.facebook.com/pages/create)

## Step 3: Whitelist Your Domain on Facebook

This is a crucial step! Facebook requires you to whitelist your domain.

1. Go to your Facebook Page
2. Click on **Settings**
3. Click on **Messenger Platform** in the left sidebar
4. Scroll to **Whitelisted Domains**
5. Click **Add Domain**
6. Enter your website URL (e.g., `https://yourwebsite.com`)
7. Click **Save**

**Important Notes:**
- Use the full URL including `https://` or `http://`
- Don't include trailing slashes
- If you use `www`, include it in the domain
- You may need to add both `https://yourwebsite.com` and `https://www.yourwebsite.com`

## Step 4: Configure the Plugin

1. In WordPress, go to **Messenger Chat > Settings**
2. **Enable Messenger Chat**: Toggle to ON
3. **Language**: Select your preferred language
4. **Facebook Page ID**: Paste the Page ID you copied in Step 2
5. Click **Save Changes**

## Step 5: Test It

1. Visit your website (in a new incognito/private window is best)
2. You should see the Messenger chat widget in the bottom right corner
3. Click on it to test sending a message
4. Check your Facebook Page inbox for the test message

## Troubleshooting

### Chat widget not showing?

**Check these common issues:**

1. **Plugin not enabled**
   - Go to Settings and make sure the toggle is ON

2. **Invalid Page ID**
   - Double-check you copied the correct Page ID
   - Make sure there are no spaces before or after the ID

3. **Domain not whitelisted**
   - Verify your domain is added to Facebook's whitelist
   - Make sure the domain matches exactly (with or without www)
   - Wait a few minutes after adding the domain

4. **Browser cache**
   - Clear your browser cache
   - Try viewing in an incognito/private window

5. **Ad blockers**
   - Some ad blockers block Facebook scripts
   - Try disabling ad blockers temporarily

6. **JavaScript errors**
   - Open browser console (F12) and check for errors
   - Make sure no other plugins are conflicting

### Still not working?

1. Deactivate all other plugins temporarily to check for conflicts
2. Switch to a default WordPress theme (like Twenty Twenty-Three) to rule out theme issues
3. Make sure your WordPress and PHP versions meet the requirements
4. Check if your hosting provider blocks Facebook domains

## Advanced Configuration

### Using with a Facebook App ID (Optional)

If you have a Facebook App, you can replace the placeholder App ID in the code:

1. Open `includes/frontend.php`
2. Find the line: `appId: '1:your_app_id_here'`
3. Replace with your actual Facebook App ID

### Customizing Display

The chat widget appearance is controlled by Facebook and cannot be customized through the plugin. However, you can:

- Change the language in plugin settings
- Control when it appears using WordPress conditional tags (requires code modification)

## Requirements

- WordPress 3.0 or higher
- PHP 5.6 or higher
- A Facebook Page (not a personal profile)
- Admin access to the Facebook Page
- HTTPS recommended (Facebook may require it)

## Next Steps

Once installed and working:

1. Test the chat by sending yourself a message
2. Set up Facebook Page notifications on your phone
3. Configure auto-responses in Facebook Page settings
4. Train your team on responding to messages

## Need Help?

- Check the [FAQ section](README.md#frequently-asked-questions)
- Review [Facebook's official documentation](https://developers.facebook.com/docs/messenger-platform/discovery/customer-chat-plugin)
- Contact support through the plugin page

---

**Congratulations!** Your Facebook Messenger chat is now live on your website. 🎉
