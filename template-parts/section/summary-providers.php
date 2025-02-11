<!-- Summary Of Providers -->
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <h2 class="text-2xl font-bold">Summary of <?php echo $type ?> Providers in <span
                    class="text-[#96B93A]"><?php echo $city ?> </span></h2>

            <?php if ( $type === 'internet'): ?>
            <p class="PClass"> When it comes to finding Internet service provider, <?php echo $city ?>, <?php echo $state ?> is served by a robust selection of home phone service providers each with its own
                strengths. Whether you prioritize speed, affordability, or reliability, you can find internet providers
                in <?php echo $city ?>, <?php echo $state ?> that suit your specific needs. Compare the available options,
                consider your budget, and choose the one that fits your requirements for a seamless online experience.
            <p>

                <?php elseif ( $type === 'landline'): ?>
            <p class="PClass"> The next time you’re moving to the area or need to set up a dedicated landline service
                for your side hustle, rely on our list of the top landline home service providers in the area. We do the
                hard work for you so you can quickly get a landline and move on with your day.
            <p>
            <p class="PClass"> Whatever landline home service providers you choose, be sure to ask about bundled
                services. That is where our trained agents at Top Providers can help. Call us today, and we’ll compare all
                the available telephone service providers in your area, finding the best deal and assisting with the
                setup process.</p>
            <?php elseif ($type === 'home-security'): ?>
            <p class="PClass"> As household names in the industry, these home security service providers in <?php echo $city ?> provide a range of products that are affordable and effective in protecting your home. With
                flexible plans and low-cost monitoring subscriptions, your wallet won’t hurt too much. What’s more, you
                can add more accessories to your security system over time.</p>
            <p class="PClass"> Remember that affordable doesn’t always mean low quality. Some of the companies we have
                mentioned are extremely economical, offer excellent customer support, and protect your home at a price
                that fits your budget. We have done the hard work. Now it’s up to you to choose a home security company
                in <?php echo $city ?> that delivers peace of mind without straining your finances.</p>
            <?php else: ?>
            <div class="w-fit hint mx-auto block md:hidden mt-5">Swipe Left to See All →</div>
            <?php endif; ?>

        </div>
        <div>
            <div class="w-full mx-auto h-auto mb-6">
                <div
                    class="w-full h-auto shadow-xl border rounded-t-md rounded-b-md flex md:flex-col flex-row items-stretch">
                    <div class="md:w-full min-w-[50px] grid md:grid-cols-7 grid-cols-1 bg-[#6041BB]">
                        <div
                            class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div>
                                <h4 class="md:text-base text-xs text-center text-white">Provider</h4>
                            </div>
                        </div>
                        <div
                            class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div>
                                <h4 class="md:text-base text-xs text-center text-white">Connection Type</h4>
                            </div>
                        </div>
                        <div
                            class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div>
                                <h4 class="md:text-base text-xs text-center text-white">Max Download Speed</h4>
                            </div>
                        </div>
                        <div
                            class="md:border-r border-r-0 md:border-b-0 border-b grid justify-center md:p-5 p-2 md:h-auto md:col-span-3 h-[120px] items-center">
                            <div>
                                <h4 class="md:text-base text-xs text-center text-white">Features</h4>
                            </div>
                        </div>
                        <div class="grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center border-r">
                            <div>
                                <h4 class="md:text-base text-xs text-center text-white">Pricing starts from</h4>
                            </div>
                        </div>
                    </div>
                    <div class="flex md:flex-col flex-row w-full md:overflow-hidden overflow-x-scroll">

                        <?php
                                 $query = get_query_var('providers_query');
                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        $i++;
                                        set_query_var('provider_index', $i);
                                        $servicesInfo = get_field('services_info');
                                        $type = get_query_var('type');
                                        $isSpeed = $type === "tv";
                                        if($isSpeed){
                                            $speed =  $servicesInfo["tv_services"]["summary_speed"];
                                            $feature =  $servicesInfo["tv_services"]["summary_features"];
                                            $price =  $servicesInfo["tv_services"]["price"];
                                        }else{
                                            $speed =  $servicesInfo["internet_services"]["summary_speed"];
                                            $feature =  $servicesInfo["internet_services"]["summary_features"];
                                            $price =  $servicesInfo["internet_services"]["price"];
                                        }
                                    ?>
                        <div class="min-w-[120px] md:w-full grid md:grid-cols-7 dtable">
                            <div
                                class="w-full md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                                <div>
                                    <p class="text-center md:text-base text-xs"><a target="_blank"
                                            href="/providers/hughesnet"> <?php the_title()?> </a></p>
                                </div>
                            </div>
                            <div
                                class="w-full md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                                <div>
                                    <p class="text-center md:text-base text-xs">Satellite</p>
                                </div>
                            </div>
                            <div
                                class="w-full md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                                <div>
                                    <p class="text-center md:text-base text-xs"><?php echo $speed ?> Mbps</p>
                                </div>
                            </div>
                            <div
                                class="w-full md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 min-h-[64.8px] items-center md:col-span-3">
                                <div>
                                    <p class="text-center md:text-base text-xs"><?php echo $feature ?></p>
                                </div>
                            </div>
                            <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                <div>
                                    <p class="text-center md:text-base text-xs">$<?php echo $price ?>/mo</p>
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
            </div>
        </div>
    </div>
</section>
