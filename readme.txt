=== Static menus | inventivo ===
Contributors: inventivogermany
Plugin Name:  Static Menus | inventivo
Plugin URI:   https://www.inventivo.de/wordpress-agentur/wordpress-plugins
Description:  Save WordPress menus as static files for faster page loading times
Version:      0.0.1
Author:       Nils Harder
Author URI:   https://www.inventivo.de
Tags: static menus, page speed
Requires at least: 3.0
Tested up to: 4.9.8
Stable tag: 0.0.1
Text Domain: inventivo-static-menus
Domain Path: /languages
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/


Save WordPress menus as static files for faster page loading times

== Description ==

Static menus - WordPress Plugin

This plugin saves every WordPress menu as a static HTML file in the folder /static in your server root directory. Whenever you save a menu the HTML files a recreated.
Including the menus as static files saves time for rendering the menus which results in faster page loading times.

This is an example for including the files in your WordPress Theme:

<?php require_once ( $_SERVER['DOCUMENT_ROOT']."/static/primary.html" ); ?>

The filename is created from menu location + .html

This plugin is tested with WordPress native menus and Max Megamenu Plugin.

Visit our <a href="https://www.inventivo.de">website</a> in order to see the plugin in action.

Our plugins are mall and simple:
- Responsive - fits to all screens
- Easy configuration
- Lighweight code

Get your Static Menus Plugin now!

How it works:

1. Upload the Plugin
2. Activate the Plugin
3. Configure the plugin to fit to your needs.

== Installation ==

Use WordPress' Add New Plugin feature, searching "Static menus | inventivo", or download the archive and:

1. Unzip the archive on your computer  
2. Upload `inventivo-static-menus` directory to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Save any WordPress menu
5. Include the file(s) from /static directory in you WordPress Theme

== Frequently Asked Questions ==


== Screenshots ==


== Changelog ==

