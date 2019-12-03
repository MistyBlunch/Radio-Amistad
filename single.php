<?php 
  get_header(); 
?>
  
<section class="newPost radio">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <?php while(have_posts()) : the_post(); ?>

          <div class="row">
            <div class="col aside">
              <div class="postImg">
                <?php the_post_thumbnail(); ?>
                <span class="postDate"><?php the_date(); ?></span>
              </div>
              <h4 class="postTitle">
                <b><?php the_title(); ?></b>
              </h4>
              <?php the_content(); ?>
            </div>
          </div>

        <?php endwhile; ?>
      </div>
      <div class="col-sm-4">
            <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

</section>

<?php 
  get_footer(); 
?>