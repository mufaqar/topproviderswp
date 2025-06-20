<?php
/** Template Name: Countries  */
 get_header(); ?>

 <section class="py-24 bg-cover bg-no-repeat bg-center"
    style="background-image: linear-gradient(45deg, rgba(103,71,192, 1), rgba(103,71,192, 0.6)), url('<?php echo get_template_directory_uri(); ?>/images/contact-us-bg.webp')">
    <div class="container mx-auto px-4">
        <h1 class="sm:text-5xl text-4xl leading-normal font-semibold text-white text-center"><?php the_title() ?></h1>
    </div>
</section>


<!-- TV Providers / Internet Providers -->
<section class="py-16">
    <div class="max-w-[1110px] w-full mx-auto px-4">
        

        <div>
            <h3 class="text-3xl font-semibold mb-10">Top Internet Providers By Countries </h3>
            <div class="grid sm:!grid-cols-2 md:!grid-cols-3 grid-cols-1 gap-7">
            <?php
                // Arguments for the WP Query
                $args = array(
                    'post_type'      => 'country_zone', // Custom post type name
                    'posts_per_page' => -1, // Number of posts to display
                    'order'          => 'DESC', // Order of the posts
                    'orderby'        => 'date' // Order by date
                );

                // Custom query to fetch posts
                $providers_query = new WP_Query($args);

                // The Loop
                if ($providers_query->have_posts()) :
                    while ($providers_query->have_posts()) : $providers_query->the_post();
                        get_template_part('template-parts/box', 'country');
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

        
    </div>
</section>






<?php get_footer()?>