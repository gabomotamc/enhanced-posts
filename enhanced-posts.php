<?php
/*
Plugin Name: Enhanced Posts
Plugin URI: https://github.com/gabomotamc/enhanced-posts
Description: Posts more beauty.
Version: 1.0.0
Author: Gabo Mota Chong
Author URI: http://gaboworks.com/portfolio/enhanced-posts
License: GPL2
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once('env.php');
require_once(EPP_PLUGIN_PATH.'includes/public-scripts.php');

require_once(EPP_PLUGIN_PATH.'src/posts.php');
require_once(EPP_PLUGIN_PATH.'src/post-comments.php');