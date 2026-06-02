<?php
$phone   = get_theme_mod( 'lhs_phone',   '(555) 123-4567' );
$email   = get_theme_mod( 'lhs_email',   'info@lievoreh omeservices.com' );
$address = get_theme_mod( 'lhs_address', 'Serving Your City &amp; Surrounding Areas' );
$hours   = get_theme_mod( 'lhs_hours',   'Mon–Fri: 7am–6pm  |  Sat: 8am–4pm' );
$phone_clean = preg_replace( '/[^0-9+]/', '', $phone );
?>

<footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand -->
      <div class="footer-brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
          <div class="logo-icon">🔧</div>
          <span style="color:#fff;font-weight:800;">Lievore <span style="color:#60a5fa;">Home Services</span></span>
        </a>
        <p>Professional handyman and home repair services you can count on. Licensed, insured, and dedicated to quality workmanship.</p>
      </div>

      <!-- Quick Links -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Free Quote</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">General Repairs</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Carpentry &amp; Woodwork</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Door &amp; Window Work</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Drywall &amp; Painting</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Fixture Installation</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-col">
        <h4>Contact Us</h4>
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
          <span><?php echo esc_html( $address ); ?></span>
        </div>
        <div class="footer-contact-item">
          <span class="icon">🕐</span>
          <span><?php echo esc_html( $hours ); ?></span>
        </div>
      </div>

    </div><!-- .footer-grid -->

    <div class="footer-bottom">
      <span>&copy; <?php echo date( 'Y' ); ?> Lievore Home Services. All rights reserved.</span>
      <span>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Privacy Policy</a> &nbsp;·&nbsp;
        <?php echo esc_html( $address ); ?>
      </span>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
