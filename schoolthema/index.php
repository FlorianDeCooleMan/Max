<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php if ( get_the_excerpt() ) : ?><p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p><?php endif; ?>
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
                <span class="image featured"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a></span>
            <?php endif; ?>
            <div class="excerpt"><?php the_excerpt(); ?></div>
        </article>
    <?php endwhile; ?>

    <?php the_posts_pagination(); ?>

<?php else : ?>
    <p>Geen berichten gevonden.</p>
<?php endif; ?>

</div> <!-- #main closed -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
