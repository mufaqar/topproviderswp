<?php





// code for updates  internet_services with custom index

// // // Function to generate a random string
// function generateRandomString($length) {
//     $characters = 'abcdefghijklmnopqrstuvwxyz';
//     $randomString = '';
//     $max = strlen($characters) - 1;
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, $max)];
//     }
//     return $randomString;
// }
// $args = array(
//     'post_type' => 'providers', // Adjust the post type as needed
//     'posts_per_page' => -1, // Retrieve all posts
// );

// $query = new WP_Query($args);

// if ($query->have_posts()) {
//     while ($query->have_posts()) {
//         $query->the_post();
//         $post_id = get_the_ID();
//         $values = get_post_meta( $post_id, 'internet_services', true);
//               $length = 5;
//             $modifiedValues = array();
//             foreach ($values as $value) {
//                 $randomKey = generateRandomString($length);
//                 $modifiedValues[$randomKey] = $value;
//             }
//             update_post_meta($post_id, 'internet_services', $modifiedValues);
//     }

//     wp_reset_postdata();
// }













// // Define the old and new meta key names
// $old_meta_key = 'services_info_tv_services_Price';
// $new_meta_key = 'services_info_tv_services_price';

// // Query for the posts you want to update (you can modify the query as needed)
// $args = array(
//     'post_type' => 'providers', // Change this to the post type you want to update
//     'posts_per_page' => -1, // Retrieve all posts
// );

// $posts = new WP_Query($args);

// if ($posts->have_posts()) {
//     while ($posts->have_posts()) {
//         $posts->the_post();

//         // Get the current value of the old meta key
//         $old_meta_value = get_post_meta(get_the_ID(), $old_meta_key, true);

//         if ($old_meta_value) {
//             // Update the post with the new meta key
//             update_post_meta(get_the_ID(), $new_meta_key, $old_meta_value);

//             // Remove the old meta key
//             delete_post_meta(get_the_ID(), $old_meta_key);
//         }
//     }

//     // Reset post data to the main loop
//     wp_reset_postdata();

//     echo 'Meta keys updated successfully.';
// } else {
//     echo 'No posts found.';
// }





?>
