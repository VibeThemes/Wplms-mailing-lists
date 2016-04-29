<?php
/*
Plugin Name: WPLMS Mailing Lits plugin
Plugin URI: http://www.Vibethemes.com
Description: A simple WordPress plugin for mailing lists
Version: 1.0
Author: VibeThemes
Author URI: http://www.vibethemes.com
License: GPL2
*/
/*
Copyright 2014  VibeThemes  (email : vibethemes@gmail.com)

wplms mailing lists program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

wplms mailing lists program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with wplms mailing lists program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


include_once 'classes/mailing_lists.class.php';



if(class_exists('Mailing_lists_class'))
{	
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('Mailing_lists_class', 'activate'));
    register_deactivation_hook(__FILE__, array('Mailing_lists_class', 'deactivate'));

    // instantiate the plugin class
    $wplms_customizer = new Mailing_lists_class();
}

function wplms_mailing_lists_enqueue_scripts(){
    wp_enqueue_style( 'wplms-mailing-lists-css', plugins_url( 'css/style.css' , __FILE__ ));
    wp_enqueue_script( 'wplms-mailing-lists-js', plugins_url( 'js/scripts.js' , __FILE__ ));
}

add_action('wp_head','wplms_mailing_lists_enqueue_scripts');

add_action('wp_enqueue_scripts','wplms_mailing_list_custom_cssjs');

/**
 * Objective: Register & Enqueue your Custom scripts
 * Developer notes:
 * Hook you custom scripts required for the plugin here.
 */
function wplms_mailing_list_custom_cssjs(){
    wp_enqueue_style( 'wplms-mailing-lists-css', plugins_url( 'css/style.css' , __FILE__ ));
    wp_enqueue_script( 'wplms-mailing-lists-js', plugins_url( 'js/scripts.js' , __FILE__ ));
}


