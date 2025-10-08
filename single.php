<?php get_header(); ?>

<div id="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="post">
        <header>
            <div class="title">
                <h2><?php the_title(); ?></h2>
                <?php if ( get_the_excerpt() ) : ?><p><?php the_excerpt(); ?></p><?php endif; ?>
            </div>
            <div class="meta">
                <time class="published"><?php the_time(get_option('date_format')); ?></time>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author">
                    <span class="name"><?php the_author(); ?></span>
                    <?php if ( get_avatar( get_the_author_meta('ID'), 32 ) ) { echo get_avatar( get_the_author_meta('ID'), 32 ); } ?>
                </a>
            </div>
        </header>
        <?php if ( has_post_thumbnail() ) : ?>
            <span class="image featured"><?php the_post_thumbnail('large'); ?></span>
        <?php endif; ?>
        <div class="content">
            <?php the_content(); ?>
        </div>
        <?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
    </article>
<?php endwhile; endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
