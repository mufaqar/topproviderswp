<?php
$index = get_query_var('provider_index');
$phone = get_field( "pro_phone" );
$logoArray = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$logoUrl = esc_url( $logoArray[0]);
$servicesInfo = get_field('services_info');
$type = get_query_var('type');



$isSpeed = $type === "tv";
if($isSpeed){
    $speed =  $servicesInfo["tv_services"]["speed"];
    $features_items = explode(',', $servicesInfo["tv_services"]["features"]);
    $price = $servicesInfo["tv_services"]["price"];
}else{
    $speed =  $servicesInfo["internet_services"]["speed"];
    $features_items = explode(',', $servicesInfo["internet_services"]["features"]);
    $price = $servicesInfo["internet_services"]["price"];
}

$phone;
$view_link;
if($type === "internet"){
    if (isset($servicesInfo["internet_services"]["phone"])) {
    $phone = $servicesInfo["internet_services"]["phone"];
} else {
    $phone = ''; // Or null, or a default message
}

if (isset($servicesInfo["internet_services"]["view_more"])) {
    $view_link = $servicesInfo["internet_services"]["view_more"];
} else {
    $view_link = ''; // Or null, or a fallback link
}



}
if($type === "tv"){
    if (isset($servicesInfo["tv_services"]["phone"])) {
    $phone = $servicesInfo["tv_services"]["phone"];
} else {
    $phone = ''; // or null
}

if (isset($servicesInfo["tv_services"]["view_more"])) {
    $view_link = $servicesInfo["tv_services"]["view_more"];
} else {
    $view_link = ''; // or null
}
}
if($type === "internet-tv"){
    if (isset($servicesInfo["landline_services"]["phone"])) {
    $phone = $servicesInfo["landline_services"]["phone"];
} else {
    $phone = '';
}

if (isset($servicesInfo["landline_services"]["view_more"])) {
    $view_link = $servicesInfo["landline_services"]["view_more"];
} else {
    $view_link = '';
}
}

?>



<div class="w-full flex flex-col p-6 bg-white rounded-lg shadow-lg border border-gray-200">
    <div>
        <h2 class="text-gray-500 font-semibold text-xl mb-2"><?php echo $index ?> </span>- <?php the_title()?></h2>
        <div class="flex justify-between items-center mb-4">
            <div>
                <div class="flex items-baseline">
                    <span class="text-4xl font-bold">$<?php echo $price; ?></span>
                    <span class="text-gray-400 ml-1 text-lg">/month</span>
                </div>
            </div>
            <a target="_blank" href="<?php the_permalink()?>">
                <img alt="Feature Image" loading="lazy" width="140" height="50" decoding="async" data-nimg="1"
                    src="<?php echo $logoUrl ?>" style="color: transparent;" />
            </a>
        </div>
    </div>
    <hr class="border-gray-300 my-4" />
    <div class="flex flex-col justify-between h-full">
        <div>
            <div class=" text-lg">
                <?php if ($isSpeed): ?>
                <p class="tch">Channels are</p>
                <?php else: ?>
                <p class="tch">Speed from</p>
                <?php endif; ?>
                <p class="tcd font-semibold text-4xl text-[#6041BB]">
                    <?php echo $speed  ?>
                    <?php if (!$isSpeed): ?>
                    <span class="tch text-lg">Mbps</span>
                    <?php endif; ?>
                </p>
            </div>
            <?php                  
            echo '<ul class="grid gap-2 mt-4">';                   
            foreach ($features_items as $feature_item) {
                echo '<li class="flex gap-1">';
                echo '<span class="text-[#6041BB] font-bold mr-2">➤</span>';
                echo '<span class="text-gray-600 capitalize">' . trim($feature_item) . '</span>';
                echo '</li>';
            }
            echo '</ul>';
        ?>
        </div>
        <div class="mt-6">
            <a href="http://refer.astound.com/6JG8jB"
                class="w-full block text-center mb-2 py-3 text-white bg-[#FBB13D] rounded-md font-semibold hover:bg-[#6041BB]">
                Get Deal
            </a>
            <a href="<?php the_permalink()?>"
                class="w-full block text-center py-3 text-white bg-[#6041BB] rounded-md font-semibold hover:bg-[#FBB13D]">
                View More
            </a>
        </div>
    </div>
</div>