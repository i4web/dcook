<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

<?php $achillesOptions = get_option('achilles_theme_options');  ?>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'i4web'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      include(locate_template('templates/header-top-navbar.php'));
    } else {
      include(locate_template('templates/header-top-navbar.php'));
    }
  ?>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo i4web_main_class(); ?>" role="main">
        <?php include i4web_template_path(); ?>
      </main><!-- /.main -->
      <?php if (i4web_display_sidebar()) : ?>
        <aside class="sidebar <?php echo i4web_sidebar_class(); ?>" role="complementary">
          <?php include i4web_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
