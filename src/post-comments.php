<?php
##########
# Callbacks
##########
add_filter('comments_open', 'epp_disable_comments', 20, 2);
add_filter('pings_open', 'epp_disable_comments', 20, 2);

##########
# Functions
##########
function epp_disable_comments() {
    return false;
}