<?php
function load_styles_and_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('main', get_template_directori_uri() .'/js/main.js', array(), '1.0.0', true);
}

// Add theme support for Featured Images
add_theme_support('post-thumbnails', array(
    'post',
    'page',
    'custom-post-type-name',
    ));

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
    $filetype = wp_check_filetype( $filename, $mimes );
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  }, 10, 4 );

  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }

  add_filter( 'upload_mimes', 'cc_mime_types' );

  function fix_svg() {
    echo '';
  }

  add_action( 'admin_head', 'fix_svg' );
?>
