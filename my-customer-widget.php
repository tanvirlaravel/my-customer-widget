<?php 
/**
 * Plugin Name: My Custom Widget
 * Description: This is my Custom Widget
 * Author: Md Tanvirul Islam
 * Version: 1.0.0
 * Author URI: www.tanvir.com
 * Plugin URI: https/example.com/custom-widget
 */

/**
 * ABSPATH in WordPress Development
 *
 * When is it defined?
 * 
 * - ABSPATH is typically defined early in the WordPress bootstrap process, before any other files or scripts are loaded.
 * - It is usually defined within the wp-settings.php file, a core WordPress file responsible for loading various settings 
 *   and configurations.
 *
 * Why is it important?
 * 
 * - **Relative paths**: ABSPATH provides a reliable way to reference files and directories within your WordPress installation, 
 *   regardless of the server's file structure or where WordPress is installed.
 * - **Plugin and theme compatibility**: Many WordPress plugins and themes depend on ABSPATH to correctly locate and include necessary files.
 * - **Security**: Using ABSPATH helps mitigate security risks associated with relative paths, preventing potential vulnerabilities 
 *   that could be exploited by malicious actors.
 *
 * Code Snippet: `if (!defined('ABSPATH')) { exit; }`
 *
 * - This is a common practice in WordPress development to ensure that the plugin or theme is executed only within the WordPress 
 *   environment.
 *
 * Purpose:
 *
 * - **Prevent direct access**: This code prevents unauthorized users from accessing a plugin or theme file directly through a web 
 *   browser or external means. If the file is accessed outside of WordPress, the script will terminate immediately.
 * - **Security**: It protects the plugin or theme from unauthorized access and potential security vulnerabilities.
 * - **Best practices**: Including this check is considered a good practice in WordPress development to ensure the integrity and 
 *   security of your code.
 *
 * Summary:
 *
 * - ABSPATH is defined during the WordPress initialization process and represents the absolute path to the WordPress installation directory.
 * - It is essential for including files, accessing resources, and defining paths for plugins and themes.
 * - Using the `if (!defined('ABSPATH')) { exit; }` pattern is a simple but effective security measure to prevent unauthorized access.
 */


if(!defined("ABSPATH")){
    exit;
}

/**
 * Registering a Custom Widget in WordPress
 *
 * The line `add_action("widgets_init", "mcw_register_widget");` is used to register a custom widget for your plugin or theme.
 * This enables you to add custom functionality and content to widget-ready areas such as the sidebar.
 *
 * Breakdown:
 * 
 * - `add_action("widgets_init", "mcw_register_widget");`: 
 *   This line hooks the `mcw_register_widget` function to the `widgets_init` action.
 *   It means that the `mcw_register_widget` function will run when the `widgets_init` action is triggered.
 *
 * - `widgets_init`: 
 *   This is a WordPress action hook that fires when the widget initialization process begins.
 *   It is commonly used to register custom widgets for themes or plugins.
 *
 * - `mcw_register_widget`: 
 *   This is the function that will be executed to register the custom widget. 
 *   You'll need to define this function in your theme or plugin code to complete the widget registration process.
 *
 * Example Usage:
 *
 * ```php
 * function mcw_register_widget() {
 *     register_widget('My_Custom_Widget');
 * }
 * add_action('widgets_init', 'mcw_register_widget');
 * ```
 *
 * This registers the `My_Custom_Widget` class, making it available in the WordPress widgets section.
 */

add_action("widgets_init", "mcw_register_widget");

include_once plugin_dir_path(__FILE__) . "My_Custom_Widget.php";
function mcw_register_widget(){
    /**
     * My_Custom_Widget. This class will contain the logic for displaying and managing the widget's content and settings.
     */
    register_widget("My_Custom_Widget");
}

// Add admin panel script 
add_action("admin_enqueue_scripts", "mcw_admin_scripts");
function mcw_admin_scripts(){
    // css
    wp_enqueue_style("mcw-admin-style", plugin_dir_url(__FILE__) . "/style.css");
    // js
    wp_enqueue_script("mcw-admin-script", plugin_dir_url(__FILE__) . "/script.js", array("jquery"));
}