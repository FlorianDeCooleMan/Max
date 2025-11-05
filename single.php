<?php get_header(); ?>

<div id="main" class="container">
    <div id="content" class="single">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post">
            <header>
                <div class="title">
                    <h2><?php the_title(); ?></h2>
                    <?php if ( get_the_excerpt() ) : ?><p><?php echo wp_trim_words( get_the_excerpt(), 40 ); ?></p><?php endif; ?>
                </div>
                <div class="meta">
                    <time class="published" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author"><span class="name"><?php the_author(); ?></span>
                    <?php if ( get_avatar( get_the_author_meta('ID') ) ) echo get_avatar( get_the_author_meta('ID'), 32 ); ?></a>
                </div>
            </header>
            <?php if ( has_post_thumbnail() ) : ?>
                <span class="image featured"><?php the_post_thumbnail('large'); ?></span>
            <?php endif; ?>
            <?php the_content(); ?>
            <footer>
                <ul class="stats">
                    <li><?php the_category(', '); ?></li>
                    <li><?php comments_number('0','1','%'); ?></li>
                </ul>
            </footer>
        </article>

        <?php comments_template(); ?>

    <?php endwhile; endif; ?>
    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
