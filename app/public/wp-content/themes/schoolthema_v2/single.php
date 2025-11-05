<?php get_header(); ?>
<div class="container main-layout">
  <div class="content-area">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-meta"><?php the_time('F j, Y'); ?> | <?php the_category(', '); ?></div>
        <div class="entry-content"><?php the_content(); ?></div>
      </article>
      <?php comments_template(); ?>
    <?php endwhile; endif; ?>
  </div>
  <div class="sidebar-area">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
