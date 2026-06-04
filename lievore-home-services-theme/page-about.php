<?php
/**
 * Template Name: About Page
 */
get_header();

$phone       = get_theme_mod( 'lhs_phone',   '(555) 123-4567' );
$phone_clean = preg_replace( '/[^0-9+]/', '', $phone );
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      <span>About</span>
    </nav>
    <h1>About Lievore Home Services</h1>
    <p>Over a decade of trusted home repair serving our community.</p>
  </div>
</section>

<!-- OUR STORY -->
<section class="section">
  <div class="container">
    <div class="about-inner">

      <div class="about-image" aria-hidden="true">🏡</div>

      <div>
        <div class="section-tag">Our Story</div>
        <h2 style="margin-bottom:20px;">Built on Trust, Hard Work &amp; Quality Craftsmanship</h2>
        <p>
          Lievore Home Services was founded with one simple belief: homeowners deserve a handyman they can actually trust.
          Someone who shows up on time, does the job right, and charges a fair price — every single time.
        </p>
        <p>
          With over 10 years of hands-on experience, we've repaired hundreds of homes across the area. From quick
          patch jobs to multi-day renovation projects, we bring the same level of professionalism and care to
          every task we take on.
        </p>
        <p>
          We're fully licensed and insured, so you can have peace of mind knowing that your home — and your family —
          are protected throughout the work.
        </p>
        <div style="display:flex; gap:14px; flex-wrap:wrap; margin-top:28px;">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Get a Free Quote</a>
          <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline">See Our Services</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- STATS -->
<section class="section section--alt">
  <div class="container">
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px,1fr)); gap:24px; text-align:center;">
      <?php
      $stats = [
        [ '500+', 'Jobs Completed' ],
        [ '10+',  'Years in Business' ],
        [ '5★',   'Average Rating' ],
        [ '100%', 'Satisfaction Guaranteed' ],
      ];
      foreach ( $stats as $s ) : $num = $s[0]; $label = $s[1]; ?>
      <div style="padding:32px 20px; background:#fff; border-radius:var(--radius-lg); border:1px solid var(--color-border);">
        <div style="font-size:2.5rem; font-weight:800; color:var(--color-primary); line-height:1;"><?php echo $num; ?></div>
        <div style="font-size:.95rem; color:var(--color-muted); margin-top:8px;"><?php echo $label; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- OUR VALUES -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="section-tag">What We Stand For</div>
      <h2>Our Core Values</h2>
      <p>These values guide every job we take on and every interaction with our customers.</p>
    </div>

    <div class="values-grid" style="max-width:800px; margin:0 auto;">
      <?php
      $values = [
        [ '🤝', 'Integrity',     'We\'re honest about what a job requires, what it costs, and how long it takes — no surprises.' ],
        [ '🏆', 'Quality',       'We take pride in workmanship that lasts. Every job is done as if it\'s our own home.' ],
        [ '⏱️', 'Reliability',   'We show up when we say we will and finish on schedule. Your time is valuable.' ],
        [ '💬', 'Communication', 'We keep you informed from start to finish so there are no surprises.' ],
      ];
      foreach ( $values as $v ) : $icon = $v[0]; $title = $v[1]; $desc = $v[2]; ?>
      <div class="value-card">
        <div class="icon"><?php echo $icon; ?></div>
        <h3><?php echo $title; ?></h3>
        <p><?php echo $desc; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CREDENTIALS -->
<section class="section section--alt">
  <div class="container">
    <div class="section-header">
      <div class="section-tag">Credentials</div>
      <h2>Licensed, Insured &amp; Ready to Work</h2>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px,1fr)); gap:28px; max-width:900px; margin:0 auto;">
      <?php
      $creds = [
        [ '🛡️', 'Fully Insured',        'General liability insurance covers your home and property throughout the job.' ],
        [ '📜', 'Licensed Contractor',   'Fully licensed in accordance with state and local requirements.' ],
        [ '🔒', 'Background Checked',    'Trustworthy professionals you\'re comfortable inviting into your home.' ],
        [ '🎓', 'Ongoing Training',      'We stay current with best practices and building codes in our trade.' ],
      ];
      foreach ( $creds as $c ) : $icon = $c[0]; $title = $c[1]; $desc = $c[2]; ?>
      <div style="background:#fff; border:1px solid var(--color-border); border-radius:var(--radius-lg); padding:28px; display:flex; gap:16px; align-items:flex-start;">
        <div style="font-size:1.8rem; flex-shrink:0;"><?php echo $icon; ?></div>
        <div>
          <h3 style="font-size:1rem; margin-bottom:6px;"><?php echo $title; ?></h3>
          <p style="font-size:.9rem; color:var(--color-muted); margin:0;"><?php echo $desc; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner">
  <div class="container">
    <h2>Let's Work Together</h2>
    <p>Ready to experience the Lievore Home Services difference? Get in touch for a free estimate.</p>
    <div class="cta-actions">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">Get a Free Quote</a>
      <a href="tel:<?php echo esc_attr( $phone_clean ); ?>" class="btn btn-white-outline btn-lg">📞 <?php echo esc_html( $phone ); ?></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
