<?php
/** Template Name: Result Page */

get_header();

$zip_query = $_REQUEST['zipcode'];
$args = array(
    'post_type' => 'providers',    
    'meta_query' => array(
        array(
            'key' => 'internet_serices',
           // 'value' => array('15401'),
            'value' => $zip_query,
            'compare' => 'LIKE'
       ),
    ),
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) { $query->the_post(); $Pid = get_the_ID(); 
        ?>


<h2> <?php the_title() ?></h2>

<?php
        $post_title = $zip_query; 
        $post_type = 'area_zone'; 
        $post = get_page_by_title( $post_title, OBJECT, $post_type );
        if ( $post ) {
            $post_id = $post->ID;
        } else {
            echo 'Post not found.';
        }

        $zone_city = get_provider_terms($post_id,'zone_city');   
        $zone_state = get_provider_terms($post_id,'zone_state');   
        $zone_code = get_provider_terms($post_id,'zone_code');   
        $zone_county = get_provider_terms($post_id,'zone_county');   
        
        

       
        ?>





City : <?php echo $zone_city ?> | State : <?php echo $zone_state ?> | Area Code <?php echo $zone_code ?> | County
<?php echo $zone_county ?>

<?php


      

      
        

        ?>


<hr />


<?php



 
    }
    wp_reset_postdata(); // Reset post data to the main query
} else {
    echo 'No posts found';
}



get_footer();  ?>