<?php /*
Contributors: inventivogermany
Plugin Name:  Static Menus | inventivo
Plugin URI:   https://www.inventivo.de/wordpress-agentur/wordpress-plugins
Description:  Save WordPress menus as static files for faster page loading times
Version:      0.0.4
Author:       Nils Harder
Author URI:   https://www.inventivo.de
Tags: static menus, page speed
Requires at least: 3.0
Tested up to: 5.2.2
Stable tag: 0.0.4
Text Domain: inventivo-static-menus
Domain Path: /languages
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if (!defined('ABSPATH') ) {
    exit;
}

class InventivoStaticMenus
{

    public function __construct()
    {
        add_action('wp_update_nav_menu', array($this,'inv_staticnav'));
    }


    public function inv_staticnav()
    {
        // Get registered menus
        $menus = get_registered_nav_menus();
        $files = array();

        // Set files to output static nav menus
        foreach ($menus as $location => $description ) {
            $files[] = $_SERVER['DOCUMENT_ROOT'].'/static/'.$location.ICL_LANGUAGE_CODE.'.html';
        }

        // Get menu html code
        foreach($files as $file):
            $menuid = explode('/', $file);
            $menuid = str_replace(ICL_LANGUAGE_CODE.'.html', '', end($menuid));

            // echo Nav menu to buffer
            ob_start();

            /*if($menuid == 'main'):
				if( function_exists( 'uberMenu_direct' ) ):
					uberMenu_direct( $menuid );
				endif;
			else:*/
            wp_nav_menu(array( 'theme_location' => $menuid, 'menu_class' => 'nav-menu' ));
            //endif;

            // set variable $output to buffer
            $output = ob_get_contents();

            // end buffering
            ob_end_clean();

            // write $output to file
            inventivoStaticMenus::file_force_contents($file, $output);
        endforeach;
    }

    // Create directory if it doesn't exist.
    public function file_force_contents($dir, $contents)
    {
        $parts = explode('/', $dir);
        $file = array_pop($parts);
        $root = array_shift($parts);
        $dir = $root;
        foreach ($parts as $part) {
            if (!is_dir($dir .= "/$part")) {
                mkdir($dir);
            }
        }

        file_put_contents("$dir/$file", $contents);
    }
}

if (is_admin()) {
    $inventivoStaticMenus = new InventivoStaticMenus();
}
