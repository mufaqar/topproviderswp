<!-- Types of  Technologies -->
<?php $provider_ids = get_query_var('provider_ids', array()); ?>
<section class="my-16">
    <div class="container mx-auto px-4">
        <div class="mb-10">
            <h2 class="text-2xl font-bold mb-2">
                Types of <?php echo $type ?> Technologies Available in <span class="text-[#96B93A]"><?php echo $city?>,
                    <span class="uppercase"><?php echo $state?></span></span>
            </h2>
            <p class="text-base">
                <?php echo $city?>, <?php echo $state?> is well-connected with a diverse range of Internet connection
                types to its residents, each with with its own advantages and considerations. These connection types
                include <?php display_unique_service_types($provider_ids); ?>. Understanding these options can help you
                make an informed decision based on your needs and location.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <?php display_service_types_details($provider_ids); ?>
        </div>
    </div>
</section>