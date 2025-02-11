<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <h2 class="text-2xl font-bold">Compare <?php echo $type ?> Providers in <span
                    class="text-[#96B93A]"><?php echo $city ?> </span></h2>
            <p>Still can’t decide? Use our side-by-side comparison chart to make an informed decision.</p>
        </div>
        <div>
            <div class="w-full mx-auto h-auto mb-6">
                <div
                    class="w-full h-auto shadow-xl border rounded-t-md rounded-b-md flex md:flex-row flex-row items-stretch">
                    <div class="md:w-96 min-w-[50px]  bg-[#6041BB]">
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
                            class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div>
                                <h4 class="md:text-base text-xs text-center text-white">Data Caps</h4>
                            </div>
                        </div>
                        <div
                            class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div>
                                <h4 class="md:text-base text-xs text-center text-white">Contract Term</h4>
                            </div>
                        </div>
                        <div
                            class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div>
                                <h4 class="md:text-base text-xs text-center text-white">Setup Fee</h4>
                            </div>
                        </div>
                        <div
                            class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div>
                                <h4 class="md:text-base text-xs text-center text-white">Early Termination Fee</h4>
                            </div>
                        </div>
                        <div
                            class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div>
                                <h4 class="md:text-base text-xs text-center text-white">Equipment Rental Fee</h4>
                            </div>
                        </div>
                        <div
                            class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div>
                                <h4 class="md:text-base text-xs text-center text-white">Monthly Price</h4>
                            </div>
                        </div>
                        <div
                            class="md:border-r border-r-0  border-b grid justify-center md:p-5 p-2 md:h-auto h-[120px] items-center">
                            <div>
                                <h4 class="md:text-base text-xs text-center text-white">Order Now</h4>
                            </div>
                        </div>

                    </div>
                    <div class="flex  flex-row w-full md:overflow-hidden overflow-x-scroll">

                        <?php

                                $query_compair = get_query_var('providers_query');
                                if ($query_compair->have_posts()) {
                                    while ($query_compair->have_posts()) {
                                        $query_compair->the_post();
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

                                        $internet_services =  $servicesInfo["internet_services"];
                                        $home_security_services =  $servicesInfo["home_security_services"];
                                        $landline_services =  $servicesInfo["landline_services"];
                                        $tv_services =  $servicesInfo["tv_services"];
                                        $internet_tv_bundles =  $servicesInfo["internet_tv_bundles"];
                
                                    //  var_dump($internet_services);
                                    $price =  $internet_services['price'];
                                    $setup_fee =  $internet_services['setup_fee'];
                                    $connection_type =  $internet_services['connection_type'];
                                    $early_termination_fee =  $internet_services['early_termination_fee'];
                                    $equipment_rental_fee =  $internet_services['equipment_rental_fee'];
                                    $contract =  $internet_services['contract'];
                                    $data_caps =  $internet_services['data_caps'];

                                    ?>
                        <div class="min-w-[120px] md:w-full dtable">
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
                                    <p class="text-center md:text-base text-xs"><?php echo $connection_type ?></p>
                                </div>
                            </div>
                            <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                <div>
                                    <p class="text-center md:text-base text-xs"><?php echo $data_caps ?></p>
                                </div>
                            </div>
                            <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                <div>
                                    <p class="text-center md:text-base text-xs"><?php echo $contract ?></p>
                                </div>
                            </div>
                            <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                <div>
                                    <p class="text-center md:text-base text-xs"><?php echo $setup_fee?></p>
                                </div>
                            </div>
                            <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                <div>
                                    <p class="text-center md:text-base text-xs"><?php echo $early_termination_fee ?></p>
                                </div>
                            </div>
                            <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                <div>
                                    <p class="text-center md:text-base text-xs"><?php echo $equipment_rental_fee ?></p>
                                </div>
                            </div>
                            <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                <div>
                                    <p class="text-center md:text-base text-xs">$<?php echo $price ?></p>
                                </div>
                            </div>
                            <div class="w-full grid justify-center md:p-5 p-2 min-h-[64.8px] items-center">
                                <div>
                                    <p class="text-center md:text-base text-xs"><a href="<?php the_permalink()?>">View
                                            Plans</a></p>
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