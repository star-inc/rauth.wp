<?php
/**
 *    startAccount R-Auth Wordpress Client
 *    ---
 *        For R-Auth website to authorize startAccount.
 *    =====
 * @link              https://github.com/star-inc/rauth_client-wordpress
 * @since             1.0.0
 * @package           rvcli_wp
 *
 * @wordpress-plugin
 * Plugin Name:       startAccount R-Auth Wordpress Client
 * Plugin URI:        https://github.com/tommcfarlin/wp-hello-world/
 * Description:       For R-Auth website to authorize startAccount.
 * Version:           1.0.0
 * Author:            Star Inc.
 * Author URI:        https://starinc.xyz/
 * License:           Apache License 2.0
 * License URI:       http://www.apache.org/licenses/LICENSE-2.0
 */

if (!defined('WPINC')) {
    die;
}

add_filter('login_message', 'wphw_login_message');

function wphw_login_message($message)
{
    $message .= "Hello World";
    return $message;
}
