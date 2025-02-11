<?php 

global $wp_query;

$state = $wp_query->query_vars['zone_state'];
$city = $wp_query->query_vars['zone_city'];
$zipcode = $wp_query->query_vars['post_slug'];
$type =$wp_query->query_vars['service'];


add_filter('wpseo_title', 'Generate_Title');
add_filter('wpseo_metadesc', 'Generate_Description');
add_filter('wpseo_canonical', 'Generate_Canonical');

get_header();
    $url_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $parts = explode('/', $url_path);
    $last_part = strtoupper(array_pop($parts));
?>

<section class="py-14 flex items-center bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-center flex-col items-center">
            <h1 class="sm:text-5xl text-2xl font-bold text-center max-w-[850px] mx-auto capitalize leading-10">
                Search <?php echo $last_part ?> Service Providers
            </h1>
            <p class="text-xl text-center font-[Roboto] my-5">Enter your zip so we can find the best <?php echo $last_part ?> Providers in your area:</p>
            <?php get_template_part('template-parts/filter', 'form'); ?>
        </div>
    </div>
</section>


<?php get_footer() ?>