<?php 
  get_header(); 
?>
  
<div class="row">
  <div class="col-md-8">

    <?php while(have_posts()) : the_post(); ?>

      <?php the_title(); ?>

      <?php the_date(); ?>

      <?php the_excerpt(); ?>

      <?php the_content(); ?>

    <?php endwhile; ?>
  </div>
  <div class="col-md-4">
  
  <?php get_sidebar(); ?>
  <!-- aca va el sidebar -->
  
  </div>
</div>

<?php 
  get_footer(); 
?>