<?php
                      $tags = get_tags();
                      
                      ?>
                      <?php if ($tags): ?>
                        <?php foreach($tags as $tag) :?>
                            <a href="<?php echo esc_url(get_tag_link($tag->term_id))?>"><span><?php echo esc_html($tag->name); ?></span></a>
                        <?php endforeach; ?>
                        <?php endif; ?>  