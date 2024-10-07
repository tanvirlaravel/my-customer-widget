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
  *When is it defined?

    *ABSPATH is typically defined early in the WordPress bootstrap process, before any other files or scripts are loaded.
    *It's usually defined within the wp-settings.php file, which is a core WordPress file responsible for loading various settings and configurations.
    *Why is it important?

    *Relative paths: ABSPATH provides a reliable way to reference files and directories within your WordPress installation, regardless of where the WordPress installation is located on the server.
    *Plugin and theme compatibility: Many WordPress plugins and themes rely on ABSPATH to correctly locate and include necessary files.
    *Security: Using ABSPATH helps to prevent security vulnerabilities related to relative paths, which can be exploited by malicious actors.

    * The code snippet if(!defined("ABSPATH")){ exit; } is a common practice in WordPress development to ensure that the plugin or theme is only executed within the WordPress environment.
    
    *Purpose:
    *Prevent direct access: This code prevents someone from accessing the plugin or theme file directly through a web browser or other means. If the file is accessed outside of the WordPress environment, the script will terminate immediately.
    *Security: This helps to protect your plugin or theme from unauthorized access and potential security vulnerabilities.
    *Best practices: This is considered a good practice in WordPress development to ensure the integrity and security of your code.

    *ABSPATH is defined by WordPress during the initialization process. It represents the absolute path to the WordPress installation directory on the server. This constant is essential for various tasks within WordPress development, such as including files, accessing resources, and defining paths for plugins and themes.
  */
if(!defined("ABSPATH")){
    exit;
}
