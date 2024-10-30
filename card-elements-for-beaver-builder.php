<?php

/*
 * Plugin Name: Card Elements for Beaver Builder
 * Plugin URI: https://wordpress.org/plugins/card-elements-for-beaver-builder/
 * Description: Card Elements for Beaver Builder is a bunch of additional beaver builder modules for Editors, Content Writers and freelancers (to provide all possible options).
 * Version: 1.0.5
 * Author: Techeshta
 * Author URI: https://www.techeshta.com
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: card-elements-for-beaver-builder
 * Domain Path: /languages/
 */
/*
 * Exit if accessed directly
 */
if (!defined('ABSPATH')) {
    exit;
}

/*
 * Define variables
 */
define('CEBB_FILE', __FILE__);
define('CEBB_DIR', plugin_dir_path(CEBB_FILE));
define('CEBB_URL', plugins_url('/', CEBB_FILE));
define('CEBB_VERSION', '1.0.5' );
define('CEBB_TEXTDOMAIN', 'card-elements-for-beaver-builder');

/**
 * Main Plugin CEBB_Modules class.
 */
class CEBB_Modules {

    /**
     * CEBB_Modules constructor.
     *
     * The main plugin actions registered for WordPress
     */
    public function __construct() {

        add_action('init', array($this, 'cebb_check_dependencies'));
        $this->hooks();
        $this->cebb_include_files();
    }

    /**
     * Initialize
     */
    public function hooks() {
        add_action('plugins_loaded', array($this, 'cebb_load_language_files'));
    }

    /**
     * Load files
     */
    public function cebb_include_files() {
        if (!class_exists('FLBuilder')) {
            return;
        }
        require_once( CEBB_DIR . 'classes/card-elements-for-beaver-loader.php' );
    }

    /**
     * @return Loads plugin textdomain
     */
    public function cebb_load_language_files() {
        load_plugin_textdomain('card-elements-for-beaver-builder', false, dirname(plugin_basename(__FILE__)) . '/languages');
    }

    /**
     * Check plugin dependencies
     * Check if Beaver builder plugin is installed
     */
    public function cebb_check_dependencies() {
        if (!class_exists('FLBuilder')) {
            add_action('admin_notices', array($this, 'cebb_widget_fail_load'));
            return;
        }
    }

    /**
	 * Add Gutenberg block category
	 *
	 * @param array  $categories Existing categories.
	 * @param object $post The post object.
	 */
	public function block_category( $categories, $post ) {
		return array_merge(
			$categories,
			array(
				array(
					'title' => esc_html__( 'Card Elements', 'card-elements-for-beaver-builder' ),
				),
			)
		);
	}

    /**
     * This notice will appear if Beaver builder is not installed or activated or both
     */
    public function cebb_widget_fail_load() {
        $plugin = 'beaver-builder-lite-version/fl-builder.php';
        $file_path = 'beaver-builder-lite-version/fl-builder.php';
        $installed_plugins = get_plugins();
        if (isset($installed_plugins[$file_path])) { // Check if plugin is installed
            if (!current_user_can('activate_plugins')) {
                return;
            }
            $activation_url = wp_nonce_url('plugins.php?action=activate&amp;plugin=' . $plugin . '&amp;plugin_status=all&amp;paged=1&amp;s', 'activate-plugin_' . $plugin);
            $message = '<p><strong>' . esc_html__('Card Elements for Beaver Builder ', 'card-elements-for-beaver-builder') . '</strong>' . esc_html__(' will not work because you have not activated the Beaver Builder.', 'card-elements-for-beaver-builder') . '</p>';
            $message .= '<p>' . sprintf('<a href="%s" class="button-primary">%s</a>', $activation_url, esc_html__('Activate Beaver Builder Now', 'card-elements-for-beaver-builder')) . '</p>';
        } else {
            if (!current_user_can('install_plugins')) {
                return;
            }
            $install_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=beaver-builder-lite-version'), 'install-plugin_beaver-builder-lite-version');
            $message = '<p><strong>' . esc_html__('Card Elements for Beaver Builder ', 'card-elements-for-beaver-builder') . '</strong>' . esc_html__('will not work because you have not installed the Beaver Builder', 'card-elements-for-beaver-builder') . '</p>';
            $message .= '<p>' . sprintf('<a href="%s" class="button-primary">%s</a>', $install_url, esc_html__('Install Beaver Builder Now', 'card-elements-for-beaver-builder')) . '</p>';
        }
        echo '<div class="error"><p>' . wp_kses_post($message) . '</p></div>';
    }
}

/*
 * Starts our plugin class, easy!
 */
new CEBB_Modules();
