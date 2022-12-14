<?php
/**
 * Title: Site Title
 * Slug: jonathandavidson-info/site-title
 * Categories: featured
 * Keywords: Site title
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"className":"jonathandavidson-info--site-title","layout":{"type":"flex"}} -->
<a class="p-block-group jonathandavidson-info--site-title" href="<?php echo get_home_url(); ?>">
  <!-- wp:image {"id":85,"width":750,"height":128,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full">
      <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/jd-logo.png' ) ); ?>" alt="Jonathan Davidson" class="wp-image-83" width="83" height="83"/>
    </figure>
  <!-- /wp:image -->
  <!-- wp:group {"className":"jonathandavidson-info--site-title-content","layout":{"type":"contrained"}} -->
  <div class="jonathandavidson-info--site-title-content">
    <h1><?php echo get_option( 'blogname' ); ?></h1>
    <p>:&nbsp;:&nbsp;&nbsp;<?php echo get_option( 'blogdescription' ); ?></p>
  </div>
  <!-- /wp:group -->
</a>
<!-- /wp:group -->
