<?php
/*
Plugin Name: Better Posts
Plugin URI: http://gaboworks.com
Description: Posts more beauty.
Version: 1.0.0
Author: Gabo Mota Chong
Author URI: http://gaboworks.com
License: GPL2
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once('env.php');
require_once(BPP_PLUGIN_PATH.'src/posts.php');
require_once(BPP_PLUGIN_PATH.'src/post-comments.php');