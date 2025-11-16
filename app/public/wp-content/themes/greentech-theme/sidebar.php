<aside id="sidebar">

    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <!-- fallback voor wanneer er nog geen widgets zijn -->

        <!-- Intro sectie -->
        <section id="intro">
            <header>
                <h2>GreenTech Solutions</h2>
                <p>Lorem ipsum</p>
            </header>
        </section>

        <!-- Mini-posts via shortcode -->
        <section>
            <?php echo do_shortcode('[mini_posts]'); ?>
        </section>

        <!-- About / Blurb -->
        <section class="blurb">
            <h2>About</h2>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod
                amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.
            </p>
            <ul class="actions">
                <li><a href="#" class="button">Learn More</a></li>
            </ul>
        </section>

    <?php endif; ?>

</aside>
