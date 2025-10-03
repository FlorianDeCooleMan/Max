<aside id="sidebar">
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <?php else : ?>
    <section class="widget">
      <h2 class="widget-title">Sidebar</h2>
      <p>Voeg widgets toe via Weergave → Widgets.</p>
    </section>
  <?php endif; ?>
</aside>
