<?php

global $wp_query;

// Define all variables first
$zone_state = isset($wp_query->query_vars['zone_state']) ? $wp_query->query_vars['zone_state'] : '';
$zone_city = isset($wp_query->query_vars['zone_city']) ? $wp_query->query_vars['zone_city'] : '';
$post_slug = isset($wp_query->query_vars['post_slug']) ? $wp_query->query_vars['post_slug'] : '';
$service_type = isset($wp_query->query_vars['service']) ? $wp_query->query_vars['service'] : '';


add_filter('wpseo_title', 'Generate_Title_For_State');
add_filter('wpseo_metadesc', 'Generate_Description_For_State');
add_filter('wpseo_canonical', 'Generate_Canonical_Tag');

get_header();


    $zip_codes_to_search = get_zipcodes_by_state($state);
    $provider_ids = create_meta_query_for_zipcodes($zip_codes_to_search, $type);  
        if (!empty($provider_ids)) {    
                $query_args = array(
                        'post_type'      => 'providers',
                        'posts_per_page' => -1,
                        'post__in'       => $provider_ids, 
                        'orderby'        => 'post__in',             
                    );
                    $query = new WP_Query($query_args);
            
                } else {
                echo 'No providers match the criteria.';
            }   

    $i = 0;

    $state = strtoupper($state);


 
 ?> 
 
 
 <section class="py-14 flex items-center bg-gray-50 relative"> 
     <div class="container mx-auto px-4">
         <div class="flex justify-center flex-col items-center">
             <h1 class="sm:text-5xl text-2xl font-bold text-center max-w-[850px] mx-auto capitalize leading-10">
             <?php echo $type ?> Providers in <br /><span class="text-[#96B93A]"><?php echo $state ?></span>
             </h1>
             <p class="text-xl text-center font-[Roboto] my-5">Enter your zip so we can find the best <?php echo $type ?> Providers in your area:</p>
             <div class="!max-w-[712px] w-full bg-white z-30 rounded-2xl mx-auto">
                <?php get_template_part('template-parts/search', 'form'); ?>
            </div>
         </div>
     </div>
     <img src="<?php echo get_template_directory_uri(); ?>/images/business.webp" class="absolute right-0 z-10 bottom-0 w-72"/>
    <img src="<?php echo get_template_directory_uri(); ?>/images/wave1.png" class="absolute opacity-40 -left-60 -bottom-0 w-[800px]"/>
 </section>
 


 <section class="my-16">
     <div class="container mx-auto px-4">
         <div class="mb-10">
             <h2 class="text-2xl text-center md:text-left font-bold capitalize leading-10"><?php echo $type ?> Providers in <span class="text-[#96B93A]"><?php echo $state ?> </span></h2>
         </div>

        <div class="mb-7 flex sm:flex-row gap-4 flex-col justify-between items-center">
            <?php get_template_part( 'template-parts/types', 'routing' ); ?>
            <div class="flex gap-2 items-center">
                <p class="font-medium">Sort By:</p>
                <div  class="bg-[#96B93A] rounded-[6px] pr-2">
                    <select class="p-2 bg-transparent outline-none border-none focus:border-none">
                        <option value="">Recommended</option>
                        <option value="">Speed</option>
                        <option value="">Avg. User Rating</option>
                    </select>
                </div>
            </div>
        </div>

         <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
         <?php
         // Query the posts
            //  if ($query->have_posts()) {
            //      while ($query->have_posts()) { $query->the_post(); $i++; set_query_var('provider_index', $i);     
            //          get_template_part( 'template-parts/provider', 'card' );
            //      }
            //  } else {
            //      echo 'No providers found with the specified zip code.';
            //  }
            //  // Reset post data
            //  wp_reset_postdata();
         ?>
         </div>
         <div><p class="text-sm font-[Roboto] mt-10">*DISCLAIMER: Availability vary by service address. not all offers available in all areas, pricing subject to change at any time. Additional taxes, fees, and terms may apply.</p></div>
     </div>
 </section>


 
 <?php  get_footer();
 

