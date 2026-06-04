<?php
/**
 * Front Page Template – Home
 */
get_header();

$phone       = get_theme_mod( 'lhs_phone',   '(555) 123-4567' );
$phone_clean = preg_replace( '/[^0-9+]/', '', $phone );
?>

<!-- ===== HERO ===== -->
<section class="hero" aria-labelledby="hero-heading">
  <div class="container">
    <div class="hero-inner">

      <!-- Left: Copy -->
      <div class="hero-content">
        <div class="hero-tag">⭐ Trusted Local Handyman</div>
        <h1 id="hero-heading">Your Home Deserves Expert Care</h1>
        <p class="hero-sub">
          From quick fixes to major repairs — Lievore Home Services delivers professional results on time and on budget.
          Fully licensed &amp; insured.
        </p>
        <div class="hero-actions">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">
            Get a Free Quote
          </a>
          <a href="tel:<?php echo esc_attr( $phone_clean ); ?>" class="btn btn-white-outline btn-lg">
            📞 <?php echo esc_html( $phone ); ?>
          </a>
        </div>

        <div class="hero-stats">
          <div class="hero-stat"><div class="num">500+</div><div class="label">Jobs Completed</div></div>
          <div class="hero-stat"><div class="num">10+</div><div class="label">Years Experience</div></div>
          <div class="hero-stat"><div class="num">5★</div><div class="label">Average Rating</div></div>
        </div>
      </div>

      <!-- Right: Cards (decorative) -->
      <div class="hero-visual" aria-hidden="true">
        <div class="hero-cards-grid">
          <div class="hero-card">
            <div class="icon">🔨</div>
            <h3>General Repairs</h3>
            <p>Fast, reliable fixes for everything around the house.</p>
          </div>
          <div class="hero-card">
            <div class="icon">🪚</div>
            <h3>Carpentry</h3>
            <p>Custom woodwork, trim, and installations done right.</p>
          </div>
          <div class="hero-card">
            <div class="icon">🚪</div>
            <h3>Doors &amp; Windows</h3>
            <p>Installation, repair, and weatherproofing.</p>
          </div>
          <div class="hero-card">
            <div class="icon">💡</div>
            <h3>Fixture Install</h3>
            <p>Lights, fans, faucets, and more.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== TRUST BAR ===== -->
<div class="trust-bar">
  <div class="container">
    <div class="trust-bar-inner">
      <div class="trust-item"><span class="icon">✅</span> Licensed &amp; Insured</div>
      <div class="trust-item"><span class="icon">⭐</span> 5-Star Rated</div>
      <div class="trust-item"><span class="icon">📅</span> Same-Week Scheduling</div>
      <div class="trust-item"><span class="icon">💰</span> Upfront Pricing</div>
      <div class="trust-item"><span class="icon">🛡️</span> Satisfaction Guaranteed</div>
    </div>
  </div>
</div>

<!-- ===== SERVICES OVERVIEW ===== -->
<section class="section section--alt" aria-labelledby="services-heading">
  <div class="container">
    <div class="section-header">
      <div class="section-tag">What We Do</div>
      <h2 id="services-heading">Home Repair Services You Can Trust</h2>
      <p>No job too big or too small. We handle the projects that keep your home safe, functional, and looking great.</p>
    </div>

    <div class="services-grid">
      <?php
      $services = [
        [ '🔨', 'General Repairs',         'Loose hinges, squeaky floors, broken fixtures — we handle the everyday repairs that pile up.' ],
        [ '🪚', 'Carpentry &amp; Woodwork', 'Shelving, trim work, built-ins, decks, and custom wood projects crafted with care.' ],
        [ '🚪', 'Doors &amp; Windows',      'Installation, adjustment, weatherstripping, and repair to keep your home secure and energy-efficient.' ],
        [ '🧱', 'Drywall &amp; Patching',   'Holes, cracks, and water damage repaired and finished to a smooth, paintable surface.' ],
        [ '💡', 'Fixture Installation',     'Ceiling fans, light fixtures, bathroom hardware, faucets, and more installed cleanly.' ],
        [ '🎨', 'Interior Touch-Ups',       'Caulking, minor paint touch-ups, and finishing work to keep your home looking its best.' ],
      ];
      foreach ( $services as $s ) : $icon = $s[0]; $title = $s[1]; $desc = $s[2]; ?>
      <div class="service-card">
        <div class="service-icon"><?php echo $icon; ?></div>
        <h3><?php echo $title; ?></h3>
        <p><?php echo $desc; ?></p>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="service-link">Learn more →</a>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center; margin-top:48px;">
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-primary btn-lg">View All Services</a>
    </div>
  </div>
