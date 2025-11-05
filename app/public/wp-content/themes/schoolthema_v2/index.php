<?php get_header(); ?>
<div class="container main-layout">
  <div class="content-area">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="entry-meta"><?php the_time('F j, Y'); ?> | <?php the_category(', '); ?></div>
        <div class="entry-excerpt"><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; ?>
      <div class="nav-posts"><?php posts_nav_link(); ?></div>
    <?php else : ?>
      <p><?php _e('No posts found.', 'schoolthema'); ?></p>
    <?php endif; ?>
  </div>
  <div class="sidebar-area">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
