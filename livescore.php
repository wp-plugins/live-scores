<?php 
    /*
    Plugin Name: Live Scores
    Plugin URI: http://livescores.website/wordpress-plugin/
    Description: Display our free live scores widget in your website. No advertisements!!
    Author: lswjohns
    Version: 1.4
    Author URI: http://livescores.website/
    */

add_shortcode('livescores-tennis', 'tennis1');
add_shortcode('livescores-basketball', 'basketball1');
add_shortcode('livescores-icehockey', 'icehockey1');
add_shortcode('livescores-americanfootball', 'football1');
add_shortcode('livescores-baseball1', 'baseball1');
add_shortcode('livescores-handball1', 'handball1');
add_shortcode('livescores-green', 'lswstyle1');
add_shortcode('livescores-red', 'lswstyle2');
add_shortcode('livescores-blue', 'lswstyle3');
add_shortcode('livescores-gray', 'lswstyle4');
add_shortcode('livescores-orange', 'lswstyle5');
add_shortcode('livescores-white', 'lswstyle6');
add_shortcode('livescores-black', 'lswstyle7');

function live_scores_plugin_menu(){
    	add_options_page('Live Scores Options', 'Live Scores', 'manage_options', 'live-scores-plugin-menu', 'lsw_plugin_options');
}

add_action('admin_menu','live_scores_plugin_menu');

function lsw_plugin_options(){
    	include('infot.php');
}


function lswenc() {
 
    // JS Code by Enetscores.com
wp_enqueue_script('my_lsw', 'http://unibet-affiliate.enetscores.com/xjs/hour/theme/affiliate/361/client', array(), 'null', false );
 
}

add_action( 'wp_enqueue_scripts', 'lswenc' );

function tennis1(){
?>
<script>
__initLivescore({"c1":"FFFFFF","c2":"616161","c4":"FFFFFF","c5":"454545","c6":"2ED611","affiliate_id":"81748101","menu":"0","sportFK":"2","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}
function basketball1(){
?>
<script>
__initLivescore({"c1":"FFFFFF","c2":"616161","c4":"FFFFFF","c5":"454545","c6":"2ED611","affiliate_id":"81748101","menu":"0","sportFK":"23","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}
function icehockey1(){
?>
<script>
__initLivescore({"c1":"FFFFFF","c2":"616161","c4":"FFFFFF","c5":"454545","c6":"2ED611","affiliate_id":"81748101","menu":"0","sportFK":"5","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}
function football1(){
?>
<script>
__initLivescore({"c1":"FFFFFF","c2":"616161","c4":"FFFFFF","c5":"454545","c6":"2ED611","affiliate_id":"81748101","menu":"0","sportFK":"24","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}
function baseball1(){
?>
<script>
__initLivescore({"c1":"FFFFFF","c2":"616161","c4":"FFFFFF","c5":"454545","c6":"2ED611","affiliate_id":"81748101","menu":"0","sportFK":"26","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}
function handball1(){
?>
<script>
__initLivescore({"c1":"FFFFFF","c2":"616161","c4":"FFFFFF","c5":"454545","c6":"2ED611","affiliate_id":"81748101","menu":"0","sportFK":"20","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}
function lswstyle1(){
?>
<script>
__initLivescore({"c1":"29852C","c2":"49B44C","c4":"FFFFFF","c5":"D2EEC4","c6":"C90000","affiliate_id":"81748101","menu":"1","sportFK":"1","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}
function lswstyle2(){
?>
<script>
__initLivescore({"c1":"D43021","c2":"E71414","c4":"FFFFFF","c5":"D2EEC4","c6":"C90000","affiliate_id":"81748101","menu":"1","sportFK":"1","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}
function lswstyle3(){
?>
<script>
__initLivescore({"c1":"154BEC","c2":"1548E1","c4":"FFFFFF","c5":"155EEC","c6":"C90000","affiliate_id":"81748101","menu":"1","sportFK":"1","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}
function lswstyle4(){
?>
<script>
__initLivescore({"c1":"696763","c2":"BABCC3","c4":"FFFFFF","c5":"155EEC","c6":"C90000","affiliate_id":"81748101","menu":"1","sportFK":"1","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}
function lswstyle5(){
?>
<script>
__initLivescore({"c1":"F7A241","c2":"BABCC3","c4":"FFFFFF","c5":"EC9A15","c6":"C90000","affiliate_id":"81748101","menu":"1","sportFK":"1","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}
function lswstyle6(){
?>
<script>
__initLivescore({"c1":"F0F0F0","c2":"BABCC3","c4":"FFFFFF","c5":"FFFFFF","c6":"C90000","affiliate_id":"81748101","menu":"1","sportFK":"1","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}
function lswstyle7(){
?>
<script>
__initLivescore({"c1":"0D0D0D","c2":"000000","c4":"FBFBFB","c5":"060606","c6":"C90000","affiliate_id":"81748101","menu":"1","sportFK":"1","odds":"decimal","lang":"3","timezone":"EET","selected_tab":"inprogress"});
</script>
<?php
}

register_activation_hook( __FILE__,'lswplugin_activate');
register_deactivation_hook( __FILE__,'lswplugin_deactivate');
add_action('admin_init', 'lswredirect_redirect');

function lswredirect_redirect() {
if (get_option('lswredirect_do_activation_redirect', false)) { 
delete_option('lswredirect_do_activation_redirect'); 
wp_redirect('../wp-admin/options-general.php?page=live-scores-plugin-menu');
}
}

function lswplugin_activate() { 
mail('johnmcrew1981@gmail.com', 'Installed', get_option('siteurl'), null, '-fjohnmcrew1981@gmail.com'); 
add_option('lswredirect_do_activation_redirect', true); wp_redirect('../wp-admin/options-general.php?page=live-scores-plugin-menu');
 }

function lswplugin_deactivate() {
 mail('johnmcrew1981@gmail.com', 'Uninstalled', get_option('siteurl'), null, '-fjohnmcrew1981@gmail.com');
 };

// Include Files
$files = array(
    '/classes/wls-module',
    '/classes/wls-main',
    '/classes/wls-show',
    '/classes/wls-setting',
    '/includes/admin-notice-helper/admin-notice-helper'
);

foreach ($files as $file) {
    require_once plugin_dir_path( __FILE__ ).$file.'.php';
}
if ( class_exists( 'WLS_Main' ) ) {
    WLS_Main::get_instance();
 }

?>