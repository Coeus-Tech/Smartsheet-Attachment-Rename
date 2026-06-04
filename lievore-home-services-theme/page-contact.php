<?php
/**
 * Template Name: Contact Page
 */
get_header();

$phone   = get_theme_mod( 'lhs_phone',   '(816) 205-3183' );
$email   = get_theme_mod( 'lhs_email',   'info@lievore-homeservices.com' );
$address = get_theme_mod( 'lhs_address', 'Saint Joseph, MO &amp; Surrounding Areas' );
$hours   = get_theme_mod( 'lhs_hours',   'Opens 9 AM &mdash; Call or text anytime' );
$phone_clean = preg_replace( '/[^0-9+]/', '', $phone );
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      <span>Contact</span>
    </nav>
    <h1>Get a Free Quote from Matt</h1>
    <p>Call, text, or fill out the form — fast response, fair price.</p>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="section">
  <div class="container">
    <div class="contact-page-inner">

      <!-- Left: Contact Info -->
      <div class="contact-info">
        <div class="section-tag">Reach Matt</div>
        <h2>Let's Talk About Your Project</h2>
        <p style="color:var(--color-muted); margin-bottom:28px;">Whether you have one small fix or a full honey-do list, Matt will get back to you quickly with a free, no-pressure estimate.</p>

        <div class="contact-detail">
          <div class="contact-detail-icon">📞</div>
          <div>
            <h4>Call or Text</h4>
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
            <h4>Location &amp; Service Area</h4>
            <p>3121 Gene Field Rd, St Joseph, MO 64506<br>Serving Saint Joseph and nearby areas</p>
          </div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon">🕐</div>
          <div>
            <h4>Hours</h4>
            <p><?php echo $hours; ?></p>
          </div>
        </div>

        <div style="margin-top:28px; background:var(--color-primary-lt); border-radius:var(--radius-lg); padding:22px;">
          <h3 style="font-size:.95rem; margin-bottom:12px; color:var(--color-primary-dk);">Why Homeowners Choose Matt</h3>
          <ul style="display:flex; flex-direction:column; gap:9px;">
            <li style="font-size:.88rem; color:var(--color-mid);">✅ 5.0★ on Google — 10+ reviews</li>
            <li style="font-size:.88rem; color:var(--color-mid);">✅ BBB Accredited Business</li>
            <li style="font-size:.88rem; color:var(--color-mid);">✅ You deal directly with Matt — always</li>
            <li style="font-size:.88rem; color:var(--color-mid);">✅ Fair, upfront pricing — no surprises</li>
            <li style="font-size:.88rem; color:var(--color-mid);">✅ Shows up when he says he will</li>
          </ul>
        </div>
      </div>

      <!-- Right: Quote Form -->
      <div class="contact-form-wrap">
        <h3>Request a Free Quote</h3>

        <div class="form-success" id="form-success" role="alert">
          ✅ Thanks! Matt will get back to you shortly with a free estimate.
        </div>

        <form id="quote-form" novalidate>
          <?php wp_nonce_field( 'lhs_quote_nonce', 'nonce_field' ); ?>

          <div class="form-row">
            <div class="form-group">
              <label for="name">Your Name <span style="color:#dc2626;">*</span></label>
              <input type="text" id="name" name="name" placeholder="Jane Smith" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" placeholder="(816) 000-0000">
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email Address <span style="color:#dc2626;">*</span></label>
            <input type="email" id="email" name="email" placeholder="jane@example.com" required>
          </div>

          <div class="form-group">
            <label for="service">What Do You Need?</label>
            <select id="service" name="service">
              <option value="">— Select a service —</option>
              <option>Honey-Do List Visit (multiple small jobs)</option>
              <option>General Home Repairs</option>
              <option>Fixture &amp; Fan Installation</option>
              <option>Carpentry &amp; Assembly</option>
              <option>Lawn Mowing &amp; Maintenance</option>
              <option>Lawn Fertilization &amp; Seeding</option>
              <option>Multiple Services / Not Sure</option>
            </select>
          </div>

          <div class="form-group">
            <label for="message">Tell Matt About Your Project <span style="color:#dc2626;">*</span></label>
            <textarea id="message" name="message" placeholder="Describe what needs to be done. The more detail, the better Matt can quote you..." required></textarea>
          </div>

          <button type="submit" class="btn btn-primary btn-lg" style="width:100%; justify-content:center;">
            Send to Matt
          </button>
          <p class="form-note">🔒 Your info stays private. Matt typically responds same day.</p>
        </form>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
