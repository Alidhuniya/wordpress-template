  <form action="<?php echo home_url("/") ?>" class="form-group">
                <input
                  type="search"
                  class="input-control mr-sm-2"
                  placeholder="search"
                  value="<?php echo get_search_query(); ?>"
                  name="s"
                />
                <button class="btn btn-submit" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </form> 