<?php get_header(); ?>
<!-- Content -->
    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php if ( get_the_excerpt() ) : ?>
                            <p><?php echo wp_trim_words( get_the_excerpt(), 25 ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author">
                            <span class="name"><?php the_author(); ?></span>
                            <?php if ( get_avatar( get_the_author_meta('ID') ) ) echo get_avatar( get_the_author_meta('ID'), 32 ); ?>
                        </a>
                    </div>
                </header>
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <span class="image featured"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a></span>
                <?php endif; ?>
                
                <div class="post-excerpt">
                    <?php the_excerpt(); ?>
                </div>
                
                <footer>

                    <!-- ✅ Continue Reading knop toegevoegd -->
                    <ul class="actions">
                        <li><a href="<?php the_permalink(); ?>" class="button">Continue Reading</a></li>
                    </ul>

                    <ul class="stats">
                        <li><?php the_category(', '); ?></li>
                        <li><a href="<?php the_permalink(); ?>#comments" class="icon solid fa-comment"><?php comments_number('0','1','%'); ?></a></li>
                        <li><a href="<?php the_permalink(); ?>" class="icon solid fa-heart">Like</a></li>
                    </ul>
                </footer>
            </article>
        <?php endwhile; else: ?>
            <p><?php _e('No posts found.'); ?></p>
        <?php endif; ?>

        <!-- Pagination -->
        <ul class="actions pagination">
            <li><?php previous_posts_link('&larr; Newer Posts'); ?></li>
            <li><?php next_posts_link('Older Posts &rarr;'); ?></li>
        </ul>
    </div>
<!-- Main -->
<div id="main" class="container">

    <!-- Left Column: Sidebar + Footer -->
    <div id="left-column">
        <?php get_sidebar(); ?>
        <?php get_footer(); ?>
    </div>

</div>
