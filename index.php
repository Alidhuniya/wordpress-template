<?php 
// get header.php 
get_header();
?>


      <!-- banner area -->
      <section class="banner-area">
        <div class="container-fluid">
          <div class="banner">
            <!-- <img
              src="./assets/images/banner.jpg"
              alt="banner-area"
              class="fluid"
            /> -->
            <?php
            if (get_theme_mod("header_image")) : ?>
            <img
              src="<?php echo esc_url(get_theme_mod("header_image")) ?>"
              alt="banner-area"
              class="fluid"
            />
            <?php Endif; ?>
          </div>

          <div class="banner-title text-center">
            <!-- <h1 class="text-lg text-light">Simplicity</h1> -->
            <?php
            if (get_theme_mod("header_text_field")) : ?>
            <h1 class="text-lg text-light"><?php echo get_theme_mod("header_text_field") ?></h1>
            <?php Endif; ?>
            <!-- <span class="description text-sm text-light"
              >The Power of Wordpress</span
            > -->
            <?php
            if (get_theme_mod("header_desc_field")) : ?>
            <span class="description text-sm text-light"
              ><?php echo get_theme_mod("header_desc_field") ?></span
            >
            <?php Endif; ?>
          </div>
        </div>
      </section>
      <!-- End-banner area -->

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
            <div class="col-8-lg col-12-md">
              <!-- two-columns-layout -->
              <div class="grid">
                <?php
                // get post-content.php
                get_template_part("templates/temp/post", "content");
                ?>
              </div>

              <!-- pagination area -->
              <div class="row">
                <div class="col-12-lg text-center">
                  <div class="pagination">
                    <?php
                    echo paginate_links(array(
                      'mid-size'=> 3,
                      'prev_text'=> __('<span class="fa fa-arrow-left"></span>'),
                      'next_text'=> __('<span class="fa fa-arrow-right"></span>')
                    ));
                    ?>
                    <!-- <a href="#"><span>1</span></a>
                    <a href="#"><span>2</span></a>
                    <a href="#"><span>3</span></a>
                    <a href="#"><span class="fa fa-arrow-right"></span></a> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-4-lg col-12-md">
              <?php
              // get sidebar-template
              get_sidebar();
              ?>
            </div>
          </div>
        </div>
      </section>
      <!-- End-post-area -->

      <?php
      // get footer.php 
      get_footer();
      ?>
    