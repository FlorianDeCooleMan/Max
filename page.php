<?php get_header(); ?>
<div id="main" class="container">
    <div id="content">
    <?php while ( have_posts() ) : the_post(); ?>
        <article class="post">
            <header><div class="title"><h2><?php the_title(); ?></h2></div></header>
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
