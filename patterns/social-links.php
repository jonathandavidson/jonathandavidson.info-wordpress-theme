<?php
/**
 * Title: Social Links
 * Slug: jonathandavidson-info/social-links
 * Categories: featured
 * Keywords: Social Links
 * Block Types: core/template-part/footer
 */

$socialLinksMetadata = [
  [
    'src' => 'assets/images/github-logo.png',
    'href' => 'https://github.com/jonathandavidson'
  ],
  [
    'src' => 'assets/images/linkedin-logo.png',
    'href' => 'https://www.linkedin.com/in/jonathan-davidson-9345279'
  ],
  [
    'src' => 'assets/images/upwork-logo.png',
    'href' => 'https://www.upwork.com/freelancers/~0155cc36c72fbf7b30'
  ]
];

?>
<!-- wp:group {"className":"jonathandavidson-info--social-links","layout":{"type":"flex"}} -->
<ul class="wp-block-group jonathandavidson-info--social-links">
  <?php foreach ($socialLinksMetadata as $link): ?>
  <li>
    <a href="<?php echo $link['href'] ?>" target="_blank">
      <img src="<?php echo esc_url( get_theme_file_uri( $link['src'] ) ); ?>" alt="GitHub" class="wp-image-50" width="50" height="50"/>
    </a>
  </li>
  <?php endforeach; ?>
</ul>
<!-- /wp:group -->