</section>

<!-- ===== WHY CHOOSE US ===== -->
<section class="section" aria-labelledby="why-heading">
  <div class="container">
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center;">

      <div class="why-image-col" aria-hidden="true">🏠</div>

      <div>
        <div class="section-tag">Why Us</div>
        <h2 id="why-heading" style="margin-bottom:36px;">The Lievore Difference</h2>
        <div class="features-grid">
          <?php
          $features = [
            [ '🛡️', 'Licensed &amp; Insured',    'Fully licensed and insured for your complete peace of mind on every job.' ],
            [ '⏱️', 'On Time, Every Time',        'We respect your schedule and show up when we say we will — guaranteed.' ],
            [ '💵', 'Upfront, Honest Pricing',    'No hidden fees. You get a clear quote before any work begins.' ],
            [ '🏆', 'Quality Workmanship',         'Attention to detail and pride in our craft on every single project.' ],
          ];
          foreach ( $features as $f ) : $icon = $f[0]; $title = $f[1]; $desc = $f[2]; ?>
          <div class="feature-item">
            <div class="feature-icon"><?php echo $icon; ?></div>
            <div>
              <h3><?php echo $title; ?></h3>
              <p><?php echo $desc; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div style="margin-top:36px;">
          <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-outline">Learn About Us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="section section--dark" aria-labelledby="reviews-heading">
  <div class="container">
    <div class="section-header">
      <div class="section-tag">Reviews</div>
      <h2 id="reviews-heading">What Our Customers Say</h2>
      <p>Don't just take our word for it — here's what homeowners in our community have to say.</p>
    </div>

    <div class="testimonials-grid">
      <?php
      $reviews = [
        [ 'Michael T.', 'MT', 'Summit Township',
          '"Called Lievore Home Services for a tricky drywall repair after a plumbing leak. The crew was professional, fast, and the finish was perfect. You can\'t even tell there was a hole!"' ],
        [ 'Sandra R.', 'SR', 'Fairview Heights',
          '"Had them install a new ceiling fan and fix three sticky doors. Everything was done in one visit. Pricing was fair, no surprises. Highly recommend!"' ],
        [ 'Dave &amp; Karen M.', 'DK', 'Oakwood',
          '"These guys rebuilt our deck railing from scratch. Beautiful work, done ahead of schedule. Our neighbors keep asking who did it. Five stars without hesitation."' ],
      ];
      foreach ( $reviews as $r ) : $name = $r[0]; $initials = $r[1]; $location = $r[2]; $quote = $r[3]; ?>
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote><?php echo $quote; ?></blockquote>
        <div class="testimonial-author">
          <div class="author-avatar"><?php echo $initials; ?></div>
          <div>
            <div class="author-name"><?php echo $name; ?></div>
            <div class="author-location"><?php echo $location; ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== CTA BANNER ===== -->
<section class="cta-banner" aria-labelledby="cta-heading">
  <div class="container">
    <h2 id="cta-heading">Ready to Get Started?</h2>
    <p>Contact us today for a free, no-obligation estimate on your next project.</p>
    <div class="cta-actions">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">
        Get a Free Quote
      </a>
      <a href="tel:<?php echo esc_attr( $phone_clean ); ?>" class="btn btn-white-outline btn-lg">
        📞 Call <?php echo esc_html( $phone ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
