<?php
/**
 * Front Page Template – Home
 */
get_header();

$phone       = get_theme_mod( 'lhs_phone',   '(816) 205-3183' );
$phone_clean = preg_replace( '/[^0-9+]/', '', $phone );
?>

<!-- ===== HERO ===== -->
<section class="hero" aria-labelledby="hero-heading">
  <div class="container">
    <div class="hero-inner">

      <div class="hero-content">
        <div class="hero-tag">⭐ Saint Joseph, MO &bull; BBB Accredited</div>
        <h1 id="hero-heading">Your Honey-Do List, Knocked Out in One Visit</h1>
        <p class="hero-sub">
          Hi, I'm Matt — owner of Lievore Lawn &amp; Home Services. I handle the repairs, yard work, and
          odd jobs that pile up around your home. Fair prices, no surprises, and I show up when I say I will.
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
          <div class="hero-stat"><div class="num">5.0★</div><div class="label">Google Rating</div></div>
          <div class="hero-stat"><div class="num">10+</div><div class="label">5-Star Reviews</div></div>
          <div class="hero-stat"><div class="num">BBB</div><div class="label">Accredited</div></div>
        </div>
      </div>

      <div class="hero-visual" aria-hidden="true">
        <div class="hero-cards-grid">
          <div class="hero-card">
            <div class="icon">🔨</div>
            <h3>Handyman &amp; Repairs</h3>
            <p>Drywall, doors, fans, fixtures, flooring &amp; more.</p>
          </div>
          <div class="hero-card">
            <div class="icon">🌿</div>
            <h3>Lawn &amp; Yard Care</h3>
            <p>Mowing, fertilization, weed control &amp; seeding.</p>
          </div>
          <div class="hero-card">
            <div class="icon">📋</div>
            <h3>Honey-Do List</h3>
            <p>One visit. 5–10 items crossed off your list.</p>
          </div>
          <div class="hero-card">
            <div class="icon">📦</div>
            <h3>Bundle &amp; Save</h3>
            <p>Combine projects and save time &amp; money.</p>
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
      <div class="trust-item"><span class="icon">✅</span> Saint Joseph, MO</div>
      <div class="trust-item"><span class="icon">⭐</span> 5.0 Google Rating</div>
      <div class="trust-item"><span class="icon">🏆</span> BBB Accredited</div>
      <div class="trust-item"><span class="icon">💰</span> Fair, Upfront Pricing</div>
      <div class="trust-item"><span class="icon">📞</span> Fast Call-Back Guaranteed</div>
    </div>
  </div>
</div>

<!-- ===== HONEY-DO HIGHLIGHT ===== -->
<section class="section" style="background: var(--color-primary-lt); border-bottom: 1px solid var(--color-border);">
  <div class="container">
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:60px; align-items:center;">
      <div>
        <div class="section-tag">Matt's Signature Service</div>
        <h2 style="margin-bottom:16px;">The Honey-Do List Visit</h2>
        <p style="font-size:1.1rem; color:var(--color-mid); margin-bottom:20px;">
          Got a list of small jobs that have been sitting there for months? Book one visit and I'll knock out
          <strong>5–10 items in a single trip</strong> — saving you the hassle of scheduling multiple contractors.
        </p>
        <ul style="display:flex; flex-direction:column; gap:10px; margin-bottom:28px;">
          <li style="display:flex; gap:10px; align-items:flex-start; font-size:.95rem; color:var(--color-mid);"><span style="color:var(--color-primary); font-weight:700; flex-shrink:0;">✓</span> Caulking, patching, tightening, fixing</li>
          <li style="display:flex; gap:10px; align-items:flex-start; font-size:.95rem; color:var(--color-mid);"><span style="color:var(--color-primary); font-weight:700; flex-shrink:0;">✓</span> Hanging shelves, mounting TVs, installing hardware</li>
          <li style="display:flex; gap:10px; align-items:flex-start; font-size:.95rem; color:var(--color-mid);"><span style="color:var(--color-primary); font-weight:700; flex-shrink:0;">✓</span> Door adjustments, fan installs, furniture assembly</li>
          <li style="display:flex; gap:10px; align-items:flex-start; font-size:.95rem; color:var(--color-mid);"><span style="color:var(--color-primary); font-weight:700; flex-shrink:0;">✓</span> Whatever else is on your list</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-lg">Book a Honey-Do Visit</a>
      </div>
      <div style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dk) 100%); border-radius:var(--radius-lg); padding:36px; color:#fff; text-align:center;">
        <div style="font-size:3rem; margin-bottom:12px;">📋</div>
        <h3 style="color:#fff; font-size:1.5rem; margin-bottom:8px;">One Visit</h3>
        <p style="color:rgba(255,255,255,.85); font-size:1rem; margin-bottom:20px;">5–10 Items Fixed</p>
        <div style="background:rgba(255,255,255,.15); border-radius:var(--radius); padding:16px; font-size:.9rem; color:rgba(255,255,255,.9);">
          "Let's knock it out in one visit. Just finished a 2.5-hour honey-do session..."<br>
          <span style="font-size:.8rem; opacity:.75;">— Matt, Lievore Home Services</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== SERVICES OVERVIEW ===== -->
