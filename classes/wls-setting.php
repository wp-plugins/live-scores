<?php

if ( ! class_exists( 'WLS_Settings' ) ) {

    /**
     *
     */
    class WLS_Settings{

        /**
         * The name for plugin options
         *
         * @var string
         */
        static $global_option = 'Live_Scores_Options';

        /**
         * Updates the General Settings of Plugin
         *
         * @return void
         * @access public
         */
        static function update_options($options) {
            // Save Class variable
            WLS_Main::$settings = $options;

            return update_option(self::$global_option, $options);
        }

        static function delete_options() {
           return delete_option(self::$global_option);
        }



        /**
         * Return the General Settings of Plugin, and set them to default values if they are empty
         *
         * @return array general options of plugin
         * @access public
         */
        static function get_options() {

            // If isn't empty, return class variable
            if (WLS_Main::$settings) {
                return WLS_Main::$settings;
            }

            // default values
            $options = array
            (
                'wls_author_linking' => '0',
                'wls_initial_dt' => time(),
            );

            // get saved options
            $saved = get_option(self::$global_option);

            // assign them
            if (!empty($saved)) {
                foreach ($saved as $key => $option) {
                    $options[$key] = $option;
                }
            }

            // update the options if necessary
            if ($saved != $options) {
                update_option(self::$global_option, $options);
            }

            // Save class variable
            WLS_Main::$settings = $options;

            //return the options
            return $options;
        }

    } // end WLS_Settings
}
