<?php
/**
 * Template Name: Contact Page
 */
get_header();

$phone   = get_theme_mod( 'lhs_phone',   '(555) 123-4567' );
$email   = get_theme_mod( 'lhs_email',   'info@lievore homeservices.com' );
$address = get_theme_mod( 'lhs_address', 'Serving Your City &amp; Surrounding Areas' );
$hours   = get_theme_mod( 'lhs_hours',   'Mon–Fri: 7am–6pm  |  Sat: 8am–4pm' );
$phone_clean = preg_replace( '/[^0-9+]/', '', $phone );
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      <span>Contact</span>
    </nav>
    <h1>Get a Free Quote</h1>
    <p>Tell us about your project and we'll get back to you within one business day.</p>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="section">
  <div class="container">
    <div class="contact-page-inner">

      <!-- Left: Contact Info -->
      <div class="contact-info">
        <div class="section-tag">Reach Us</div>
        <h2>We'd Love to Hear From You</h2>
        <p>Whether you know exactly what you need or aren't sure where to start, give us a call or fill out the form. We'll figure it out together.</p>

        <div class="contact-detail">
          <div class="contact-detail-icon">📞</div>
          <div>
            <h4>Phone</h4>
            <a href="tel:<?php echo esc_attr( $phone_clean ); ?>"><?php echo esc_html( $phone ); ?></a>
          </div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon">✉️</div>
          <div>
            <h4>Email</h4>
            <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
          </div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon">📍</div>
          <div>
            <h4>Service Area</h4>
            <p><?php echo esc_html( $address ); ?></p>
          </div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon">🕐</div>
          <div>
            <h4>Hours</h4>
            <p><?php echo esc_html( $hours ); ?></p>
          </div>
        </div>

        <!-- Trust signals -->
        <div style="margin-top:32px; background:var(--color-primary-lt); border-radius:var(--radius-lg); padding:24px;">
          <h3 style="font-size:1rem; margin-bottom:14px; color:var(--color-primary-dk);">Why Homeowners Choose Us</h3>
          <ul style="display:flex; flex-direction:column; gap:10px;">
            <?php
            $trust = [ '✅ Free estimates, no obligation', '✅ Licensed &amp; fully insured', '✅ Same-week scheduling available', '✅ Upfront pricing — no hidden fees', '✅ 5-star rated by local homeowners' ];
            foreach ( $trust as $t ) : ?>
            <li style="font-size:.9rem; color:var(--color-mid);"><?php echo $t; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <!-- Right: Quote Form -->
      <div class="contact-form-wrap">
        <h3>Request a Free Quote</h3>

        <div class="form-success" id="form-success" role="alert">
          ✅ Thank you! We've received your request and will be in touch within one business day.
        </div>

        <form id="quote-form" novalidate>
          <?php wp_nonce_field( 'lhs_quote_nonce', 'nonce_field' ); ?>

          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name <span style="color:#dc2626;">*</span></label>
              <input type="text" id="name" name="name" placeholder="Jane Smith" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" placeholder="(555) 000-0000">
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email Address <span style="color:#dc2626;">*</span></label>
            <input type="email" id="email" name="email" placeholder="jane@example.com" required>
          </div>

          <div class="form-group">
            <label for="service">Type of Service Needed</label>
            <select id="service" name="service">
              <option value="">— Select a service —</option>
              <option>General Repairs</option>
              <option>Carpentry &amp; Woodwork</option>
              <option>Doors &amp; Windows</option>
              <option>Drywall &amp; Patching</option>
              <option>Fixture Installation</option>
              <option>Tile &amp; Flooring</option>
              <option>Multiple Services / Not Sure</option>
            </select>
          </div>

          <div class="form-group">
            <label for="message">Describe Your Project <span style="color:#dc2626;">*</span></label>
            <textarea id="message" name="message" placeholder="Tell us what needs to be done, the size of the job, and anything else helpful…" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary btn-lg" style="width:100%; justify-content:center;">
            Send My Request
          </button>
          <p class="form-note">🔒 Your information is kept private and never shared. We'll respond within 1 business day.</p>
        </form>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
