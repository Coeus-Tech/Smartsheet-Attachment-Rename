<?php
$phone   = get_theme_mod( 'lhs_phone',   '(816) 205-3183' );
$email   = get_theme_mod( 'lhs_email',   'info@lievore-homeservices.com' );
$phone_clean = preg_replace( '/[^0-9+]/', '', $phone );
?>

<footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand -->
      <div class="footer-brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" style="color:#fff; text-decoration:none; display:inline-flex; align-items:center; gap:10px; font-size:1.1rem; font-weight:800;">
          <div class="logo-icon">🏠</div>
          <span>Lievore <span style="color:#e09e52;">Lawn &amp; Home</span></span>
        </a>
        <p>Handyman repairs &amp; lawn care in Saint Joseph, MO. Matt handles it personally — fair price, great work, every time.</p>
      </div>

      <!-- Quick Links -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Matt</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Free Quote</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Honey-Do List Visit</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Home Repairs</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Fixture &amp; Fan Install</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Lawn Mowing</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Fertilization &amp; Seeding</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-col">
        <h4>Contact Matt</h4>
        <div class="footer-contact-item">
          <span class="icon">📞</span>
          <a href="tel:<?php echo esc_attr( $phone_clean ); ?>"><?php echo esc_html( $phone ); ?></a>
        </div>
        <div class="footer-contact-item">
          <span class="icon">✉️</span>
          <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
        </div>
        <div class="footer-contact-item">
          <span class="icon">📍</span>
          <span>Saint Joseph, MO &amp; Surrounding Areas</span>
        </div>
        <div class="footer-contact-item">
          <span class="icon">⭐</span>
          <span>5.0★ Google Rating &bull; BBB Accredited</span>
        </div>
      </div>

    </div><!-- .footer-grid -->

    <div class="footer-bottom">
      <span>&copy; <?php echo date( 'Y' ); ?> Lievore Lawn &amp; Home Services LLC. All rights reserved.</span>
      <span>Saint Joseph, MO 64506</span>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
