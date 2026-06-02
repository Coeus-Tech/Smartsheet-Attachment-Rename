<?php get_header(); ?>
<section class="page-hero">
  <div class="container">
    <h1>Page Not Found</h1>
    <p>Sorry, we couldn't find what you were looking for.</p>
  </div>
</section>
<div class="container" style="padding:60px 24px; text-align:center;">
  <p style="font-size:1.1rem; color:var(--color-muted);">Let's get you back on track.</p>
  <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap; margin-top:24px;">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Go Home</a>
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Contact Us</a>
  </div>
</div>
<?php get_footer(); ?>
