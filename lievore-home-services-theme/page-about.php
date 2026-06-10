<?php
/**
 * Template Name: About Page
 */
get_header();

$phone       = get_theme_mod( 'lhs_phone',   '(816) 205-3183' );
$phone_clean = preg_replace( '/[^0-9+]/', '', $phone );
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      <span>About</span>
    </nav>
    <h1>About Matt Lievore</h1>
    <p>Saint Joseph's trusted handyman &amp; lawn care pro — fair prices, real results.</p>
  </div>
</section>

<!-- OUR STORY -->
<section class="section">
  <div class="container">
    <div class="about-inner">

      <div class="about-image" aria-hidden="true">👷</div>

      <div>
        <div class="section-tag">Matt's Story</div>
        <h2 style="margin-bottom:20px;">One Guy. One Call. Everything Gets Done.</h2>
        <p>
          Hi, I'm Matt — owner of Lievore Lawn &amp; Home Services LLC right here in Saint Joseph, MO.
          I started this business because I saw how hard it was for homeowners to find someone reliable:
          someone who actually shows up, does quality work, and charges a fair price.
        </p>
        <p>
          Whether it's mowing your lawn every week, fixing a list of repairs that have piled up, or installing
          a new ceiling fan — I handle it personally. You'll always deal directly with me, never a crew you've
          never met.
        </p>
        <p>
          I'm proud to be BBB Accredited and have earned a perfect 5.0-star rating from customers across
          Saint Joseph and the surrounding area. My goal is simple: leave every job better than I found it,
          and earn your trust every single time.
        </p>
        <div style="display:flex; gap:14px; flex-wrap:wrap; margin-top:28px;">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Get a Free Quote</a>
          <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline">See All Services</a>
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
      $stats = array(
        array( '5.0★', 'Google Rating' ),
        array( '10+',  '5-Star Reviews' ),
        array( 'BBB',  'Accredited Business' ),
        array( '100%', 'Satisfaction Guaranteed' ),
      );
      foreach ( $stats as $s ) : $num = $s[0]; $label = $s[1]; ?>
      <div style="padding:32px 20px; background:#fff; border-radius:var(--radius-lg); border:1px solid var(--color-border);">
        <div style="font-size:2.2rem; font-weight:800; color:var(--color-primary); line-height:1;"><?php echo $num; ?></div>
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
      <div class="section-tag">What I Stand For</div>
      <h2>How I Work</h2>
      <p>These aren't just words — they're what my customers have said about me over and over again.</p>
    </div>

    <div class="values-grid" style="max-width:800px; margin:0 auto;">
      <?php
      $values = array(
        array( '⏰', 'I Show Up',         'I show up when I say I will and call you back promptly. Your time matters.' ),
        array( '💵', 'Fair Pricing',      'I give honest quotes upfront. No hidden charges, no surprises on the invoice.' ),
        array( '🏆', 'Perfectionist',     'I take pride in every job. If it\'s worth doing, it\'s worth doing right.' ),
        array( '🧹', 'I Clean Up After',  'I leave your home cleaner than I found it. The work is done, the mess is gone.' ),
      );
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
      <h2>You Can Trust Lievore Home Services</h2>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px,1fr)); gap:28px; max-width:900px; margin:0 auto;">
      <?php
      $creds = array(
        array( '🏆', 'BBB Accredited',       'Lievore Lawn &amp; Home Services LLC is a Better Business Bureau Accredited Business.' ),
        array( '⭐', '5.0 Google Rating',     'A perfect 5-star rating across 10+ reviews from real Saint Joseph homeowners.' ),
        array( '📍', 'Locally Owned',         'I live and work in Saint Joseph, MO. I\'m not a franchise — I\'m your neighbor.' ),
        array( '📞', 'Direct Line to Matt',   'When you call or text, you\'re reaching me directly. No runaround, no middle man.' ),
      );
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

<!-- REVIEWS SNAPSHOT -->
<section class="section section--dark">
  <div class="container">
    <div class="section-header">
      <div class="section-tag">Real Reviews</div>
      <h2>Don't Take My Word For It</h2>
    </div>
    <div class="testimonials-grid">
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"Matt provided fast service for me. The mowing he did for us was also very reasonably priced."</blockquote>
        <div class="testimonial-author"><div class="author-avatar">RR</div><div><div class="author-name">Rex R.</div><div class="author-location">Saint Joseph, MO</div></div></div>
      </div>
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"Amazing work. Prompt, efficient, and very fair. A great job!"</blockquote>
        <div class="testimonial-author"><div class="author-avatar">LL</div><div><div class="author-name">Laurel L.</div><div class="author-location">Saint Joseph, MO</div></div></div>
      </div>
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <blockquote>"I now have a sleek, safe railing for my front porch. Matt is a perfectionist and it shows. Great job, Matt!"</blockquote>
        <div class="testimonial-author"><div class="author-avatar">BS</div><div><div class="author-name">Bobbie S.</div><div class="author-location">Saint Joseph, MO</div></div></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner">
  <div class="container">
    <h2>Let's Get Your Project on the Schedule</h2>
    <p>Call or text Matt for a free estimate. I serve Saint Joseph and the surrounding area.</p>
    <div class="cta-actions">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">Get a Free Quote</a>
      <a href="tel:<?php echo esc_attr( $phone_clean ); ?>" class="btn btn-white-outline btn-lg">📞 <?php echo esc_html( $phone ); ?></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
