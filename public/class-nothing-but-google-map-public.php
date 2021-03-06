<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       nothingbutweb.com.au
 * @since      1.0.0
 *
 * @package    Nothing_But_Google_Map
 * @subpackage Nothing_But_Google_Map/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Nothing_But_Google_Map
 * @subpackage Nothing_But_Google_Map/public
 * @author     Nothing But Web <nbw@nothingbutweb.com.au>
 */
class Nothing_But_Google_Map_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string $plugin_name The name of the plugin.
     * @param      string $version The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Nothing_But_Google_Map_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Nothing_But_Google_Map_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/nothing-but-google-map-public.css', array(), $this->version, 'all');

    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Nothing_But_Google_Map_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Nothing_But_Google_Map_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyCnXpbg-xVYOUFxKGDlj9Tn1PIeKqnbtyI&signed_in=true', array('jquery'), rand(0, 1), true);
        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/nothing-but-google-map-public.js', array('jquery'), $this->version, false);
    }

    public function nbw_map()
    {
        add_shortcode('nbw_map', function ($atts, $content) {
            ob_start();
            ?>
            <div id="map" data-map-address="<?php echo $atts['address'] ?>"></div>
            <?php
            return ob_get_clean();
        });
    }

}
