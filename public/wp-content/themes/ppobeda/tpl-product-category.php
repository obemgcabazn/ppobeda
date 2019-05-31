<?php
/*
Template Name: Категория Продукции
*/

get_header();?>

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
      <h1><?php the_title(); ?></h1>

      <?php
      $stati_children = new WP_Query(array(
        'post_type' => 'page',
        'posts_per_page' => 50,
        'post_parent' => get_the_ID()
        )
      );
      ?>
      <ul>

      <?php
        if($stati_children->have_posts()) :
          while($stati_children->have_posts()): $stati_children->the_post();
              echo '<li><a href="'. get_the_permalink() .'">' . get_the_title() . '</a></li>';
          endwhile;
        endif;
        wp_reset_query();
      ?>
      </ul>

      <?php
      if (have_posts()):
          while (have_posts()): the_post(); 
      ?>
            

            <?php the_content();

          endwhile;
      endif;
      ?>
    </div>
  </div>



</div>


<?php get_footer(); ?>