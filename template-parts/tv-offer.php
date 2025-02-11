<h2 class="md:text-2xl text-2xl font-semibold mb-5">Top Tv Provider Deals</h2>    
<div class="grid md:grid-cols-4 gap-5">
    <?php
        $rows = get_field('top_tv_provider_deals');
        $index = 1;
        if( $rows ) {
            foreach( $rows as $row ) {
                $speed = $row['speed'];
                $features = $row['features'];
                $price = $row['price'];
                $call = $row['call'];
                $provider = $row['provider'];
                echo '<div>';
                    ?>
                        <div class="grid  gap-7 mb-7">
                            <div class="w-full h-auto shadow-xl border rounded-t-md rounded-b-md flex flex-col">
                                <div class="md:w-full min-w-fit bg-[#6041BB] flex justify-between items-center">
                                    <h2 class="text-base font-bold text-center text-white p-5"><span> <?php echo $index ?> </span>- <?php echo $provider[0]->post_title ?></h2>
                                    <h2 class="text-base font-bold text-center text-white p-5"></h2>
                                </div>
                                <div class="md:w-full w-full grid grid-cols-1 dtable  flex-col">
                                    <div class=" border-b grid items-center justify-center p-5">
                                        <a target="_blank" href="<?php echo get_permalink($provider[0]->ID); ?>" class="fimage">
                                            <?php echo get_the_post_thumbnail($provider[0]->ID, 'thumbnail') ?: $provider[0]->post_title; ?>
                                        </a>
                                    </div>
                                    <div class="  border-b grid items-center justify-center p-5">
                                        <div class="text-center">
                                            <p class="tch">Channels</p>
                                            <p class="tcd"><?php echo $speed  ?> 
                                                <span class="tch">+</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="  border-b grid items-center justify-center p-5 px-3">
                                        <p><?php echo $features ?></p>
                                    </div>
                                    <div class="border-b grid items-center justify-center p-5">
                                        <div>
                                            <p class="tch">Pricing starts from</p>
                                            <p class="tcd text-center"><span class="font-extrabold text-[#6041BB] font-[Roboto] text-center text-xl"> $<?php echo $price; ?> </span> /mo.</p>
                                        </div>
                                    </div>
                                    <div class="grid gap-3 items-center justify-center p-5">
                                        <a class="text-base text-white font-[Roboto] text-center uppercase px-5 py-2.5 bg-[#6041BB] hover:bg-[#96B93A]" href="tel:<?php echo $call ?>"><?php echo $call ?></a>
                                        <a class="text-base text-white font-[Roboto] text-center uppercase px-5 py-2.5 bg-[#96B93A] hover:bg-[#6041BB]" href="<?php echo get_permalink($provider[0]->ID); ?>">View Plans</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                echo '</div>';
                $index ++;
            }
        }
    ?>
</div>