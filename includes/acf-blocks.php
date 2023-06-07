<?php
add_action('acf/init', 'acf_init_blocks');

function acf_init_blocks() {
  // check function exists
  if( function_exists('acf_register_block') ) {
    require_once get_template_directory() . '/includes/acf-blocks/register-left-text-right-image.php';        
  }
}
