</main>

    <!-- End-main site -->

    <!-- footer area -->
    <footer class="footer-area">
      <div class="row">
        <div class="col-4-lg col-4-md col-12-sm">
          <!-- about me -->
          <section class="about-me">
            <div class="site-logo">
              <!-- <img
                src="./assets/images/logo.png"
                width="60"
                alt="footer logo"
              /> -->
              <?php
           if (function_exists("the_custom_logo")) {
            the_custom_logo();
           }
           else {
            bloginfo("name");
           }
         
           ?>
            </div>
            <p class="para">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
              expedita! Dicta ipsa debitis quia rerum obcaecati autem facere,
              eaque consectetur.
            </p>
            <div class="social-media">
              <a href="#" class="text-primary"
                ><span class="fab fa-facebook"></span
              ></a>
              <a href="#" class="text-primary"
                ><span class="fab fa-instagram"></span
              ></a>
              <a href="#" class="text-primary"
                ><span class="fab fa-twitter"></span
              ></a>
              <a href="#" class="text-primary"
                ><span class="fab fa-youtube"></span
              ></a>
            </div>
          </section>
        </div>
        <div class="col-4-lg col-4-md col-12-sm"></div>
        <!-- recent post-area -->
        <section class="recent-post">
          <a href="#" class="text-md text-light">Recent Post</a>
          <div class="posts flex flex-row flex-wrap">
           <?php 
        //    get template file recent-post.php
        get_template_part("templates/temp/recent", "post");
           ?>
          </div>
        </section>
      </div>
      <div class="col-4-lg col-4-md col-12-sm">
        <!-- popular tags -->
        <section class="popular-tags">
          <a href="#" class="text-md text-light">Popular Tags</a>
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
      </div>
      <!-- </div> -->
      <div class="rights text-center text-gray">
        Wordpress Themes by
        <a href="<?php echo home_url("/"); ?>" class="text-primary">Ali Dhuniya</a> &copy; <?php the_date("Y"); ?>
      </div>
    </footer>
    <!-- End-footer area -->

    
  </body>
</html>
