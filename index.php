<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="entry-meta"><?php the_time( get_option('date_format') ); ?> | <?php the_author(); ?></div>
      <div class="entry-summary"><?php the_excerpt(); ?></div>
    </article>
  <?php endwhile; ?>

  <div class="pagination">
    <?php the_posts_pagination(); ?>
  </div>
<?php else : ?>
  <p>Geen berichten gevonden.</p>
<?php endif; ?>

<?php get_footer(); ?>
