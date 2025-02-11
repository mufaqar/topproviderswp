<?php
/** Template Name: Blog */

get_header();
?>

<section class="py-24 bg-[#6041BB]">
    <div class="container mx-auto px-4">
        <h1 class="sm:text-5xl text-4xl leading-normal font-extrabold text-white text-center">Blog</h1>
    </div>
</section>
                              
<!-- Main Content Area -->
<div class="container mx-auto px-4 py-12">

    <?php
    // Custom WP Query to get posts of a specific post type (e.g., 'post')
    $args = array(
        'post_type' => 'post', // Specify the post type
        'posts_per_page' => -1, // Number of posts to display
        'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1, // Enable pagination
    );

    $custom_query = new WP_Query( $args );
    ?>

    <!-- Loop through posts -->
    <?php if ( $custom_query->have_posts() ) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); 
                $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                $date = get_the_date('j');
                $month = get_the_date('M');
            ?>
                <!-- Individual Blog Post -->
                <article class="border p-4 hover:border-[#6041BB] rounded-xl">
                    <div class="relative bg-gradient-to-b overflow-hidden rounded-xl from-[#000000] to-[#6746C8] group">
                        <img
                            alt="blog2"
                            loading="lazy"
                            width="435"
                            decoding="async"
                            data-nimg="1"
                            class="transition duration-300 ease-in-out group-hover:scale-110 cursor-pointer min-h-[360px] h-full object-cover"
                            src="<?php echo esc_url($featured_image_url ? $featured_image_url : '/path/to/default-image.jpg'); ?>"
                            style="color: transparent;"
                        />
                        <div class="absolute bottom-5 right-5 bg-[#96B93A] flex flex-col justify-center text-center p-2 px-5 shadow text-xl rounded-xl uppercase">
                            <a class="font-semibold text-[#fff] text-3xl" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html($date); ?></a>
                            <a class="font-semibold text-[#fff] -mt-1" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html($month); ?></a>
                        </div>
                    </div>
                    <div class="grid gap-2 p-4">
                        <a class="text-lg font-medium text-[#6746C8]" href="<?php echo esc_url(get_permalink()); ?>">News</a>
                        <a class="md:text-2xl text-xl font-bold line-clamp-2" href="<?php echo esc_url(get_permalink()); ?>"><?php the_title() ?></a>
                    </div>
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="px-4 font-medium text-[#6746C8]">Read More...</a>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p class="text-gray-700">Sorry, no posts were found.</p>
    <?php endif; ?>

    <!-- Pagination -->
    <div class="mt-12">
        <?php
        // WordPress pagination function for custom query
        echo paginate_links( array(
            'total' => $custom_query->max_num_pages,
            'prev_text' => __( '&larr; Previous', 'textdomain' ),
            'next_text' => __( 'Next &rarr;', 'textdomain' ),
        ) );
        ?>
    </div>


            
    


    <?php
    // Reset post data after custom query
    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>
