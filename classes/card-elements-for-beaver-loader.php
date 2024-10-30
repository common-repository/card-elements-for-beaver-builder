<?php

/**
 * A class that handles loading custom modules and custom
 * fields if the builder is installed and activated.
 */
class CEBB_Modules_Loader {

    /**
     * Initializes the class once all plugins have loaded.
     */
    static public function init() {
        add_action('plugins_loaded', __CLASS__ . '::setup_hooks');
    }

    /**
     * Setup hooks if the builder is installed and activated.
     */
    static public function setup_hooks() {
        if (!class_exists('FLBuilder')) {
            return;
        }

        // Load custom modules.
        add_action('init', __CLASS__ . '::load_modules');

        // Enqueue custom field assets.
        add_action('init', __CLASS__ . '::enqueue_field_assets');
    }

    /**
     * Loads our custom modules.
     */
    static public function load_modules() {
        require_once CEBB_DIR . 'modules/testimonial-card/testimonial-card.php';
        require_once CEBB_DIR . 'modules/profile-card/profile-card.php';
        require_once CEBB_DIR . 'modules/post-card/includes/functions-post-card.php';
        require_once CEBB_DIR . 'modules/post-card/post-card.php';
       
    }

    /**
     * Enqueues our custom field assets only if the builder UI is active.
     */
    static public function enqueue_field_assets() {
        wp_enqueue_style('cebb-testimonial-style', CEBB_URL . 'modules/testimonial-card/assets/css/frontend.css', array(), 1.0);
        wp_enqueue_style('cebb-profile-style', CEBB_URL . 'modules/profile-card/assets/css/frontend.css', array(), 1.0);
        wp_enqueue_style('cebb-post-style', CEBB_URL . 'modules/post-card/assets/css/frontend.css', array(), 1.0);
         }

}

CEBB_Modules_Loader::init();
