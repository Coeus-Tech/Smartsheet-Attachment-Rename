<?php
/**
 * Default page template — used for any page without a specific template.
 */
get_header();
?>
<section class="page-hero">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</section>
<main class="container" style="padding:60px 24px; max-width:800px;">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="entry-content"><?php the_content(); ?></div>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
