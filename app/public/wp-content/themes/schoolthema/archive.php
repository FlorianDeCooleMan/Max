<?php get_header(); ?>
<div class="container main-layout">
  <div class="content-area">
    <h1 class="archive-title"><?php the_archive_title(); ?></h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="entry-excerpt"><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; endif; ?>
  </div>
  <div class="sidebar-area"><?php get_sidebar(); ?></div>
</div>
<?php get_footer(); ?>
