<div class="slide-item">
            <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full'); ?>
                <?php endif; ?>
             </a>
 </div>
 
