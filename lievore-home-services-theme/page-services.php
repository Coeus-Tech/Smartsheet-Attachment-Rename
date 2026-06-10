<?php
/**
 * Template Name: Services Page
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
      <span>Services</span>
    </nav>
    <h1>Services</h1>
    <p>Handyman repairs &amp; lawn care in Saint Joseph, MO — all done personally by Matt.</p>
  </div>
</section>

<!-- INTRO -->
<section class="section section--alt">
  <div class="container">
    <div class="section-header">
      <div class="section-tag">What Matt Offers</div>
      <h2>One Call Covers It All</h2>
      <p>
        Whether you need your lawn mowed every week or have a list of repairs piling up around the house,
        Matt handles it. Every job is done personally — fair quote upfront, quality work, clean when finished.
      </p>
    </div>

    <div class="services-detail-grid">

      <!-- Honey-Do List -->
      <div class="service-detail">
        <div class="service-detail-header">
          <div class="service-detail-icon">📋</div>
          <div>
            <h3>The Honey-Do List Visit</h3>
            <p style="color:var(--color-primary);font-size:.9rem;margin:0;font-weight:600;">Matt's Signature Service</p>
          </div>
        </div>
        <div class="service-detail-body">
          <p>Have 5, 6, 10 small jobs that just never get done? Book one visit and Matt knocks them all out in a single trip — saving you time and money vs. hiring multiple people.</p>
          <ul class="service-list">
            <li>Caulking &amp; weatherstripping</li>
            <li>Shelf &amp; TV mounting</li>
            <li>Door &amp; cabinet adjustments</li>
            <li>Fan &amp; light fixture installs</li>
            <li>Hardware &amp; fixture swaps</li>
            <li>Furniture assembly</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Book a Honey-Do Visit</a>
        </div>
      </div>

      <!-- General Repairs -->
      <div class="service-detail">
        <div class="service-detail-header">
          <div class="service-detail-icon">🔨</div>
          <div><h3>General Home Repairs</h3></div>
        </div>
        <div class="service-detail-body">
          <p>The everyday repairs that keep your home safe and functional — done right, at a fair price.</p>
          <ul class="service-list">
            <li>Drywall repair &amp; patching</li>
            <li>Door repair &amp; adjustment</li>
            <li>Flooring repair</li>
            <li>Fence &amp; gate repair</li>
            <li>Minor plumbing repairs</li>
            <li>Minor electrical repairs</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request a Quote</a>
        </div>
      </div>

      <!-- Fixture & Fan Installation -->
      <div class="service-detail">
        <div class="service-detail-header">
          <div class="service-detail-icon">💡</div>
          <div><h3>Fixture &amp; Fan Installation</h3></div>
        </div>
        <div class="service-detail-body">
          <p>New fixtures make a big difference. Matt installs them cleanly, with no mess left behind.</p>
          <ul class="service-list">
            <li>Ceiling fan installation &amp; repair</li>
            <li>Light fixture installation</li>
            <li>Plumbing fixture installation</li>
            <li>Appliance installation</li>
            <li>Smart home device setup</li>
            <li>TV mounting &amp; cable management</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request a Quote</a>
        </div>
      </div>

      <!-- Carpentry & Assembly -->
      <div class="service-detail">
        <div class="service-detail-header">
          <div class="service-detail-icon">🪚</div>
          <div><h3>Carpentry &amp; Assembly</h3></div>
        </div>
        <div class="service-detail-body">
          <p>Careful, precise woodwork and assembly — from railing builds to flat-pack furniture.</p>
          <ul class="service-list">
            <li>Railing &amp; deck repair/build</li>
            <li>Floating shelf installation</li>
            <li>Furniture assembly</li>
            <li>Shed assembly</li>
            <li>General construction</li>
            <li>Wood rot repair</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request a Quote</a>
        </div>
      </div>

      <!-- Lawn Mowing -->
      <div class="service-detail">
        <div class="service-detail-header">
          <div class="service-detail-icon">🌿</div>
          <div><h3>Lawn Mowing &amp; Maintenance</h3></div>
        </div>
        <div class="service-detail-body">
          <p>Weekly or bi-weekly lawn service — mowing, trimming, edging, and full cleanup every visit.</p>
          <ul class="service-list">
            <li>Lawn mowing &amp; maintenance</li>
            <li>Trimming &amp; edging</li>
            <li>Clipping cleanup &amp; bagging</li>
            <li>Weed control</li>
            <li>Lawn pest control</li>
            <li>Gutter cleaning</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request a Quote</a>
        </div>
      </div>

      <!-- Lawn Health -->
      <div class="service-detail">
        <div class="service-detail-header">
          <div class="service-detail-icon">🌱</div>
          <div><h3>Lawn Health &amp; Fertilization</h3></div>
        </div>
        <div class="service-detail-body">
          <p>Make your lawn the best-looking on the block with Matt's fertilization and seeding services.</p>
          <ul class="service-list">
            <li>Lawn fertilization</li>
            <li>Grass seeding</li>
            <li>Weed control treatments</li>
            <li>Lawn pest control</li>
            <li>Seasonal maintenance</li>
            <li>Spring &amp; fall yard cleanup</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request a Quote</a>
        </div>
      </div>

    </div><!-- .services-detail-grid -->
  </div>
</section>

<!-- BUNDLE & SAVE -->
<section class="section" style="background:var(--color-primary-lt); border-top:1px solid var(--color-border); border-bottom:1px solid var(--color-border);">
  <div class="container" style="text-align:center; max-width:680px;">
    <div class="section-tag">Save More</div>
    <h2 style="margin-bottom:14px;">Bundle Your Projects</h2>
    <p style="font-size:1.05rem; margin-bottom:28px;">Instead of scheduling Matt four separate times for four different things, bundle them together in one visit. You save time, and Matt can often give a better rate on combined work.</p>
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-lg">Talk to Matt About Bundling</a>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="section-tag">Simple Process</div>
      <h2>How It Works</h2>
      <p>Getting on Matt's schedule is fast and easy.</p>
    </div>

    <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(220px,1fr)); gap:32px; text-align:center;">
      <?php
      $steps = array(
        array( '1', '📞', 'Call or Text Matt',   'Reach out at (816) 205-3183 or fill out the quote form. Fast response guaranteed.' ),
        array( '2', '📋', 'Get a Free Estimate', 'Matt reviews your job and gives you a clear, upfront quote — no surprises.' ),
        array( '3', '📅', 'Pick Your Day',       'Choose a time that works for you. Often available the same week.' ),
        array( '4', '✅', 'Job Done Right',      'Matt does the work, cleans up, and leaves you with quality results.' ),
      );
      foreach ( $steps as $step ) : $num = $step[0]; $icon = $step[1]; $title = $step[2]; $desc = $step[3]; ?>
      <div>
        <div style="font-size:2.5rem; margin-bottom:12px;"><?php echo $icon; ?></div>
        <div style="display:inline-block; background:var(--color-primary); color:#fff; width:28px; height:28px; border-radius:50%; font-weight:700; font-size:.85rem; line-height:28px; margin-bottom:12px;"><?php echo $num; ?></div>
        <h3 style="margin-bottom:8px;"><?php echo $title; ?></h3>
        <p style="font-size:.9rem; color:var(--color-muted);"><?php echo $desc; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<section class="cta-banner">
  <div class="container">
    <h2>Ready to Get Started?</h2>
    <p>Call or text Matt for a free estimate. Serving Saint Joseph, MO and surrounding areas.</p>
    <div class="cta-actions">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">Get a Free Quote</a>
      <a href="tel:<?php echo esc_attr( $phone_clean ); ?>" class="btn btn-white-outline btn-lg">📞 <?php echo esc_html( $phone ); ?></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
