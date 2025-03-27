# Instagram Feed Embedder

A WordPress plugin that allows you to display Instagram posts on your website using the Instagram Graph API.

## Features

- Display Instagram posts in grid, slider, or list layout
- Customizable number of posts to display
- Responsive design
- Hover effects and captions
- Easy to use shortcode
- Settings page for API configuration

## Requirements

- WordPress 5.0 or higher
- PHP 7.2 or higher
- Instagram Business Account or Creator Account
- Facebook Developer Account
- Instagram Graph API Access Token

## Installation

1. Upload the `avatarembedd` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to 'Instagram Feed' in the WordPress admin menu
4. Enter your Instagram Access Token in the settings page

## Getting Your Instagram Access Token

1. Go to [Facebook Developers](https://developers.facebook.com/)
2. Create a new app or select an existing one
3. Add Instagram Graph API to your app
4. Generate a long-lived access token with the following permissions:
   - `instagram_basic`
   - `instagram_content_publish`
   - `pages_show_list`
   - `pages_read_engagement`

## Usage

Use the shortcode `[instagram_feed]` in any post or page to display your Instagram feed.

Example:
```
[instagram_feed]
```

The feed will automatically use the settings configured in the admin panel.

## Customization

You can customize the following settings in the WordPress admin:

- Number of posts to display (1-20)
- Display style (Grid, Slider, or List)
- Instagram Access Token

## Support

For support, please create an issue in the plugin's repository or contact the plugin author.

## License

This plugin is licensed under the GPL v2 or later.

## Credits

- Instagram Graph API
- WordPress Plugin Boilerplate 