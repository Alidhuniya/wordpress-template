<aside class="sidebar">
                <!-- latest-post section -->
                <section class="latest-post">
                  <a href="#" class="text-md text-dark">Latest Post</a>
                  <div class="flex flex-column">
                    <!-- get template file using get template part -->
                    <?php
                    get_template_part("templates/temp/sidebar", "latest-post");
                    ?>
                  </div>
                </section>
                <!-- End latest-post section -->

                <!-- search-area -->
                <section class="search-area">
                  <div class="search">
                    <h3 class="text-md text-dark">Search</h3>
                    <!-- <form action="" class="form-group">
                      <input
                        type="search"
                        class="input-control mr-sm-2"
                        placeholder="search"
                      />
                      <button class="btn btn-submit" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </form> -->
                    <?php
                    // get search form.php
                     get_search_form(); ?>
                  </div>
                </section>
                <!-- End-search-area -->

                <!-- popular tags -->
                <section class="popular-tags">
                  <h4 class="text-md">
                    Popular Tags
                  </h4>
                  <div class="tags flex flex-row flex-wrap">
                  <?php
            //   get template file  post-tags.php 
            get_template_part("templates/temp/post", "tags");
               ?> 

                    <!-- <a href="#"><span>Camera</span></a>
                    <a href="#"><span>photography</span></a>
                    <a href="#"><span>Blog</span></a>
                    <a href="#"><span>Tech</span></a>
                    <a href="#"><span>Travel</span></a> -->
                  </div>
                </section>
                <!-- End-popular tags -->
              </aside>