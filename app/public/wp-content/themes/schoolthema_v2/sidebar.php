<aside class="sidebar">
  <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'primary-sidebar' ); ?>
  <?php else : ?>
    <div class="widget">
      <h3 class="widget-title">About</h3>
      <p>Add widgets to the Primary Sidebar to have them display here.</p>
    </div>
  <?php endif; ?>
</aside>
