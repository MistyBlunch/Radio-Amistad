<?php 
  get_header(); 
?>
  
<section class="newPost radio">
  <div class="container">
    <div class="row">
      <div class="col-md-9">

        <?php while(have_posts()) : the_post(); ?>

          <div class="row">
            <div class="col aside">

              <?php the_post_thumbnail(); ?>

              <h4><b>
                <?php the_title(); ?>
              </b></h4>

              <span class="postDate"><?php the_date(); ?></span>

              <?php the_excerpt(); ?>

              <?php the_content(); ?>
            </div>
          </div>

        <?php endwhile; ?>
      </div>
      <div class="col-md-3">
        <div class="row">
          <div class="col">
            <?php get_sidebar(); ?>
          </div>
        </div>
      
      </div>
    </div>
  </div>
</section>

<?php 
  get_footer(); 
?>