<?php

include(get_theme_file_path( '/includes/front/bm_enqueues.php' ));
include(get_theme_file_path( '/includes/front/bm_setup_theme.php' ));

add_action('wp_enqueue_scripts', 'queue_scripts_and_styles');
add_action("after_setup_theme", "add_title");
