<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<ul class="menu align-center social-nav">
  <li>
    <a href="https://open.spotify.com/artist/1hpgU9Y9u4sA2192WxbFUt" target="_blank"><i class="fi flaticon-spotify"></i></a>
  </li>
  <li>
    <a href="https://itunes.apple.com/de/artist/belfast-overdose/1331033235" target="_blank"><i class="fi flaticon-apple"></i></a>
  </li>
  <li>
    <a href="https://www.instagram.com/belfastoverdose/" target="_blank"><i class="fi flaticon-instagram"></i></a>
  </li>
  <li>
    <a href="https://www.youtube.com/channel/UC2Rl5gMQUJWGMr0-GiSjQAg" target="_blank"><i class="fi flaticon-youtube"></i></a>
  </li>
</ul>

<footer class="footer">
  <?php footer_nav(); ?>
    <div class="footer-container">
        <div class="footer-grid">
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
        </div>
    </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
