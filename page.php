<?php 
// get header-color.php 
get_header("color");
?>


      <!-- categories-section -->
      <section class="categories">
        <div class="container">
          <div class="flex flex-row flex-wrap">
            <?php
            // get template_part tag
            get_template_part("templates/temp/categories","content")
            ?>
          </div>
        </div>
      </section>
      <!-- End-categories -->

      <!-- Post-are -->
      <section class="post-area">
        <div class="wrapper">
          <!-- two-columns-layout -->
          <div class="row">
            <div class="col-lg-12">
            <?php if(have_posts()): ?>
<?php while(have_posts()): the_post();?>

<div class="article">

                  <article class="single-post">
                  <div class="post-title">
                        <a href="<?php the_permalink(); ?>"
                          ><span class="text-lg text-dark"
                            ><?php echo the_title(); ?></span
                          >
                        </a>
                      </div>
                    <div class="post-thumbnail">
                      <!-- <img
                        src="./assets/images/article1.jpg"
                        alt="article1"
                        class="fluid"
                      /> -->
                      <?php
                      if (has_post_thumbnail()):?>
                      <img
                        src="<?php echo get_the_post_thumbnail_url(); ?>"
                        alt="article1"
                        class="fluid"
                      />
                      <?php endif; ?>
                    </div>
                    <div class="post-content">
                        <p class="para">
                         <?php echo get_the_content(); ?>
                        </p>
                      </div>
                  </article>
                </div>

<?php endwhile; ?>
<?php else: ?>
    <?php echo wpautop("Sorry No Post were Found");?>
<?php endif; ?>
            </div>
          </div>
        </div>
      </section>
      <!-- End-post-area -->

      <?php
      // get footer.php 
      get_footer();
      ?>
    