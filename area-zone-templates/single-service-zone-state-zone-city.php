<?php

    global $wp_query;

    $state = $wp_query->query_vars['zone_state'];
    $city = $wp_query->query_vars['zone_city'];
    $zipcode = $wp_query->query_vars['post_slug'];
    $type =$wp_query->query_vars['service'];


    add_filter('wpseo_title', 'Generate_Title_For_City');
    add_filter('wpseo_metadesc', 'Generate_Description_For_City');
    add_filter('wpseo_canonical', 'Generate_Canonical_Tag');

    get_header();
     
    $zip_codes_to_search = get_zipcodes_by_city($qcity);
    // $city = FormatData($qcity);
    $provider_ids = create_meta_query_for_zipcodes($zip_codes_to_search, $type);  
    $fast_provider_details = Fast_Provider_Details($provider_ids);
    $cheap_provider_details = Cheap_provider_details($provider_ids);
    set_query_var('fast_provider_details', $fast_provider_details);
    set_query_var('cheap_provider_details', $cheap_provider_details);

    $total_provider = count($provider_ids);
    $total_services_type = count_service_types($provider_ids); 

    $query_reviews_args = array(
        'post_type'      => 'providers',
        'posts_per_page' => -1            
    );
    $query_reviews = new WP_Query($query_reviews_args);

    if (!empty($provider_ids)) {    
            $query_args = array(
                    'post_type'      => 'providers',
                    'posts_per_page' => -1,
                    'post__in'       => $provider_ids, 
                    'orderby'        => 'post__in',             
                );
                $query = new WP_Query($query_args);

                $query_args_cheep = array(
                    'post_type'      => 'providers',
                    'posts_per_page' => -1,
                    'post__in'       => $provider_ids, 
                    'orderby'        => 'post__in', 
                    'orderby'        => 'meta_value_num', // Order by meta value as a number
                    'meta_key'       => 'pro_price',      // The meta key to sort by
                    'order'          => 'ASC',             
                );
                $query_cheep = new WP_Query($query_args_cheep);

                $query_args_fast = array(
                    'post_type'      => 'providers',
                    'posts_per_page' => -1,
                    'post__in'       => $provider_ids, 
                    'orderby'        => 'post__in', 
                    'orderby'        => 'meta_value_num', // Order by meta value as a number
                    'meta_key'       => 'services_info_internet_services_summary_speed',      // The meta key to sort by
                    'order'          => 'DESC',             
                );
                $query_fast = new WP_Query($query_args_fast);

                $query_args_compair = array(
                    'post_type'      => 'providers',
                    'posts_per_page' => 2,
                    'post__in'       => $provider_ids, 
                    'order'          => 'DESC',             
                );
                $query_compair = new WP_Query($query_args_compair);
        
            } else {
            echo 'No providers match the criteria.';
        } 

    ?>




<section class="py-14 flex items-center bg-gray-50 relative border-b-[2px] ">
    <div class="container mx-auto px-4">
        <div class="flex justify-center flex-col items-center">
            <h1 class="sm:text-5xl text-2xl font-bold text-center max-w-[850px] mx-auto capitalize leading-10">
                <?php echo FormatData($type) ?> Providers in <?php echo FormatData($state) ?> <span class="text-[#96B93A]"><?php echo FormatData($city) ?></span>
            </h1>
            <p class="text-xl text-center font-[Roboto] my-5">Enter your zip so we can find the best <?php echo FormatData($type) ?>
                Providers in your area:</p>
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
            <h2 class="text-2xl text-center md:text-left font-bold capitalize leading-10"><?php echo $type ?> Providers in <?php echo FormatData($state);?>
                <span class="text-[#96B93A]"><?php echo FormatData($city)?> </span>
            </h2>
        </div>
        <div class="mb-7 flex sm:flex-row gap-4 flex-col justify-between items-center">
            <?php get_template_part( 'template-parts/types', 'routing' ); ?>
            <div class="flex gap-2 items-center">
                <p class="font-medium">Sort By:</p>
                <div  class="bg-[#96B93A] rounded-[6px] pr-2">
                    <select class="p-2 bg-transparent  border-none outline-none focus:border-none">
                        <option value="">Recommended</option>
                        <option value="">Speed</option>
                        <option value="">Avg. User Rating</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <?php
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $i++;
                        set_query_var('provider_index', $i);     
                        get_template_part( 'template-parts/provider', 'card' );
                    }
                } else {
                    echo 'No providers found with the specified zip codes.';
                }                
                // Reset post data
                wp_reset_postdata();
            ?>
        </div>
        <div>
            <p class="text-sm font-[Roboto] mt-10">*DISCLAIMER: Availability vary by service address. not all offers
                available in all areas, pricing subject to change at any time. Additional taxes, fees, and terms may
                apply.</p>
        </div>
    </div>
