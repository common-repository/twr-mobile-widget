<?php

/**
 * Plugin Name: TWR Mobile Widget
 * Plugin URI: https://thewebroom.ro/
 * Description: The plugin is helping WhatsApp Broadcasting Lists owners (for WhatsApp Newsletters) to automate the sign-up process with a widget that can be positioned in any sidebar as a sign-up form.
 * Version: 0.2.9
 * Author: The Web Room
 * License: GPLv2 or later
 * Text Domain: twr_mobile
 */

class TWRMobile
{

    public function __construct()
    {
        // include necessary files
        require_once dirname(__FILE__).'/widget/twr_Mobile_Widget.php';
        // default wp plugin api activation hooks
        register_activation_hook(__FILE__, array($this, 'activate'));
        register_deactivation_hook(__FILE__, array($this, 'deactivate'));
        // add custom actions
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('widgets_init', array($this, 'register_widgets'));
    }

    public function activate()
    {
        // code to run on active plugin

    }

    public function deactivate()
    {
        // code to run on deactivate plugin
    }

    public function register_widgets()
    {
        // register all widgets here
        register_widget('twrMobile_Widget');
    }

    public function enqueue_scripts()
    {
        wp_enqueue_style('twr-mobile-widget-fontawesome-css', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), false, 'all');
        wp_enqueue_style('twr-mobile-widget-css', plugin_dir_url(__FILE__).'/assets/css/twr_mobile_widget.css', array(), false, 'all');
        wp_enqueue_script('twr-mobile-widget-js', plugin_dir_url(__FILE__).'/assets/js/twr_mobile_widget.js', array('jquery'), false, true);
    }

}

new TWRMobile();
