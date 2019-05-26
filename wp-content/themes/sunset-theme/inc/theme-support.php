<?php

/*

@package sunset-theme

======================
    ADMIN WIDGETS AREA
======================

*/

$options = get_option('post_formats');
if (!empty($options)) {
  add_theme_support('post-formats', array_keys($options));
}