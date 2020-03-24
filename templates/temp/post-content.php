<?php
// Blog post

// retrieve blogpost from databse

?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post();?>

<div class="article">

                  <article class="blog-post">
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
                    <div class="post-info">
                      <div class="post-author">
                        <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")) ?>"
                          ><span class="text-sm text-gray"
                            >by <?php the_author(); ?> <?php echo get_the_date(); ?></span
                          ></a
                        >
                      </div>
                      <div class="post-title">
                        <a href="<?php the_permalink(); ?>"
                          ><span class="text-lg text-dark"
                            ><?php echo the_title(); ?></span
                          >
                        </a>
                      </div>

                      <div class="post-content">
                        <p class="para">
                         <?php echo get_the_excerpt(); ?>
                        </p>
                      </div>
                      <hr />
                      <div class="post-cat">
                       <?php get_template_part("templates/temp/post", "categories"); ?>
                      </div>
                    </div>
                  </article>
                </div>

<?php endwhile; ?>
<?php else: ?>
    <?php echo wpautop("Sorry No Post were Found");?>
<?php endif; ?>