<section class="section section--alt" aria-labelledby="services-heading">
  <div class="container">
    <div class="section-header">
      <div class="section-tag">What Matt Does</div>
      <h2 id="services-heading">Handyman &amp; Lawn Care in Saint Joseph, MO</h2>
      <p>From quick home repairs to a full yard maintenance plan — one call gets it handled.</p>
    </div>

    <div class="services-grid">
      <?php
      $services = array(
        array( '🔨', 'General Repairs',         'Drywall, doors, hinges, caulking, patching — the everyday fixes that keep your home in shape.' ),
        array( '💡', 'Fixture &amp; Fan Install', 'Ceiling fans, light fixtures, plumbing fixtures, appliances, and smart home devices installed right.' ),
        array( '🪚', 'Carpentry &amp; Assembly',  'Shelving, furniture assembly, deck repair, railing work, and custom wood projects.' ),
        array( '🌿', 'Lawn Mowing &amp; Care',    'Weekly or bi-weekly mowing, trimming, edging, and cleanup — Saint Joseph\'s best-priced lawn service.' ),
        array( '🌱', 'Fertilization &amp; Seeding','Lawn fertilization, grass seeding, weed control, and pest control to keep your yard lush.' ),
        array( '📋', 'Honey-Do List Visit',        'Book one visit and knock out 5–10 small jobs around the house — repairs, installs, and more.' ),
      );
      foreach ( $services as $s ) :
        $icon  = $s[0]; $title = $s[1]; $desc = $s[2]; ?>
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

<!-- ===== WHY MATT ===== -->
<section class="section" aria-labelledby="why-heading">
  <div class="container">
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center;">

      <div class="why-image-col" aria-hidden="true">👷</div>

      <div>
        <div class="section-tag">Why Choose Matt</div>
        <h2 id="why-heading" style="margin-bottom:36px;">What Saint Joseph Homeowners Say About Us</h2>
        <div class="features-grid">
          <?php
          $features = array(
            array( '⏰', 'Shows Up On Time',         '"Shows up when he says he will. Calls you back in a timely matter." — Jim M.' ),
            array( '💵', 'Fair, Honest Pricing',     '"Best quote I\'ve received so far." — A. Wills' ),
            array( '🏆', 'Perfectionist Workmanship', '"Matt is a perfectionist and it shows." — Bobbie S.' ),
            array( '🧹', 'Leaves It Clean',           '"Does great work and then cleans it all up." — Jim M.' ),
          );
          foreach ( $features as $f ) :
            $icon = $f[0]; $title = $f[1]; $desc = $f[2]; ?>
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
          <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-outline">About Matt</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="section section--dark" aria-labelledby="reviews-heading">
  <div class="container">
    <div class="section-header">
      <div class="section-tag">5.0★ Google Reviews</div>
      <h2 id="reviews-heading">What Saint Joseph Homeowners Are Saying</h2>
      <p>10 five-star reviews and counting. Here's what real customers have to say about Matt.</p>
    </div>

    <div class="testimonials-grid">
      <?php
      $reviews = array(
        array( 'Jim M.', 'JM', 'Saint Joseph, MO',
          '"Great guy. Shows up when he says he will. Calls you back in a timely manner. Does great work, trimming everything and then cleans it all up. Price is very reasonable. He\'s got my business from now on. I would highly recommend."' ),
        array( 'Bobbie S.', 'BS', 'Saint Joseph, MO',
          '"I now have a sleek, safe railing for my front porch. Matt is a perfectionist and it shows. Great job, Matt!"' ),
        array( 'A. Wills', 'AW', 'Saint Joseph, MO',
          '"Called, came out in a timely manner. Best quote I\'ve received so far. Done in 45 minutes tops on my lawn. Best it\'s looked in years. Will recommend to everyone."' ),
      );
      foreach ( $reviews as $r ) :
        $name = $r[0]; $initials = $r[1]; $location = $r[2]; $quote = $r[3]; ?>
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
    <h2 id="cta-heading">Ready to Cross Some Things Off Your List?</h2>
    <p>Call or text Matt for a free quote. Fast response, fair price, great work.</p>
    <div class="cta-actions">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">
        Get a Free Quote
      </a>
      <a href="tel:<?php echo esc_attr( $phone_clean ); ?>" class="btn btn-white-outline btn-lg">
        📞 Call or Text <?php echo esc_html( $phone ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
