![Illustration: Static menus Plugin for WordPress](https://ps.w.org/inventivo-cookie-notice/assets/banner-772x250.jpg?rev=1881239)

# Static menus for WordPress | inventivo

This plugin saves every WordPress menu as a static HTML file in the folder /static in your server root directory. Whenever you save a menu the HTML files a recreated.
Including the menus as static files saves time for rendering the menus which results in faster page loading times.

**This is an example for including the files in your WordPress Theme:**

```<?php require_once ( $_SERVER['DOCUMENT_ROOT']."/static/primary.html" ); ?>```

The filename is created from menu location + .html

This plugin is tested with WordPress native menus and Max Megamenu Plugin.

Visit our <a href="https://www.inventivo.de">website</a> in order to see the plugin in action.

**Small and simple:**
* Responsive - fits to all screens
* Easy configuration
* Lighweight code

**Get your copy of the Static menus Plugin now!**

## Screenshots

![Illustration: Static menus Plugin for WordPress - Screenshot 1](https://ps.w.org/inventivo-cookie-notice/trunk/screenshot-1.png?rev=1943671)

![Illustration: Static menus Plugin for WordPress - Screenshot 2](https://ps.w.org/inventivo-cookie-notice/trunk/screenshot-2.png?rev=1943671)

### Prerequisites

* WordPress 3.0 and later

### Installing

Use WordPress' Add New Plugin feature, searching "Static menus | inventivo", or download the archive and:

1. Unzip the archive on your computer  
2. Upload `inventivo-static-menus` directory to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Save any WordPress menu
5. Include the file(s) from /static directory in you WordPress Theme


## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [WordPress](https://www.wordpress.org) - The famous Open Source CMS Software

## Versioning

For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Nils Harder** [inventivo](https://www.inventivo.de)

## License

* License:      GPL2
* License URI:  https://www.gnu.org/licenses/gpl-2.0.html

## NOTE

INSTALLING THIS PLUGIN ALONE DOES NOT MAKE YOUR SITE GDPR COMPLIANT. PLEASE CONSULT A LAWER IF YOU ARE NOT SURE WHAT TO DO.
