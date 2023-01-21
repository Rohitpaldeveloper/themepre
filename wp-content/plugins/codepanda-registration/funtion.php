<?php
if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }
/*
Plugin Name: CodePanda Registration
Plugin URI: http://codepanda.in
Description: Codepanda is a webform builder with unparalleled ease of use and features.
Version: 1
Author: CodePanda
Author URI: http://codepanda.in
Text Domain: codepanda-registration
Domain Path: /lang/
*/
register_activation_hook( __FILE__, 'cprg_createtable');
function cprg_createtable(){
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_name = $wpdb->prefix . 'codepanda';
  $sql = "CREATE TABLE `$table_name` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phoneno` bigint(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `counselor` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `doj` varchar(100) NOT NULL,
  `yop` varchar(100) NOT NULL,
  `mentor` varchar(150) NOT NULL,
  `timing` time NOT NULL,
  `cpid` varchar(200) NOT NULL,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE(cpid)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
";
  $table_name2 = $wpdb->prefix . 'cpid';
  $sql2 = "CREATE TABLE `$table_name2` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `cpid` varchar(20) NOT NULL,
      `confirm` varchar(50) NOT NULL,
      PRIMARY KEY (id),
      UNIQUE(cpid)
      ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
";
  $table_name3 = $wpdb->prefix . 'fees';
  $sql3 = "CREATE TABLE `$table_name3` (
    `id` int(11) NOT NULL AUTO_INCREMENT, 
    `cpid` varchar(20) NOT NULL, 
    `name` varchar(50) NOT NULL, 
    `email` varchar(50) NOT NULL, 
    `phoneno` bigint(100) NOT NULL, 
    `course` varchar(100) NOT NULL, 
    `coursefees` int(11) NOT NULL,
    `totalfees` int(11) NOT NULL,
    `paidfees` int(11) NOT NULL,
    `remainingfees` int(11) NOT NULL,
    PRIMARY KEY (id) 
    )ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
  dbDelta($sql);
}
if ($wpdb->get_var("SHOW TABLES LIKE '$table_name2'") != $table_name2) {
  dbDelta($sql2);
}
if ($wpdb->get_var("SHOW TABLES LIKE '$table_name3'") != $table_name3) {
  dbDelta($sql3);
}
}

add_shortcode( 'codepanda_registration_form', 'cprg_form_html' );
function cprg_form_html(){
    ob_start();
    include_once 'formhtml.php';
    return ob_get_clean();
}
add_action( 'wp_enqueue_scripts', 'cprg_enqueue_scripts' );
function cprg_enqueue_scripts() {
  wp_enqueue_style( 'cprg-style', plugin_dir_url( __FILE__ ) . 'assets/css/style.css', array(), '1.0' );
  wp_enqueue_script( 'cprg-script', plugin_dir_url( __FILE__ ) . 'assets/js/script.js', array('jquery'), '1.0' );
}
add_action('admin_menu','reg_form');
 function reg_form(){
 add_menu_page('Student List','Student List','edit_posts','student-list','cprg_customtable_form','dashicons-groups');
 add_submenu_page('student-list','Add new','Add Student','edit_posts','add-new','cprg_add_new_team');
 add_submenu_page('student-list','Passkey new','Generate Passkey','edit_posts','pass-new','cprg_add_new_pass');
 add_submenu_page('student-list','Passkey List','Passkey List','edit_posts','pass-list','cprg_pass_list');
 add_submenu_page('student-list','Send Mail','Send Mail','edit_posts','send-mail','cprg_send_mail');
}
function cprg_customtable_form(){
 include('student-list.php');
}
function cprg_add_new_team(){
  include_once('formhtml.php');
}
function cprg_add_new_pass(){
  include_once('passkey-list.php');
}
function cprg_pass_list(){
  include_once('pass-list.php');
}
function cprg_send_mail(){
  include_once('send-mail.php');
}
add_action( 'admin_enqueue_scripts', 'cprg_enqueue_admin_files' );
function cprg_enqueue_admin_files() {
  wp_enqueue_script( 'cprg-student-script', plugin_dir_url( __FILE__ ) . 'assets/js/admin.js', array('jquery'), '1.0' );
}
?>