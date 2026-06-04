<?php
/**
 * Template Name: Services Page
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
      <span>Services</span>
    </nav>
    <h1>Our Services</h1>
    <p>Professional handyman &amp; home repair — done right the first time.</p>
  </div>
</section>

<!-- INTRO -->
<section class="section section--alt">
  <div class="container">
    <div class="section-header">
      <div class="section-tag">What We Offer</div>
      <h2>Complete Home Repair Solutions</h2>
      <p>
        Whether it's a single leaky faucet or a full list of deferred maintenance, Lievore Home Services has the skills
        and tools to handle it. All work is performed by experienced tradespeople and backed by our satisfaction guarantee.
      </p>
    </div>

    <div class="services-detail-grid">

      <!-- General Repairs -->
      <div class="service-detail">
        <div class="service-detail-header">
          <div class="service-detail-icon">🔨</div>
          <div>
            <h3>General Repairs</h3>
            <p style="color:var(--color-primary);font-size:.9rem;margin:0;font-weight:600;">Most Popular</p>
          </div>
        </div>
        <div class="service-detail-body">
          <p>The everyday repairs that keep your home running smoothly. We handle the to-do list so you don't have to.</p>
          <ul class="service-list">
            <li>Squeaky floors &amp; loose boards</li>
            <li>Door &amp; cabinet hinge repair</li>
            <li>Weather stripping &amp; caulking</li>
            <li>Gutter cleaning &amp; minor repair</li>
            <li>Fence post &amp; gate repair</li>
            <li>Deck board replacement</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request a Quote</a>
        </div>
      </div>

      <!-- Carpentry -->
      <div class="service-detail">
        <div class="service-detail-header">
          <div class="service-detail-icon">🪚</div>
          <div><h3>Carpentry &amp; Woodwork</h3></div>
        </div>
        <div class="service-detail-body">
          <p>From decorative trim to functional built-ins, our carpentry work combines skill with an eye for detail.</p>
          <ul class="service-list">
            <li>Crown molding &amp; baseboard trim</li>
            <li>Custom shelving &amp; built-ins</li>
            <li>Stair tread replacement</li>
            <li>Wood rot repair</li>
            <li>Deck &amp; fence construction</li>
            <li>Cabinet repair &amp; installation</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request a Quote</a>
        </div>
      </div>

      <!-- Doors & Windows -->
      <div class="service-detail">
        <div class="service-detail-header">
          <div class="service-detail-icon">🚪</div>
          <div><h3>Doors &amp; Windows</h3></div>
        </div>
        <div class="service-detail-body">
          <p>Properly fitted doors and sealed windows improve security, comfort, and energy efficiency in your home.</p>
          <ul class="service-list">
            <li>Interior &amp; exterior door install</li>
            <li>Door frame repair</li>
            <li>Storm door installation</li>
            <li>Window re-glazing &amp; sealing</li>
            <li>Screen repair &amp; replacement</li>
            <li>Sliding door adjustment</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request a Quote</a>
        </div>
      </div>

      <!-- Drywall -->
      <div class="service-detail">
        <div class="service-detail-header">
          <div class="service-detail-icon">🧱</div>
          <div><h3>Drywall &amp; Patching</h3></div>
        </div>
        <div class="service-detail-body">
          <p>We repair holes, cracks, and water-damaged drywall and leave a smooth finish ready for paint.</p>
          <ul class="service-list">
            <li>Nail pop &amp; crack repair</li>
            <li>Small to large hole patching</li>
            <li>Water damage restoration</li>
            <li>Texture matching</li>
            <li>Full drywall panel replacement</li>
            <li>Ceiling repair</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request a Quote</a>
        </div>
      </div>

      <!-- Fixture Installation -->
      <div class="service-detail">
        <div class="service-detail-header">
          <div class="service-detail-icon">💡</div>
          <div><h3>Fixture Installation</h3></div>
        </div>
        <div class="service-detail-body">
          <p>New fixtures transform the look and function of any room. We install cleanly with no mess left behind.</p>
          <ul class="service-list">
            <li>Ceiling fan installation</li>
            <li>Light fixture swaps</li>
            <li>Faucet &amp; sink installation</li>
            <li>Bathroom hardware sets</li>
            <li>Towel bars &amp; toilet paper holders</li>
            <li>TV mounting &amp; cable management</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request a Quote</a>
        </div>
      </div>

      <!-- Tile & Flooring -->
      <div class="service-detail">
        <div class="service-detail-header">
          <div class="service-detail-icon">🪵</div>
          <div><h3>Tile &amp; Flooring</h3></div>
        </div>
        <div class="service-detail-body">
          <p>Keep your floors and tile surfaces looking sharp with professional repair and replacement services.</p>
          <ul class="service-list">
            <li>Cracked tile replacement</li>
            <li>Grout repair &amp; re-grouting</li>
            <li>Hardwood floor repair</li>
            <li>Laminate &amp; vinyl plank repair</li>
            <li>Threshold &amp; transition install</li>
            <li>Subfloor repair</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request a Quote</a>
        </div>
      </div>

    </div><!-- .services-detail-grid -->
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="section-tag">Our Process</div>
      <h2>How It Works</h2>
      <p>Getting your home repaired is simple and stress-free with Lievore Home Services.</p>
    </div>

    <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(220px,1fr)); gap:32px; text-align:center;">
      <?php
      $steps = [
        [ '1', '📞', 'Contact Us',        'Call or fill out our quick quote form. Tell us what needs fixing.' ],
        [ '2', '📋', 'Free Estimate',     'We review your project and provide a clear, no-surprise quote.' ],
        [ '3', '📅', 'Schedule the Work', 'Pick a time that works for you — often same week.' ],
        [ '4', '✅', 'Work Gets Done',    'We complete the job cleanly and professionally. You\'re left happy.' ],
      ];
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
    <h2>Ready to Get Your Project Started?</h2>
    <p>Contact us today for a free estimate. No obligation, no pressure.</p>
    <div class="cta-actions">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">Get a Free Quote</a>
      <a href="tel:<?php echo esc_attr( $phone_clean ); ?>" class="btn btn-white-outline btn-lg">📞 <?php echo esc_html( $phone ); ?></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