</section>


<?php get_template_part( 'template-parts/section/best', 'providers' ); ?>
<?php set_query_var('providers_query', $query_cheep);get_template_part( 'template-parts/section/cheap', 'providers' ); ?>

<?php
    if($type === "landline"){ ?>
        <section>
            <div class="container mx-auto px-4">
                <div class="mb-5">
                    <h2 class="text-2xl font-bold capitalize leading-10">How We Measure Home Phone Providers in <span
                    class="text-[#96B93A]"><?php echo $city ?>, <?php echo $state ?> </span></h2>
                    <div class="mt-1">
                        <p>Offering a cheap home phone line isn’t enough to convince our professional team at Top Providers of a provider’s quality. We look at a number of amenities and services to ensure you are only getting the best landline phone service. That may include any combination of: </p>
                        <ul class="__list pl-5 mt-2">
                            <li>
                                <strong>Internet Requirements: </strong> Do the landline home phone service providers in <?php echo $city ?>, <?php echo $state ?>, require you to have internet access to install or use the lines being offered? 
                            </li>
                            <li> <strong>Hidden Fees & Taxes:</strong> Does signing up for the landline home service providers mean paying hidden fees that increase over time or are there any local taxes not worked into the monthly price advertised? </li>
                            <li>
                                <strong>Audio Quality:</strong> Are you getting pristine audio for your landline service so you can easily hear people on the other end of the line, regardless of where they are in the world? 
                            </li>
                            <li>
                                <strong>Transparent Pricing & Contracts:</strong> Do the telephone service providers require extended contracts? What about pricing? Is the total price you pay broken down into what you’re receiving in a clear and transparent way? 
                            </li>
                            <li>
                                <strong>Real Customer Support:</strong> If you have an issue with your home phone line, will you speak with a human representative for the service provider instead of a robot or audio prompts? 
                            </li>
                        </ul>
                        <p class="mt-2">The last factor we consider when getting a landline is the company's amenities. Items like call forwarding, voicemail, caller ID, blocking spam calls, setting “do not disturb,” and similar features can make all the difference for your unique landline needs. </p>
                        <p class="mt-2">Once we clearly understand these items, we rank the top home phone service providers in <?php echo $city ?>, <?php echo $state ?> for you to select at your leisure.
                        </p>
                    </div>
                </div>
            </div> 
        </section>
        <section>
            <div class="container mx-auto px-4">
                <div class="mb-5">
                    <h2 class="text-2xl font-bold capitalize leading-10">Summary of Landline Home Phone Service Providers in <span
                    class="text-[#96B93A]"><?php echo $city ?>, <?php echo $state ?> </span></h2>
                    <div class="mt-1">
                        <p>The next time you’re moving to the area or need to set up a dedicated landline service for your side hustle, rely on our list of the top landline home service providers in the area. We do the hard work for you so you can quickly get a landline and move on with your day.</p>
                        <p class="mt-2">Whatever landline home service providers you choose, be sure to ask about bundled services. That is where our trained agents at Top Providers can help. Call us today, and we’ll compare all the available telephone service providers in your area, finding the best deal and assisting with the setup process. </p>
                        <p class="mt-2">Your reliable home phone line is only one quick phone call away!</p>
                    </div>
                </div>
            </div> 
        </section>
        <section>
            <div class="container mx-auto px-4">
                <div class="mb-5">
                    <h2 class="text-2xl font-bold capitalize leading-10">Get the Best Landline Phone Service in <span
                    class="text-[#96B93A]"><?php echo $city ?>, <?php echo $state ?> </span></h2>
                    <div class="mt-1">
                        <p>Stop wasting time pouring through hours of overly hyped online marketing and get the trusted comparison our professional agents provide. At Top Providers, we save you time and money by uncovering the home phone service providers in <?php echo $city ?>, <?php echo $state ?> perfect for your unique personal and business needs. </p>
                        <p class="mt-2">Call our agents today, and let’s find the perfect landline solution whether you’ve just moved to the area or need a 24/7 connection to friends, family, and emergency services. Together, we can find an affordable and amenity-rich telephone service provider you can count on. </p>
                    </div>
                </div>
            </div> 
        </section>

    <?php }else{
        set_query_var('providers_query', $query_fast);get_template_part( 'template-parts/section/fast', 'providers' );
        set_query_var('providers_query', $query_compair); get_template_part( 'template-parts/section/compair', 'providers' );
        set_query_var('providers_query', $query);get_template_part( 'template-parts/section/summary', 'providers' );
        get_template_part( 'template-parts/section/text', 'providers' );
        set_query_var('provider_ids', $provider_ids);get_template_part( 'template-parts/section/types', 'technology' );
    }


?>

<?php set_query_var('review_query', $query_reviews); get_template_part( 'template-parts/section/review', 'providers' ); ?>




<?php get_footer();