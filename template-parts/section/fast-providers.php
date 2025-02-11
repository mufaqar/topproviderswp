<?php 
    $fast_providers = get_query_var('fast_provider_details'); 
?>
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <?php 
                 if ($type === 'internet'): ?>
            <h2 class="text-2xl font-bold capitalize leading-10">Fastest <?php echo $type ?> Providers in <span
                    class="text-[#96B93A]"><?php echo $city ?> </span></h2>
            <p class="PClass"> Whether you need high speed internet for streaming in 4K resolution
                or playing online multiplayer games <?php echo $fast_providers[0]['title']; ?> provides fastest internet
                connection in <?php echo $city ?> with download speed of up to <?php echo $fast_providers[0]['speed']; ?> for just <?php echo $fast_providers[0]['price']; ?> per month which is perfect for households with multiple users and heavy data consumption and can
                cater to the needs of heavy internet users, streamers and online gamers.</p>
            <p class="PClass"><?php echo $fast_providers[1]['title']; ?> internet is renowned for its
                high speed capabilities making it an excellent choice for gamers and streamers. With download speeds of
                up to <?php echo $fast_providers[0]['speed']; ?> making it one of the fastest internet service provider in <?php echo $city ?>. Price begins at <?php echo $fast_providers[0]['price']; ?> per month.</p>
            <p class="PClass">Take a look at the fastest internet providers in your area sorted by
                speed (high to low). </p>
            <?php elseif ($type === 'tv'): ?>
            <h2 class="text-2xl font-bold capitalize leading-10">Highest Rated <?php echo $type ?> Providers in <span
                    class="text-[#96B93A]"><?php echo $city ?> </span></h2>
            <p class="PClass">Below is our curated list of the cable TV providers we know that offer
                quality service and reasonable pricing. Each one has exceptional customer service and online user
                reviews so you can enjoy the football, latest films, and local TV stations you love. </p>
            <?php else: ?>
            <?php endif; ?>
        </div>
        <div class="md:w-full min-w-fit grid grid-cols-4 bg-[#6041BB] md:grid-cols-4">
            <div class="border-r grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                <div>
                    <h4 class="md:text-base text-xs text-center text-white">Provider</h4>
                </div>
            </div>
            <div class="grid border-r justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                <div>
                    <h4 class="md:text-base text-xs text-center text-white">Connection </h4>
                </div>
            </div>
            <?php if ($type === 'internet'): ?>
            <div class="grid border-r justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                <div>
                    <h4 class="md:text-base text-xs text-center text-white">Fast Package</h4>
                </div>
            </div>
            <?php endif; ?>
            <div class="grid border-r justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                <div>
                    <h4 class="md:text-base text-xs text-center text-white"><?php if ($type === 'internet'): ?> Download
                        Speed <?php else: ?> # of Channels <?php endif; ?></h4>
                </div>
            </div>
            <div class="grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center border-r">
                <div>
                    <h4 class="md:text-base text-xs text-center text-white">Price</h4>
                </div>
            </div>
        </div>
        <div class="grid">
            <?php
                    $query_fast = get_query_var('providers_query');
                    if ($query_fast->have_posts()) {
                        while ($query_fast->have_posts()) {
                            $query_fast->the_post();
                            $i++;
                            set_query_var('provider_index', $i);
                            $servicesInfo = get_field('services_info');
                            if ($type == 'internet') {
                                $services = $servicesInfo["internet_services"];
                            } elseif ($type == 'tv') {
                                $services = $servicesInfo["tv_services"];
                            } elseif ($type == 'landline') {
                                $services = $servicesInfo["landline_services"];
                            } else {
                                $services = $servicesInfo["home_security_services"];
                            }

                        //  var_dump($internet_services);
                        $price =  $services['price'];
                        $summary_speed =  $services['summary_speed'];
                        $connection_type =  $services['connection_type'];
                        $fast_package =  $services['fast_package'];
                        ?>
            <div class="w-full mx-auto h-auto bg-[#fafafa]">
                <div class="w-full h-auto flex md:flex-col flex-row items-stretch">
                    <div class="md:w-full w-full grid grid-cols-4 md:grid-cols-4">
                        <div
                            class="border-l border-r border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div>
                                <p class="text-center md:text-base text-xs"><a target="_blank"
                                        href="/providers/earthlink"><?php the_title()?></a></p>
                            </div>
                        </div>
                        <div class="border-r border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <?php echo $connection_type ?> </div>
                        <?php if ($type === 'internet'): ?> <div
                            class="border-r border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <?php echo $fast_package ?></div> <?php endif; ?>

                        <div class="border-r border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <?php echo $summary_speed ?></div>
                        <div class="border-r border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            $<?php echo $price ?></div>
                    </div>
                </div>
            </div>
            <?php
                        }
                    } else {
                        echo 'No providers found with the specified zip codes.';
                    }
                    
                    // Reset post data
                    wp_reset_postdata();
                ?>
        </div>
    </div>
</section>