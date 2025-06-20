<?php
##########
# Callbacks
##########
add_filter('comments_open', 'disable_comments', 20, 2);
add_filter('pings_open', 'disable_comments', 20, 2);

##########
# Functions
##########
function disable_comments() {
    return false;
}