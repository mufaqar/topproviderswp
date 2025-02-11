<?php

/** Template Name: Providers */

get_header();
?>


<section class="min-h-[40vh] flex items-center bg-[#6041BB]">
    <div class="container mx-auto px-4" style="padding-top: 16px;">
        <div class="flex justify-center flex-col items-center">
            <h1 class="sm:text-5xl text-2xl text-white font-bold text-center max-w-[850px] mx-auto capitalize md:leading-10">
                Internet Providers in <br />
                ZIP Code <span class="text-[#96B93A]">your area.</span>
            </h1>
            <p class="text-xl text-center text-white font-[Roboto] my-5">Enter your zip so we can find the best Internet Providers in your area:</p>
            <?php get_template_part('template-parts/search', 'form'); ?>
        </div>
    </div>
</section>

<!-- TV Providers / Internet Providers -->
<section class="py-16">
    <div class="max-w-[1110px] w-full mx-auto px-4">
        <div>
            <h3 class="text-3xl font-semibold mb-10">Featured Providers</h3>
            <div class="mt-8 grid grid-cols-1 sm:!grid-cols-2 gap-8 md:!grid-cols-4 text-center">
                <?php
                // Arguments for the WP Query
                $args = array(
                    'post_type'      => 'providers', // Custom post type name
                    'posts_per_page' => 4, // Number of posts to display
                    'order'          => 'DESC', // Order of the posts
                    'orderby'        => 'date' // Order by date
                );

                // Custom query to fetch posts
                $providers_query = new WP_Query($args);

                // The Loop
                if ($providers_query->have_posts()) :
                    while ($providers_query->have_posts()) : $providers_query->the_post();
                        get_template_part('template-parts/box', 'provider');
                    endwhile;
                else :
                    echo '<p>No providers found.</p>';
                endif;

                // Reset post data to avoid conflicts
                wp_reset_postdata();
                ?>

            </div>
        </div>

        <div class="max-w-[1110px] w-full mx-auto h-[1px] bg-black/20 my-16"></div>

        <div>
            <h3 class="text-3xl font-semibold mb-10">Top TV and Internet Service Providers</h3>
            <div class="grid sm:!grid-cols-2 md:!grid-cols-4 grid-cols-1 gap-7">
            <?php
                // Arguments for the WP Query
                $args = array(
                    'post_type'      => 'providers', // Custom post type name
                    'posts_per_page' => -1, // Number of posts to display
                    'order'          => 'DESC', // Order of the posts
                    'orderby'        => 'date' // Order by date
                );

                // Custom query to fetch posts
                $providers_query = new WP_Query($args);

                // The Loop
                if ($providers_query->have_posts()) :
                    while ($providers_query->have_posts()) : $providers_query->the_post();
                        get_template_part('template-parts/box', 'provider');
                    endwhile;
                else :
                    echo '<p>No providers found.</p>';
                endif;

                // Reset post data to avoid conflicts
                wp_reset_postdata();
                ?>

            </div>
        </div>

        <div class="max-w-[1110px] w-full mx-auto h-[1px] bg-black/20 my-16"></div>

        <div>
            <h3 class="text-3xl font-semibold mb-10">Top Home Security System Providers</h3>
            <div class="grid sm:!grid-cols-2 md:!grid-cols-4 grid-cols-1 gap-7">
            <?php
                // Arguments for the WP Query
                $args = array(
                    'post_type'      => 'providers', // Custom post type name
                    'posts_per_page' => -1, // Number of posts to display
                    'order'          => 'DESC', // Order of the posts
                    'providers_types'        => 'home-security' // Order by date
                );

                // Custom query to fetch posts
                $providers_query = new WP_Query($args);

                // The Loop
                if ($providers_query->have_posts()) :
                    while ($providers_query->have_posts()) : $providers_query->the_post();
                        get_template_part('template-parts/box', 'provider');
                    endwhile;
                else :
                    echo '<p>No providers found.</p>';
                endif;

                // Reset post data to avoid conflicts
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</section>





<?php
get_footer();  ?>