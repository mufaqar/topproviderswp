<?php
/** Template Name: Comparison Page */

get_header();



?>

<section class="py-24 bg-cover bg-no-repeat bg-center"
    style="background-image: linear-gradient(45deg, rgba(103,71,192, 1), rgba(103,71,192, 0.6)), url('<?php echo get_template_directory_uri(); ?>/images/contact-us-bg.webp')">
    <div class="container mx-auto px-4">
        <h1 class="sm:text-5xl text-4xl leading-normal font-semibold text-white text-center"><?php the_title() ?></h1>
    </div>
</section>

<section class="py-24">
    <div class="container mx-auto px-4">
    <?php
		while ( have_posts() ) :
			the_post();

			the_content();

		endwhile; // End of the loop.
		?>
    </div>
</section>

<div class="!overflow-x-auto scroll-bar my-20">  
    <section class="mb-2 container mx-auto grid grid-cols-3 px-2 md:px-0 min-w-[540px]">
        <div class="border font-semibold md:text-xl flex items-center">
            <p class="p-3 px-4 flex items-center">Select Providers</p>
        </div>
        <div class="border bg-[#FECE2F] flex items-center pr-2 !border-b-[0px]">
            <select id="provider_1"
                class="bg-transparent text-gray-900 block w-full p-2.5 border-none focus:outline-none">
                <option selected="">Choose a Provider </option>
                <?php

                    $args = array(
                        'post_type'      => 'providers', // Custom post type name
                        'posts_per_page' => -1, // Number of posts to display
                        'order'          => 'DESC', // Order of the posts
                        'orderby'        => 'date' // Order by date
                    );
                    $providers_query = new WP_Query($args);
                    if ($providers_query->have_posts()) :
                        while ($providers_query->have_posts()) : $providers_query->the_post();
                            ?> <option value='<?php the_title(); ?>'> <?php the_title(); ?> </option> <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();                
                ?>
            </select>
        </div>
        <div class="border bg-[#FECE2F] flex items-center pr-2 !border-b-[0px]">
            <select id="provider_2"
                class="bg-transparent text-gray-900 block w-full p-2.5 border-none focus:outline-none">
                <option selected="">Choose a Provider </option>
                <?php
                    if ($providers_query->have_posts()) :
                        while ($providers_query->have_posts()) : $providers_query->the_post();
                            ?> <option value='<?php the_title(); ?>'> <?php the_title(); ?> </option> <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();                
                ?>
            </select>
        </div>
        <div class="border font-semibold md:text-xl flex items-center">
            <p class="p-3 px-4 flex items-center">Features</p>
        </div>
        <div class="border">
            <ul class="grid p-3 justify-start"></ul>
        </div>
        <div class="border">
            <ul class="grid p-3 justify-start"></ul>
        </div>
        <div class="border font-semibold md:text-xl">
            <p class="p-3 px-4 flex items-center">Speed - <?php echo $title ?></p>
        </div>
        <div class="border">
            <p class="p-3 px-4 flex items-center">-</p>
        </div>
        <div class="border">
            <p class="p-3 px-4 flex items-center">-</p>
        </div>
        <div class="border font-semibold md:text-xl">
            <p class="p-3 px-4 flex items-center">Channels</p>
        </div>
        <div class="border">
            <p class="p-3 px-4 flex items-center">-</p>
        </div>
        <div class="border">
            <p class="p-3 px-4 flex items-center">-</p>
        </div>
        <div class="border font-semibold md:text-xl">
            <p class="p-3 px-4 flex items-center">Price</p>
        </div>
        <div class="border">
            <p class="p-3 px-4 flex items-center">$</p>
        </div>
        <div class="border">
            <p class="p-3 px-4 flex items-center">$</p>
        </div>
        <div class="border font-semibold md:text-xl">
            <p class="p-3 px-4 flex items-center">More About</p>
        </div>
        <div class="border">
            <p class="p-3 px-4 flex items-center">Details Plans</p>
        </div>
        <div class="border">
            <p class="p-3 px-4 flex items-center">Details Plans</p>
        </div>
    </section>
</div>



<?php get_footer(); ?>