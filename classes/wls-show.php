<?php

if ( ! class_exists( 'WLS_Show' ) ) {

    /**
     * generate SEO info;
     */
    class WLS_Show extends WLS_Module {
        /**
         * Constructor
         */
        protected function __construct() {

            $this->register_hook_callbacks();
        }

        /**
         * Register callbacks for actions and filters
         */
        public function register_hook_callbacks() {

            add_action('wp_footer', __CLASS__. '::fake_wp_footer' );

            return;
        }

        /**
         * hook wp_footer
         */
        public function fake_wp_footer() {
            // Only to add the head in Single page where Post is shown
            if (is_single() || is_page()) {

                if (WLS_Main::$settings['wls_author_linking'] == '1') {
                    echo '<div style="z-index:999999;text-align: center;">Live Scores Plugin provided by <a href="http://livescores.website">http://livescores.website</a></div>' . "\n";
                }
            }
        }
    } // end WLS_Show
}
