<?php
/** Template Name: Testing propose */
 get_header();

 SiteMapByCity();

 exit();


// Arguments for the WP Query
$args = array(
    'post_type'      => 'area_zone', // Custom post type name
    'posts_per_page' => 20000, // Number of posts to display
    'order'          => 'DESC', // Order of the posts
    
);

// Custom query to fetch posts
$providers_query = new WP_Query($args);

// Initialize an array to keep track of unique cities
$displayed_cities = array();

$i = 0; // Initialize counter

// The Loop
if ($providers_query->have_posts()) :
    while ($providers_query->have_posts()) : $providers_query->the_post();
        $i++;

        // Get terms for zone_city and zone_state
        $zone_city_terms = get_the_terms(get_the_ID(), 'zone_city');
        $zone_state_terms = get_the_terms(get_the_ID(), 'zone_state');

        // Extract slugs
        $zone_city = $zone_city_terms && !is_wp_error($zone_city_terms) ? $zone_city_terms[0]->slug : '';
        $zone_state = $zone_state_terms && !is_wp_error($zone_state_terms) ? $zone_state_terms[0]->slug : '';

        // Check if the city has already been displayed
        if (!in_array($zone_city, $displayed_cities) && $zone_city) {
            // Add city to the array of displayed cities
            $displayed_cities[] = $zone_city;

            // Generate and display the link
            $post_slug = get_post_field('post_name', get_the_ID());
            $link = $post_slug . "-" . $zone_state . "-" . $zone_city;
            echo $i . " : " . $link . "<hr>";
        }

    endwhile;
else :
    echo '<p>No providers found.</p>';
endif;

// Reset post data to avoid conflicts
wp_reset_postdata();





?>