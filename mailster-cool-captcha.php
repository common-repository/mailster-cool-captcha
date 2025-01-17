<?php
/*
Plugin Name: Mailster Cool Captcha
Requires Plugins: mailster
Plugin URI: https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=plugin&utm_term=Cool+Captcha
Description: Adds a Cool Captcha to your Mailster subscription forms
Version: 1.3.1
Author: EverPress
Author URI: https://everpress.co
Text Domain: mailster-coolcaptcha
License: GPLv2 or later
*/

define( 'MAILSTER_COOLCAPTCHA_VERSION', '1.3.1' );
define( 'MAILSTER_COOLCAPTCHA_REQUIRED_VERSION', '2.3' );
define( 'MAILSTER_COOLCAPTCHA_FILE', __FILE__ );

require_once __DIR__ . '/classes/cool-captcha.class.php';
new MailsterCoolCaptcha();
