<aside id="sidebar">
							<section id="intro">
								<header>
									<h2>GreenTech Solutions</h2>
									<p>Lorem ipsum</p>
								</header>
							</section>
    <!-- Dynamische Mini Posts -->
    <section>
        <div class="mini-posts">
            <?php
            $args = array(
                'posts_per_page' => 4,
                'post_status' => 'publish'
            );
            $recent_posts = new WP_Query($args);

            if ( $recent_posts->have_posts() ) :
                while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
                    <article class="mini-post">
                        <header>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <time class="published" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                        </header>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail('thumbnail'); ?></a>
                        <?php endif; ?>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
			<section class="blurb">
            <h2>About</h2>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
            <ul class="actions">
                <li><a href="#" class="button">Learn More</a></li>
            </ul>
        </section>
        </div>
    </section>

</aside>
