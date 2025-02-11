<div class="flex justify-center rounded-xl border border-gray-100 p-3 shadow-xl transition hover:border-[#6041BB]/10 hover:shadow-[#6041BB]/10  ">
  <a href="<?php the_permalink() ?>" class="flex flex-col justify-center items-center">
    <?php if (has_post_thumbnail()) {
      ?>
        <figure style="width: 140px">
          <?php the_post_thumbnail('full') ?>
        </figure>
      <?php
    } else { ?>
      <figure class="max-w-[144px]">
        <img src="<?php bloginfo('template_directory'); ?>/images/img5.jpg" alt="<?php the_title() ?>" class="w-[144px]" />
      </figure>
    <?php } ?>
    <h2 class="mt-4 text-lg text-center"><?php the_title() ?></h2>
  </a>
</div>