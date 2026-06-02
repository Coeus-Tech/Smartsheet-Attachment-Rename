<?php
/**
 * Fallback template — used for blog/archive if set up.
 */
get_header();
?>
<main class="container" style="padding:60px 24px;">
  <h1><?php wp_title( '' ); ?></h1>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article style="border-bottom:1px solid var(--color-border); padding:32px 0;">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p style="color:var(--color-muted); font-size:.85rem;"><?php the_date(); ?></p>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="margin-top:8px;">Read More</a>
    </article>
  <?php endwhile; else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
