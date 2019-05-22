<?php get_header(); ?>

<div class="container">
  <div class="row d-none d-lg-block">
    <div class="col">
      <?php breadcrumb_bootstrap(); ?>
    </div>
  </div>

  <div class="row">
    <div id="sidebar" class="d-none d-sm-block col-sm-4 col-md-3">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-12 col-sm-8 col-md-9">
      <?php
      if (have_posts()):
        while (have_posts()): the_post();

          the_content();

        endwhile;
      endif;
      ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>