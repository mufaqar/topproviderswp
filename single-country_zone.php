<?php
global $post;

// 1. Set dynamic title & description
$location = get_the_title();
$custom_title = "Best TV & Internet Providers in {$location} [2025] | Compare Plans & Prices";
$custom_description = "Compare Best Internet providers in {$location}. View bundle prices, download speeds to find your ideal home internet and TV package.";



// 3. Override Yoast SEO values
add_filter('wpseo_title', function() use ($custom_title) {
    return $custom_title;
});

add_filter('wpseo_metadesc', function() use ($custom_description) {
    return $custom_description;
});

// 4. Optionally override social media titles/descriptions
add_filter('wpseo_opengraph_title', function() use ($custom_title) {
    return $custom_title;
});

add_filter('wpseo_opengraph_desc', function() use ($custom_description) {
    return $custom_description;
});

add_filter('wpseo_twitter_title', function() use ($custom_title) {
    return $custom_title;
});

add_filter('wpseo_twitter_description', function() use ($custom_description) {
    return $custom_description;
});

get_header();
?>
<style>
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    padding: 20px;
    color: #333;
}

h1 {
    color: #2c3e50;
    border-bottom: 2px solid #3498db;
    padding-bottom: 10px;
}

h2 {
    color: #2980b9;
    margin-top: 30px;
}

h3 {
    color: #16a085;
}

.city-section {
    background-color: #f8f9fa;
    padding: 15px;
    border-radius: 5px;
    margin: 20px 0;
    border-left: 4px solid #3498db;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

th,
td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.pros-cons {
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 5px;
    margin: 15px 0;
}

.pros {
    color: #27ae60;
}

.cons {
    color: #e74c3c;
}

.review {
    font-style: italic;
    background-color: #f0f8ff;
    padding: 10px;
    border-left: 3px solid #3498db;
    margin: 10px 0;
}

.verdict {
    background-color: #e8f4fc;
    padding: 15px;
    border-radius: 5px;
    margin: 20px 0;
}

.provider-badge {
    display: inline-block;
    padding: 3px 8px;
    background-color: #e74c3c;
    color: white;
    border-radius: 3px;
    font-size: 0.8em;
    margin-left: 5px;
}
</style>


<section class="py-14 flex items-center bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-center flex-col items-center">
            <h1 class="sm:text-5xl text-2xl font-bold text-center max-w-[850px] mx-auto capitalize leading-10">
               Top Internet Providers in <span class="text-[#96B93A]"><?php the_title()?></span>
            </h1>

        </div>
    </div>
</section>




<div class="container mx-auto px-4">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>

    </article>
    <?php endwhile; ?>
    <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?></p>
    <?php endif; ?>
</div>





<?php

get_footer();